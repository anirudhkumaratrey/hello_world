<?php
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"web");
$sql = "select * from user_counter";
 $result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){

$current_counts=$row['count'];



$new_count=$current_counts+1;



}

$sql2="update user_counter SET count='" . $new_count .  "' ";
 $result1= mysqli_query($con,$sql2);



	
	
	?>
