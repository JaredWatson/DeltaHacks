<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Patient Data</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Menu</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="Doctor_End.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Patient Information</span></a>
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
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div>
                    <div class="small text-gray-500">December 2, 2020</div>
                    No new alerts at this time.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Example Doctor</span>
                <img class="img-profile rounded-circle" src="https://image.cnbcfm.com/api/v1/image/105323124-1531311305098gettyimages-962142680.jpeg?v=1571851562&w=1400&h=950">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
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

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold" .text-gray-900>Patient Details</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Predicted Severity</th>
                      <th>Age (mo)</th>
                      <th>Temp</th>
                      <th>Skin Discolouration</th>
                      <th>Time since meal </th>
                      <th>Pregnancy complications</th>
                      <th>Bleeding</th>
                      <th>Fluids</th>
                      <th>Crying</th>
                      <th>Vomiting/Diarrhea with blood</th>
                      <th>Vomiting/Diarrhea without blood</th>
                      <th>Coughing</th>
                      <th>Lethargy</th>
                      <th>Extra information</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $servername = "127.0.0.1";
                    $username = "babysafe";
                    $password = "FireFire";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, "babysafe") or die("Connect failed: %s\n" . $conn->error);

                    if ($mysqli->connect_error) {
                      die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
                    }

                    $sql = "SELECT * FROM data WHERE ID = '". $_GET['row'] . "'";
                    // mysqli_query($conn, $sql)
                    //$conn->query($sql)
                    if ($result = $conn->query($sql)) {
                      while ($row = $result->fetch_assoc()) {

                        echo "<td> $row[sick] </td>";

                        switch(intval($row['age'])) {
                          case 0 :
                            echo "<td> 1-6 </td>";
                          break;
                          case 1:
                            echo "<td> 7-12 </td>";
                          break;
                          case 2:
                            echo "<td> 13-18 </td>";
                          break;
                          case 3:
                            echo "<td> 19-24 </td>";
                          break;
                          case 4:
                            echo "<td> 24+ </td>";
                          break;
                        }

                        echo "<td> $row[temp] </td>";
                        switch(intval($row['skin_colour'])) {
                          case 0 :
                            echo "<td> normal </td>";
                          break;
                          case 1:
                            echo "<td> pale </td>";
                          break;
                          case 2:
                            echo "<td> green </td>";
                          break;
                          case 3:
                            echo "<td> yellow </td>";
                          break;
                          case 4:
                            echo "<td> blue </td>";
                          break;
                          case 5:
                            echo "<td> grey </td>";
                          break;
                          case 6:
                            echo "<td> red </td>";
                          break;
                        };
                        echo "<td> $row[to_meal] </td>";
                        switch(intval($row['preg_compl'])) {
                          case 0 :
                            echo "<td> None </td>";
                          break;
                          case 1:
                            echo "<td> Slight </td>";
                          break;
                          case 2:
                            echo "<td> Significant </td>";
                          break;
                        }

                        switch(intval($row['bleeding'])) {
                          case 0 :
                            echo "<td> None </td>";
                          break;
                          case 1:
                            echo "<td> Small cuts or scrapes </td>";
                          break;
                          case 2:
                            echo "<td> Excessive or frequent bleeding </td>";
                          break;
                          case 3:
                            echo "<td> Gaping wound </td>";
                          break;
                        }

                        switch(intval($row['fluids'])) {
                          case 0 :
                            echo "<td> Frequently </td>";
                          break;
                          case 1:
                            echo "<td> Small sips </td>";
                          break;
                          case 2:
                            echo "<td> Unable to swallow even a teaspoon of fluid </td>";
                          break;
                        }
                        
                        switch(intval($row['crying'])) {
                          case 0 :
                            echo "<td> None </td>";
                          break;
                          case 1:
                            echo "<td> Yes, with tears </td>";
                          break;
                          case 2:
                            echo "<td> Yes, without tears </td>";
                          break;
                        }

                        switch(intval($row['vd_blood'])) {
                          case false :
                            echo "<td> No </td>";
                          break;
                          case true:
                            echo "<td> Yes </td>";
                          break;
                        }

                        switch(intval($row['vd_nblood'])) {
                          case false :
                            echo "<td> No </td>";
                          break;
                          case true:
                            echo "<td> Yes </td>";
                          break;
                        }

                        switch(intval($row['coughing'])) {
                          case false :
                            echo "<td> No </td>";
                          break;
                          case true:
                            echo "<td> Yes </td>";
                          break;
                        }

                        switch(intval($row['lethargy'])) {
                          case false :
                            echo "<td> No </td>";
                          break;
                          case true:
                            echo "<td> Yes </td>";
                          break;
                        }

                        echo "<td> $row[info] </td>";
                        echo "</tr>";
                      }
                      
                    } else {
                      echo "Error: " . $conn->error;
                    }

                    $verdict = 0;
                    $comments = "";
                    
                    if (isset($_POST["verdict"])) {
                      $verdict = $_POST['verdict'];
                    }

                    if (isset($_POST["comments"])) {
                      $comments = $_POST['comments'];
                    }

                    if (isset($_POST['submit'])) {
                      $sql = "UPDATE data SET verdict = '$verdict', comments = '$comments' Where ID = '". $_GET['row'] . "'";
                      if ($conn->query($sql)) {
                        echo "Submitted";
                      } else {
                        echo "Error: ". $conn->error;
                      }
                    }

                    ?>
                  </tbody>
                </table>

              </div>
            </div>
          </div>

        </div>

        <form method="POST">
        <div class="form-group">
              <label for="exampleFormControlTextarea1">Recommended Courses of Action and Comments</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "comments"></textarea>
            </div>

              <label for="exampleFormControlSelect1">Diagnosed Severity</label>
              <select class="form-control" id="exampleFormControlSelect1" name="verdict">
                <option value="0">Very Low</option>
                <option value="1">Low</option>
                <option value="2">Medium</option>
                <option value="3">High</option>
                <option value="4">Critical</option>
              </select>
              <br>
              <button name="submit" type="submit" class="btn btn-primary btn-block" value="submit">Submit</button>
             <br>
            </form>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-7">

              <!-- Area Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Temperature vs. Illness Diagnosis </h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>

              <!-- Bar Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                <div class="card-body">
                  </div>
                </div>
              </div>

            </div>

            <!-- Donut Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Diagnoses of Kids with Similar Symptoms</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4">
                    <canvas id="myPieChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

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
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
