<?php

$cookie_name = "cs4413";
$cookie_value = "cs4413";
$expiration_time = time() + 60 * 60 * 24 * 7;

if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is already set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
else {
    echo "Cookie '" . $cookie_name . "' is not set!<br>";
    echo "Setting cookie now...";
    setcookie($cookie_name, $cookie_value, $expiration_time);
    echo "Value is: " . $_COOKIE[$cookie_name];
}

?>
