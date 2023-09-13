<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Simple Calculator</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
</head>
  <body>
  
  <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 my-3 mx-auto">
                <div class="card">
                    <div class="card-header text-center h2">
                            <h2>Ostad Assignment : PHP Fundamentals Assignment Module 01</h2>
                    </div>
                    <div class="card-body">

                        <h3>Task 7: Simple Calculator</h3>
                        <p>Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation.</p>
                        
                        Complete these tasks by writing PHP code that fulfills the requirements of each task. Feel free to enhance the tasks or add extra features if you'd like. This assignment will help you practice your PHP skills and apply the concepts you've learned. Good luck!

                        <h4>Submission Instruction :</h4>

                        Please submit your github repository link.
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
                        PHP Simple Calculator
                    </div>
                    <div class="card-body">
                        <form method="post" action="">

                            <div class="row mb-3">
                                <label for="Oparation" class="col-4 col-form-label col-form-label-sm">Oparation :</label>
                                <div class="col-8">
                                    <select name="operation" class="form-select" id="Oparation">
                                        <option selected>Select Oparation</option>
                                        <option value="add">Addition</option>
                                        <option value="subtract">Subtraction</option>
                                        <option value="multiply">Multiplication</option>
                                        <option value="divide">Division</option>
                                        <option value="quotient">Quotient</option>
                                        <option value="remainder">Remainder</option>
                                        <option value="binary">Binary Conversion</option>
                                        <option value="octal">Octal Conversion</option>
                                        <option value="hexadecimal">Hexadecimal Conversion</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="FirstNumber" class="col-4 col-form-label col-form-label-sm">First Number :</label>
                                <div class="col-8">
                                    <input type="number" name="num1" class="form-control form-control-sm" id="FirstNumber" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="SecondNumber" class="col-4 col-form-label col-form-label-sm">Second Number :</label>
                                <div class="col-8">
                                    <input type="number" name="num2" class="form-control form-control-sm" id="SecondNumber" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="SubmitBtn" class="col-4 col-form-label col-form-label-sm"></label>
                                <div class="col-8">
                                    <button type="submit" class="btn btn-success">Calculate</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="card-footer text-body-secondary">
                        
                        <div class="row">
                            <label for="Result" class="form-label h5">Result :</label>
                            <div class="form-control-plaintex bg-white py-3 text-center">
                                <h2>

                                    <?php
                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                            $num1 = $_POST["num1"];
                                            $num2 = $_POST["num2"];
                                            $operation = $_POST["operation"];

                                            switch($operation){
                                                case "add":
                                                    $result = $num1 + $num2;
                                                    echo "$num1 + $num2 = $result";
                                                    break;
                                                
                                                case "subtract":
                                                    $result = $num1 - $num2;
                                                    echo "$num1 - $num2 = $result";
                                                    break;

                                                case "multiply":
                                                    $result = $num1 * $num2;
                                                    echo "$num1 x $num2 = $result";
                                                    break;

                                                case "divide":

                                                    if ($num2 != 0) {
                                                        $result = $num1 / $num2;
                                                        echo "$num1 / $num2 = $result";
                                                    } else {
                                                        echo "Number Cannot be divided by zero.";
                                                    }
                                                    break;

                                                case "quotient":

                                                    if ($num2 != 0) {
                                                        $remainder = $num1 % $num2;
                                                        $dividend = $num1 - $remainder;
                                                        $result = $dividend / $num2;

                                                        echo "Quotient = $result";
                                                        echo "<br>";
                                                        echo "Remainder = $remainder";
                                                    } else {
                                                        echo "Zero cann't be Divisor.";
                                                    }
                                                    break;

                                                case "remainder":

                                                    if ($num2 != 0) {
                                                        $result = $num1 % $num2;
                                                        echo "Remainder = $result";
                                                    } else {
                                                        echo "Zero cann't be Divisor.";
                                                    }
                                                    break;

                                                case "binary":
                                                    $result = decbin($num1);
                                                    echo "Binary Value of $num1 = $result";
                                                    break;

                                                case "octal":
                                                    $result = decoct($num1);
                                                    echo "Octal Value of $num1 = $result";
                                                    break;

                                                case "hexadecimal":
                                                    $result = dechex($num1);
                                                    echo "Hexadecimal Value of $num1 = $result";
                                                    break;

                                                default:
                                                    echo "Please Select an Oparation";
                                                    break;
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