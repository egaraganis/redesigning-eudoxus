<?php header("content-type: text/html;charset=utf-8") ?>
<?php
	require_once 'db_connect.php';
	$conn = new mysqli($hn,$un,$pw,$db);
	if ($conn->connect_error) die ($conn->connect_error);
	$brandname = mysqli_real_escape_string($conn, $_POST['brandname']);
	$tel = mysqli_real_escape_string($conn, $_POST['telephone']);
	$site = mysqli_real_escape_string($conn, $_POST['website']);
	session_start();
	$publisherid = $_SESSION['userID'];
	// support greek
	mysqli_query($conn, "SET NAMES 'utf8'");
	$sql = "UPDATE Publishers SET brandName='$brandname',telephone='$tel',website='$site' WHERE idPublisher='$publisherid' ";
	if(mysqli_query($conn, $sql)){
	    echo "Records added successfully.";
	} else {
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
	mysqli_close($conn);
	//header("Location: .php");
?>
