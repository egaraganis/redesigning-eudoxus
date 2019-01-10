<?php
  session_start();
  require_once 'db_connect.php';
  $conn = new mysqli($hn,$un,$pw,$db);
  if ($conn->connect_error) die ($conn->connect_error); // try to connect
  // Legal SQL string
  $mail = mysqli_real_escape_string($conn, $_REQUEST['mail']);
  $password = mysqli_real_escape_string($conn, $_REQUEST['password']);

  // Will run a query
  mysqli_query($conn, "SET NAMES 'utf8'");

  $query = "SELECT * FROM Users WHERE email = '$mail'";
  $res= $conn->query($query); // perfom the above query on db
  $res->data_seek(0); // adjust offset
  $row = $res->fetch_assoc(); // get row to an associative array
  $id = $row['idUser'];

  if($res->num_rows == 1 && $password == $row['password']) {
    // find the type of user
    $typeofuser = -1;
    if($typeofuser == -1){
      $query1 = "SELECT * FROM Students WHERE idStudent = '$id'";
      $res1= $conn->query($query1); // perfom the above query on db
      if($res1->num_rows > 0){
        $typeofuser = 1;
      }
    }
    if($typeofuser == -1){
      $query1 = "SELECT * FROM Publishers WHERE idPublisher = '$id'";
      $res1= $conn->query($query1); // perfom the above query on db
      if($res1->num_rows > 0){
        $typeofuser = 2;
      }
    }
    if($typeofuser == -1){
      $query1 = "SELECT * FROM AccessPoints WHERE idAccessPoint = '$id'";
      $res1= $conn->query($query1); // perfom the above query on db
      if($res1->num_rows > 0){
        $typeofuser = 3;
      }
    }
    if($typeofuser == -1){
      $query1 = "SELECT * FROM NotesProviders WHERE idNotesProvider = '$id'";
      $res1= $conn->query($query1); // perfom the above query on db
      if($res1->num_rows > 0){
        $typeofuser = 4;
      }
    }
    if($typeofuser == -1){
      $query1 = "SELECT * FROM UserDepartments WHERE idUserDepartment = '$id'";
      $res1= $conn->query($query1); // perfom the above query on db
      if($res1->num_rows > 0){
        $typeofuser = 5;
      }
    }

    // store in session that user is logged in
    $_SESSION['mail'] = $mail;
    $_SESSION['userID'] = $row['idUser'];
    $_SESSION['loggedin'] = true;
    $_SESSION['typeofuser'] = $typeofuser;
    mysqli_close($conn); // close connection
    header('Location: '."index.php");
  }
  else {
    $_SESSION['fail'] = true;
    mysqli_close($conn); // close connection
    header('Location: '."login.php");
  }
?>
