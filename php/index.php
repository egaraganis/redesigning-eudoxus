<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
      <title> Eudoxus </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/index.css">
      <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
      <link rel="stylesheet" href="/bower_components/bootstrap-horizon/bootstrap-horizon.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
                          <span class="dropdown" data-toggle="dropdown" style="font-size: 2.5em; color:#138496;padding-left:32%;">
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
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
          </nav>
          <!-- 3rd level (book season,search bar,exchange) -->
          <div class="row justify-content-center" style="margin-top: 7%;">
              <div class="col contain center-block text-center" style="margin-left:0%;">
                  <img src="../img/dhlwsh2.png"> </img>
                  <button type="button" class="btn btn-info"> Μάθετε Περισσότερα </button>
              </div>
              <div class="col search center-block text-center" style="margin-left:4%;">
                  <img src="../img/anazhthsh2.png" style="padding-top:1%;"> </img>
                  <div class="input-group search bar">
                      <div class="input-group-btn search-panel" style="margin-top:3%;">
                          <button type="button" class="btn search btn-default dropdown-toggle" data-toggle="dropdown" style="  margin-left:1%;  -webkit-border-radius: 50px; -moz-border-radius: 50px; border-radius: 50px;">
                              <span id="search_concept">Ψάχνω για</span> <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu filters" role="menu">
                              <li><a href="#contains" style="color:#008FD7;"> Σημειώσεις </a></li>
                              <li><a href="#its_equal" style="color:#008FD7;"> Σύγγραμμα </a></li>
                              <div class="dropdown-divider"></div>
                              <li><a href="#all" style="color:#008FD7;"> Οτιδήποτε </a></li>
                          </ul>
                      </div>
                      <input type="hidden" name="search_param" value="all" id="search_param">
                      <input type="text" class="form-control searchbar" name="x" placeholder="Αναζήτηση..." style="margin-top:3%;margin-left:2%;  -webkit-border-radius: 50px; -moz-border-radius: 50px; border-radius: 50px;">
                  </div>
              </div>
              <div class="col contain center-block text-center" style="margin-left:5%;">
                  <img src="../img/antallagh2.png"> </img>
                  <button type="button" class="btn btn-outline-info">Eudoxus+</button>
              </div>
          </div>
          <!-- 4th level (news) -->
          <div class="row row-horizon justify-content-center" style="margin-top: 11%;">
              <h2 style="color:#64686d;"> Ανακοινώσεις </h2>
          </div>
          <div class="row row-horizon justify-content-center">
            <!--  Get announcements from backend -->
            <div class="card-group" style="margin-left:2%;margin-right:2%;margin-top:1%;">
                <?php
                    if (isset($_GET['pageno'])) {
                        $pageno = $_GET['pageno'];
                    } else {
                        $pageno = 1;
                    }
                    $no_of_records_per_page = 3;
                    $offset = ($pageno-1) * $no_of_records_per_page;

                    require_once 'db_connect.php';
                    $conn=new mysqli("$hn","$un","$pw","$db");
                    // Check connection
                    if (mysqli_connect_errno()){
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        die();
                    }
                    mysqli_query($conn, "SET NAMES 'utf8'");
                    $total_pages_sql = "SELECT COUNT(*) FROM Announcements";
                    $result = mysqli_query($conn,$total_pages_sql);
                    $total_rows = mysqli_fetch_array($result)[0];
                    $total_pages = ceil($total_rows / $no_of_records_per_page);

                    $sql = "SELECT * FROM Announcements LIMIT $offset, $no_of_records_per_page";
                    $res_data = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($res_data)){
                        echo
                          '<div class="card">
                            <div class="card-body">
                              <h5 class="card-title">' . $row["title"] . '</h5>
                              <h6 class="card-subtitle mb-2 text-muted">'. $row["date"] .'</h6>
                              <p class="card-text" style="color:#4c4d51;">' . $row["content"] . ' </p>
                            </div>
                           </div> ';

                        }
                    mysqli_close($conn);
                ?>
            </div>
          </div>
          <div class="row row-horizon justify-content-center">
              <nav aria-label="Page navigation example">
                  <ul class="pagination">
                      <li><a class="page-link" href="?pageno=1">First</a></li>
                      <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                          <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                      </li>
                      <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                          <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                      </li>
                      <li><a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                  </ul>

              </nav>
          </div>
          <!-- 5th level (footer) -->
          <div class="row row-horizon justify-content-center" style="margin-top: 10%;padding-bottom: 5%;background-color:#f8f9fa;">
              <div class="col" style="padding-top:4%; padding-left:4%;">
                  <img src="../img/ee_1.png" class="rounded">
              </div>
              <div class="col" style="padding-top:4%; padding-left:4%;">
                  <img src="../img/espa_1.png" class="rounded">
              </div>
              <div class="col" style="padding-top:4%; padding-left:4%;">
                  <img src="../img/grnet_logo_1.png" class="rounded">
              </div>
              <div class="col" style="padding-top:4%; padding-left:4%;">
                  <img src="../img/minedu2.png" class="rounded">
              </div>
              <div class="col" style="padding-top:4%; padding-left:4%;">
                  <img src="../img/psifiaki_ellada_1.png" class="rounded">
              </div>
          </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
