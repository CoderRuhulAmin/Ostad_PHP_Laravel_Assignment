<?php 
    session_start();
    if(!isset($_SESSION["email"])){
        header("Location: index.php");
    }
    
    $users = json_decode( file_get_contents( 'users.json' ), true );
?>

<?php include 'header.php';?>

<main class="main container-fluid bg-light px-0">
    <section class="h-auto gradient-form overflow-auto py-5">
        <div class="container py-5 h-100">
            

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="users.php">Users</a></li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <table id="example" class="table table-striped nowrap" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">SN</th>
                <th class="text-center">User Name</th>
                <th class="text-center">Role</th>
                <th class="text-center">Email</th>
                <?php 
                    if( $users[$_SESSION['email']]['role'] == "Admin" ){
                ?>
                <th class="text-center">Action</th>
                <?php
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                $i=0;
                foreach ( $users as $key => $user ) {
                    $i++;
            ?>
                
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td><?php echo $key; ?></td>
                    <?php 
                        if( $users[$_SESSION['email']]['role'] == "Admin" ){
                    ?>
                    <td class="text-center">
                        <span><a href="update.php?email=<?php echo $key; ?>" class="btn btn-sm btn-info">Update Role</a></span>
                        <span><a href="delete.php?email=<?php echo $key; ?>" class="btn btn-sm btn-danger">Delete</a></span>
                    </td>
                    <?php
                        }
                    ?>
                </tr>
                
            <?php 
                }
            ?>

            
        </tbody>
    </table>




            <hr>
            <div class="row">
                <div class="col-12 text-end"><a class="btn btn-danger "  href="logout.php">Logout</a></div>
            </div>
        </div>
    </section>
</main>


<?php include 'footer.php';?>