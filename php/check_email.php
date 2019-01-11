<?php
require_once 'db_connect.php';
$conn = new mysqli($hn,$un,$pw,$db);
// Check Connection
if ($conn->connect_error) die ($conn->connect_error);
mysqli_query($conn, "SET NAMES 'utf8'");
$query = "SELECT email FROM Users WHERE email = '".$_POST['email']."'";
//echo $_POST['username'];
$result = mysqli_query($conn, $query);
//$result_login = mysqli_query($conn,$query_login);
$anything_found = mysqli_num_rows($result);
   //check if the username already exists
if($anything_found>0)
{
    echo "fail";
    return false;
}
else
{
    echo "success";
    return true;
}
?>