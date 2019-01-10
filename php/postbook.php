<?php header("content-type: text/html;charset=utf-8") ?>
<?php
  echo "Hello to book instertion";
  require_once 'db_connect.php';
  $conn = new mysqli($hn,$un,$pw,$db);
  if ($conn->connect_error) die ($conn->connect_error);
  $title = mysqli_real_escape_string($conn, $_REQUEST['title']);
  $authors = mysqli_real_escape_string($conn, $_REQUEST['authors']);
  $subtitle = mysqli_real_escape_string($conn, $_REQUEST['subtitle']);
  $quality = mysqli_real_escape_string($conn, $_REQUEST['quality']);
  $category = mysqli_real_escape_string($conn, $_REQUEST['category']);
  $size1 = mysqli_real_escape_string($conn, $_REQUEST['size1']);
  $size2 = mysqli_real_escape_string($conn, $_REQUEST['size2']);
  $dimensions = $size1 . 'x' . $size2;
  $firstpublishingyear = mysqli_real_escape_string($conn, $_REQUEST['firstpublishingyear']);
  $pricetag = mysqli_real_escape_string($conn, $_REQUEST['pricetag']);
  $contentarray = mysqli_real_escape_string($conn, $_REQUEST['contentarray']);
  $cover = mysqli_real_escape_string($conn, $_REQUEST['cover']);
  $backcover = mysqli_real_escape_string($conn, $_REQUEST['backcover']);
  $examplesnippet = mysqli_real_escape_string($conn, $_REQUEST['examplesnippet']);
  session_start();
  $publisherid = $_SESSION['userID'];
  echo $publisherid;
  echo "<br>";
  mysqli_query($conn, "SET NAMES 'utf8'"); // greek characters support
  $sql = "INSERT INTO Books (title, subtitle, author, category, dimensions, firstYearPublished, pricetag, coverPage, backPage, contentArray, exampleSnippet, publisherID, accessPointId1) VALUES ('$title', '$subtitle', '$authors', '$category', '$dimensions', '$firstpublishingyear', '$pricetag', '$cover', '$backcover', '$contentarray', '$examplesnippet','$publisherid','3')";
  if(mysqli_query($conn, $sql)){
      $_SESSION['bookinsertion'] = true;
      mysqli_close($conn); // close connection
  } else {
      $_SESSION['bookinsertion'] = false;
      // close connection
      mysqli_close($conn);
  }
  header('Location: '."bookinsertion.php");
  ?>
