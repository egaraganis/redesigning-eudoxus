<?php
  session_start();
  // unser variables
  unset($_SESSION['mail']);
  unset($_SESSION['userID']);\
  unset($_SESSION['typeofuser']);
  header("Location: index.php");
?>
