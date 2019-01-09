<?php header("content-type: text/html;charset=utf-8") ?>
<?php
	session_start();
	echo "test";
	require_once 'db_connect.php';
    $conn=new mysqli("$hn","$un","$pw","$db");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
    }
    $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
	$surname= mysqli_real_escape_string($conn, $_REQUEST['surname']);
	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
	$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
	$typeofuser = mysqli_real_escape_string($conn, $_REQUEST['typeofuser']);
	echo $name . $surname . $email . $password . $typeofuser; 
	echo "test";
	mysqli_close($conn); // close connection
?>