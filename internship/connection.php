<?php 	
$severname="localhost";
$username="root";
$password="";
$dbname="school_new";

$conn= mysqli_connect($severname,$username,$password,$dbname);
if($conn==TRUE){
	// echo "Connection successful";
}
	else{
	echo myqsli_error($conn);
}
 ?>
