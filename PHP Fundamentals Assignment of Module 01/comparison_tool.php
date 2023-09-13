<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Comparison Tool</title>

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

                        <h3>Task 6: Comparison Tool</h3>
                        <p>Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.</p>
                        
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
                        PHP Comparison Between Two Number, Which is Larger!
                    </div>
                    <div class="card-body">
                        <form method="post" action="">

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
                                    <button type="submit" class="btn btn-success">Find Larger Number</button>
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
                                            $num1 = $_POST["num1"];
                                            $num2 = $_POST["num2"];

                                            $result = $num1 > $num2 ? "Between $num1 and $num2 The Larger Number is <span class=\"h3 text-warning\">$num1</span>.": 
                                                        ($num2 > $num1 ? "Between $num1 and $num2 The Larger Number is <strong class=\"h3 text-primary\">$num2</strong>.": 
                                                        "The Numbers $num1 and $num2  are <span class=\"h2 text-danger\">Equal</span>.");

                                            echo $result;

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