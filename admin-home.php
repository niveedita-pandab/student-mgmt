<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <link href="admin.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg sticky-top bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin-home.php"><i class="fa-solid fa-screwdriver-wrench"></i> &nbsp;Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="btn btn-outline-dark" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <!--/Navbar-->
    <aside class="bg-warning">
        <ul>
            <li>
                <a href="">Admissions</a>
            </li>
            <li>
                <a href="">Add Student</a>
            </li>
            <li>
                <a href="">View Student</a>
            </li>
            <li>
                <a href="">Add Teacher</a>
            </li>
            <li>
                <a href="">View Teacher</a>
            </li>
            <li>
                <a href="">Add Courses</a>
            </li>
            <li>
                <a href="">View Courses</a>
            </li>
        </ul>
    </aside>
</body>
</html>