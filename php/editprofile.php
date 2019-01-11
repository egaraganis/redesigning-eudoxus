<?php
  session_start();
?>

<?php if(!isset($_SESSION['mail'])): ?>
  <? header('Location: '."./login.php"); ?>
<?php endif; ?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
            integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/index.css"/>
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
        <title>Eudoxus</title>
    </head>

    <body style="font-family: 'Alegreya Sans', sans-serif;">
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
                              <a class="dropdown-item" href="./bookseason1.php"> Δήλωση Συγγραμμάτων </a>
                              <a class="dropdown-item" href="#"> Ανταλλαγή Συγγραμμάτων </a>
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
                              <a class="dropdown-item" href="#"> Επισκόπηση Συγγραμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>

                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Σημεία Διανομής
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#"> Προσθήκη Σημείου Διανομής </a>
                              <a class="dropdown-item" href="#"> Διανομή Σε Φοιτητές  </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Διαθέτες Σημειώσεων
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#"> Ανέβασμα Σημειώσεων </a>
                              <a class="dropdown-item" href="#"> Επισκόπηση Συγγραμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Υπηρεσίες Ιδρυμάτων
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#"> Τροποποίηση Προγράμματος Σπουδών </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
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
        <h2 align="center" style="color:#2AA2DE;margin-bottom:2%;margin-top:3%;"> Επεξεργασία Στοιχείων </h2>
        <?php if(isset($_SESSION['profiledited'])): ?>
          <?php if(($_SESSION['bookinsertion']) == true ): ?>
            <div class="row align-items-center justify-content-center alert alert-success alert-dismissable" style="width:30%;margin-top:2%;margin-left:35%;">
              Επιτυχής προσθήκη συγγράμματος !
              <?php unset($_SESSION['bookinsertion']); ?>
            </div>
          <?php else: ?>
            <div class="row alert alert-danger alert-dismissable justify-content-center" style="width:30%;margin-top:2%;margin-left:35%;">
              Η προσθήκη συγγράμματος προσωρινά απέτυχε!
              <?php unset($_SESSION['bookinsertion']); ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
        <?php
          $id=$_SESSION['userID'];
          require_once 'db_connect.php';
          $conn=new mysqli("$hn","$un","$pw","$db");
          // Check connection
          if (mysqli_connect_errno()){
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              die();
          }
          mysqli_query($conn, "SET NAMES 'utf8'");
          $sql = "SELECT Publishers.brandName, Publishers.telephone, Publishers.website
                  FROM Publishers
                  where Publishers.idPublisher= '$id' ";
          $res_data = mysqli_query($conn,$sql);
          $row = mysqli_fetch_array($res_data);
          $bn = $row['brandName'];
          $tel = $row['telephone'];
          $wp = $row['website'];
        ?>
        <form action="updateuser.php" method="post">
          <div id="upperPart" class="container">
              <div class="row justify-content-center" style="margin-top:2%;">
                  <div style="border: 1px solid #e5e5e5;padding: 10px; width: 550px;">
                      <div class="row text-center" style="margin:3%;">
                          <div class="col-4"><label for="brandname">Επωνυμία</label></div>
                          <div class="col-6"><input type="text" name="brandname" class="form-control" id="brandname" value="<?php echo $bn; ?>"></div>
                      </div>
                      <div class="row text-center" style="margin:3%;">
                          <div class="col-4"><label for="telephone">Τηλέφωνο</label></div>
                          <div class="col-6"><input name="telephone" type="text" class="form-control" 
                            id="telephone" value="<?php echo $tel; ?>"></div>
                      </div>
                      <div class="row text-center" style="margin:3%;">
                          <div class="col-4"><label for="website">Ιστοσελίδα</label></div>
                          <div class="col-6"><input name="website" type="text" class="form-control" id="website" value="<?php echo $wp; ?>"></div>
                      </div>
                    </div>
              </div>
          </div>
          <div id="finalButtons" class="container" style="margin-top:2%;">
              <div class="row align-items-center justify-content-center">
                  <div><button type="submit" class="btn btn-info">Αποθήκευση Αλλαγών</button></div>
                  <div style="margin-left:3%;"><a class="button" href="./profile.php">Ακύρωση</a></div>
              </div>
          </div>
        </form>
    </body>
</html>

<html>
<head>
</head>
<body>