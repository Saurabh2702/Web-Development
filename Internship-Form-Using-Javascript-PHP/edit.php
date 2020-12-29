<?php
$dbUsername = "root"; //Enter the user name
$password = ""; //Enter the password
$host = "localhost"; //Enter the host
$dbname = "register"; //Enter the database
$table = "register"; //Enter the table name
$conn=new mysqli($host, $dbUsername, "", $dbname);

if($conn->connect_error) {
   die('Connect Error :' .$conn->connect_error);
}
$id=$_POST['e_id1'];
session_start();
	
	
	 $sql = "SELECT * FROM `register` WHERE `id`=\"$id\"";
						$result= $conn->query($sql);
							if (mysqli_num_rows($result) > 0) {
						while($row1 = mysqli_fetch_assoc($result)){
$firstname= $row1["First Name"];
$lastname= $row1["Last Name"];
$contact= $row1["Contact No."];
$dob= $row1["DOB"];
$doj= $row1["DOJ"];
$email= $row1["Email ID"];
$department= $row1["Department"];
$update1= $row1["id"];

						}
							} 

							
// enter select statement
//updated values


if(isset($_POST["update1"]))
{
$id1=$_POST["update1"];
$f_name= $_POST["fname"];
$l_name= $_POST["lname"];
$contactno= $_POST["contact"];
$DOB= $_POST["dob"];
$DOJ= $_POST["doj"];
$e_mail= $_POST["email"];
$dept= $_POST["depart"];
//console.log("$f_name");							
// Update values

$update= "UPDATE `register` SET `First Name`= '$f_name',`Last Name`='$l_name',`Contact No.`='$contactno',`Email ID`='$e_mail',`DOB`='$DOB',`DOJ`='$DOJ',`Department`='$dept' WHERE register.id='$id1'";
$up= mysqli_query($conn,$update);

header('location:elist.php');
}						






?>
<html>
	<head>
		<title> Edit. </title>
		
		

		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="toggle.js"></script>
		<script src="js/angular.min.js"></script>
		<style>
		table, th, td {
  border: 1px solid black;
  border-collapse: collapse;}
		* {
  box-sizing: border-box;
}
/* Add padding to containers */
.container1 {
  padding: 16px;
  background-color: snow;
  border: 10px solid black;
}

/* Submit button */
.registerbtn {
  background-color: #FFA07A;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}
/* Input fields */
input[type=text], input[type=password], input[type=email], input[type=tel] {
  width: 20%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #ECF0F1;
}
/* Styling of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/* Form border */
{
p.groove {border-style: groove;}
		.navbar-default .navbar-nav>li>a {color: chartreuse}
		.navbar-default .navbar-nav>li>a:hover{color:#fff;}
		.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
			color: #000;
			background-color: chartreuse;}
			</style>
		<style>	
		.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
			color: #faf9f9;
			background-color: #171ca4;}
		.navbar-default navbar-nav>a:hover{color:#ffffff;}
		</style>
		<style>
		
		.btn-primary {
			color: #0a1024;
			background-color: lime;
		    border-color: #2e6da4;}
		.btn-primary:hover{ font-size:105%;background-color:#0a1024;color:#cc9617}
			
		</style>
		
	</head>
	<body >
		
		
		<div  class="container" style="background-color: #3d3d3d; height:100%;background:url(images/back1.jpg); margin-top:18;" >
			<div class="page-header" style="background-color: #0a1024">
				<div class = "row">	
					<div class="col-md-12 " style="margin-top:18">
						<div class="col-md-2">
							<a href="signup.php" title="Registration">
							
							</a>
						</div>
						<div class="col-md-7" style="padding-left:100;">
							
							<center><h1 style="color: chartreuse;"><b>Editing Form</b></h1></center>
					
							
						
						</div>
						<div  class= "col-md-3" style="padding-top:15;text-align:right;">
							<input type="search"  placeholder=  "How can we help you?">
							<h5 style="color: white;">&#9742; (022) 2225478</h5>
							
						</div>	
					</div>
				</div>		
			</div>
			
			
				
					<nav class="navbar navbar-default" style ="background-color:#000000">
						<div class="container">
						
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>			
							</div>
							
							
						</div>
					</nav>
					
					
		

					
			
					
				
				<div class="tab-content">
					<div id="home" name="home" class="tab-pane fade in active">
						<form action="edit.php" method="post" align="center">
							<div class="container1">
						
							<p class="groove">
							<h1>Edit Employee Information </h1>
							<p>Please edit in this form to edit the information.</p>
								<label for="fname"><b>First Name </b></label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								<label for="lname"><b>Last Name </b></label> <br>
								<input type="text" id="fname" name="fname" placeholder="First Name" value="<?php if(isset($firstname)) echo $firstname;?>" > &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								<input type="text" id="lname" name="lname" placeholder="Last Name" value="<?php	if(isset($lastname)) echo $lastname;?>"> <br>


        

								<label for="contact"><b>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;Contact Number</b></label>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								<label for="fname"><b>Email&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</b></label> <br>
								<input type="tel" id="contact" name="contact" placeholder="Contact Number" align="center" minlength="10" value="<?php	if(isset($contact)) echo $contact;?>" > &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								<input type="email" id="email" name="email" placeholder="Email" align="center" value="<?php	if(isset($email)) echo $email;?>" > <br>
        


								<label for="DOB"><b>Date of Birth</b></label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								<label for="doj"><b>Date of Joining</b></label> <br>
								<input type="text" id="dob" name="dob" placeholder="Date of Birth" align="center" value="<?php	if(isset($dob)) echo $dob;?>" > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="text" id="doj" name="doj" placeholder="Date of Joining" align="center" value="<?php	if(isset($doj)) echo $doj;?>" > <br>
        
       
        
        
								
        


								<label for="dept"><b>Department</b></label> <br>
								<input type="text" id="depart" name="depart" placeholder="Department" value="<?php	if(isset($department)) echo $department;?>" > <br>

								<button name="update1" id="update1" type="submit" value= "<?php echo $update1;?>" class="registerbtn"><b>Update</b></button>
							</p>
							</div>
						</form>

					</div>
					
				</div>
				
				
				
				
				
		</div>		
	</body>
</html>
