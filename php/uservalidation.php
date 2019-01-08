<?php
  session_start();
  require_once 'db_connect.php';
  $conn = new mysqli($hn,$un,$pw,$db);
  if ($conn->connect_error) die ($conn->connect_error); // try to connect
  // Legal SQL string
  $mail = mysqli_real_escape_string($conn, $_REQUEST['mail']);
  $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
  echo "Mail typed: ".$mail."    ";
  echo "Password typed:".$password;

  // Will run a query
  mysqli_query($conn, "SET NAMES 'utf8'");

  $query = "SELECT * FROM Users WHERE email = '$mail'";
  $res= $conn->query($query); // perfom the above query on db
  $res->data_seek(0); // adjust offset
  $row = $res->fetch_assoc(); // get row to an associative array

  if($res->num_rows == 1 && $password == $row['password']) {
    // store in session that user is logged in
    $_SESSION['mail'] = $mail;
    $_SESSION['loggedin'] = true;
    mysqli_close($conn); // close connection
    echo "SUCCESS!";

  }
  else {
    mysqli_close($conn); // close connection
    echo "FAIL!";
  }
?>
