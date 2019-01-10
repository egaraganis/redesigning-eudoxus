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
  $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
	$surname= mysqli_real_escape_string($conn, $_REQUEST['surname']);
	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
	$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
	$typeofuser = mysqli_real_escape_string($conn, $_REQUEST['typeofuser']);

	echo $name . "<br>" . $surname ."<br>" . $email . "<br>" . $password . "<br>". $typeofuser . "<br>";

	if($typeofuser == "student") {
		$sdepartment = mysqli_real_escape_string($conn, $_REQUEST['sdepartment']);

	    $ssql = "SELECT Departments.universityId FROM Departments WHERE Departments.idDepartment = " . $sdepartment;
	    $sres_data = mysqli_query($conn,$ssql);
	    $srow = mysqli_fetch_array($sres_data);
	    $suniID= $srow[0];
		echo $sdepartment . "<br>" . $suniID . "<br>";
		$snewInsert="INSERT INTO Users (email,password,name,surname)
								 VALUES ('$email','$password', '$name','$surname')";
		mysqli_query($conn, $snewInsert);

		$getID = "SELECT Users.idUser
                FROM Users
                WHERE Users.email =" . $email ;
        $ID_data = mysqli_query($conn,$getID);
        $id = mysqli_fetch_array($ID_data);
        echo $id;
		$snewInsert="INSERT INTO Students (idStudent,universityId,departmentId,numOfReceivedBooks,numOfRemainingBooks,bookPoints)
							   VALUES (". $id . ",'$suniID','$sdepartment','0', '50','0')";
		mysqli_query($conn, $snewInsert);
	  	//header('Location: '."index.php");
	}
	if($typeofuser == "publisher") {
		$brandname = mysqli_real_escape_string($conn, $_REQUEST['pbrandname']);
		$telephone= mysqli_real_escape_string($conn, $_REQUEST['ptelephone']);
		$webpage = mysqli_real_escape_string($conn, $_REQUEST['pwebpage']);
		echo $brandname . "<br>" . $telephone ."<br>" . $webpage . "<br>";
		$snewInsert="INSERT INTO Users (email,password,name,surname)
								 VALUES ('$email','$password', '$name','$surname')";
		mysqli_query($conn, $snewInsert);
	}
	if($typeofuser == "accesspoint") {
		$abrandname = mysqli_real_escape_string($conn, $_REQUEST['abrandname']);
		$atelephone= mysqli_real_escape_string($conn, $_REQUEST['atelephone']);
		echo $abrandname . "<br>" . $atelephone ."<br>";
		$snewInsert="INSERT INTO Users (email,password,name,surname)
								 VALUES ('$email','$password', '$name','$surname')";
		mysqli_query($conn, $snewInsert);
	}
	if($typeofuser == "notesprovider") {
		$ntelephone= mysqli_real_escape_string($conn, $_REQUEST['ntelephone']);
		echo $ntelephone ."<br>";
		$snewInsert="INSERT INTO Users (email,password,name,surname)
								 VALUES ('$email','$password', '$name','$surname')";
		mysqli_query($conn, $snewInsert);
	}
	if($typeofuser == "userdepartment") {
		$udepartment = mysqli_real_escape_string($conn, $_REQUEST['udepartment']);
		$uposition = mysqli_real_escape_string($conn, $_REQUEST['uposition']);

    $usql = "SELECT Departments.universityId FROM Departments WHERE Departments.idDepartment = " . $udepartment;
    $ures_data = mysqli_query($conn,$usql);
    $urow = mysqli_fetch_array($ures_data);
    $uuniID= $urow[0];
		echo $udepartment . "<br>" . $uuniID . "<br>" . $uposition . "<br>";
		$snewInsert="INSERT INTO Users (email,password,name,surname)
							   VALUES ('$email','$password', '$name','$surname')";
		mysqli_query($conn, $snewInsert);
	}
	mysqli_close($conn); // close connection
?>
