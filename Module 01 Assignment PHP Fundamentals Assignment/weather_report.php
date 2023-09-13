<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Weather Report</title>

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

                            <h3>Task 5: Weather Report</h3>
                            <p>Create a PHP script named Weather_report.php that provides Weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."</p>
                            
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
                            PHP Weather Report
                        </div>
                        <div class="card-body">
                            <form method="post" action="">

                                <div class="row mb-3">
                                    <label for="TempValue" class="col-4 col-form-label col-form-label-sm">Temperature :</label>
                                    <div class="col-8">
                                        <input type="number" name="tempVal" class="form-control form-control-sm" id="TempValue" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="SubmitBtn" class="col-4 col-form-label col-form-label-sm"></label>
                                    <div class="col-8">
                                        <button type="submit" class="btn btn-success">Weather Report</button>
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
                                                $tempVal = $_POST["tempVal"];
                                                
                                                if($tempVal <= -18){

                                                    echo "It's Cold Frosty Weather!";
                                                    echo "<br>";
                                                    echo "The Temparature Value = $tempVal"."°C";

                                                } else if($tempVal > -18 && $tempVal <= 0){

                                                    echo "It's Freezing Weather!";
                                                    echo "<br>";
                                                    echo "The Temparature Value = $tempVal"."°C";

                                                } else if($tempVal > 0 && $tempVal <= 18){

                                                    echo "It's Cold Weather!";
                                                    echo "<br>";
                                                    echo "The Temparature Value = $tempVal"."°C";

                                                } else if($tempVal > 18 && $tempVal <= 20){

                                                    echo "It's Room Temperature Weather!";
                                                    echo "<br>";
                                                    echo "The Temparature Value = $tempVal"."°C";

                                                } else if($tempVal > 20 && $tempVal <= 30){

                                                    echo "It's Nice Warm Weather!";
                                                    echo "<br>";
                                                    echo "The Temparature Value = $tempVal"."°C";

                                                } else if($tempVal > 30 && $tempVal <= 40){

                                                    echo "It's Warm Weather!";
                                                    echo "<br>";
                                                    echo "The Temparature Value = $tempVal"."°C";

                                                } else if($tempVal > 40 && $tempVal <= 99){

                                                    echo "It's Hot Weather!";
                                                    echo "<br>";
                                                    echo "The Temparature Value = $tempVal"."°C";

                                                } else if($tempVal > 99 && $tempVal <= 150){

                                                    echo "It's Boiling Weather!";
                                                    echo "<br>";
                                                    echo "The Temparature Value = $tempVal"."°C";

                                                } else if($tempVal > 150){

                                                    echo "It's Oven Weather!";
                                                    echo "<br>";
                                                    echo "The Temparature Value = $tempVal"."°C";

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