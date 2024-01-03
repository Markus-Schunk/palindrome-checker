<?php

$palindrome = $_POST["palindrome"];
$check_palindrome = strrev($palindrome);

if($palindrome == $check_palindrome) {
    echo "Congratulation! Your word is a palindrome!";
} else {
    echo "Sorry! Your word is not a palindrome...";
}


?>