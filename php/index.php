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
            <?php if(!isset($_SESSION['mail'])): ?>
            <div class="col-3">
                <div class="btn-group ls" role="group" aria-label="Basic example">
                    <a class="btn btn-info" href="./login.php" role="button"> Σύνδεση </a>
                    <a class="btn btn-outline-info" href="./signup.php" role="button">Εγγραφή</a>
                </div>
            </div>
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
                            <a class="dropdown-item" href="./eudoxusinfo.php#section1"> Τι προσφέρει ο Εύδοξος </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="./bookseason1.php"> Δήλωση Συγγραμμάτων </a>
                            <a class="dropdown-item" href="#"> Ανταλλαγή Συγγραμμάτων </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                          Εκδότες
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="./bookinsertion.php"> Προσθήκη Συγγράμματος </a>
                            <a class="dropdown-item" href="#"> Επισκόπηση Συγγραμάτων </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                          Σημεία Διανομής
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"> Προσθήκη Σημείου Διανομής </a>
                            <a class="dropdown-item" href="#"> Διανομή Σε Φοιτητές  </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                          Διαθέτες Σημειώσεων
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"> Ανέβασμα Σημειώσεων </a>
                            <a class="dropdown-item" href="#"> Επισκόπηση Συγγραμάτων </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                          Υπηρεσίες Ιδρυμάτων
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"> Τροποποίηση Προγράμματος Σπουδών </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./eudoxusinfo.php" style="position:absolute;right:12%;"> Τι είναι ο Εύδοξος </a>
                    </li>
                    <li class="nav-item" style="position:absolute;right:2%;">
                        <a class="nav-link" href="#"> Επικοινωνία </a>
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
            <div class="card-group" style="margin-left:2%;margin-right:2%;margin-top:1%;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Άνοιξε η δήλωση μαθημάτων</h5>
                        <p class="card-text" style="color:#4c4d51;">Το έγγραφο του Υπουργείου Παιδείας, Έρευνας και Θρησκευμάτων σχετικά με την έναρξη των δηλώσεων και της διανομής συγγραμμάτων για τη χειμερινή περιόδο του ακαδημαϊκού έτους 2018-19 μπορείτε να βρείτε εδώ. </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Πρόβλημα με Mozilla</h5>
                        <p class="card-text" style="color:#4c4d51;">Σας ενημερώνουμε οτι λόγω απροσδόκητου προβλήματος που οφείλεται σε νεότερη έκδοση του περιηγητή Mozilla Firefox, η χρήση της εφαρμογής των Εκδοτών υπό τον συγκεκριμένο browser παρουσιάζει προσωρινή αρρυθμία...</p>
                        <p class="card-text"><small class="text-muted">Last updated 4 days ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Αναβάθμιση eudoxus </h5>
                        <p class="card-text" style="color:#4c4d51;">Με χαρά ανακοινώνουμε την ανανέωση του eudoxu, με την χρήση κορυφέων τεχνολογιών. Έχει επιλεχθεί η καλύτερη ομάδα προγραμματιστών σε διεθνής επίπεδο και θα προχωρήσει στις κατάλληλες αλλαγές τις επομένες ημέρες.</p>
                        <p class="card-text"><small class="text-muted">Last updated 6 days ago</small></p>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
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
