<?php
  session_start();
  include("includes/config.php");
  //Get Current File Name for Navbar active button
  $current_file_name = basename($_SERVER['PHP_SELF']); 
  date_default_timezone_set("Asia/Kuala_Lumpur");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Interface/style/bootstrap/css/bootstrap.min.css" media="screen">
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>-->
    <link href="Interface/style/chosen/chosen.css" rel="stylesheet">
    <link href="Interface/style/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="Interface/style/css/style1.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="Interface/style/DataTables/css/jquery.dataTables.css">
    <link href="Interface/style/summernote/summernote-lite.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!--<link rel="stylesheet" href="Interface/style/DataTables/dataTables.bootstrap5.min.css">-->
  </head>
  <body>

<header>
  <!-- Sidebar -->
    	<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        	<div class="position-sticky">
            	<div class="list-group list-group-flush mx-3 mt-4"><!--
                	<a href="Admin_Dashboard.php" class="list-group-item list-group-item-action py-2" aria-current="true"><i class="bi bi-house-door-fill me-3"></i><span>Dashboard</span></a>
            
                    <a href="BOR_Add.php" class="list-group-item list-group-item-action py-2" aria-current="true"><i class="bi bi-clipboard me-3"></i><span>BOR Manage</span></a>
                    
                    <a href="#FinanceCollapse" aria-current="true" aria-controls="FinanceCollapse" data-bs-toggle="collapse" aria-expanded="true" class="list-group-item list-group-item-action py-2"><i class="bi bi-telephone me-3"></i><span>Phone Directory</span></a>
                    <ul class="collapse list-group list-group-flush ps-4" id="FinanceCollapse">
                      <li class="list-group-item py-1 "><a href="Phone_Add.php" class="list-group-item list-group-item-action py-2 " aria-current="true"><i class="bi bi-telephone-plus"></i><span> Add Phone</span></a></li>
                      <li class="list-group-item py-1 "><a href="Phone_Edit.php" class="list-group-item list-group-item-action py-2 " aria-current="true"><i class="bi bi-telephone-fill"></i><span>Update</span></a></li>
                    </ul>
                    <a href="OTSTAT_Add.php" class="list-group-item list-group-item-action py-2 " aria-current="true"><i class="fa-solid fa-heart-pulse me-3"></i><span>OT Status</span></a>
                    -->
                    <a href="#DashCollapse" aria-current="true" aria-controls="DashCollapse" data-bs-toggle="collapse" aria-expanded="true" class="list-group-item list-group-item-action py-2"><i class="bi bi-tv me-3"></i><span>A&E Dashboard</span></a>
                    <ul class="collapse list-group list-group-flush ps-4" id="DashCollapse">
                      <li class="list-group-item py-1 "><a href="index.php" class="list-group-item list-group-item-action py-2 " aria-current="true"><i class="bi bi-plus-circle"></i><span> Create New</span></a></li>
                      <li class="list-group-item py-1 "><a href="Dashboard_History.php" class="list-group-item list-group-item-action py-2 " aria-current="true"><i class="bi bi-clipboard-data"></i><span> View History</span></a></li>
                      <li class="list-group-item py-1 "><a href="dashboard.php" class="list-group-item list-group-item-action py-2 " aria-current="true"><i class="bi bi-tv-fill"></i><span> View eDash</span></a></li>
                    </ul>
                    <!--
                    <a href="#UserCollapse" aria-current="true" aria-controls="UserCollapse" data-bs-toggle="collapse" aria-expanded="true" class="list-group-item list-group-item-action py-2"><i class="bi bi-person-square me-3"></i><span>User Management</span></a>
                    <ul class="collapse list-group list-group-flush ps-4" id="UserCollapse">
                      <li class="list-group-item py-1 "><a href="User_Add.php" class="list-group-item list-group-item-action py-2 " aria-current="true"><i class="bi bi-person-plus"></i><span> Add User</span></a></li>
                      <li class="list-group-item py-1 "><a href="" class="list-group-item list-group-item-action py-2 " aria-current="true"><i class="bi bi-people-fill"></i><span> View User</span></a></li>
                    </ul>
                    -->
                    
            
                    <br /><br />
                    <!--<a href="#" class="list-group-item list-group-item-action py-2" aria-current="true"><i class="bi bi-gear-fill me-3"></i><span>Settings</span></a>-->
                </div>       
            </div>
		</nav>

		<nav id="main-navbar" class="navbar navbar-expand-lg shadow-sm navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
              <!-- Toggle button -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>

                  <!-- Brand -->
                  <a class="navbar-brand" href="../index.php">
                    <img class="ms-3" src="Interface/style/image/logo.png" height="30" alt="" loading="lazy" />
                  </a>
              <!-- Right links -->
              <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Notification dropdown 
                <li class="nav-item dropdown">
                  <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Some news</a></li>
                    <li><a class="dropdown-item" href="#">Another news</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>-->
                
                <!-- Avatar -->
              </ul>
            </div>
        <!-- Container wrapper -->
      </nav>
    </header>
    <main style="margin-top: 58px">
  <div class="container-fluid ps-5 pe-5 ">
