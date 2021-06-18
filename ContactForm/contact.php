<?php


if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone-number']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    header("Location: contacthome.php?data_entered");
  
}

$db = mysqli_connect("localhost" ,"root", "" , "testing");
if($db->connect_error)
{
  echo "no database found";
}
else{
  $stmt= $db->prepare("insert into form(name , phone-number , subject , message) 
  values(? ,? ,? ,? )") ;
  $stmt->bind_param("siss", $name, $phone, $subject ,$message);
  $stmt->execute();
  echo "Data entered into file";
  $stmt->close();
  $db->close();
}

?>