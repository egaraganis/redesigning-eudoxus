<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/treeview.css">
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
                        <span class="dropdown" data-toggle="dropdown" style="font-size: 2.5em; color:#138496;padding-left:32%;">
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
        <div class="mx-auto" style="width: 80%;">
            <div class="row" style="margin-top:6%;">
                <div class="col">
                    <a type="submit" class="btn btn-info" href="bookseason1.php">Προηγούμενο Βήμα</a>
                </div>
                <div class="col-6">
                    <h3 style="color:#2AA2DE;margin-left:15%;">2.Επιλογή Τρόπου Παραλαβής</h3>
                </div>
                <div class="col">
                    <a type="submit" class="btn btn-info" href="bookseason3.php">Επόμενο Βήμα</a>
                </div>
            </div>
            </br>
            <div class="row">
                <!--jumbotron jumbotron-fluid-->
                <div style="border: 1px solid #e5e5e5;overflow: auto; padding: 1%; width: 90%;">
                    <ul id="myUL">
                        <li><span class="caret">ΣΥΓΓΡΑΜΜΑ 1</span>
                            <ul class="nested">
                                <form>
                                    <input type="radio" name="selection" value="s1">ΜΕΣΩ ΣΗΜΕΙΟΥ ΠΑΡΑΛΑΒΗΣ
                                    <br>
                                    <br>
                                    <ul class="list-inline">
                                        <li class="list-inline-item" id="googleMap" style="width:25%;height:100px;">σπ1</li>
                                        <li class="list-inline-item" id="googleMap" style="width:25%;height:100px;">σπ2</li>
                                        <li class="list-inline-item" id="googleMap" style="width:25%;height:100px;">σπ3</li>
                                    </ul>
                                    <input type="radio" name="selection" value="s2">ΜΕΣΩ ΑΝΤΑΛΛΑΓΗΣ
                                    <br>
                                </form>
                            </ul>
                        </li>
                        </br>
                        <li><span class="caret">ΣΥΓΓΡΑΜΜΑ 2</span>
                            <ul class="nested">
                                <form>
                                    <input type="radio" name="selection" value="s1">ΜΕΣΩ ΣΗΜΕΙΟΥ ΠΑΡΑΛΑΒΗΣ
                                    <br>
                                    <br>
                                    <ul class="list-inline">
                                        <li class="list-inline-item" id="googleMap" style="width:25%;height:100px;">σπ1</li>
                                        <li class="list-inline-item" id="googleMap" style="width:25%;height:100px;">σπ2</li>
                                        <li class="list-inline-item" id="googleMap" style="width:25%;height:100px;">σπ3</li>
                                    </ul>
                                    <input type="radio" name="selection" value="s2">ΜΕΣΩ ΑΝΤΑΛΛΑΓΗΣ
                                    <br>
                                </form>
                            </ul>
                        </li>
                        </br>
                        <li><span class="caret">ΣΥΓΓΡΑΜΜΑ 3</span>
                            <ul class="nested">
                                <form>
                                    <input type="radio" name="selection" value="s1">ΜΕΣΩ ΣΗΜΕΙΟΥ ΠΑΡΑΛΑΒΗΣ
                                    <br>
                                    <br>
                                    <ul class="list-inline">
                                        <li class="list-inline-item" id="googleMap" style="width:25%;height:100px;">σπ1</li>
                                        <li class="list-inline-item" id="googleMap" style="width:25%;height:100px;">σπ2</li>
                                        <li class="list-inline-item" id="googleMap" style="width:25%;height:100px;">σπ3</li>
                                    </ul>
                                    <input type="radio" name="selection" value="s2">ΜΕΣΩ ΑΝΤΑΛΛΑΓΗΣ
                                    <br>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        </div>
    </div>

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
    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(51.508742, -0.120850),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</body>

</html>
