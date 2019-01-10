<?php
  // on logout clear user data
  session_start();
  unset($_SESSION['mail']);
  unset($_SESSION['userID']);
  unset($_SESSION['typeofuser']);
  header("Location: index.php");
?>
