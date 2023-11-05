<?php
session_start();

echo "<br><br><br>";
echo "<br><br><br>";

$users = json_decode( file_get_contents( 'users.json' ), true );

// print_r( $users['zunaid@test.com']['role'] );

if( isset( $_GET['email'] )) {
    $email = $_GET['email'];
}

// echo '<br>';
// echo $email . '<br>';
// echo $users[$email]['role'] . "<br>";

if ( isset($_SESSION["email"]) && $users[$_SESSION["email"]]["role"] == "Admin"  && !empty( $email )){

    if ( isset( $_POST['update_role'] ) ) {
        $user_email = $email;
        $new_role   = $_POST['role'];

        if ( isset( $users[$user_email] ) ) {
            $users[$user_email]['role'] = $new_role;
            file_put_contents( 'users.json', json_encode( $users, JSON_PRETTY_PRINT ) );
            header("Location: users.php");
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
                                                    <h2 class="mt-1 mb-5 pb-1">Update User Role</h2>
                                                </div>

                                                <form class="form" method="POST">

                                                    <!-- Username input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="signupUserName">Username: <?php echo $users[$email]['username']; ?> </label>
                                                    </div>

                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="signupEmail">Email: <?php echo $email; ?> </label>
                                                    </div>

                                                    <!-- User Role Input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="userRole">User Role:</label>
                                                        <!-- <input type="text" name="role" id="userRole" class="form-control" /> -->
                                                        <select name="role" id="userRole" class="form-select">
                                                            <option selected ><?php echo $users[$email]['role']; ?> </option>
                                                            <option value="Admin">Admin</option>
                                                            <option value="User">User</option>
                                                            <option value="Viewer">Viewer</option>
                                                            <option value="Visitor">Visitor</option>
                                                        </select>
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
                                                        <button type="submit" name="update_role" class="btn btn-primary btn-block w-100 border-0 gradient-custom-2 mb-3">Update Role</button>
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