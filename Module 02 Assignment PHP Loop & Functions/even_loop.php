<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Looping with Increment using a Function</title>

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

                            <h3>Task 1: PHP Looping with Increment using a Function</h3>
                            <p>
                                Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. 
                                <br>The function should take the arguments like start as 1, end as 20 and step as 2. You must call the function to print.
                                <br>Also do the same using while loop and do-while loop also.
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
                            PHP Looping with Increment using a Function
                        </div>
                        <div class="card-body">
                            <?php
                                function evenForLoop($start, $end, $step){

                                    echo "Printing all Even numbers from $start to $end using For Loop: <br>";

                                    ($start % 2 != 0) ? $n = $start + 1 : $n = $start;

                                    for($n; $n <= $end; $n += $step){

                                        if($n != 0 && $n < $end){
                                            $even = $n;
                                            echo "$even, ";
                                        } else if($n == $end) {
                                            $even = $n;
                                            echo "$even.";
                                        }
                                    }
                                    
                                }
                                 evenForLoop(1, 20, 2);
                                 echo PHP_EOL."<br>";

                                 echo PHP_EOL."<br>";
                                 echo PHP_EOL."<br>";
                                function evenWhileLoop($start, $end, $step){
                                    
                                    echo "Printing all Even numbers from $start to $end using While Loop: <br>";

                                    $start % 2 == 0 ? $n = $start : $n = $start+1;

                                    while( $n <= $end){

                                        if($n != 0 && $n < $end){
                                            echo "$n, ";
                                        } else if($n == $end) {
                                            echo "$n.";
                                        }
                                        $n += $step;
                                    }
                                }
                                evenWhileLoop(1, 20, 2);
                                echo PHP_EOL."<br>";

                                 echo PHP_EOL."<br>";
                                 echo PHP_EOL."<br>";
                                function evenDoWhileLoop($start, $end, $step){

                                    echo "Printing all Even numbers from $start to $end using Do While Loop: <br>";

                                    $start % 2 == 0 ? $n = $start : $n = $start+1; 

                                    do{
                                        if($n != 0 && $n < $end){
                                            echo $n.", ";
                                        } else if($n == $end) {
                                            echo "$n.";
                                        }
                                        $n += $step;
                                    } while ( $n <= $end);
                                }
                                evenDoWhileLoop(1, 20, 2);
                                echo PHP_EOL."<br>";
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