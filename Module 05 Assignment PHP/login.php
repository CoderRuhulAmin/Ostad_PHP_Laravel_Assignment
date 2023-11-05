<?php 
session_start();
if(isset($_SESSION["email"])){
    header("Location: index.php");
}

// echo "<br><br><br>";
// print_r($_POST);
// echo "<br><br>";

$users = json_decode( file_get_contents( 'users.json' ), true );

// var_dump( $users );
// echo "<br><br><br>";
// print_r( $users );

// Login Form Handling
if( isset( $_POST["login"] )){
    $email = $_POST["email"];
    $password = $_POST["password"];

    // echo"".$email."<br>".$password."<br><br>";

    // Validation 
    if( empty( $email ) || empty( $password ) ){
        $errorMsg = "Please fill all the fields.";
    } else {
        foreach ( $users as $key => $user ) {
            // echo "<br><br>";
            // echo $key;
            // echo $user["password"]."<br>";

            if($key == $email && $user["password"] == $password ){
                $_SESSION['email'] = $email;
                header("Location: index.php");
            } else {
                $errorMsg = "Email or Password does not matched.";
            }

        }
    }

    // print_r($_SESSION);
}

?>





<?php include 'header.php';?>

<main class="main container bg-light px-0 pt-5">
    <section class="h-auto gradient-form overflow-auto py-5">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-xl-10">
                                <div class="card rounded-3 text-black">
                                    <div class="row g-0">
                                        <div class="col-lg-12">
                                            <div class="card-body p-md-5 mx-md-4">

                                                <div class="text-center">
                                                    <h2 class="mt-1 mb-5 pb-1">Log In</h2>
                                                </div>
                                          
                                                <form action="login.php" method="POST">
                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="loginEmail">Enter Your Email</label>
                                                        <input type="email" name="email" id="loginEmail" class="form-control" />
                                                    </div>

                                                    <!-- Password input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="loginPassword">Enter Your Password</label>
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
                                                        <button type="submit" name="login" class="btn btn-primary btn-block w-100 border-0 gradient-custom-2 mb-3">Log in</button>
                                                    </div>

                                                    <!-- Register buttons -->
                                                    <div class="text-center">
                                                          <p>Not a member? <a href="register.php">Register</a></p>
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
            
<?php include 'footer.php';?>