<?php
$conn=new mysqli("localhost","root","","register");

if($conn->connect_error) {
   die('Connect Error :' .$conn->connect_error);
}
$id=$_SESSION['e_id'];
	echo $id;
$sql = "SELECT * FROM `register` WHERE `id`=\"$id\"";
						$result= $conn->query($sql);
							if (mysqli_num_rows($result) > 0) {
						while($row1 = mysqli_fetch_assoc($result)){
$firstname= $row1["fname"];
$lastname= $row1["lname"];
$contact= $row1["contact"];
$dob= $row1["dob"];
$doj= $row1["doj"];
$email= $row1["email"];

$department= $row1["depart"];
						}
							}
session_start();
if(isset($_POST['fname'])){$fname=$_POST['fname'];
}
if(isset($_POST['lname'])){$lname=$_POST['lname'];
}
if(isset($_POST['contact'])){$contact=$_POST['contact']	;
}
if(isset($_POST['email'])){$email=$_POST['email'];
}
if(isset($_POST['dob'])){$dob=$_POST['dob'];
}
if(isset($_POST['doj'])){$doj=$_POST['doj'];
}
if(isset($_POST['depart'])){$dept=$_POST['depart'];}
$id=$_POST['e_id'];
// $sql = "UPDATE `register` SET `First Name`=\"$fname\",`Last Name`=\"$lname\",`Contact No.`=\"$contact\",`Email ID`=\"$email\",`DOB`=\"$dob\",`DOJ`=\"$doj\",`Department`=\"$dept\" WHERE `id`=\"$_POST['e_id']\"";
$sql = "UPDATE `register` SET `First Name`=\"$fname\",`Last Name`=\"$lname\",`Contact No.`=\"$contact\",`Email ID`=\"$email\",`DOB`=\"$dob\",`DOJ`=\"$doj\",`Department`=\"$dept\" WHERE `id= $id`";
$conn->query($sql);
session_destroy();
header('location:elist.php');
?>