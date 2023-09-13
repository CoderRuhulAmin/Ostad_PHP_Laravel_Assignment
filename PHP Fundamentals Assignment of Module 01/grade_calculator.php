<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Grade Calculator</title>

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

                            <h3>Task 3: Grade Calculator</h3>
                            <p>Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).</p>
                            
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
                            PHP Grade Calculator
                        </div>
                        <div class="card-body">
                            <form method="post" action="">

                                <div class="row mb-3">
                                    <label for="FirstScore" class="col-4 col-form-label col-form-label-sm">First Score :</label>
                                    <div class="col-8">
                                        <input type="number" name="score1" class="form-control form-control-sm" id="FirstScore" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="SecondScore" class="col-4 col-form-label col-form-label-sm">Second Score :</label>
                                    <div class="col-8">
                                        <input type="number" name="score2" class="form-control form-control-sm" id="SecondScore" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="ThirdScore" class="col-4 col-form-label col-form-label-sm">Third Score :</label>
                                    <div class="col-8">
                                        <input type="number" name="score3" class="form-control form-control-sm" id="ThirdScore" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="SubmitBtn" class="col-4 col-form-label col-form-label-sm"></label>
                                    <div class="col-8">
                                        <button type="submit" class="btn btn-success">Grade Calculate</button>
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
                                                $score1 = $_POST["score1"];
                                                $score2 = $_POST["score2"];
                                                $score3 = $_POST["score3"];

                                                if($score1<=100 && $score2<=100 && $score3<=100 && $score1>0 && $score2>0 && $score3>0){

                                                    $average = ($score1 + $score2 + $score3) / 3;


                                                    if($average >= 80 && $average <= 100){

                                                        echo "Average Score is $average.<br> Obtained Grade A";

                                                    } else if($average >= 70 && $average < 80){

                                                        echo "Average Score is $average.<br> Obtained Grade B";

                                                    } else if($average >= 60 && $average < 70){

                                                        echo "Average Score is $average.<br> Obtained Grade C";

                                                    } else if($average >= 50 && $average < 60){

                                                        echo "Average Score is $average.<br> Obtained Grade D";

                                                    } else if($average >= 0 && $average < 50){

                                                        echo "Average Score is $average.<br> Obtained Grade F";

                                                    } 
                                                    
                                                }else{
                                                    echo "Please Give each Score Value between 0 to 100";
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