<?php
  session_start();
  if(!isset($_SESSION['fail'])):
    $_SESSION['fail'] = false;
  endif;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/treeview.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
        <?php
            $selectedBooks = array();
            if(!empty($_POST['check_list'])) {
                foreach($_POST['check_list'] as $check) {
                    //echo $check;
                    $selectedBooks[] = $check;
                }
                $_SESSION['selectedBooks'] = $selectedBooks;
            }

            //$id = $_SESSION['userID'];
            require_once 'db_connect.php';
            $conn = new mysqli("$hn","$un","$pw","$db");
            // Check connection
            if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                die();
            }
            mysqli_query($conn, "SET NAMES 'utf8'");
            // Select book information
            $books = array();
            $accessPoints = array();
            foreach ($selectedBooks as $bookId) {
                $sql = "SELECT title, author, accessPointId1 FROM Books WHERE idBook =" .$bookId;
                $res_data = mysqli_query($conn, $sql);
                $results = mysqli_fetch_array($res_data);
                $books[] = $results;
                // Check access points information
                $sql = "SELECT brandName, address, map FROM AccessPoints WHERE idAccessPoint = " .$results["accessPointId1"];
                $res_data = mysqli_query($conn, $sql);
                $accessPoints[] = mysqli_fetch_array($res_data);
            }
            mysqli_close($conn);
        ?>
        <!-- 2nd row, the second stop of books declaration -->
        <form action="bookseason3.php" method="post">
            <div class="mx-auto" style="width: 80%;">
                <!-- navigation bar -->
                <div class="row justify-content-center" style="margin-top:6%;">
                    <h3 style="color:#2AA2DE;">2.Επιλογή Τρόπου Παραλαβής</h3>
                </div>
                </br>
                <!-- for each book, choose receipt method -->
                <div class="row">
                    <div style="border: 1px solid #e5e5e5;overflow: auto; padding: 1%; height: 350px; width: 1200px;">
                        <ul id="myUL">
                            <?php $numBooks = 0;
                              foreach ($books as $book) { ?>
                                <li><span class="caret"> <?php echo $book["title"]; echo ",  "; echo $book["author"]; ?> </span>
                                    <ul class="nested">
                                        <p> Παραλαβή από:</p>
                                        <input type="radio" checked="checked" >Σημείο Παραλαβής</br>
                                        <ul class="list-inline">
                                                <li class="list-inline-item" id="googleMap" style="width:25%; height:100px;">
                                                <iframe src="<?php echo $accessPoints[$numBooks]["map"];?>" frameborder="0" style="border:0" ></iframe></li>
                                                <li><?php echo $accessPoints[$numBooks]["brandName"]; echo ", "; echo $accessPoints[$numBooks]["address"];?></li>
                                            <?php
                                                $numBooks++;
                                            ?>
                                        </ul>
                                        <br>
                                        <input type="radio" disabled="disabled">Ανταλλαγή</br>
                                    </ul>
                                </li>
                                </br>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="row" style="margin-top:1%;">
                    <div class="col-10">
                        <button type="button" class="btn btn-info" onclick="window.location='./bookseason1.php';">Προηγούμενο Βήμα</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-info" onclick="window.location='./bookseason1.php';">Επόμενο Βήμα</button>
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
    <!-- buggy js code for gmaps-->
    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(51.508742, -0.120850),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
    </script>
</body>
</html>
