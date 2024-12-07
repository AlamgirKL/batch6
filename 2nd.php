<?php


define('USERNAME', 'admin');
define('PASSWORD', '12345');


echo "Enter Username: ";
$inputUsername = readline();

echo "Enter Password: ";
$inputPassword = readline();


if ($inputUsername === USERNAME && $inputPassword === PASSWORD) {
    echo "Login successful! Welcome, " . USERNAME . "." ;
} else {
    echo "Login failed! Invalid username or password." ;
}

?>