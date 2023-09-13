<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Temperature Converter</title>

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

                            <h3>Task 2: Temperature Converter</h3>
                            <p>Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit. Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.</p>
                            
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
                            PHP Temperature Converter
                        </div>
                        <div class="card-body">
                            <form method="post" action="">
                                
                                <label for="UnitName" class="form-label">Select Unit Name :</label>

                                <div class="row mb-3">
                                    
                                    <div class="col-5">
                                        <select name="convertFrom" class="form-select" id="UnitName">
                                            <option selected>Select One</option>
                                            <option value="celsius">Degree Celsius</option>
                                            <option value="fahrenheit">Fahrenheit</option>
                                            <option value="kalvin">Kalvin</option>
                                        </select>
                                    </div>

                                    <div class="col-2 text-center">To</div>

                                    <div class="col-5">
                                        <select name="convertTo" class="form-select" id="UnitName">
                                            <option selected>Select One</option>
                                            <option value="celsius">Degree Celsius</option>
                                            <option value="fahrenheit">Fahrenheit</option>
                                            <option value="kalvin">Kalvin</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    
                                    <div class="col-12">
                                        <input type="number" name="ginvenVal" class="form-control form-control-sm" id="TempNumber" required>
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <label for="SubmitBtn" class="col-4 col-form-label col-form-label-sm"></label>
                                    <div class="col-8">
                                        <button type="submit" class="btn btn-success">Convert Temperature</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="card-footer text-body-secondary">
                            
                            <div class="row">
                                <label for="Result" class="form-label h6">Result :</label>
                                <div class="form-control-plaintex bg-white py-3 text-center">
                                    <h2>
                                        <?php
                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                $convertFrom = $_POST["convertFrom"];
                                                $convertTo = $_POST["convertTo"];
                                                $ginvenVal = $_POST["ginvenVal"];

                                                if($convertFrom != $convertTo){
                                                    if($convertFrom == "celsius"){
                                                        if($convertTo == "fahrenheit"){

                                                        // (0°C × 9/5) + 32 = 32°F
                                                            $result = ($ginvenVal * 9/5) + 32;
                                                            echo "$ginvenVal"."°C = $result °F";

                                                        } else if($convertTo == "kalvin"){

                                                            // 0°C + 273.15 = 273.15K
                                                            $result = $ginvenVal + 273.15;
                                                            echo "$ginvenVal"."°C = $result K";

                                                        }
                                                    } else if($convertFrom == "fahrenheit"){
                                                        if($convertTo == "celsius"){

                                                            // (0°F − 32) × 5/9 = -17.78°C
                                                            $result = ($ginvenVal -32) * 5/9;
                                                            echo "$ginvenVal"."°F = $result °C";

                                                        } else if($convertTo == "kalvin"){

                                                            // (0°F − 32) × 5/9 + 273.15 = 255.372K
                                                            $result = ($ginvenVal - 32) * 5/9 + 273.15;
                                                            echo "$ginvenVal"."°F = $result K";

                                                        }
                                                    } else if($convertFrom == "kalvin"){
                                                        if($convertTo == "celsius"){

                                                            // 0K − 273.15 = -273.15°C
                                                            $result = $ginvenVal - 273.15;
                                                            echo "$ginvenVal K = $result °C";

                                                        } else if($convertTo == "fahrenheit"){

                                                            // (0K − 273.15) × 9/5 + 32 = -459.7°F
                                                            $result = ($ginvenVal - 273.15) * 9/5 + 32;
                                                            echo "$ginvenVal K = $result °F";

                                                        }
                                                    }
                                                } else if($convertFrom == "celsius"){
                                                    echo "$ginvenVal"."°C = $ginvenVal"."°C";
                                                
                                                } else if($convertFrom == "fahrenheit"){
                                                    echo "$ginvenVal"."°F = $ginvenVal"."°F";
                                                
                                                } else if($convertFrom == "kalvin"){
                                                    echo "$ginvenVal K = $ginvenVal K";
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