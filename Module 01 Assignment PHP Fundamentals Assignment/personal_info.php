<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Personal Information Page</title>

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

                            <h3>Task 1: Personal Information Page</h3>
                            <p>Create a PHP file named personal_info.php that displays your personal information using variables and the echo statement. Include your name, age, country, and a brief introduction.</p>
                            
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
                            PHP Personal Information Page
                        </div>
                        <div class="card-body">
                            <!-- <form method="post" action="">

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

                            </form> -->

                            <h3>
                                <?php
                                $name = "Ruhul Amin";
                                $age = 29;
                                $country = "Bangladesh";
                                $introduction = "Assalamu Alaikum. My Name is $name. I'm $age years old. I'm a learner of PHP Programming Lenguage and PHP Framwork \"Laravel\". Now I am working as Graphics Designer and HR in a Food & Beverage Limited Company since February 2022.";
                    
                                echo "Name: $name";
                                echo "<br>";

                                echo "Age: $age";
                                echo "<br>";

                                echo "Country: $country";
                                echo "<br> <br>";

                                echo "<strong>Introduction:</strong>";
                                echo "<br>";
                                echo $introduction;

                                ?>
                            </h3>
                        </div>
                        <div class="card-footer text-body-secondary">
                            
                            <div class="row">
                                <label for="Result" class="form-label h6"></label>
                                <div class="form-control-plaintex bg-white py-3 text-center">
                                    <h3>
                                        PHP Laravel Developer @Ruhul Amin.
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






