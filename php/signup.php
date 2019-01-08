<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>
        Eudoxus
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" type="text/css" />
    <link rel="stylesheet" href="../css/index.css" type="text/css" />
    <link rel="stylesheet" href="/bower_components/bootstrap-horizon/bootstrap-horizon.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet" type="text/css" />
</head>

<body style="font-family: 'Alegreya Sans', sans-serif;">
    <div class="container-fluid">
        <!-- 1rst level (logo) -->
        <div class="row justify-content-center" style="margin-bottom:1%; padding-right:5%;">
            <div style="padding-top:1%;">
                <a href="./index.html"><img src="../img/logo.jpg" class="rounded" style="width:120%;" /></a>
            </div>
        </div>
        <!-- 2nd level header -->
        <div class="row justify-content-center">
            <h3 style="color:#2AA2DE;">
                Εγγραφή Χρηστών
            </h3>
        </div>
        <br />
        <!-- signup options -->
        <form>
          <div class="row justify-content-center">
              <div class="col-5">
                <div class="row justify-content-center">
                  <h4>
                    Βασικά Στοιχεία Λογαριασμού
                  </h4>
                  <div style="border: 1px solid #e5e5e5; padding: 1%; width: 90%;">
                    <div class="form-group row">
                      <label for="staticEmail" class="col col-form-label">Όνομα Λογαριασμού</label>
                      <div class="col">
                        <input placeholder="Πληκτρολογήστε το username σας" class="form-control" type="text" />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col col-form-label">Email</label>
                      <div class="col">
                        <input placeholder="Πληκτρολογήστε την διέθυνσή σας" class="form-control" type="text" />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword" class="col col-form-label">Κωδικός Πρόσβασης</label>
                      <div class="col">
                        <input placeholder="Πλητρκολογήστε τον κωδικό σας" type="password" class="form-control" id="inputPassword" />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword" class="col col-form-label">Επιβεβαίωση Κωδικού</label>
                      <div class="col">
                        <input placeholder="Επαναλάβετε τον κωδικό σας" type="password" class="form-control" id="inputPassword" />
                      </div>
                    </div>
                  </div>
                  <div style="margin-top:4%;">
                    <select class="form-control" id="idiothta" style="width:70%;margin-left:3%;">
                      <option disabled="disabled" selected="selected">
                        Ποιά είναι η ιδιότητα σας;
                      </option>
                      <option value="foithths">
                        Φοιτητής
                      </option>
                      <option value="ekdoths">
                        Εκδότης
                      </option>
                      <option value="shmeiodianomhs">
                        Σημείο Διανομής
                      </option>
                      <option value="diathethsshmeiwsewn">
                        Διαθέτης Σημειώσεων
                      </option>
                      <option value="idrymata">
                        Ιδρύματα
                      </option>
                    </select>
                  </div>
                  <br />
                  <br />
                  <h4>
                    Επιπρόσθετα Στοιχεία
                  </h4>
                  <div style="border: 1px solid #e5e5e5; padding: 1%; width: 90%;">
                      <div id="foithths" class="idiothtes" style="display:none">
                          <div class="form-group row">
                            <select class="form-control" id="panepisthmio" style="width:75%;margin-left:3%;">
                              <option disabled="disabled" selected="selected">
                                Πανεπιστήμιο
                              </option>
                              <option>
                                ΕΚΠΑ
                              </option>
                              <option>
                                ΟΠΑ
                              </option>
                              <option>
                                ΑΣΣΟΕ
                              </option>
                            </select>
                            <br>
                            <br>
                          </div>
                          <div class="form-group row">
                            <select class="form-control" id="sxolh" style="width:75%;margin-left:3%;">
                              <option disabled="disabled" selected="selected">
                                Σχολή
                              </option>
                              <option>
                                ΦΠΨ
                              </option>
                              <option>
                                ΜΙΘΕ
                              </option>
                              <option>
                                ΘΕΟΛΟΓΙΚΟ
                              </option>
                            </select>
                          </div>
                        </div>
                      <div id="ekdoths" class="idiothtes" style="display:none">
                          <div class="form-group row">
                            <label for="staticEmail" class="col col-form-label">Επωνυμία</label>
                            <div class="col">
                              <input placeholder="Πληκτρολογήστε την επωνυμία σας" class="form-control" type="text" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="staticEmail" class="col col-form-label">Τηλέφωνο</label>
                              <div class="col">
                                <input placeholder="Πληκτρολογήστε το τηλέφωνο σας" class="form-control" type="tel" />
                              </div>
                            </div>
                          <div class="form-group row">
                            <label for="staticSite" class="col col-form-label">Ιστοσελίδα</label>
                            <div class="col">
                              <input placeholder="Πληκτρολογήστε την διεύθυνση της σελίδας σας" class="form-control" type="text" />
                            </div>
                          </div>
                        </div>
                      <div id="shmeiodianomhs" class="idiothtes" style="display:none">
                          <div class="form-group row">
                            <label for="staticEmail" class="col col-form-label">Επωνυμία</label>
                            <div class="col">
                              <input placeholder="Πλητρκολογήστε την επωνυμία σας" class="form-control" type="text" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="staticEmail" class="col col-form-label">Τηλέφωνο</label>
                            <div class="col">
                              <input placeholder="Πλητρκολογήστε το τηλέφωνο σας" class="form-control" type="tel" />
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="staticEmail" class="col col-form-label">Τηλέφωνο</label>
                            <div class="col">
                              <input placeholder="Πλητρκολογήστε την διέθυνσή της σελίδας σας" class="form-control" type="tel" />
                            </div>
                          </div>
                        </div>
                      <div id="diathethsshmeiwsewn" class="idiothtes" style="display:none">
                          <div class="form-group row">
                            <label for="staticEmail" class="col col-form-label">Τηλέφωνο</label>
                            <div class="col">
                              <input placeholder="Πληκτρολογήστε το τηλέφωνο σας" class="form-control" type="tel" />
                            </div>
                          </div>
                        </div>
                      <div id="idrymata" class="idiothtes" style="display:none">
                          <div class="form-group row">
                            <select class="form-control" id="panepisthmio" style="width:75%;margin-left:3%;">
                              <option disabled="disabled" selected="selected">
                                Πανεπιστήμιο
                              </option>
                              <option>
                                ΕΚΠΑ
                              </option>
                              <option>
                                ΟΠΑ
                              </option>
                              <option>
                                ΑΣΣΟΕ
                              </option>
                            </select>
                            <br />
                            <br />
                          </div>
                          <div class="form-group row">
                            <select class="form-control" id="sxolh" style="width:75%;margin-left:3%;">
                              <option disabled="disabled" selected="selected">
                                Σχολή
                              </option>
                              <option>
                                ΦΠΨ
                              </option>
                              <option>
                                ΜΙΘΕ
                              </option>
                              <option>
                                ΘΕΟΛΟΓΙΚΟ
                              </option>
                            </select>
                          </div>
                          <div class="form-group row">
                            <select class="form-control" id="thesh" style="width:75%;margin-left:3%;">
                              <option disabled="disabled" selected="selected">
                                Θέση
                              </option>
                              <option>
                                Γραμματεία
                              </option>
                              <option>
                                Υπεύθυνος Βιβλίων
                              </option>
                            </select>
                          </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-5" style="margin-left:5%;">
                <h4>
                  Όροι χρήσης
                </h4>
                <div class="form-group">
                  <div class="col-xs-9">
                    <div style="border: 1px solid #e5e5e5; height: 400px; width: 90%; overflow: auto; padding: 1%;">
                              <p>
                                  1. Η Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Πανεπιστημιακών Συγγραμμάτων ΕΥΔΟΞΟΣ παρέχεται από το Υπουργείο Παιδείας, Έρευνας και Θρησκευμάτων με την υποστήριξη του Εθνικού Δικτύου Έρευνας και Τεχνολογίας ΑΕ (εφεξής ΕΔΕΤ Α.Ε.). Αντικείμενο και σκοπός της υπηρεσίας είναι η ορθολογική διαχείριση της επιλογής και διανομής συγγραμμάτων για τους φοιτητές της Τριτοβάθμιας Εκπαίδευσης. Κάθε συμμετέχων φοιτητής οφείλει να διαβάσει προσεκτικά τους παρόντες όρους και προϋποθέσεις συμμετοχής πριν από την συμμετοχή του στο πρόγραμμα «ΕΥΔΟΞΟΣ – Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Συγγραμμάτων». Η συμμετοχή του στο πρόγραμμα συνεπάγεται την αυτόματη αποδοχή των παρόντων όρων συμμετοχής.
                              </p>
                              <p>
                                  2. Ο συμμετέχων φοιτητής στο πρόγραμμα «ΕΥΔΟΞΟΣ – Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Συγγραμμάτων» αποδέχεται ότι τα στοιχεία που δηλώνει στο πρόγραμμα είναι αληθή και επίκαιρα και ότι κάθε δήλωσή του στο πρόγραμμα επέχει θέση Υπεύθυνης Δήλωσης κατά την έννοια και με τις συνέπειες του ν.1599/1986.
                              </p>
                              <p>
                                  3. Ο συμμετέχων φοιτητής δηλώνει ότι τα Συγγράμματα που επιλέγει και παραλαμβάνει μέσω του προγράμματος, αντιστοιχούν στα μαθήματα τα οποία έχει δηλώσει κατά την εγγραφή του και νομίμως παρακολουθεί στο ακαδημαϊκό του Τμήμα κατά το τρέχον εξάμηνο και για τα οποία διατηρεί το δικαίωμα της παραλαβής των αντίστοιχων Συγγραμμάτων.
                              </p>
                              <p>
                                  4. Όλοι οι προπτυχιακοί φοιτητές των Α.Ε.Ι. δικαιούνται να επιλέγουν και να προμηθεύονται δωρεάν αριθμό διδακτικών συγγραμμάτων ίσο με τον συνολικό αριθμό των υποχρεωτικών και επιλεγόμενων μαθημάτων που απαιτούνται για τη λήψη του πτυχίου. Εάν προπτυχιακοί φοιτητές επιλέξουν περισσότερα επιλεγόμενα μαθήματα από όσα απαιτούνται για τη λήψη του πτυχίου, το δικαίωμα επιλογής και δωρεάν προμήθειας διδακτικών συγγραμμάτων δεν επεκτείνεται και στα επιπλέον μαθήματα που αυτοί επέλεξαν και εξετάστηκαν, ακόμη και αν αυτά υπολογίζονται για τη λήψη του πτυχίου.
                              </p>
                              <p>
                                  5. Κάθε συμμετέχων φοιτητής που λαμβάνει ένα Σύγγραμμα για ένα μάθημα που δικαιούται δεν μπορεί να λάβει το ίδιο Σύγγραμμα για άλλο μάθημα στο οποίο έχει οριστεί το ίδιο Σύγγραμμα
                              </p>
                              <p>
                                  6. Στην περίπτωση που ένας εκδότης δεν έχει σημείο παράδοσης Συγγραμμάτων στην πόλη όπου σπουδάζει ο συμμετέχων φοιτητής, το Σύγγραμμα θα παραδίδεται υποχρεωτικά μέσω υπηρεσίας ταχυμεταφοράς, στην πόλη του φοιτητή και σε σημείο παρουσίας της εταιρείας ταχυμεταφοράς, που θα επιλέγεται από τον ίδιο. Σε περίπτωση που ο φοιτητής αμελήσει να παραλάβει το Σύγγραμμα αυτό, χάνει το δικαίωμα για το συγκεκριμένο Σύγγραμμα.
                              </p>
                              <p>
                                  7. Η συλλογή και επεξεργασία των δεδομένων προσωπικού χαρακτήρα του συμμετέχοντα φοιτητή υπόκειται στους όρους του παρόντος καθώς και στις σχετικές διατάξεις του ν. 2472/97 για την προστασία του ατόμου από την επεξεργασία δεδομένων προσωπικού χαρακτήρα, όπως ισχύει. Τα δεδομένα συλλέγονται για τους σκοπούς της παροχής της υπηρεσίας, για την επικοινωνία με τους συμμετέχοντες φοιτητές και την ενημέρωσή τους για ζητήματα που σχετίζονται με την υπηρεσία αυτή, και στο πλαίσιο αυτού του σκοπού ανακοινώνονται στα οικεία Ιδρύματα Τριτοβάθμιας Εκπαίδευσης. Με την παροχή της συγκατάθεσης στο παρόν, ο φοιτητής παρέχει και τη συγκατάθεσή του για τη συλλογή και επεξεργασία των δεδομένων προσωπικού χαρακτήρα που τον αφορούν κατά τα οριζόμενα στο ν. 2472/97. Η ΕΔΕΤ Α.Ε. τηρεί το απόρρητο των δεδομένων προσωπικού χαρακτήρα που συλλέγει και επεξεργάζεται για λογαριασμό του Υπουργείου Παιδείας, Έρευνας και Θρησκευμάτων και δεν διαβιβάζει τα δεδομένα σε τρίτους με εξαίρεση τα προβλεπόμενα στο παρόν. H ΕΔΕΤ Α.Ε. λαμβάνει τα κατάλληλα οργανωτικά και τεχνικά μέτρα για την ασφάλεια των δεδομένων και την προστασία τους από τυχαία ή αθέμιτη καταστροφή, τυχαία απώλεια, αλλοίωση, απαγορευμένη διάδοση ή πρόσβαση και κάθε άλλη μορφή αθέμιτης επεξεργασίας. Έχετε δικαίωμα να πληροφορείστε ή να λαμβάνετε ενημέρωση σχετικά με τα προσωπικά δεδομένα σας που τηρούμε. Αν επιθυμείτε πληροφορίες σχετικά με τα προσωπικά σας στοιχεία και τη χρήση τους ή θέλετε να διορθωθούν, παρακαλούμε απευθυνθείτε στο Γραφείο Αρωγής Χρηστών στο τηλέφωνο 215-215-7850 ή ηλεκτρονικά στο http://eudoxus.gr/OnlineReport.aspx.
                              </p>
                              <p>
                                  8. Το Υπουργείο Παιδείας, Έρευνας και Θρησκευμάτων με την υποστήριξη της ΕΔΕΤ Α.Ε. προσφέρει στους φοιτητές των Α.Ε.Ι. την υπηρεσία ΕΥΔΟΞΟΣ+, η οποία είναι διακριτή από την Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Πανεπιστημιακών Συγγραμμάτων ΕΥΔΟΞΟΣ. Η υπηρεσία ΕΥΔΟΞΟΣ+ για την ανταλλαγή συγγραμμάτων προσφέρει τον ηλεκτρονικό χώρο συνάντησης των φοιτητών των Α.Ε.Ι. που επιθυμούν να ανταλλάξουν μεταξύ τους συγγράμματα.
                              </p>
                              <p>
                                  9. Στόχος της υπηρεσίας ΕΥΔΟΞΟΣ+ είναι η ενίσχυση της περιβαλλοντικής συνείδησης των μελών της Ελληνικής ακαδημαϊκής κοινότητας, μέσω της αξιοποίησης χρησιμοποιημένων έντυπων συγγραμμάτων που ανήκουν σε φοιτητές, οι οποίοι επιθυμούν να τα ανταλλάξουν δωρεάν με άλλους φοιτητές.
                              </p>
                              <p>
                                  10. Η χρήση της υπηρεσίας ΕΥΔΟΞΟΣ+ από τους φοιτητές είναι καθαρά προαιρετική. Σε περίπτωση που οι φοιτητές δεν συμφωνούν με κάποιον από τους παρόντες όρους χρήσης, καλούνται να εγκαταλείψουν την ιστοσελίδα άμεσα και να μην κάνουν χρήση της υπηρεσίας. Η υπηρεσία ΕΥΔΟΞΟΣ+ προσφέρεται δωρεάν σε όλους φοιτητές των Α.Ε.Ι. Σε καμία περίπτωση η υπηρεσία ΕΥΔΟΞΟΣ+ για την ανταλλαγή συγγραμμάτων δεν συνεπάγεται την καταβολή οποιουδήποτε αντιτίμου. Προϋπόθεση χρήσης της υπηρεσίας ΕΥΔΟΞΟΣ+ είναι η αποδοχή ότι αυτή προσφέρεται μόνο για την ανταλλαγήδωρεάν συγγραμμάτων χωρίς αντίτιμο.
                              </p>
                              <p>
                                  11. Οι χρήστες που επιθυμούν, μπορούν να δωρίζουν τα συγγράμματα με αποκλειστικά δική τους ευθύνη, εφόσον και στο μέτρο που έχουν το νόμιμο δικαίωμα να προχωρήσουν στην δωρεά, γεγονός που δεν εγγυάται η υπηρεσία ΕΥΔΟΞΟΣ+ και για το οποίο δεν φέρει καμία ευθύνη. Απαγορεύεται ρητά στους χρήστες της υπηρεσίας η πώληση ή η μίσθωση των βιβλίων ή το χρησιδάνειο αυτών ή η κάθε είδους εκμετάλλευση των δικαιωμάτων που συνδέονται με τα συγγράμματα ή η καταβολήαποδοχή οποιουδήποτε αντιτίμου με ή με αφορμή την παράδοση των ανταλλασσόμενων συγγραμμάτων.
                              </p>
                              <p>
                                  12. Ο διαχειριστής της υπηρεσίας δεν φέρει καμία ευθύνη έναντι των χρηστών ή έναντι κάθε τρίτου (νομικού ή φυσικού προσώπου) για τυχόν συμπεριφορά των χρηστών διαφορετική από αυτή για την οποία προσφέρεται η υπηρεσία, δηλαδή για την ανταλλαγή χρησιμοποιημένων συγγραμμάτων κυριότητας των χρηστών. Οι χρήστες φέρουν την αποκλειστική ευθύνη πρόσβασης στην υπηρεσία ΕΥΔΟΞΟΣ+ και είναι οι μόνοι και οι αποκλειστικοί υπεύθυνοι να αποκαταστήσουν πλήρως κάθε ζημία που θα υποστεί η υπηρεσία ΕΥΔΟΞΟΣ+, οι συνεργάτες της ή / και οποιοδήποτε τρίτο πρόσωπο εξαιτίας οποιασδήποτε αμφισβήτησης / διαφοράς / διαμάχης που τυχόν προκύψει και θα οφείλεται στη μη συμμόρφωση των χρηστών ή εξουσιοδοτούμενων από αυτούς προσώπων με τους όρους του παρόντος.
                              </p>
                              <p>
                                  13. Σε περίπτωση χρήσης των υπηρεσιών της υπηρεσίας ΕΥΔΟΞΟΣ+ με τρόπο που αντιβαίνει τους παρόντες όρους του, οι διαχειριστές της διατηρούν το δικαίωμα αποκλεισμού χωρίς προειδοποίηση του μη συμμορφούμενου χρήστη από τις υπηρεσίες του ΕΥΔΟΞΟΣ+. Το περιεχόμενο και οι πληροφορίες που περιλαμβάνονται στο ΕΥΔΟΞΟΣ+ δεν θα πρέπει σε καμιά περίπτωση να θεωρούνται ως συμβουλές ή ως παραίνεση για συγκεκριμένη ενέργεια.
                              </p>
                              <p>
                                  14. Οι διαχειριστές της υπηρεσίας ΕΥΔΟΞΟΣ+ δεν παρέχουν καμία ρητή εγγύηση, ότι τα ανταλλασσόμενα συγγράμματα θα παραδίδονται κατάλληλα, δίχως πραγματικά ή νομικά ελαττώματα. Οι διαχειριστές της υπηρεσίας ΕΥΔΟΞΟΣ+ δεν φέρουν οποιαδήποτε ευθύνη σε περίπτωση ανταλλαγής συγγραμμάτων με πραγματικά ή νομικά ελαττώματα.
                              </p>
                              <p>
                                  15. Η υπηρεσία ΕΥΔΟΞΟΣ+ ενδέχεται να συνεργάζεται με άλλους φορείς ή νομικά πρόσωπα για τη διενέργεια κληρώσεων και διαγωνισμών. Η ευθύνη για την αρτιότητα, ακρίβεια, πληρότητα, επάρκεια, νομιμότητα και καταλληλότητα του περιεχομένου αυτού που δημοσιεύεται στις σελίδες του ΕΥΔΟΞΟΣ+ ανήκει αποκλειστικά στους φορείς που διενεργούν την κλήρωση ή το διαγωνισμό και παρέχουν τα δώρα στους φοιτητές. Καμία ευθύνη δεν φέρει ο διαχειριστής της υπηρεσία ΕΥΔΟΞΟΣ+ για την αρτιότητα, ακρίβεια, πληρότητα, επάρκεια, νομιμότητα και καταλληλότητα του διαγωνισμού ή της κλήρωσης και της διανομής των δώρων.
                              </p>
                              <p>
                                  16. Απαγορεύεται στους χρήστες να χρησιμοποιούν τις υπηρεσίες ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+ για τη διακίνηση δεδομένων που εμπεριέχουν ή συνεπάγονται:  -&gt; ψευδή δήλωση για την ταυτότητα του χρήστη / μέλους ή παραπλανητική δήλωση αναφορικά με τη σχέση ή / και συνεργασία του χρήστη / μέλους με κάποιο άλλο νομικό ή φυσικό πρόσωπο. -&gt; παραχάραξη ή άλλη αλλοίωση των αναγνωριστικών των χρηστών / μελών με σκοπό την παραπλάνηση ως προς την προέλευση του περιεχομένου που μεταδίδεται μέσω των υπηρεσιών ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+. -&gt; διαφημιστικά μηνύματα ή άλλου περιεχομένου προώθησης προϊόντων ή υπηρεσιών ή τρίτων δικτυακών τόπων, την αποστολή ανεπιθύμητων και μη προσκαλούμενων από τον λήπτη ηλεκτρονικών μηνυμάτων και οποιαδήποτε άλλη μορφή ανεπιθύμητης προώθησης περιεχομένου. -&gt; ιούς ή οποιοδήποτε άλλο ηλεκτρονικό κώδικα, αρχεία ή προγράμματα σχεδιασμένα να παρεμβληθούν, καταστρέψουν ή περιορίσουν τη λειτουργία οποιουδήποτε λογισμικού ή εξοπλισμού ηλεκτρονικών υπολογιστών ή τηλεπικοινωνιακού δικτύου ή εξοπλισμού. -&gt; παρεμβολή στις υπηρεσίες ή διάσπαση των υπηρεσιών ή των servers ή των δικτύων που είναι συνδεδεμένα με τις υπηρεσίες ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+ ή μη συμμόρφωση με τους κανόνες, τις προϋποθέσεις, τις διαδικασίες και τους κανόνες των δικτύων αυτών. -&gt; παραβίαση, με ή χωρίς πρόθεση, οποιασδήποτε τοπικής, εθνικής, ευρωπαϊκής, διεθνούς νομοθεσίας ή / και οποιουδήποτε κανόνα που έχει νομοθετική ισχύ και αφορά ή / και καλύπτει οποιαδήποτε υπηρεσία ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+. -&gt; παρενόχληση με οποιονδήποτε τρόπο της ιδιωτικής ζωής και των ατομικών και κοινωνικών δικαιωμάτων άλλων χρηστών / μελών αλλά και κάθε ατόμου.
                              </p>
                              <p>
                                  17. Για κάθε απορία τους, οι χρήστες των υπηρεσιών ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+ μπορούν να απευθύνονται στο τηλέφωνο 215-215-7850 ή ηλεκτρονικά στο http://eudoxus.gr/OnlineReport.aspx. Σε κάθε περίπτωση η ΕΔΕΤ Α.Ε. διατηρεί το δικαίωμα τροποποίησης των παρόντων όρων και προϋποθέσεων κατόπιν ενημέρωσης των συμμετεχόντων φοιτητών μέσω της παρούσας ιστοσελίδας. Για τον λόγο αυτό οι συμμετέχοντες φοιτητές οφείλουν να επισκέπτονται τακτικά την ιστοσελίδα του έργου και να ελέγχουν τους όρους και τις προϋποθέσεις συμμετοχής.
                              </p>
                          </div>
                      </div>
                </div>
                <input type="checkbox" name="vehicle1" value="Bike" /> Αποδέχομαι τους όρους χρήσης
              </div>
          </div>
          <br />
          <div class="row justify-content-center">
              <a type="submit" class="btn" style="color: white;background-color: #FE8946;">Ολοκλήρωση
                Εγγραφής
              </a>
          </div>
          <div class="row justify-content-center" style="margin-top:2%;margin-bottom: 4%;">
              <a href="login.html">Έχω λογαριασμό, Σύνδεση</a>
          </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" type="text/javascript">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" type="text/javascript">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" type="text/javascript">
    </script>
    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function() {
            $('#idiothta').on('change', function() {

                //If ekdoths is selected, show ekdoths, hide shmeiodianomhs and diathethsshmeiwsewn.
                if (this.value == 'foithths') {
                    $("#foithths").show();
                    $("#ekdoths").hide();
                    $("#shmeiodianomhs").hide();
                    $("#diathethsshmeiwsewn").hide();
                    $("#idrymata").hide();
                }
                if (this.value == 'ekdoths') {
                    $("#foithths").hide();
                    $("#ekdoths").show();
                    $("#shmeiodianomhs").hide();
                    $("#diathethsshmeiwsewn").hide();
                    $("#idrymata").hide();
                }

                //If shmeiodianomhs is selected, show shmeiodianomhs, hide ekdoths and diathethsshmeiwsewn.
                if (this.value == 'shmeiodianomhs') {
                    $("#foithths").hide();
                    $("#ekdoths").hide();
                    $("#shmeiodianomhs").show();
                    $("#diathethsshmeiwsewn").hide();
                    $("#idrymata").hide();
                }

                //If diathethsshmeiwsewn is selected, show diathethsshmeiwsewn hide ekdoths and shmeiodianomhs.
                if (this.value == 'diathethsshmeiwsewn') {
                    $("#foithths").hide();
                    $("#ekdoths").hide();
                    $("#shmeiodianomhs").hide();
                    $("#diathethsshmeiwsewn").show();
                    $("#idrymata").hide();
                }
                if (this.value == 'idrymata') {
                    $("#foithths").hide();
                    $("#ekdoths").hide();
                    $("#shmeiodianomhs").hide();
                    $("#diathethsshmeiwsewn").hide();
                    $("#idrymata").show();
                }

            });
        });
        //]]>
    </script>
</body>

</html>
