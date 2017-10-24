<?php
define('BASEURL', $_SERVER['DOCUMENT_ROOT'].'/krisbeestore/');
define('CART_COOKIE','Bz9Fd4jMn7Hb');
define('CART_COOKIE_EXPIRE',time() + (86400 *30));
define('TAXRATE',0); //sales tax rate

define('CURRENCY', 'NGN');
define('PAYSTACK_MODE', 'TEST'); //Change test to live when you are ready to go live

#PAYSTACK LIB MODE [test | live]
if(PAYSTACK_MODE == 'TEST'){
    define('PAYSTACK_TEST_SECRET_KEY','sk_test_f0c2f50eee7e3d5c0c1fde6abc9051b9b17197bb');
    define('PAYSTACK_TEST_PUBLIC_KEY','pk_test_6318560fee18336afd69e00e2ecedb78b99248a5');
}
