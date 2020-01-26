<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Symptom Report</title>



  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Menu</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Results</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="Patient_End.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Symptom Report</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">1</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    A doctor has reviewed your case. Click to view results
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Example Patient</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Results
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <div class="container-fluid">
          <form method="POST">
            <div class="form-group">

              <label for="exampleFormControlInput1">Temperature</label>
              <input class="form-control" placeholder="degrees celsius" name = "temp">
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Are there any changes in skin colour?</label>
              <select class="form-control" id="exampleFormControlSelect1" name = "skin">
              <option value="0">normal</option>
              <option value="1">pale</option>
              <option value="2">green</option>
                <option value="3">yellow</option>
                <option value="4">blue</option>
                <option value="5">grey</option>
                <option value="6">red</option>
              </select>
            </div>

            <div class="form-check">
              <input class="cough" name="cough" type="checkbox" value="Cough" id="Cough">
              <label class="form-check-label" for="defaultCheck1">
                Cough
              </label>
            </div>
            <div class="form-check">
              <input class="lethargy" name="lethargy" type="checkbox" value="Lethargy" id="Lethargy">
              <label class="form-check-label" for="defaultCheck1">
                Lethargy
              </label>
            </div>
            <div class="form-check">
              <input class="vdb" name="vdb" type="checkbox" value="vdb" id="vdb">
              <label class="form-check-label" for="defaultCheck1">
                Vomiting or Diarrhea with blood
              </label>
            </div>
            <div class="form-check">
              <input class="vd" name="vd" type="checkbox" value="vd" id="vd">
              <label class="form-check-label" for="defaultCheck1">
                Vomiting or Diarrhea WITHOUT blood
              </label>
            </div>
            <br>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Age (months)</label>
              <select class="form-control" id="exampleFormControlSelect1" name = "age">
                <option value="0">1-6</option>
                <option value="1">7-12</option>
                <option value="2">13-18</option>
                <option value="3">19-24</option>
                <option value="4">...</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Pregnancy Complications</label>
              <select class="form-control" id="exampleFormControlSelect1" name="pregnancy">
                <option value="0">None</option>
                <option value="1">Slight</option>
                <option value="2">Significant</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Are they crying?</label>
              <select class="form-control" id="exampleFormControlSelect1" name = "crying">
                <option value="0">No</option>
                <option value="1">Yes, with tears</option>
                <option value="2">Yes, without tears</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Are they bleeding?</label>
              <select class="form-control" id="exampleFormControlSelect1" name="bleeding">
                <option value="0">No</option>
                <option value="1">Small cuts or scrapes</option>
                <option value="2">Excessive of frequent bleeding</option>
                <option value="3">Open wound</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Are they taking in fluids?</label>
              <select class="form-control" id="exampleFormControlSelect1" name="fluids">
                <option value="0">Frequently</option>
                <option value="1">Small sips</option>
                <option value="2">Unable to swallow even a teaspoon of fluid</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Time since last meal (hours)</label>
              <select class="form-control" id="exampleFormControlSelect1" name="meal">
                <option value="0">0-3</option>
                <option value="1">4-5</option>
                <option value="2">6+</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Is there any other information you would like to make aware?</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "info"></textarea>
            </div>

        </div>
        <div id="main" class="container" role="main">
          <br>
          <br>
        </div>
        <button name="submit" type="submit" class="btn btn-primary btn-block" value="submit">Submit</button>
        </form>

        <?php
        $vd = 0;
        $vdb = 0;
        $lethargy = 0;
        $cough = 0;
        $cry = 0;
        $fluids = 0;
        $bleeding = 0;
        $pregnancy = 0;
        $meal = 0;
        $skin = 0;
        $age = 0;
        $temp = 0;
        $info = "";

        $servername = "127.0.0.1";
        $username = "babysafe";
        $password = "FireFire";

        // Create connection
        $conn = new mysqli($servername, $username, $password, "babysafe") or die("Connect failed: %s\n" . $conn->error);

        if ($mysqli->connect_error) {
          die('Connect Error ('. $mysqli->connect_errno.') ' . $mysqli->connect_error);
        }

        if (isset($_POST['vdb'])) {
          $vdb = 1;
        }

        if (isset($_POST['vd'])) {
          $vd = 1;
        }

        if (isset($_POST['lethargy'])) {
          $lethargy = 1;
        }

        if (isset($_POST['cough'])) {
          $cough = 1;
        }

        if (isset($_POST["bleeding"])) {
          $bleeding = intval($_POST['bleeding']);
        }

        if (isset($_POST["meal"])) {
          $meal = intval($_POST['meal']);
        }

        if (isset($_POST["fluids"])) {
          $fluids = intval($_POST['fluids']);
        }

        if (isset($_POST["cry"])) {
          $cry = intval($_POST['cry']);
        }

        if (isset($_POST["pregnancy"])) {
          $pregnancy = intval($_POST['pregnancy']);
        }

        if (isset($_POST["age"])) {
          $age = intval($_POST['age']);
        }

        if (isset($_POST["temp"])) {
          $temp = intval($_POST['temp']);
        }

        if (isset($_POST["skin"])) {
          $skin = intval($_POST['skin']);
        }

        if (isset($_POST["info"])) {
          $info = $_POST['info'];
        }

        if (isset($_POST['submit'])) {
          $hash = hash("sha256", $age.$temp.$skin.$meal.$pregnancy.$bleeding.$fluids.$cry.$vdb.$vd.$cough.$lethargy.$info);
         echo "<div style='text-align:center;'><font size='5' color='black'> Your unique ID code is: ".$hash."</font></div>";
          $sql = "INSERT INTO data (age, temp, skin_colour, to_meal, preg_compl, bleeding, fluids, crying, vd_blood, vd_nblood, coughing, lethargy, info, hash256) VALUES ('$age', '$temp', '$skin', '$meal', '$pregnancy', '$bleeding', '$fluids', '$cry', '$vdb', '$vd', '$cough', '$lethargy', '$info', '$hash')";
          $sql2 = "SELECT * FROM data WHERE hash256 = '$hash";
          if ($conn->query($sql)) {
            if($result = $conn->query($sql2)) {
              if ($row = $result->fetch_assoc()) {
                echo "Submitted. Your user ID is: ".$row['hash256'];
              }
            }
          } else {
            echo "Error: ". $conn->error;
          }
        }


        mysqli_close($conn);
        ?>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>DeltaHacks 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>