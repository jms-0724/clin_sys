<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    

</head>
<body style="font-family: 'Poppins',sans-serif;
    background-image: url('bg1.png'); 
    background-size: cover;
    box-sizing: border-box; 
    animation: fadeInAnimation ease 1s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
    
    @keyframes fadeInAnimation {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
     }
  }">
<div class="container-fluid">
    <div class="row flex-nowrap">
    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light fixed-top">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <div>
                    <img src="caduceus.png" alt="image" align-items= "center" height= "60px" >
                    </div>
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Clinical Operations Mangement System</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <a href="index.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pat.php" class="nav-link align-middle px-0">
                            <span class="ms-1 d-none d-sm-inline">Patient Management</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="checkups.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Checkups</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="presc.php" class="nav-link px-0 align-middle active">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Prescriptions</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="view.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">View Checkups</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="d-none d-sm-inline mx-1">Doctor</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#log_out">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3" style="margin-left: 240px">
            <!--Content Here-->
           

<h3><center>Add Prescriptions</center></h3>
<input type="text" name="searchCheckups" id="searchCheckups" placeholder="Search"  class="rounded"> 
<button type="button" id="btn_chk" class="btn btn-secondary" >Show Checkups</button>
<button id="hidechk" class="btn btn-secondary" >Hide Table</button>
<div id="">
<h3>Lists of Patient Checkups</h3>
<table class="table table-striped">
    <thead>
        <th>Checkup ID</th>
        <th>Checkup Number</th>
        <th>Date</th>
        <th>Temperature</th>
        <th>Blood Pressure</th>
        <th>Symptoms</th>
        <th>Remarks</th>
        <th>Patient ID</th>
    </thead>
    <tbody id="showCheckups">
    </tbody>
</table>

            <!--END-->
        </div>
    </div>
</div>
<?php
include("modals/addcheck.php");
include("modals/logoutmodal.php");
?>
<?php
include("modals/addpresc.php");
include("confirm/confirmcheck.php");
include("confirm/confirmpresc.php");
include("modals/alertmodals.php");
?>
<script src="../jquery-3.7.1.min.js"></script>
<script src="jscripts/chkscripts.js"></script>
<script src="system/confirmlogout.js"></script>
</body>
</html>