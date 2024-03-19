<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <div>
                    <img src="caduceus.png" alt="image" align-items= "center" height= "60px" >
                    </div>    
                <span class="fs-5 d-none d-sm-inline">Clinical Operations Mangement System</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start nav-fill" id="menu">
                <li class="nav-item">
                        <a href="index.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a href="pat.php" class="nav-link align-middle px-0 active">
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
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="d-none d-sm-inline mx-1">Doctor</span>
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
        <div class="col py-3" style="margin-left: 240px">
        <center><h3>Patient Managment</h3></center>
            <!--Content Here-->

        <form action="report/patientreport.php" method="POST" target="_blank">
      <input type="text" name="searchPatients" id="searchPatients" placeholder="Search">
        <button type="submit" class="btn btn-secondary">List of Patients</button>
        </form>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPat">
  Add Patient
</button>

    <table class="table table-light table-striped shadow-lg rounded mt-5">
        <thead class="table-light">
            <tr>
                <th scope="col">Patient Lastname</th>
                <th scope="col">Patient Firstname</th>
                <th scope="col">Patient Middlename</th>
                <th scope="col">Gender</th>
                <th scope="col">Patient Age</th>
                <th scope="col">Municipality</th>
                <th scope="col">Barangay</th>
                <th scope="col">Patient Phone Number</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody id="showPatients">

        </tbody>
    </table>
            <!-- End -->
        </div>
    </div>
</div>
<?php
include("modals/addpatient.php");
include("modals/updatepatient.php");
include("modals/logoutmodal.php");
include ("modals/alertmodals.php");
?>


<script src="../jquery-3.7.1.min.js"></script>
<script src="system/confirmlogout.js"></script>
<script src="jscripts/patscripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
include ("confirm/confirmpat.php");
include ("confirm/confirmaddpat.php");
?>