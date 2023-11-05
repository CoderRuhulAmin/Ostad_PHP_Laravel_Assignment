<?php 
    session_start();
    if(!isset($_SESSION["email"])){
        header("Location: index.php");
    }

    $users = json_decode( file_get_contents( 'users.json' ), true );
            
    $username = $users[$_SESSION["email"]]['username'];
    $role = $users[$_SESSION["email"]]['role'];
    $email = $_SESSION["email"];

?>

<?php include 'header.php';?>

<main class="main container-fluid bg-light px-0">
    <section class="h-auto gradient-form overflow-auto py-5">
        <div class="container py-5 h-100">
                
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-8 mx-auto">
                    <div class="card mb-3">
                        <div class="card-body">
                            
                            <?php echo "<h2>Welcome to {$users[$_SESSION["email"]]["role"]} Page. </h2>"; ?>

                            <hr><br>
                            <div class="row">
                                <div class="col-sm-3"><h6 class="mb-0">Role:</h6></div>
                                <div class="col-sm-9 text-secondary"><?php echo $role; ?></div>
                            </div>
                            
                            <hr>
                            <div class="row">
                                <div class="col-sm-3"><h6 class="mb-0">Username:</h6></div>
                                <div class="col-sm-9 text-secondary"><?php echo $username; ?></div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3"><h6 class="mb-0">Email:</h6></div>
                                <div class="col-sm-9 text-secondary"><?php echo $email; ?></div>
                            </div>

                            
                            <hr>
                            <div class="row">
                                <div class="col-12 text-end"><a class="btn btn-danger "  href="logout.php">Logout</a></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>


<?php include 'footer.php';?>