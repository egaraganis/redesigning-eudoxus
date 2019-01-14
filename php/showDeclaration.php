<?php
  session_start();
  if(!isset($_SESSION['fail'])):
    $_SESSION['fail'] = false;
  endif;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/button.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <title> Eudoxus </title>
</head>
<body style="font-family: 'Alegreya Sans', sans-serif;">
    <div class="container-fluid">
      <!-- 1rst level (logo,login,signup) -->
      <div class="row" style="margin-bottom:1%;">
          <div class="col-9" style="padding-top:1%; padding-left:1%;">
              <a href="./index.php">
                  <img src="../img/logo.jpg" class="rounded">
              </a>
          </div>
          <div class="col" style="margin-left:6%;">
                  <div class="dropdown">
                    <a data-toggle="dropdown">
                      <span class="dropdown" data-toggle="dropdown" style="font-size: 2.5em; color:#138496; padding-left:32%;">
                        <i class="fas fa-user" style="margin-top:11%;"></i>
                      </span>
                    </a>
                    <ul class="dropdown-menu" style="margin: auto;padding-top:2%;padding-left:2%;text-align: center;">
                      <li><a href="./profile.php"> Προφίλ</a></li>
                      <li><a href="./index.php"> Αποσύνδεση</a></li>
                  </ul>
                </div>
              </div>
      </div>
      <?php
        $statementDate = '';
        if(!empty($_POST['date'])) {
          //echo $check;
          $statementDate = $_POST['date'];
        }

        $id = $_SESSION['userID'];
        require_once 'db_connect.php';
        $conn = new mysqli("$hn","$un","$pw","$db");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }
        mysqli_query($conn, "SET NAMES 'utf8'");
        // Select book information
        $declaredBooks = array();
        $sql = '';
        if ($statementDate == NULL) {
          $sql = "SELECT bookId FROM StudentHasBook WHERE studentId = ". $id ." and statementDate IS NULL;";
        } else {
          $sql = "SELECT bookId FROM StudentHasBook WHERE studentId = ". $id ." and statementDate = '" .$statementDate . "';";
        }
        $res_data = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_array($res_data)) {
          $declaredBooks[] = $row;
        }
        $books = array();
        $lessons = array();
        $accessPoints = array();
        foreach ($declaredBooks as $bookId) {
            $sql = "SELECT title, author, accessPointId1, lessonId FROM Books WHERE idBook =" .$bookId[0];
            $res_data = mysqli_query($conn, $sql);
            $results = mysqli_fetch_array($res_data);
            $books[] = $results;
            // Check access points information
            $sql = "SELECT brandName, address, map FROM AccessPoints WHERE idAccessPoint = " .$results["accessPointId1"];
            $res_data = mysqli_query($conn, $sql);
            $accessPoints[] = mysqli_fetch_array($res_data);
            //get lessons for each book 
            $sql = "SELECT name FROM Lessons WHERE idLesson=" . $results['lessonId'];
            $res_data = mysqli_query($conn, $sql);
            $lessons[] = mysqli_fetch_array($res_data);
        }
        mysqli_close($conn);
      ?>

      <!-- 3rd phase of book declaration, declaration overview -->
      <div class="mx-auto" style="width: 80%;">
          <!-- the navigation bar -->
          <div class="row justify-content-center" style="margin-top:6%;">
              <h3 style="color:#2AA2DE;">Επισκόπηση Δήλωσης</h3>
          </div>
          </br>
          <!-- overview of the books declared -->
           <form action="postSubmitDeclaration.php" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <div class="col-xs-9">
                            <div style="border: 1px solid #e5e5e5; overflow: auto; padding: 10px; height: 400px;">
                                <dl>
                                    <?php $numBooks = 0;
                                      foreach ($books as $book) { ?>
                                        <dt> <?php echo $lessons[$numBooks][0]; ?> </dt>
                                        <dd>- <?php echo $book['title']; echo ",  "; echo $book['author']; ?> </dd>
                                    <?php 
                                        $numBooks++;
                                      } 
                                    ?>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- complete the declaration procedure -->
            <div class="row justify-content-center" style="margin-top:2%;margin-bottom:4%;">
                <button type="button" class="btn btn-info" onclick="window.location='./profile.php';">Επιστροφή στο προφίλ</button>
            </div>
          </form>
      </div>
    </div>
</body>
</html>
