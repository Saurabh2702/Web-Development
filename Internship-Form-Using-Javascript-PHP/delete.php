<?php 
$conn=new mysqli("localhost","root","","register");

if($conn->connect_error) {
   die('Connect Error :' .$conn->connect_error);
}
$id=$_POST['e_id'];
$sql = "DELETE FROM `register` WHERE `id`= $id";
$conn->query($sql);
header('location:rlist.php');

?>