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
        <h2 align="center" style="color:#2AA2DE;margin-bottom:2%"> Επεξεργασία Στοιχείων </h2>
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
        <form action="updateuser.php" method="post">
          <div id="upperPart" class="container">
              <div class="row justify-content-center" style="margin-top:2%;">
                  <div style="border: 1px solid #e5e5e5;padding: 10px; width: 550px;">
                      <div class="row text-center" style="margin:3%;">
                          <div class="col-4"><label for="brandname">Επωνυμία</label></div>
                          <div class="col-6"><input type="text" name="brandname" class="form-control" id="brandname"></div>
                      </div>
                      <div class="row text-center" style="margin:3%;">
                          <div class="col-4"><label for="telephone">Τηλέφωνο</label></div>
                          <div class="col-6"><input name="telephone" type="text" class="form-control" 
                            id="telephone"></div>
                      </div>
                      <div class="row text-center" style="margin:3%;">
                          <div class="col-4"><label for="website">Ιστοσελίδα</label></div>
                          <div class="col-6"><input name="website" type="text" class="form-control" id="website"></div>
                      </div>
                    </div>
              </div>
          </div>
          <div id="finalButtons" class="container" style="margin-top:2%;">
              <div class="row align-items-center justify-content-center">
                  <div><button type="submit" class="btn btn-info">Αποθήκευση Αλλαγών</button></div>
                  <div style="margin-left:3%;"><a class="button" href="#">Ακύρωση</a></div>
              </div>
          </div>
        </form>
    </body>
</html>

<html>
<head>
</head>
<body>