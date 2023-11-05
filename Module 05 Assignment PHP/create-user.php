<?php
session_start();

$users = json_decode( file_get_contents( 'users.json' ), true );

if ( isset($_SESSION["email"]) && $users[$_SESSION["email"]]["role"] == "Admin" ){
    
    $usersFile = 'users.json';

    $users = file_exists( $usersFile ) ? json_decode( file_get_contents( $usersFile ), true ) : [];

    function saveUsers( $users, $file ){
        file_put_contents( $file, json_encode( $users, JSON_PRETTY_PRINT )) ;
    }

    // Registration Form Handling
    if( isset( $_POST["create_user"] )){
        $email      = $_POST["email"];
        $username   = $_POST["username"];
        $password   = $_POST["password"];
    
        // Validation 
        if( empty( $email ) || empty( $username ) || empty( $password ) ){
            $errorMsg = "Please fill all the fields.";
        } else {
            
            if ( isset( $users[$email] )){
                
                $errorMsg = "Email already exists.";

            } else {

                $users[$email] = [
                    "username"=> $username,
                    "password"=> $password,
                    "role" => "User",
                ];
                saveUsers( $users, $usersFile );
                
                header("Location: users.php");
            }
        }
    }
} else {
    
    header("Location: index.php");

}



?>









<?php include 'header.php';?>

<div class="container">
    <div class="row">
        <div class="col-12 mx-0 px-0">
            <main class="main container-fluid bg-light px-0">

                <section class="h-auto gradient-form overflow-auto py-5">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-xl-10">
                                <div class="card rounded-3 text-black">
                                    <div class="row g-0">
                                        <div class="col-lg-12">
                                            <div class="card-body p-md-5 mx-md-4">

                                                <div class="text-center">
                                                    <h2 class="mt-1 mb-5 pb-1">Create a New User</h2>
                                                </div>

                                                <form class="form" method="POST">

                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="signupEmail">Email:</label>
                                                        <input type="email" name="email" id="signupEmail" class="form-control" />
                                                    </div>

                                                    <!-- Username input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="signupUserName">Username:</label>
                                                        <input type="text" name="username" id="signupUserName" class="form-control" />
                                                    </div>

                                                    <!-- Password input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="loginPassword">New Password:</label>
                                                        <input type="password" name="password" id="loginPassword" class="form-control" />
                                                    </div>

                                                    <!-- Error Message  -->
                                                    <p class="text-warning">
                                                        <?php 
                                                            if ( isset( $errorMsg ) ) {
                                                                echo "$errorMsg";
                                                            }
                                                        ?>
                                                    </p>

                                                    <!-- Submit button -->
                                                    <div class="text-center pt-1 mb-5 pb-1">
                                                        <input type="submit" name="create_user" class="btn btn-primary btn-block w-100 border-0 gradient-custom-2 mb-3" value="Create a New User">
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
        </div>
    </div>
</div>

<?php include 'footer.php';?>