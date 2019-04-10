<?php
$redirectStr = '';
if(!empty($_GET['paymentID']) && !empty($_GET['token']) && !empty($_GET['payerID']) && !empty($_GET['orderid']) ){
    // Include and initialize database class
    include 'DBClass.php';
    $db = new DB;

    // Include and initialize paypal class
    include 'PaypalExpressClass.php';
    $paypal = new PaypalExpress;
    
    // Get payment info from URL
    $paymentID = $_GET['paymentID'];
    $token = $_GET['token'];
    $payerID = $_GET['payerID'];
    $orderid = $_GET['orderid'];
    
    // Validate transaction via PayPal API
    $paymentCheck = $paypal->validate($paymentID, $token, $payerID, $orderid);
    
    // If the payment is valid and approved
    if($paymentCheck && $paymentCheck->state == 'approved'){

        // Get the transaction data
        $id = $paymentCheck->id;
        $state = $paymentCheck->state;
        $payerFirstName = $paymentCheck->payer->payer_info->first_name;
        $payerLastName = $paymentCheck->payer->payer_info->last_name;
        $payerName = $payerFirstName.' '.$payerLastName;
        $payerEmail = $paymentCheck->payer->payer_info->email;
        $payerID = $paymentCheck->payer->payer_info->payer_id;
        $payerCountryCode = $paymentCheck->payer->payer_info->country_code;
        $paidAmount = $paymentCheck->transactions[0]->amount->details->subtotal;
        $currency = $paymentCheck->transactions[0]->amount->currency;
        
        // Get order details
        $conditions = array(
            'where' => array('order_id' => $orderid),
            'return_type' => 'single'
        );
        $order_data = $db->getRows('orders', $conditions);
        
        // If payment price is valid
        if($order_data['amount'] >= $paidAmount){
            
            // Insert transaction data in the database
            $data = array(
                'order_id' => $orderid,
                'txn_id' => $id,
                'payment_gross' => $paidAmount,
                'currency_code' => $currency,
                'payer_id' => $payerID,
                'payer_name' => $payerName,
                'payer_email' => $payerEmail,
                'payer_country' => $payerCountryCode,
                'payment_status' => $state
            );
            $insert = $db->insert('payments', $data);
            
            // Add insert id to the URL
            $redirectStr = '?id='.$insert;
        }
    }
    
    // Redirect to payment status page
    header("Location:paypal-status.php".$redirectStr);
}else{
    // Redirect to the home page
    header("Location:index.php");
}
?>