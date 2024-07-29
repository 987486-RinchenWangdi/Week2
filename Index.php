<?php
function calculateTriangleArea($base, $height) {
    return ($base * $height) / 2;
}

// Example usage:
$base = 10;
$height = 5;
$area = calculateTriangleArea($base, $height);
echo "The area of the triangle is $area";
?>

<?php
function findSingleNumber($arr) {
    $result = 0;
    foreach ($arr as $num) {
        $result ^= $num; // XOR operation
    }
    return $result;
}

$input = array(5, 3, 4, 3, 4);
$singleNumber = findSingleNumber($input);
echo "The single number is $singleNumber";
?>

<?php
function checkDayType($day) {
    switch(strtolower($day)) {
        case 'monday':
        case 'tuesday':
        case 'wednesday':
        case 'thursday':
        case 'friday':
            return "It's a weekday.";
        case 'saturday':
        case 'sunday':
            return "It's a weekend.";
        default:
            return "Invalid day.";
    }
}

// Example usage:
$day = 'Tuesday';
$message = checkDayType($day);
echo $message;
?>

