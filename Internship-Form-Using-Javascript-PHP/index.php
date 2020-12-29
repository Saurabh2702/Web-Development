<?php
$dbUsername = "root"; //Enter the user name
$password = ""; //Enter the password
$host = "localhost"; //Enter the host
$dbname = "register"; //Enter the database
$table = "register"; //Enter the table name

session_start();
if(isset($_POST["submit"]))
{
$firstname= $_POST["fname"];
$lastname= $_POST["lname"];
$contact= $_POST["contact"];
$dob= $_POST["dob"];
$doj= $_POST["doj"];
$email= $_POST["email"];
$pwd=$_POST[("password")];
$department= $_POST["depart"];


// Establish Connection
$conn=new mysqli($host, $dbUsername, "", $dbname);

if($conn->connect_error) {
   die('Connect Error :' .$conn->connect_error);
}

// enter select statement

else{

$sql = "INSERT INTO `register`(`First Name`, `Last Name`, `Contact No.`, `Email ID`, `DOB`, `DOJ`, `Password`, `Department`) VALUES
 (\"$firstname\",\"$lastname\",\"$contact\",\"$email\",\"$dob\",\"$doj\",\"$password\",\"$department\")";
$re=mysqli_query($conn,$sql);
echo '<script>alert("Record entered successfully.")</script>';
$conn->close();
header('location:index.php');
}


}


?>
<html>
	<head>
		<title> Registration. </title>
		
		

		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!--<script src="toggle.js"></script>-->
		<script src="js/angular.min.js"></script>
		<script src="validation.js"></script>
		<style>
		table, th, td {
  width:100%
  border-collapse: collapse;
  text-align:center
  padding:10px
  border-bottom:1px solid #ddd}
  tr:nth-child(even) {background-color: #f2f2f2;}
  
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
							
							<center><h1 style="color: chartreuse;"><strong>Employee Registration Form</strong></h1></center>
					
							
						
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
							
							<div col-md-12 class="collapse navbar-collapse" id="myNavbar">
								<ul class="nav navbar-nav" style="font-size:15px">
									<li class="active"><a href="#home" data-toggle="tab" title="Home">Home</a></li>
									<li><a href="#edit" data-toggle="tab" title="Registration">Edit</a></li>
									
									<li><a href="#records" data-toggle="tab" title="logs"> Records </a></li>
                                    <li><a href="#delete" data-toggle="tab" title="logs"> Delete </a></li>
								</ul>
							</div>
						</div>
					</nav>
					
					
									
					
				
					
				
				<div class="tab-content">
					<div id="home" name="home" class="tab-pane fade in active">
						<form action="index.php" method="post" align="center">
							<div class="container1">
						
							<p class="groove">
							<h1>Sign Up </h1>
							<p>Please fill in this form to create an account.</p>
								<label for="fname"><b>First Name </b></label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								<label for="lname"><b>Last Name </b></label> <br>
								<input ng-model="client.fname" type="text" id="fname" name="fname" placeholder="First Name" pattern="[a-zA-Z]{1,16}" title="Enter a Valid First Name" required> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								<input ng-model="client.lname" type="text" id="lname" name="lname" placeholder="Last Name" pattern="[A-Za-z]{1,16}" title="Enter a Valid Last Name" required> <br>


        

								<label for="contact"><b>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;Contact Number</b></label>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								<label for="fname"><b>Email&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</b></label> <br>
								<input ng-model="client.contact" type="tel" id="contact" name="contact" pattern="[0-9]{10}" title="Enter 10 digit mobile numbers"placeholder="Contact Number" align="center" required> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								<input ng-model="client.email" type="email" id="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Must be proper email" align="center" required> <br>
        


								<label for="DOB"><b>Date of Birth</b></label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								<label for="doj"><b>Date of Joining</b></label> <br>
								<input ng-model="client.dob" type="text" id="dob" name="dob" placeholder="Date of Birth" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" title="Date Should be of DD.MM.YYYY format" align="center" required> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input ng-model="client.doj" type="text" id="doj" name="doj" placeholder="Date of Joining" align="center" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" title="Date Should be of DD.MM.YYYY format" required> <br>
        
       
        
        
								<label for="password"><b>&nbsp;Password</b></label> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								<label for="password"><b>Confirm Password</b></label><br>
								<input ng-model="client.pwd" ng-keyup = "psWd()" type="password" id="password" name="password" placeholder="Password" pattern=".{8,}" title="Eight or more characters" required> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
								<input ng-model="client.cnf_pwd" ng-keyup = "confirmPswd()" type="password" id="confirm_password" name="password" placeholder="Confirm Password" pattern=".{8,}" title="Eight or more characters" required><br>
        


								<label for="dept"><b>Department</b></label> <br>
								<input ng-model="client.depart" type="text" id="depart" name="depart" placeholder="Department" pattern="[A-Za-z]{1,32}" title="Must be proper Department and no blank spaces" required> <br>

								<button name="submit" type="submit" onclick="return Validate()" class="registerbtn" ng-click="showData()"><b>Register</b></button>
							</p>
							</div>
						</form>

					</div>
					
					<div id="delete" name="delete" class="tab-pane fade" >
							<table>
							<h3>Select the record to be deleted</h3>
							<table width="100%" cellpadding="2px" >
						<tr>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <th>&nbsp;&nbsp;&nbsp;&nbsp;Firstname</th>
                         <th>&nbsp;&nbsp;&nbsp;&nbsp;Lastname</th>
                         <th>&nbsp;&nbsp;&nbsp;&nbsp;Contact No</th>
						 <th>&nbsp;&nbsp;&nbsp;&nbsp;Email ID</th>
                         <th>&nbsp;&nbsp;&nbsp;&nbsp;Date Of Birth</th>
                         <th>&nbsp;&nbsp;&nbsp;&nbsp;Date Of Joining</th>
						 <th>&nbsp;&nbsp;&nbsp;&nbsp;Department</th>
						 <th>&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
                        </tr> 
						
						<?php
						
						$conn=new mysqli("localhost","root","","register");

						if($conn->connect_error) {
							die('Connect Error :' .$conn->connect_error);
						}
						
						$sql = "SELECT * FROM `register` WHERE 1";
						$result= $conn->query($sql);
							if (mysqli_num_rows($result) > 0) {
						while($row1 = mysqli_fetch_assoc($result)){
						?>
					    
						<tr>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['First Name'];?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['Last Name'];?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['Contact No.'];?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['Email ID'];?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['DOB'];?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['DOJ'];?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['Department'];?></td>
						<td><form action="delete.php" method=post><button type="submit" name="e_id" value="<?php echo $row1['id'];?>">Delete</button></form></td>
						
						<!--<td><a href="edit.php" name="e_id1" value="<?php echo $row1['id'];?>"><button>edit</button></a></td>-->

											</tr>
						<?php
													}}
												 
												?>
												</table>
					</div>
					
					<div id="records" name="records" class="tab-pane fade" >
							<table>
							<h3>The Records of Employees</h3>
							<table height="10%" width="100%" cellpadding="2px" border-collapse="collapse" >
						<tr>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <th>&nbsp;&nbsp;&nbsp;&nbsp;Firstname</th>
                         <th>&nbsp;&nbsp;&nbsp;&nbsp;Lastname</th>
                         <th>&nbsp;&nbsp;&nbsp;&nbsp;Contact No</th>
						 <th>&nbsp;&nbsp;&nbsp;&nbsp;Email ID</th>
                         <th>&nbsp;&nbsp;&nbsp;&nbsp;Date Of Birth</th>
                         <th>&nbsp;&nbsp;&nbsp;&nbsp;Date Of Joining</th>
						 <th>&nbsp;&nbsp;&nbsp;&nbsp;Department</th>
						 
                        </tr> 
						
						<?php
						
						$conn=new mysqli("localhost","root","","register");

						if($conn->connect_error) {
							die('Connect Error :' .$conn->connect_error);
						}
						
						$sql = "SELECT * FROM `register` WHERE 1";
						$result= $conn->query($sql);
							if (mysqli_num_rows($result) > 0) {
						while($row1 = mysqli_fetch_assoc($result)){
						?>
						
						<tr>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['First Name'];?></td>
						<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['Last Name'];?></td>
						<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['Contact No.'];?></td>
						<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['Email ID'];?></td>
						<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['DOB'];?></td>
						<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['DOJ'];?></td>
						<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row1['Department'];?></td>
						
											</tr>
						<?php
													}}
												 
												?>
												</table>
					</div>
					
					
					<div id="edit" name="edit" class="tab-pane fade " >
							
							
						
							<form action="elist.php" method="post" align="center">
								<div class="container1">
							
								
									<button name="update1" id="update1" type="submit" class="registerbtn"><b>Click to Edit a Record</b></button>
								</p>
								</div>
							</form>

						</div>
						
								
													
						
						
					</div>
					
					
				</div>
				
				
				
				
				
		</div>		
	</body>
</html>
