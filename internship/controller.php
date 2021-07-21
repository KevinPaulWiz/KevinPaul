<?php
include 'connection.php';
// ctrl+/
if(isset($_POST['Submit'])){
	// echo "Working";
	$name=$_POST['fullname'];
	$contact=$_POST['contact'];
	$dob=$_POST['dob'];
	
	$insert_sql="INSERT INTO test (name, contact, dob) VALUES ('$name', '$contact','$dob')";
	$sql_query=mysqli_query($conn, $insert_sql);
	if ($sql_query==TRUE) {
		echo "Successful";
	}else{
		echo mysqli_error($conn);
	}
}


 ?>
