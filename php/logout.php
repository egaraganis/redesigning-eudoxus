<?php
  session_start();
  // unser variables
  unset($_SESSION['mail']);
  header("Location: index.php");
?>
