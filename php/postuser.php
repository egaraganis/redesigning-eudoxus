<?php header("content-type: text/html;charset=utf-8") ?>
<?php
	session_start();
	require_once 'db_connect.php';
	$conn=new mysqli("$hn","$un","$pw","$db");
  	// Check connection
  	if (mysqli_connect_errno()){
   		echo "Failed to connect to MySQL: " . mysqli_connect_error();
      	die();
  	}
  	//get general info
  	$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
	$surname= mysqli_real_escape_string($conn, $_REQUEST['surname']);
	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
	$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
	$typeofuser = mysqli_real_escape_string($conn, $_REQUEST['typeofuser']);
	//insert in User table
	mysqli_query($conn, "SET NAMES 'utf8'"); // greek characters support
	$sql="INSERT INTO Users (email,password,name,surname)
			VALUES ('$email','$password', '$name','$surname')";
	if(mysqli_query($conn, $sql)){
	    echo "inserted into User table successfully." . "<br>";
	} else {
	    echo "ERROR. 1" . mysqli_error($conn);
	}

	if($typeofuser == "student") {
		//read student's special info
		$depID = mysqli_real_escape_string($conn, $_REQUEST['department']);
	  	//get university id
	  	mysqli_query($conn, "SET NAMES 'utf8'"); // greek characters support
	  	$sql = "SELECT Departments.universityId FROM Departments WHERE Departments.idDepartment = " . $depID;
	  	if($res_data = mysqli_query($conn,$sql)){
		    echo "get university id successfully." . "<br>";
		} else {
		    echo "ERROR. 2" . mysqli_error($conn);
		}
	  	$row = mysqli_fetch_array($res_data);
	  	$uniID= $row['universityId'];
	  	//get user id
	  	mysqli_query($conn, "SET NAMES 'utf8'"); // greek characters support
		$sql = "SELECT Users.idUser FROM Users WHERE Users.email = '$email'";
    	if($res_data = mysqli_query($conn,$sql)){
		    echo "get user id successfully." . "<br>";;
		} else {
		    echo "ERROR. 3 " . mysqli_error($conn);
		}
    	$row = mysqli_fetch_array($res_data);
		$id = $row['idUser'];
		//insert in Students table
		mysqli_query($conn, "SET NAMES 'utf8'"); // greek characters support
		$sql="INSERT INTO Students (idStudent,universityId,departmentId,numOfReceivedBooks,numOfRemainingBooks,booksPoints)
				VALUES ('$id','$uniID','$depID','0', '50','0')";
		if(mysqli_query($conn, $sql)){
		    echo "Records added successfully.";
		} else {
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
	  	header('Location: '."index.php");
	}
	if($typeofuser == "publisher") {
		$brandname = mysqli_real_escape_string($conn, $_REQUEST['brandname']);
		$telephone= mysqli_real_escape_string($conn, $_REQUEST['telephone']);
		$webpage = mysqli_real_escape_string($conn, $_REQUEST['webpage']);
		echo $brandname . "<br>" . $telephone ."<br>" . $webpage . "<br>";
		//get user id
		mysqli_query($conn, "SET NAMES 'utf8'"); // greek characters support
		$sql = "SELECT Users.idUser FROM Users WHERE Users.email = '$email'";
    	if($res_data = mysqli_query($conn,$sql)){
		    echo "get user id successfully." . "<br>";;
		} else {
		    echo "ERROR. 1" . mysqli_error($conn);
		}
		$row = mysqli_fetch_array($res_data);
		$id = $row['idUser'];
		mysqli_query($conn, "SET NAMES 'utf8'"); // greek characters support
		$sql="INSERT INTO Publishers (idPublisher,brandname,telephone,website)
				VALUES ('$id','$brandname','$telephone','$webpage')";
		if(mysqli_query($conn, $sql)){
		    echo "Records added successfully.";
		} else {
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
	  	header('Location: '."index.php");

	}
	if($typeofuser == "accesspoint") {
		//accesspoint disabled
	}
	if($typeofuser == "notesprovider") {
		//accesspoint disabled
	}
	if($typeofuser == "userdepartment") {
		//accesspoint disabled
	}
	mysqli_close($conn); // close connection
?>
