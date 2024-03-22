<?php
include 'db.php';
extract($_POST);
$q="insert into chats(to_id,from_id,msg) values($to_id,$from_id,'$msg')";
$result=mysqli_query($conn,$q);
header("location:index.php?rid=$to_id");
?>