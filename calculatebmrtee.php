<?php
function calculateBmrTee($frequently_exercise, $weight, $gender, $fat, $age, $height = 0)
{
    switch ($frequently_exercise) {
        case '1':
            $teeMultiple = 1.2;
            break;
        case '2':
            $teeMultiple = 1.375;
            break;
        case '3':
            $teeMultiple = 1.55;
            break;
        case '4':
            $teeMultiple = 1.725;
            break;
        case '5':
            $teeMultiple = 1.9;
            break;
        default:
            break;
    }
    if ($gender == 'male') {
        $addFactor = 66.5;
        $wtMultiple = 13.75;
        $htMultiple = 5.003;
        $ageMultiple = 6.755;
    } else {
        $addFactor = 655.1;
        $wtMultiple = 9.563;
        $htMultiple = 1.850;
        $ageMultiple = 4.676;
    }
    $localClientWt = $fat < 20 ? $weight : ($weight - 0.2 * $weight);
    $bmr = $addFactor + $wtMultiple * $localClientWt + $htMultiple * $height - $ageMultiple * $age;

    $data[bmr] = ($bmr * 100) / 100;
    $data[tee] = ($bmr * (float) $teeMultiple * 100) / 100;
    return $data;
}

// $data = calculateBmrTee(1, 65, 'male', 25, 26, 178);
// echo $data['bmr']; // 1496.404
// echo $data['tee']; // 1795.6848

// Info regarding params
// height in cm
// weight in kg
// frequently exercise 1 to 5, low to high
