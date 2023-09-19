<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Loop Skip Printing Multiples of 5</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
</head>
    <body>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 my-3 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>Module 02 Assignment: Mastering PHP loop & Function</h2>
                        </div>
                        <div class="card-body">

                            <h3>Task 2: PHP Loop Skip Printing Multiples of 5</h3>
                            <p>
                                Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the loop encounters a multiple of 5, it should skip that number using the continue statement and continue to the next iteration.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 my-3 mx-auto">
                    <div class="card">
                        <div class="card-header text-center h2">
                            PHP Loop Skip Printing Multiples of 5
                        </div>
                        <div class="card-body">
                            <?php
                                $start = 1;
                                $end = 54;
                                $step = 1;
                                echo "Printing all numbers from $start to $end except multiples of 5: <br>";
                                
                                for($n = $start; $n<=$end; $n += $step){
                                    if($n % 5 == 0){
                                        continue;
                                    } else if($n == $end || $n == $end - 1) {

                                        if($n == $end -1 && $end % 5 != 0){

                                            echo $n.", ";

                                        } else {
                                            echo $n.".";
                                        }

                                    } else {
                                        echo $n.", ";
                                    }
                                }
                            ?>
                        </div>
                        <div class="card-footer text-body-secondary">
                            
                            <div class="row">
                                <div class="form-control-plaintex bg-white py-3 text-center">
                                    <h3>
                                        Ruhul Amin @Ostad Web Development with PHP and Laravel Batch 02
                                    </h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap Bundle JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>