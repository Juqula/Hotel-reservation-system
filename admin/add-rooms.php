<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eHotel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Onclick -->
  <link rel="stylesheet" href="../js/main.js">
  <!-- Form -->
  <link rel="stylesheet" href="../css/style.css">
</head>
<div class="wrapper">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="dashboard.php" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.php" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>

    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Brad Diesel
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">Call me whenever you can...</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                John Pierce
                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">I got your message bro</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Nora Silvester
                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">The subject goes here</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="admin.php" class="brand-link">
    <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">eHotel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Rooms Manage
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../admin/add-landlord.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Landlord</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../admin/add-staff.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Edit Info</p>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Guest Manage
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li>
  
      <li>
      <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-search"></i>
                <p>
                  Price Manage
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="membership.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Client</p>
              </a>
            </li>
            </ul>  
          </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Table
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="overall-record.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Client Record</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="table/stuff.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Client Record</p>
              </a>
            </li>
          </ul>
        </li>
      </li> 
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Reser Manage
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li>
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Front Office
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li>
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Point Of Sales
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li>   
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Night Auditor
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li> 
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              House Keeping
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li>
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Security
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li>   
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Security
            </p>
          </a> 
      </li>
      <li class="nav-item">
          <a href="../include/logout.php" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Logout
            </p>
          </a> 
      </li>       
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Add Room</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Add Room</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
            <div class="card-body login-card-body">
            <br>
             <form action="../include/add-landlord.inc.php"  id="quickForm" method="post">
                <div class="form-group">
                                  <input type="text" name="roomName" class="form-control" placeholder="Room Name"/>
                                </div>
                                <div class="form-group">
                                  <input type="number" name="roomNo" class="form-control" placeholder="Room No"/>
                                </div>
                                <div class="form-group">
                                  <input type="number" name="price" class="form-control" placeholder="Room Price"/>
                                </div>
                                <label for="">Features</label>
                                <div class="form-group">
                                  <input type="number" name="rooms" class="form-control" placeholder="Number of Rooms"/>
                                </div>
                                <div class="form-group">
                                  <input type="number" name="bathRoom" class="form-control" placeholder="Number of Bathroom"/>
                                </div>
                                <div class="form-group">
                                  <input type="number" name="balcony" class="form-control" placeholder="Number of Balcony"/>
                                </div>
                                <div class="form-group">
                                  <input type="number" name="sofa" class="form-control" placeholder="Number of Sofa"/>
                                </div>

                                <label for="">Facilities</label>
                                <div class="form-group">
                                    <input type="checkbox" name="Wifi"/>
                                    Wifi
                                </div>
                                <div class="form-group">
                                  <input type="checkbox" name="Television"/>
                                  Television
                                </div>
                                <div class="form-group">
                                  <input type="checkbox" name="AC"/>
                                  AC
                                </div>
                                <div class="form-group">
                                  <input type="checkbox" name="roomHeater"/>
                                  Room heater
                                </div>

                                <label for="">Guests</label>
                                <div class="form-group">
                                  <input type="number" name="adults" class="form-control" placeholder="Number of adult"/>
                                </div>
                                <div class="form-group">
                                  <input type="number" name="Children" class="form-control" placeholder="Number of Children"/>
                                </div>                                
                    <button type="submit" name="submit" class="btn btn-primary btn-block form-control" style="background: #343a40; margin-right: 5%; border: none;">Add Room</button>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.content -->

  <script>
    function toggleCellNumberField() {
        var cellNoField = document.getElementById("cellNo");
        var noCellOption = document.getElementById("noCellOption");

        if (noCellOption.checked) {
            cellNoField.style.display = "none";
            cellNoField.value = "N/A";
        } else {
            cellNoField.style.display = "block";
            cellNoField.value = ""; // Clear the field
        }
    }

    function validateForm() {
        var cellNoField = document.getElementById("cellNo");
        var cellNoValue = cellNoField.value.trim();

        if (!document.getElementById("noCellOption").checked && (cellNoValue === "" || cellNoValue === "N/A")) {
            alert("Please provide a valid cell number.");
            return false;
        }

        return true;
    }
</script>
  <!-- /.content -->
  <?php include '../partials/footer/footer.php' ?>
