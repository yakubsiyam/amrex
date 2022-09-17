<?php

include('connection.php');

//print_r($_POST);
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$sql="INSERT INTO contact (name,email,phone,message) VALUES('$name','$email','$phone','$message')";
$query=mysqli_query($conn,$sql);
if($sql){
	echo '<h1>Record Inserted</h1>';
}
else{
	echo '<h1>Error: Record did not inserted.</h1><br><h1>'.mysqli_error().'</h1>';
}

?>