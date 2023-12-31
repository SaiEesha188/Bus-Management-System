<?php include 'connection.php';
require 'session.php';
confirm_logged_in();
  ?>

<!DOCTYPE html>
<html lang="en">
<style>
    body{
        height: 100%;
        background-image: url("https://media.istockphoto.com/photos/abstract-bright-gradient-motion-spring-or-summer-landscape-texture-picture-id1253193147?b=1&k=20&m=1253193147&s=170667a&w=0&h=9XtMIDuKB6wtylaKfFuVS_Rajs3y94jZBVN4rtErYJM=");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<link rel="icon" href="image\favicon.jpg" sizes="16*16 32*32">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BUS SCHEDULING SYSTEM</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top" >

      <a class="navbar-brand mr-1" href="index.php">BUS SCHEDULING</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="register.php">Register</a>
            <a class="dropdown-item" href="#">Sign in</a>
            <a class="dropdown-item" href="logout.php"  data-target="#logoutModal">Logout</a>
            
          </div>
        </li>
      </ul>

    </nav>


    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav bg-dark" >
        <li class="nav-item">
          <a class="nav-link" href="homepage.php">
            <i class="fas fa-fw fa-home"></i>
            <span>HOMEPAGE</span>
          </a>
        </li>
       <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw  fa-cloud"></i>
            <span>SERVICES</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item " href="urns.php">URNS</a> 
            <a class="dropdown-item " href="caskets.php">CASKETS</a>
            <a class="dropdown-item " href="vehicles.php">VEHICLES</a>
          </div>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="userbus.php">
            <i class="fas fa-fw fa-bus"></i>
            <span>Bus</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userdriver.php">
            <i class="fas fa-fw fa-users    "></i>
            <span>Driver</span></a>
        </li>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userroute.php">
            <i class="fas fa-fw fa-route   "></i>
            <span>Route</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userschedule.php">
            <i class="fas fa-fw fa-clock  "></i>
            <span>Schedule</span></a>
          </li>
            <li class="nav-item">
          <a class="nav-link" href="userstop.php">
            <i class="fas fa fa-map-marker"></i>
            <span>Stop</span></a>
          </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">


          <!-- Breadcrumbs-->
          
            </li>
        
           <div class="col-lg-12">
                                 <div> 
            <i class="fas fa-table"></i>
            <a href="map.php?action=add" style="background-image: linear-gradient(black, #014923);> type="button" class="btn btn-xs btn-info">route map</a>

            </div>  <br> </br>
                                
                        <div class="table-responsive">
                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                                    <tr>
                                        <th>ROUTE ID</th>
                                        <th>Start</th>
                                        <th>Finish</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM route';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {

                           echo '<tr>';
                           
                            echo '<td>'. $row['ROUTE_ID'].'</td>';
                            echo '<td>'. $row['START'].'</td>';
                            echo '<td>'. $row['FINISH'].'</td>';
                                             
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <?php include 'footer.php'; ?>