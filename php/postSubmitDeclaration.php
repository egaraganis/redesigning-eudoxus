<?php 
	session_start();
	if(!isset($_SESSION['fail'])):
		$_SESSION['fail'] = false;
  	endif;

	$selectedBooks = $_SESSION['selectedBooks'];
    $id = $_SESSION['userID'];
    require_once 'db_connect.php';
    $conn = new mysqli("$hn","$un","$pw","$db");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
    }
    mysqli_query($conn, "SET NAMES 'utf8'");
    // Select book information
    $books = array();
    foreach ($selectedBooks as $bookId) {
        $sql = "INSERT INTO StudentHasBook (studentId, bookId) VALUES ('$id','$bookId')";
        if(mysqli_query($conn, $sql)){
		    echo "Records added successfully.";
		} else {
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
    }
    mysqli_close($conn);
    header('Location: '."index.php");
?>