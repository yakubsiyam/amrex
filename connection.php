<?php

$host="localhost";
$database="amromed_amrextherapypm";
$user="amromed_amrextherapypm";
$password="VMkEyvO#RrW3";

$conn=mysqli_connect($host,$user,$password,$database);
if(!$conn){
	echo "Error".mysqli_error();
}

?>