<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
      <title> Eudoxus </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/index.css">
      <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
      <link rel="stylesheet" href="/bower_components/bootstrap-horizon/bootstrap-horizon.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
            integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body style="font-family: 'Alegreya Sans', sans-serif;">
      <div class="container-fluid">
          <!-- 1rst level (logo,login,signup) -->
          <div class="row" style="margin-bottom:1%;">
              <div class="col-9" style="padding-top:1%; padding-left:1%;">
                <a  href="./index.php">
                  <img src="../img/logo.jpg" class="rounded">
                </a>
              </div>
              <!-- if user is not logged in -->
              <?php if(!isset($_SESSION['mail'])): ?>
              <div class="col-3">
                  <div class="btn-group ls" role="group" aria-label="Basic example">
                      <a class="btn btn-info" href="./login.php" role="button"> Σύνδεση </a>
                      <a class="btn btn-outline-info" href="./signup.php" role="button">Εγγραφή</a>
                  </div>
              </div>
              <!-- else -->
              <?php else: ?>
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
              <?php endif; ?>
            </div>
          </div>
          <!-- 2nd level (navbar) -->
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

            if (isset($_GET['pageno'])) {
               $pageno = $_GET['pageno'];
           } else {
               $pageno = 1;
           }
           $no_of_records_per_page = 3;
           $offset = ($pageno-1) * $no_of_records_per_page;

            require_once 'db_connect.php';
            $conn = new mysqli($hn,$un,$pw,$db);
            if ($conn->connect_error) die ($conn->connect_error);
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            // support greek
            mysqli_query($conn, "SET NAMES 'utf8'");
            $sql = "SELECT Books.idBook, Books.title, Books.author, Books.category, Books.coverPage, Books.subtitle, Books.firstYearPublished, Books.dimensions
                    FROM Books WHERE Books.title ='$search'";
            if($res_data = mysqli_query($conn, $sql)){
                //echo "search success!!.";
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
            $row_cnt = $res_data->num_rows;
            if($row_cnt == 0) {
              echo '<div class="row justify-content-center" >
                      <div class="col-9">
                        <div class="jumbotron" style="margin-top:6%; background-color:#F8F9FA;">
                          <h1 class="display-4" align="center">Δεν βρέθηκαν αποτελέσματα!</h1>
                          <p class="lead" align="center">Δεν βρέθηκαν αποτελέσματα αναζήτησης με τίτλο: <h4 align="center">' .$search . '</h4></p>
                          <hr class="my-4">
                          <p align="center">Μεταβείτε στην αρχική.</p>
                          <a class="btn btn-primary btn-lg" href="./index.php" role="button" style="margin-left:47%;">Αρχική</a>
                        </div>
                      </div>
                    </div>';
            }
            else {
              echo '<div class="row justify-content-center" style="margin-top:3%;">
                      <h2 style="color:grey;"> Αποτελέσματα Αναζήτησης </h2>
                    </div>';
              echo '<div class="container">';
              echo '<div class="card-columns" style="margin-top:3%;">';
              while($row = mysqli_fetch_array($res_data)){
                $bookId = $row["idBook"];
                echo
                 '<div class="card">
                   <div class="card-body">
                      <h5 class="card-title">' . $row["title"] . '</h5>
                       <h6 class="card-subtitle mb-2 text-muted">'. $row["category"] .'</h6>
                       <h6 class="card-subtitle mb-2 text-muted">'. $row["author"] .'</h6>
                       <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#bookModal'.$bookId.'" >Περισσότερα</button>
                       <!-- Modal -->
                      <div class="modal fade" id="bookModal'.$bookId.'" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">' . $row["title"] . '</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col">
                                  <img src="' . $row["coverPage"] . '" class="img-fluid" alt="Image not found" height="295" width="209">
                                </div>

                                <div class="col">
                                  <div class="row">
                                    <p style="color:grey; font-style: italic;" > ' . $row["subtitle"] . '</p>
                                  </div>
                                  <div class="row" style="margin-top:10%;">
                                  <div class="col">
                                    <b>Συγγραφέας:</b>
                                  </div>
                                  <div class="col">
                                  ' .  $row["author"] . '
                                  </div>
                                </div>
                                  <div class="row" style="margin-top:5%;">
                                    <div class="col">
                                      <b>Είδος:</b>
                                    </div>
                                    <div class="col">
                                    ' .  $row["category"] . '
                                    </div>
                                  </div>

                                <div class="row" style="margin-top:5%;">
                                  <div class="col">
                                    <b>Έτος έκδοσης:</b>
                                  </div>
                                  <div class="col">
                                  ' .  $row["firstYearPublished"] . '
                                  </div>
                                </div>
                                <div class="row" style="margin-top:5%;">
                                  <div class="col">
                                    <b>Διαστάσεις:</b>
                                  </div>
                                  <div class="col">
                                  ' .  $row["dimensions"] . '
                                  </div>
                                </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                   </div>
                  </div> ';
              }
              mysqli_close($conn);
            }
            echo '</div></div>';
            echo '<div class="row justify-content-center" style="margin-top:6%;">';
            echo 'Αριθμός αποτελεσμάτων: '.$row_cnt;
            echo '</div>';
          ?>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
