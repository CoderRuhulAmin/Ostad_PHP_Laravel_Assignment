<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Break on Condition</title>

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

                            <h3>Task 3: PHP Break on Condition</h3>
                            <p>
                            Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a Fibonacci number is greater than 100, break out of the loop using the break statement.
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
                            PHP Break on Condition
                        </div>
                        <div class="card-body">
                            <?php
                            function fibonacciNumbers($n){

                                echo "Printing the first ". $n+3 ." Fibonacci numbers but not greater than 100: <br>";

                                $firstNumber = 0;
                                $secondNumer = 1;

                                echo $firstNumber;
                                echo ", ".$secondNumer;

                                for($i = 0; $i <= $n; $i++){

                                    $thirdNumber = $firstNumber + $secondNumer;

                                    if($thirdNumber > 100){
                                        break;
                                    } else {
                                        echo ", ".$thirdNumber;
                                    }

                                    $firstNumber = $secondNumer;
                                    $secondNumer = $thirdNumber;
                                }
                                echo ".";
                            }
                            fibonacciNumbers(7);
                            echo "<br>";
                            echo "<br>";
                            fibonacciNumbers(17);

                                
                                
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