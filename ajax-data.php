<?php
session_start();
$user_id=$_SESSION['user']['user_id'];
include 'db.php';
$from_id=$user_id;
$to_id=$_REQUEST['to_id'];

     $q_msg="select * from chats where (to_id=$to_id and from_id=$from_id) or (to_id=$from_id and from_id=$to_id);";
     $res=mysqli_query($conn,$q_msg);
     $q_to="select * from  users where user_id=$to_id";
     $res_to=mysqli_query($conn,$q_to);
     $to=mysqli_fetch_array($res_to);

     $user_name=$_SESSION['user']['name'];
     $from_name=ucfirst($user_name);
     while($msg=mysqli_fetch_array($res))
                        {
                           $sender=$msg['from_id']==$from_id?$from_name:$to['name'];
                            $align=$msg['from_id']==$from_id?'right':'left';
                            echo "<div class='text-white'  style='text-align:$align;'>";
                            echo "<b>$sender</b>:";
                            echo $msg['msg'];
                            echo "<br>";
                            echo "<span >".$msg['time']."</span></div><hr>";
                        }
 ?> 
                