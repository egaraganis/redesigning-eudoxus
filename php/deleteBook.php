<?php 
	require_once 'db_connect.php';
	$conn = new mysqli($hn,$un,$pw,$db);
	// Check connection
	 if (mysqli_connect_errno()){
	     echo "Failed to connect to MySQL: " . mysqli_connect_error();
	     die();
	 }
	$bookId = mysqli_real_escape_string($conn, $_REQUEST['bookId']);
	echo $bookId;
	$sql = "DELETE FROM Books WHERE Books.idBook = " . $bookId;
	$res_data = mysqli_query($conn,$sql);
	mysqli_close($conn); // close connection
	header('Location: '."profile.php");
?>