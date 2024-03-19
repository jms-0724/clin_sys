<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    
<script src="../jquery-3.7.1.min.js"></script>


</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light fixed-top">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <div class="logo">
               <img src="caduceus.png" alt="image" align-items= "center" height= "60px" >
            </div>    
                    <span class="fs-5 d-none d-sm-inline">Clinical Operations Mangement System</span>
                </a>
                <ul class="nav nav-pills nav-fill flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link align-middle px-0 active">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="user.php" class="nav-link align-middle px-0">
                            <span class="ms-1 d-none d-sm-inline">User Management</span>
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
                        <a href="presc.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Prescriptions</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="view.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">View Checkups</span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="med.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Medicine Management</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="d-none d-sm-inline mx-1">Administrator</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#log_out">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3"  style="margin-left: 240px">
        <!-- START -->
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="images/healthcare2.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Total No. of Patients</h5>
                <p class="card-text"><span id="totalpat"></span> </p>
        </div>
        </div>
            <!--END-->
        </div>
        <div class="col py-3">
            <!-- COL2 -->
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="images/medicine.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Number of Medicine Brands</h5>
                <p class="card-text"> <span id="countMedicine"></span>
        </p>
        </div>
        </div>
        </div>
        <div class="col py-3">
            <!-- COL3 -->
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="images/medicine2.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Average Prescribed Medicines</h5>
                <p class="card-text"> <span id="avgPres"></span>
            </p>
            </div>
            </div>
        </div>
        
    </div>
    <div class="row flex-nowrap">
        <div class="col py-3"  style="margin-left: 240px">
            <!-- COL1 -->
            <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="images/medicine3.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Total No. of Medicines in Inventory</h5>
                <p class="card-text"> <span id="countTotal"></span>
             </p>
            </div>
            </div>
        </div>
        <div class="col py-3">
            <!-- COL2 -->
            <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="images/insurance.png" alt="Card image cap" width="318px" height="318px">
            <div class="card-body">
                <h5 class="card-title">Total Checkups Conducted</h5>
                <p class="card-text"> <span id="totalChk"></span>
             </p>
            </div>
            </div>
        </div>
        <div class="col py-3">
            <!-- COL2 -->
            <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="images/healthcare2.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Average Age Of Patients</h5>
                <p class="card-text"> <span id="agemean"></span>
             </p>
            </div>
            </div>
        </div>
<!-- col -->
    </div>
    <!-- Row -->
</div>
<?php
include("modals/logoutmodal.php");
?>
<script src="jscripts/dashboard.js"></script>
<script src="system/confirmlogout.js"></script>
</body>
</html>