<?php
  session_start();
  // unser variables
  unset($_SESSION['mail']);
  unset($_SESSION['userID']);
  header("Location: index.php");
?>
