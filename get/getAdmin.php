<?php
include '../sql.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$role=$_POST['role'];
$sucess=0;
$str="select * from login where username='$uname' and password='$pass' and role='$role' and ActiveFlag=1";
$res=mysqli_query($sql,$str);
if(mysqli_num_rows($res)>0)
    $sucess=1;
echo json_encode($sucess);