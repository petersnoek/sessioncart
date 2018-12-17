<?php

require 'SessionCart.php';

echo '<a href="clearsession.php">Clear</a>';

prettyprint($_SESSION, 'Session (bij aanvang):');

// create 3 object instances
$a = new SessionCart('cart_a');
$a->SetAmount(31, 3);
$a->SetAmount(20, 1);
$a->name="cart_a";

$b = new SessionCart('cart_b');
$b->name="cart_b";

$c = new SessionCart('cart_c');
$c->name="cart_c";




echo $a->Items_Json();

prettyprint($_SESSION, 'Session (na het maken van 3 objecten:');

$c->Destroy();

prettyprint($_SESSION, 'Session (na $c->Destroy():');


function prettyprint($obj, $title='') {
    echo '<h1>' . $title . '</h1>';
    echo '<pre>';
    var_dump($obj);
    echo '</pre>';

}

// usage: printcart($a)
function printcart($cart) {
    foreach ($cart->Items() as $key=>$value) {
        echo '<li>' . $key . '=>' . $value . '</li>';
    }
}