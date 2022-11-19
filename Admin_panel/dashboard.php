<?php
  session_start();
  if(!isset($_SESSION['admin_login']))
  {
    header("location:index.php");
  }
  include("../BackendLogic/database_connectivity.php");
  include("../BackendLogic/url.php");
  
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../hardcode_images/mainlogo.png">
  <title>
    Cusit-Fiverr Admin 
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
  <!-- custom -->
  <link rel="stylesheet" href="../asset/custom/custom.css">
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand" href="index.php" style="position:relative; right:11px">
        <span class="ms-1 font-weight-bold text-white" style="font-size:18px">Cusit-Fiverr Admin Panel</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/Block-Client.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-lock opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Block Client</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/Unblock-Client.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-lock-open opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Unblock Client</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/see_seller.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="far fa-eye opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">See Seller</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/see_buyer.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="far fa-eye opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">See Buyer</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/paid_payment.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="	fas fa-wallet opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Paid Payment</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/Unpaid_payment.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="	fas fa-wallet opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Unpaid Payment</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/email.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Email</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/logout.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-exclamation-circle opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign Out</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <center>
        Cusit-Fiverr
      </center>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="dashboard.php">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="./pages/logout.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none p-4 text-white">Sign Out</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-user-graduate opacity-10"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Totall Seller</p>
                <?php
                  $percentage=0;
                  $month_sum=0;
                  $sql_seller="SELECT signup_date,role FROM signup where role=1";
                  $sql_seller_run=mysqli_query($DatabaseConnect,$sql_seller);
                  if(mysqli_num_rows($sql_seller_run)>0)
                  {
                    
                    $count=0;
                    while($row=mysqli_fetch_assoc($sql_seller_run))
                    {
                      $month = date("m",strtotime($row['signup_date']));
                      if($month==date('m'))
                      {
                        $month_sum++;
                        $count++;
             
                      }          
                                
                    }
                    echo "<h4 class='mb-0'>{$count}</h4>";
                    $percentage=($month_sum/30)*100;

                  }
                  
                ?>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0">
                <?php
                if(intval($percentage)>0)
                {
                echo "<span class='text-success text-sm font-weight-bolder'> +".intval($percentage)."% "."</span> In Current Month";
                }
                else
                {
                echo "<span class='text-danger text-sm font-weight-bolder'>".intval($percentage)."% "."</span> In Current Month";
                }
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Totall Buyer</p>
                <?php
                  $percentage=0;
                  $month_sum=0;
                  $sql_seller="SELECT signup_date,role FROM signup where role=2";
                  $sql_seller_run=mysqli_query($DatabaseConnect,$sql_seller);
                  if(mysqli_num_rows($sql_seller_run)>0)
                  {
                    
                    $count=0;
                    while($row=mysqli_fetch_assoc($sql_seller_run))
                    {
                      $month = date("m",strtotime($row['signup_date']));
                      if($month==date('m'))
                      {
                        $month_sum++;
                        $count++;
             
                      }          
                                
                    }
                    echo "<h4 class='mb-0'>{$count}</h4>";
                    $percentage=($month_sum/30)*100;

                  }
                  
                ?>
                </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0">
              <?php
                if(intval($percentage)>0)
                {
                echo "<span class='text-success text-sm font-weight-bolder'> +".intval($percentage)."% "."</span> In Current Month";
                }
                else
                {
                echo "<span class='text-danger text-sm font-weight-bolder'>".intval($percentage)."% "."</span> In Current Month";
                }
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-sync opacity-10"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Pending Project</p>
                <h4 class="mb-0">
                <?php
                  $month_sum=0;
                  $sql_seller="SELECT o_complete FROM s_b_order where o_complete=0";
                  $sql_seller_run=mysqli_query($DatabaseConnect,$sql_seller);
                  if(mysqli_num_rows($sql_seller_run)>0)
                  {
                    
                    $count=0;
                    while($row=mysqli_fetch_assoc($sql_seller_run))
                    {
                        $count++;
             
                                
                    }
                    echo "<h4 class='mb-0'>{$count}</h4>";

                  }
                  
                ?>

                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Overall Pending Projects</span></p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-check opacity-10"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Completed Projects</p>
                <h4 class="mb-0">                
                  <?php
                  $month_sum=0;
                  $sql_seller="SELECT o_complete FROM s_b_order where o_complete=1";
                  $sql_seller_run=mysqli_query($DatabaseConnect,$sql_seller);
                  if(mysqli_num_rows($sql_seller_run)>0)
                  {
                    
                    $count=0;
                    while($row=mysqli_fetch_assoc($sql_seller_run))
                    {
                        $count++;
             
                                
                    }
                    echo "<h4 class='mb-0'>{$count}</h4>";

                  }
                  
                ?>
            </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Overall Completed Project</span></p>
            </div>
          </div>
        </div>
      </div>


      <div class="row mt-5">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-layer-group opacity-10"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Totall Projects</p>
                <h4 class="mb-0">
                <?php
                  $month_sum=0;
                  $sql_seller="SELECT o_complete FROM s_b_order";
                  $sql_seller_run=mysqli_query($DatabaseConnect,$sql_seller);
                  if(mysqli_num_rows($sql_seller_run)>0)
                  {
                    
                    $count=0;
                    while($row=mysqli_fetch_assoc($sql_seller_run))
                    {
                        $count++;
             
                                
                    }
                    echo "<h4 class='mb-0'>{$count}</h4>";

                  }
                  
                ?>

                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <center>
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Pending & Completed Project</span></p>
              </center>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-star opacity-10"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Basic Gigs</p>
                <?php
                  $sql_basic="SELECT * FROM basic_gig";
                  $sql_basic_run=mysqli_query($DatabaseConnect,$sql_basic);
                  if(mysqli_num_rows($sql_basic_run)>0)
                  {
                    
                    $count=0;
                    while($row=mysqli_fetch_assoc($sql_basic_run))
                    {
                        $count++;                                
                    }
                    echo "<h4 class='mb-0'>{$count}</h4>";
                  }
                  
                ?>              
                </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0">
                <br>
                <span class="text-success text-sm font-weight-bolder">
                  Total Basic Gigs in System
              </span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-medal opacity-10"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Standard Gigs</p>
                <?php
                  $sql_standard="SELECT * FROM standard_gig";
                  $sql_standard_run=mysqli_query($DatabaseConnect,$sql_standard);
                  if(mysqli_num_rows($sql_standard_run)>0)
                  {
                    
                    $count=0;
                    while($row=mysqli_fetch_assoc($sql_standard_run))
                    {
                        $count++;                                
                    }
                    echo "<h4 class='mb-0'>{$count}</h4>";
                  }
                  
                ?>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <center>
              <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder">
                  Total Standard Gig in System
              </span>
            </p>
            </center>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-gem opacity-10"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Premium Gigs</p>
                <?php
                  $sql_premium="SELECT * FROM premium_gig";
                  $sql_premium_run=mysqli_query($DatabaseConnect,$sql_premium);
                  if(mysqli_num_rows($sql_premium_run)>0)
                  {
                    
                    $count=0;
                    while($row=mysqli_fetch_assoc($sql_premium_run))
                    {
                        $count++;                                
                    }
                    echo "<h4 class='mb-0'>{$count}</h4>";
                  }
                  
                ?>  
                </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <center>
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder">
                Total Premium Gig in System  
                </span>
                </p>
                </center>
            </div>
          </div>
        </div>
      </div>
      

      <div class="row mb-4 mt-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Projects</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Currently Done</span>
                  </p>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive ScrollBar" style="height:340px">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-success text-x font-weight-bolder opacity-7">Domain</th>
                      <th class="text-uppercase text-success text-x font-weight-bolder opacity-7 ps-2">Members</th>
                      <th class="text-center text-uppercase text-success text-x font-weight-bolder opacity-7">Budget</th>
                      <th class="text-center text-uppercase text-success text-x font-weight-bolder opacity-7">Email Address</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php
                  $sql_recently_10="SELECT * FROM s_b_order where o_complete=1";
                  $sql_recently_10=mysqli_query($DatabaseConnect,$sql_recently_10);
                  if(mysqli_num_rows($sql_recently_10)>0)
                  {
                    
                    $count=0;
                    while($row=mysqli_fetch_assoc($sql_recently_10))
                    {
                        $count++;                                
                  
                ?>

                    <tr>
                      <td>
                        <center>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm "><?php echo $row['gig_name'] ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <?php echo $row['o_receiver_name']; ?>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold text-info">Rs.<?php echo $row['o_price']; ?></span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <span class="text-primary"><?php echo $row['o_receiver_email']; ?></span>
                          </div>
                        </div>
                      </td>
                    </center>
                    </tr>
                      <?php
                        if($count==10)
                        {
                          break;
                        }
                        }
                      }
              
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Texation</h6>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side">
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="fas fa-laptop-code text-success text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Web Development</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 rupees out of 100</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="fas fa-mobile-alt text-danger text-gradient"></i>
                  </span>
                  
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Mobile Development</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 rupees out of 100</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="fas fa-umbrella-beach text-info text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Logo Designing</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">10 rupees out of 100</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="fas fa-video text-warning text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Video Animation</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">15 rupees out of 100</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="fas fa-pencil-alt text-primary text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Creative Writing</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">10 rupees out of 100</p>
                  </div>
                </div>
                <div class="timeline-block">
                  <span class="timeline-step">
                    <i class="	fas fa-angle-double-right text-success text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Others</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">10 rupees out of 100</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script> Developed By 
                <a href="#" class="font-weight-bold" target="_blank">Muhammad Bilal</a>
              </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0 text-primary">UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
          <center>
          <div style="margin-top:110px;font-size:20px" class="text-primary">
          Cusit-Fiverr Admin Panel Settings
          <hr>
        </div>
        </center>
      </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>