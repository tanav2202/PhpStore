<?php

$db = new mysqli ("localhost" ,"root", "" , "testing");
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone-number']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    header("Location: contacthome.php?data_entered");
  
}

?>