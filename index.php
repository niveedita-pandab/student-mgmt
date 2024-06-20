<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management Portal</title>

  <link href="style.css" rel="stylesheet">
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
      <a class="navbar-brand" href="#"><i class="fa-solid fa-school"></i> &nbsp;KNS Technologies</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admission
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">B.Tech</a></li>
              <li><a class="dropdown-item" href="#">M.Tech</a></li>
              <li><a class="dropdown-item" href="#">Int. M.Sc & Dual degrees</a></li>
              <li><a class="dropdown-item" href="#">B.Arch</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
        <!--Sign Up Modal-->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Sign Up!
        </button>
        <!--/Sign Up-->
      </div>
    </div>
  </nav>
  <!--/Navbar-->

  <!--Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Roll Number">
            <label for="floatingInput">Roll Number</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Name">
            <label for="floatingInput">Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="example@mail.com">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Set Password</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-dark">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <!--/Modal-->

  <!--Login Content-->
  <div class="login">
    <div class="container-fluid">
      <div class="row">
        <!--Left Stuff-->
        <div class="col-lg-6 left-content">
          <h1>Student Management Portal</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore at accusantium neque facere, sed
            libero, nihil eaque eveniet error, mollitia tempora. Quo eveniet voluptatem, asperiores repellendus tempore
            non ex quibusdam!</p>
        </div>
        <!--/Left Stuff-->

        <!--Login Card-->
        <div class="col-lg-6 right-content">
          <div class="card text-center">
            <h4>
				<?php 

				error_reporting(0);
				session_start();
				session_destroy();
		
			    echo $_SESSION['loginMessage'];
		
				?>
            </h4>
            <div class="card-header">
              Login
            </div>
            <!--Card Body-->
            <div class="card-body">
                <form action="login_check.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="username">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <input class="btn btn-dark mb-3" id="login-btn" type="Submit" name="Submit" value="Login">
                </form>
                    <!--Login Footer-->
                    <p>New here? <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Sign Up
                        </button>
                        now!</p>
                    <!--/Login Footer-->
            </div>
            <!--/Card Body-->
          </div>
        </div>
        <!--/Login Card-->
      </div>
    </div>
  </div>
  <!--/Login Content-->

  <!--Footer-->
  <footer class="footer-txt">
    <h6>All copyright reserved by KNS Technologies</h3>
  </footer>
  <!--/Footer-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>

</html>