<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Even or Odd Checker</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
</head>
    <body>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 my-3 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>Ostad Assignment : PHP Fundamentals Assignment Module 01</h2>
                        </div>
                        <div class="card-body">

                            <h3>Task 4: Even or Odd Checker</h3>
                            <p>Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd.</p>
                            
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
                            PHP Even or Odd Checker
                        </div>
                        <div class="card-body">
                            <form method="post" action="">

                                <div class="row mb-3">
                                    <label for="FirstNumber" class="col-12 col-form-label col-form-label-sm">Give a Number :</label>
                                    <div class="col-12">
                                        <input type="number" name="num" class="form-control form-control-sm" id="FirstNumber" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="SubmitBtn" class="col-12 col-form-label col-form-label-sm"></label>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Check Even or Odd</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="card-footer text-body-secondary">
                            
                            <div class="row">
                                <label for="Result" class="form-label h6">Result :</label>
                                <div class="form-control-plaintex bg-white py-3 text-center">
                                    <h3>
                                        <?php
                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                $num = $_POST["num"];

                                                if($num > 0){

                                                    $remainder = $num % 2;

                                                    echo "Remainder = $remainder";
                                                    echo "<br>";

                                                    if($remainder == 0){
                                                        
                                                        echo "The Given Number $num is Even Positive Integer.";

                                                    } else {
                                                        
                                                        echo "The Given Number $num is Odd Positive Integer.";

                                                    }

                                                } else if($num < 0){

                                                    $remainder = $num % 2;

                                                    echo "Remainder = $remainder";
                                                    echo "<br>";

                                                    if($remainder == 0){
                                                        
                                                        echo "The Given Number $num is Even Negative Integer.";

                                                    } else {
                                                        
                                                        echo "The Given Number $num is Odd Negative Integer.";

                                                    }

                                                } else if ($num == 0){
                                                    echo "The Given Number is Zero.";
                                                }

                                            }

                                        ?>
                                    </h2>
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











