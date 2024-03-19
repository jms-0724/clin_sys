<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Checkups</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light fixed-top">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <div class="logo">
               <img src="caduceus.png" alt="image" align-items= "center" height= "60px" >
            </div>    
                    <span class="fs-5 d-none d-sm-inline">Clinical Operations Mangement System</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="nav-item">
                        <a href="index.php" class="nav-link align-middle px-0">
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
                        <a href="view.php" class="nav-link px-0 align-middle active">
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
        <br>
        <br>
            <!--Content Here-->
            <nav class="navbar nav-pills nav-fill navbar-expand-lg navbar-light bg-light fixed-top py-3" style="margin-left: 240px">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="view.php">View Checkups</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="view2.php">View Prescriptions</a>
      </ul>
    </div>
  </div>
</nav>


<div id="">
    <h3>View Prescription</h3>
    <form action="report/prescreport.php" method="POST" target="_blank" required>
    <input type="text" name="prescJoin" id="prescJoin" placeholder="Search By Checkup ID">
    <button type="submit" class="btn btn-secondary">Prescription Report</button>
</form>
    <table class="table table-striped">
        <thead>
        <th>Precription ID</th>
        <th>Precribed Medicine</th>
        <th>Quantity</th>
        <th>Medicine Dosage</th>
        <th>Checkup ID</th>
        <th>Date</th>
        </thead>
        <tbody id="Jointable">
        </tbody>
    </table>
</div>

            <!-- End -->
        </div>
    </div>
</div>

<?php
include ("modals/logoutmodal.php");
?>
<script src="jquery-3.7.1.min.js"></script>
<script src="system/confirmlogout.js"></script>
<script src="jscripts/viewscripts.js"></script>
</body>
</html>