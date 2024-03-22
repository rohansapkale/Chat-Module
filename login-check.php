<?php
include 'db.php';
extract($_POST);
$q="select * from users where password='$password' and mobile_no=$mobile_no";
$result = mysqli_query($conn,$q);
if($result){
    echo "<script> window.location='index.php';</script>";
}
else{
    
}
?>