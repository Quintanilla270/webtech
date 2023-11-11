<?php

$cookie_name = "cs4413";
$cookie_value = "cs4413";
$expiration_time = time() + 60 * 60 * 24 * 7;

if (!isset($_COOKIE["cs4413"])) {
    // Set the cookie
    setcookie($cookie_name, $cookie_value, $expiration_time);

    // Tell the user that the cookie has been set
    echo "The cs4413 cookie has been set.";
} 
else {
    // Tell the user that the cookie is already set
    echo "The cs4413 cookie is already set.";
}

?>
