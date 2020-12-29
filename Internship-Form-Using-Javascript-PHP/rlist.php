<html>
<head>
</head>
<style>
table, th, td {
  width:100%
  border-collapse: collapse;
  text-align:center
  padding:10px
  border-bottom:1px solid #ddd}
  tr:nth-child(even) {background-color: #f2f2f2;}
  
</style>
<body>
&nbsp; &nbsp; &nbsp;&nbsp;
<h2><a href="index.php">Home</a></h2>
&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
<h3>Deleting Successful</h3>
<h2>Remaing Records are as follows :</h2>
<div id="records" name="records" class="tab-pane fade" id="records">
							<table width="100%" cellpadding="2px">
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
session_start();
						$sql = "SELECT * FROM `register` WHERE 1";
						$result= $conn->query($sql);
							if (mysqli_num_rows($result) > 0) {
						while($row1 = mysqli_fetch_assoc($result)){
?>
<tr>
&nbsp; &nbsp; &nbsp;&nbsp;
<td><?php echo $row1['First Name'];?></td>
<td><?php echo $row1['Last Name'];?></td>
<td><?php echo $row1['Contact No.'];?></td>
<td><?php echo $row1['Email ID'];?></td>
<td><?php echo $row1['DOB'];?></td>
<td><?php echo $row1['DOJ'];?></td>
<td><?php echo $row1['Department'];?></td>
<!--<td><form action="delete.php" method=post><button type="submit" name="e_id" value="<?php echo $row1['id'];?>">Delete</button></form></td>
<!--<td><form action="edit.php" method=post><button type="submit" name="e_id1" value="<?php echo $row1['id'];?>">Edit</button></form></td>
<!--<td><a href="edit.php" name="e_id1" value="<?php echo $row1['id'];?>"><button>edit</button></a></td>-->

					<tr>
<?php
							}}
						 
						?>
						</table>
					</div>
					