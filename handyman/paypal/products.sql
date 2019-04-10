CREATE TABLE `products` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `price` float(10,2) NOT NULL,
 `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `payments` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `product_id` int(10) NOT NULL,
 `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `payment_gross` float(10,2) NOT NULL,
 `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
 `payer_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `payer_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `payer_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `payer_country` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
 `payment_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `created` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;