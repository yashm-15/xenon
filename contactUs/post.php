<?php

include "../database.php";
$name = $_POST['Name'];
$Email = $_POST['Email'];
$phone = $_POST['Phone'];
$add = $_POST['Address'];
$msg = $_POST['msg'];

$sql = "insert into contact (Name, Email, Phone, Address, Enquiry) 
values('$name', '$Email', '$phone', '$add', '$msg')";

$result = $conn->query($sql);

if($result === true){
    echo "We will reach out to you shortly";
}
else{
    echo"Failed";
}

?>