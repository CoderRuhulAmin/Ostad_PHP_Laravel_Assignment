<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#7952b3">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="assets/css/headers.css" rel="stylesheet">
    <!-- Responsive Datatable template -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css" rel="stylesheet">

    <link href="assets/css/styles.css" rel="stylesheet">
    
    <title>User Role Management System.</title>

  </head>
  <body>

  <header class="p-1 mb-0 border-bottom bg-danger bg-gradient">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-12">

          <nav class="navbar navbar-expand-lg">
            <div class="container p-0">
              
              <div class="navbar-brand">
                <h2><a href="home.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">Role Management</a></h2>
              </div>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>

              <div class="collapse navbar-collapse text-white text-end" id="navbarSupportedContent">

                <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item border border-white rounded bg-warning ms-2">
                    <a class="nav-link text-dark h3" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item border border-white rounded bg-warning ms-2">
                    <a class="nav-link text-dark h3" aria-current="page" href="users.php">Users</a>
                  </li>
                  <?php 
                    $users = json_decode( file_get_contents( 'users.json' ), true );

                    if ( isset($_SESSION["email"]) && $users[$_SESSION["email"]]["role"] == "Admin"){

                  ?>
                  <li class="nav-item border border-white rounded bg-warning ms-2">
                    <a class="nav-link text-dark h3" aria-current="page" href="create-user.php">Create User</a>
                  </li>
                  <?php
                    }
                  ?>
                </ul>

              </div>
            </div>
          </nav>

        </div>
      </div>
    </div>
  </header>