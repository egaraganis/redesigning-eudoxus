<?php
  session_start();
  if(!isset($_SESSION['fail'])):
    $_SESSION['fail'] = false;
  endif;
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
</head>

<body style="font-family: 'Alegreya Sans', sans-serif;">
    <div class="container-fluid">
        <!-- 1rst level (logo) -->
        <div class="row justify-content-center" style="margin-bottom:1%; padding-right:5%;">
            <div style="padding-top:1%;">
                <a href="./index.php">
                    <img src="../img/logo.jpg" class="rounded" style="width:120%;">
                </a>
            </div>
        </div>
        <!-- 2nd level header -->
        <div class="row justify-content-center">
            <h3 style="color:#2AA2DE;"> Σύνδεση Χρηστών </h3>
        </div>
        <div class="row justify-content-center">
          <?php if(($_SESSION['fail']) == true ): ?>
            <div class="alert alert-danger alert-dismissable" style="width:25%;margin-top:2%;">
              Βεβαιωθείται οτι τα στοιχεία σας είναι σωστά
              <?php unset($_SESSION['fail']); ?>
            </div>
          <?php endif; ?>
        </div>
        <!-- 3rd level login options -->
        <div class="row justify-content-center" style="margin-top:1%;">
            <div class="col-3">
                <form action="./uservalidation.php" method="post" style="border-radius: 5px;">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ηλεκτρονικό Ταχυδρομείο</label>
                        <input required="required" name="mail" type="email" class="form-control" id="inputEmail1" placeholder="Πληκτρολογήστε την διεύθυνση σας">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Κωδικός Πρόσβασης</label>
                        <input required="required" name="password" type="password" class="form-control" id="inputPassword1" placeholder="Πληκτρολογήστε τον κωδικό σας">
                    </div>
                    <div class="row justify-content-center" style="padding-top:2%;">
                        <button type="submit" class="btn btn-info"> Σύνδεση </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- 4rth level alternative links -->
        <div class="row justify-content-center" style="margin-top:2%;">
            <a href="signup.php"> Δεν έχω λογαριασμό, Εγγραφή </a>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
