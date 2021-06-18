<?php

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone-number']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    header("Location: contacthome.php?mailsent");
  
}

?>