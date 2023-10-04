<?php
/*
Task 4: Multidimensional Array

Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
*/

echo "<strong>Task 4: Multidimensional Array  <br></strong>".PHP_EOL;

$studentGrades = [
    [
        'Student1', 
        [75, 78, 85]
    ],
    [
        'Student2', 
        [85, 98, 95]
    ],
    [
        'Student3', 
        [45, 68, 75]
    ]
];

function averageGradeFinder($studentGrades){

foreach($studentGrades as $studentGrade){
    foreach($studentGrade as $item){
        if(is_array($item)){
            $averageGrade = array_sum($item)/count($item);
            echo " $averageGrade";
            if($averageGrade >= 0 && $averageGrade < 33){
                echo " and the Grade Letter is F and GPA 0.";
            } else if ($averageGrade > 32 && $averageGrade < 40){
                echo " and the Grade Letter is D and GPA 1.";
            } else if ($averageGrade >= 40 && $averageGrade < 50){
                echo " and the Grade Letter is C and GPA 2.";
            } else if ($averageGrade >= 50 && $averageGrade < 60){
                echo " and the Grade Letter is B and GPA 3.";
            } else if ($averageGrade >= 60 && $averageGrade < 70){
                echo " and the Grade Letter is A- and GPA 3.5.";
            } else if ($averageGrade >= 70 && $averageGrade < 80){
                echo " and the Grade Letter is A and GPA 4.";
            } else if ($averageGrade >= 80 && $averageGrade <= 100){
                echo " and the Grade Letter is A+ and GPA 5.";
            } else{
                echo ". Sorry! Average Grade is not between 0 to 100.";
            }
        } else {
            echo "<strong>{$item}'s</strong> Average Grade: ";
        }
    }
    echo "<br>".PHP_EOL;
    echo "<br>".PHP_EOL;
}
    
}
averageGradeFinder($studentGrades);

// Another Solution
$studentGrades2 = [
    [
        'Student1', 
        ["maths" => 75, "English" => 78, "Science" => 85]
    ],
    [
        'Student2', 
        ["maths" => 85, "English" => 98, "Science" => 95]
    ],
    [
        'Student3', 
        ["maths" => 45, "English" => 68, "Science" => 75]
    ]
];

function averageGradeFinder2($studentGrades2){

    foreach($studentGrades2 as $studentGrade){
        foreach($studentGrade as $key => $value){
            if(is_array($value)){
                $averageGrade = array_sum($value)/count($value);
                echo " $averageGrade";
                if($averageGrade >= 0 && $averageGrade < 33){
                    echo " and the Grade Letter is F and GPA 0.";
                } else if ($averageGrade > 32 && $averageGrade < 40){
                    echo " and the Grade Letter is D and GPA 1.";
                } else if ($averageGrade >= 40 && $averageGrade < 50){
                    echo " and the Grade Letter is C and GPA 2.";
                } else if ($averageGrade >= 50 && $averageGrade < 60){
                    echo " and the Grade Letter is B and GPA 3.";
                } else if ($averageGrade >= 60 && $averageGrade < 70){
                    echo " and the Grade Letter is A- and GPA 3.5.";
                } else if ($averageGrade >= 70 && $averageGrade < 80){
                    echo " and the Grade Letter is A and GPA 4.";
                } else if ($averageGrade >= 80 && $averageGrade <= 100){
                    echo " and the Grade Letter is A+ and GPA 5.";
                } else{
                    echo ". Sorry! Average Grade is not between 0 to 100.";
                }
            } else {
                echo "<strong>{$value}'s</strong> Average Grade: ";
            }
        }
        echo "<br>".PHP_EOL;
        echo "<br>".PHP_EOL;
    }
        
    }
    averageGradeFinder2($studentGrades2);

// Another Solution
$studentGrades3 = [
    [
        "name" => 'Student1', "maths" => 75, "English" => 78, "Science" => 85
    ],
    [
        "name" => 'Student2', "maths" => 85, "English" => 98, "Science" => 95
    ],
    [
        "name" => 'Student3', "maths" => 45, "English" => 68, "Science" => 75
    ]
];

function averageGradeFinder3($studentGrades3){
    $totalGrade = 0;

    foreach($studentGrades3 as $studentGrade){
        foreach($studentGrade as $key => $value){
            // echo $value;
            if($key != 'name'){
                $totalGrade =+ $value;
                echo $totalGrade;
                $averageGrade = $totalGrade/3;
                echo " $averageGrade";
                if($averageGrade >= 0 && $averageGrade < 33){
                    echo " and the Grade Letter is F and GPA 0.";
                } else if ($averageGrade > 32 && $averageGrade < 40){
                    echo " and the Grade Letter is D and GPA 1.";
                } else if ($averageGrade >= 40 && $averageGrade < 50){
                    echo " and the Grade Letter is C and GPA 2.";
                } else if ($averageGrade >= 50 && $averageGrade < 60){
                    echo " and the Grade Letter is B and GPA 3.";
                } else if ($averageGrade >= 60 && $averageGrade < 70){
                    echo " and the Grade Letter is A- and GPA 3.5.";
                } else if ($averageGrade >= 70 && $averageGrade < 80){
                    echo " and the Grade Letter is A and GPA 4.";
                } else if ($averageGrade >= 80 && $averageGrade <= 100){
                    echo " and the Grade Letter is A+ and GPA 5.";
                } else{
                    echo ". Sorry! Average Grade is not between 0 to 100.";
                }
            } else {
                echo "<strong>{$value}'s</strong> Average Grade: ";
            }
        }
        echo "<br>".PHP_EOL;
        echo "<br>".PHP_EOL;
    }
        
    }
    averageGradeFinder3($studentGrades3);