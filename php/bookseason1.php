<?php
  session_start();
  if(!isset($_SESSION['fail'])):
    $_SESSION['fail'] = false;
  endif;
?>
<!-- User should be authorized to submit a book -->
<?php if(!isset($_SESSION['mail'])): ?>
  <? header('Location: '."./login.php"); ?>
<?php endif; ?>
<!-- only students can get books -->
<?php if($_SESSION['typeofuser'] != 1): ?>
    <script>
      alert("Πρέπει να είστε συνδεδεμένος σαν φοιτητής! ");
      window.history.back();
    </script>
<?php else:?>

<?php 
    $id = $_SESSION['userID'];
    require_once 'db_connect.php';
    $conn = new mysqli("$hn","$un","$pw","$db");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
    }
    // Look for current declarations
    $sql = "SELECT COUNT(*) FROM StudentHasBook WHERE studentId=" .$id ." and statementDate IS NULL;";
    $res_data = mysqli_query($conn,$sql);
    $numOfCurrentDeclarations = mysqli_fetch_array($res_data)[0];
    if($numOfCurrentDeclarations != 0) {
    echo  '<script>
        alert("Έχετε ολοκληρώσει τη δήλωση (Η τροποίηση δήλωσης δεν έχει πραγματωθεί)");
        window.history.back();
      </script>';
    }
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
                integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/treeview.css">
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
                          <li><a href="./logout.php"> Αποσύνδεση</a></li>
                      </ul>
                    </div>
                </div>
          </div>

          <?php
            $id = $_SESSION['userID'];
            require_once 'db_connect.php';
            $conn = new mysqli("$hn","$un","$pw","$db");
            // Check connection
            if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                die();
            }
            mysqli_query($conn, "SET NAMES 'utf8'");
            $sql = "SELECT departmentId FROM Students WHERE idStudent =" .$id;
            $res_data = mysqli_query($conn, $sql);
            $depID = mysqli_fetch_array($res_data)[0];

            $semesters = array();
            $lessons = array(array());
            $books = array(array(array()));
            $booksDeclared = array(array(array()));
            $booksExtra = array(array(array()));
            // Retrieve Semesters
            $sql = "SELECT idSemester, name FROM Semesters WHERE departmentId =" . $depID;
            $res_data = mysqli_query($conn,$sql);
            $semNum = 0;
            while ($row = mysqli_fetch_array($res_data)){
                $semesters[] = $row;
                // Retrieve Lessons for current semester
                $sql1 = "SELECT idLesson, name FROM Lessons WHERE semesterId =" . $row["idSemester"];
                $res_data1 = mysqli_query($conn, $sql1);
                $lesNum = 0;
                while ($row1 = mysqli_fetch_array($res_data1)) {
                    $lessons[$semNum][] = $row1;
                    // Retrieve Books for current lesson
                    $sql2 = "SELECT idBook, title, author, publisherId, accessPointId1, accessPointId2 FROM Books WHERE lessonId =" . $row1["idLesson"];
                    $res_data2 = mysqli_query($conn, $sql2);
                    while ($row2 = mysqli_fetch_array($res_data2)) {
                        $result = $row2;
                        $books[$semNum][$lesNum][] = $row2;
                        $sql3 = "SELECT AccessPoints.address, Publishers.brandName FROM AccessPoints, Publishers
    	                     WHERE AccessPoints.idAccessPoint = " . $row2["accessPointId1"] . " and Publishers.idPublisher =" . $row2["publisherId"];
                        $res_data3 = mysqli_query($conn, $sql3);
                        $booksExtra[$semNum][$lesNum][] = mysqli_fetch_array($res_data3);
                        $sql4 = "SELECT Books.title, Books.idBook FROM Books, StudentHasBook
                           WHERE Books.idBook = ". $result['idBook'] . " AND StudentHasBook.bookId = ". $result['idBook'] . " AND StudentHasBook.studentId = ". $id . " AND StudentHasBook.statementDate IS NOT NULL;";
                        $res_data4 = mysqli_query($conn, $sql4);
                        $booksDeclared[$semNum][$lesNum][] = mysqli_fetch_array($res_data4);
                    }
                    $lesNum++;
                }
                $semNum++;
            }
            mysqli_close($conn);
          ?>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                  <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Φοιτητές
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./bookseason1.php"> Δήλωση Συγγραμμάτων </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section1"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Εκδότες
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./bookinsertion.php"> Προσθήκη Συγγράμματος </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>

                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Σημεία Διανομής
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./underconstruction.php"> Προσθήκη Σημείου Διανομής </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Διανομή Σε Φοιτητές  </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Διαθέτες Σημειώσεων
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./underconstruction.php"> Ανέβασμα σημειώσεων </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Υπηρεσίες Ιδρυμάτων
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./underconstruction.php"> Τροποποίηση Προγράμματος Σπουδών </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="./eudoxusinfo.php" style="position:absolute;right:12%;"> Τι είναι ο Εύδοξος </a>
                      </li>
                      <li class="nav-item" style="position:absolute;right:2%;">
                          <a class="nav-link" href="./underconstruction.php"> Επικοινωνία </a>
                      </li>
                  </ul>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
                        aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
          </nav>
          <form action="bookseason2.php" method="post">
              <div class="mx-auto" style="width: 80%;">
                  <!-- 2nd level navigation button -->
                  <div class="row justify-content-center" style="margin-top:6%;">
                    <h3 style="color:#2AA2DE;">1.Επιλογή Συγγραμμάτων</h3>
                  </div>
                  </br>
                  <!-- choose for each semester and lesson a book -->
                  <div class="row">
                      <div style="border: 1px solid #e5e5e5; overflow: auto; padding: 1%;height: 350px;width:100%;">
                          <ul id="myUL">
                              <?php
                                  $semNum = 0;
                                  foreach ($semesters as $sem) {
                                    echo
                                      '<li><span class="caret">' . $sem["name"] .'</span>
                                          <ul class="nested">';
                                            $lesNum = 0;
                                            foreach ($lessons[$semNum] as $les) {
                                              echo
                                                '<li><span class="caret">' . $les["name"] . '</span>
                                                    <ul class="nested">';
                                                    $bookNum = 0;
                                                    if(isset($books[$semNum][$lesNum])) {
                                                      foreach ($books[$semNum][$lesNum] as $book) {
                                                        echo '<input type="checkbox" name="check_list[]" value="' . $book["idBook"] . '">' . $book["title"] .
                                                        ', ' . $book["author"] . ', ' . $booksExtra[$semNum][$lesNum][$bookNum]["address"]
                                                        . ', ' . $booksExtra[$semNum][$lesNum][$bookNum]["brandName"] . '<br>';
                                                        $bookNum++;
                                                      }
                                                    }
                                                    echo '</ul>
                                                </li>';
                                                $lesNum++;
                                            }
                                        echo '</ul>
                                      </li>';
                                      $semNum++;
                                  }
                              ?>
                              </br>
                          </ul>
                      </div>
                  </div>
                  <div class="row" style="margin-top: 1%;">
                    <div class="col-10"></div>
                    <div class="col-2">
                         <button type="submit" class="btn btn-info" onclick="window.location='./bookseason2.php';">Επόμενο Βήμα</button>
                     </div>
                  </div>
              </div>
          </form>
      </div>
      <!-- tree view js -->
      <script>
          var toggler = document.getElementsByClassName("caret");
          var i;

          for (i = 0; i < toggler.length; i++) {
              toggler[i].addEventListener("click", function() {
                  this.parentElement.querySelector(".nested").classList.toggle("active");
                  this.classList.toggle("caret-down");
              });
          }
      </script>
  </body>
</html>
<?php endif; ?>