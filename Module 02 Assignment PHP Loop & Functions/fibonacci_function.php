<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Fibonacci Series printing using a Function</title>

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

                            <h3>Task 4: PHP Fibonacci Series printing using a Function</h3>
                            <p>
                                Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take this 15 as an argument of a function and use a for loop to generate these numbers and print them by calling the function.
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
                            PHP Fibonacci Series printing using a Function
                        </div>
                        <div class="card-body">
                            <?php
                            function fibonacciNumbers($n, $firstNumber = 0, $secondNumer = 1){

                                echo "Printing the first $n(Argument) Fibonacci numbers using Function: <br>";


                                echo $firstNumber;
                                echo ", ".$secondNumer;

                                for($i = 0; $i < $n-2; $i++){

                                    $thirdNumber = $firstNumber + $secondNumer;

                                    echo ", ".$thirdNumber;

                                    $firstNumber = $secondNumer;
                                    $secondNumer = $thirdNumber;
                                }
                                echo ".";
                            }
                            fibonacciNumbers(15);

                                
                                
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