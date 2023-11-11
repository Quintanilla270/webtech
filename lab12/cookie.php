<?php

$cookie_name = "cs4413";
$cookie_value = "cs4413";
$expiration_time = time() + 60 * 60 * 24 * 7;

setcookie($cookie_name, $cookie_value, $expiration_time);

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
}
else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

?>
