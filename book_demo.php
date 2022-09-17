<?php

include('connection.php');

//print_r($_POST);
$name=$_POST['contact_name'];
$company=$_POST['company'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql="INSERT INTO book (name,company,email,phone) VALUES('$name','$company','$email','$phone')";
$query=mysqli_query($conn,$sql);
if($sql){
	echo '<h1>Record Inserted</h1>';
}
else{
	echo '<h1>Error: Record did not inserted.</h1><br><h1>'.mysqli_error().'</h1>';
}

?>