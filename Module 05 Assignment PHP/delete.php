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

if ( isset($_SESSION["email"]) && $users[$_SESSION["email"]]["role"] == "Admin" && !empty($email)){
    

    foreach( $users as $key => $user ){

        // print_r( $users );

        if( $key == $email ){

            // echo $key .'<br>';
            // print_r( $users );

            unset( $users[$key] );
            
            file_put_contents( 'users.json', json_encode( $users, JSON_PRETTY_PRINT ) );

            // echo "The user is deleted successfull.";
            header("Location: users.php");

        }
     }

} else {

    header("Location: index.php");

}



?>