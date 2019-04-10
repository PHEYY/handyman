<html>
   <head>
     <title>Sending Mails</title>
     <style>
           input{
                 display:block;
           }
     </style>
   </head>
   <body>
        <form method="POST">
            <label>To</label><input type="text" name="mail_to">
            <label>Mail Subject</label><input type="text" name="mail_sub">
            <label>Mail Message</label><input type="text" name="mail_msg">
            <input type="submit" name="send" value="send">
        </form>
        <?php
        if(isset($_POST['send'])){
            $mailto = $_POST['mail_to'];
            $mailSub = $_POST['mail_sub'];
            $mailMsg = $_POST['mail_msg'];
            $custname="Festo";
            $details="Task: Fixing Tyre<br> My Location: KM Ebenezer<br> Fundi:Jeff Koinange<br>";
            $greetings="Hello $custname";
            $mailMessage ="Hello $custname,<br> $mailMsg<br>$details";
            require 'PHPMailer-master/PHPMailerAutoload.php';
            $mail = new PHPMailer();
            $mail ->IsSmtp();
            $mail ->SMTPDebug = 0;
            $mail ->SMTPAuth = true;
            $mail ->SMTPSecure = 'ssl';
            $mail ->Host = "smtp.gmail.com";
            $mail ->Port = 465; // or 587
            $mail ->IsHTML(true);
            $mail ->Username = "festolitto@gmail.com";
            $mail ->Password = "53805380";
            $mail ->SetFrom("festolitto@gmail.com");
            $mail ->Subject = $mailSub;
            $mail ->Body = $mailMessage;
            $mail ->AddAddress($mailto);

                if(!$mail->Send()) {
                       echo "Mail Not Sent";
                }
                else{
                    echo "Mail Sent";
                }

        }
          ?>
        
        
   


   </body>
</html>