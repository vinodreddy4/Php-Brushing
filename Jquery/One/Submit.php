<?php
$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = $_POST;
    $values = array_values($result);
    $count = count($values);
    $sum = 0;
    $iterations = 0;
    foreach ($values as $value) {
        if ($value != "" || $value >= 0 || $value <= 100) {
            $sum += $value;
            $iterations++;
            if ($iterations = $count) {
                if ($sum % 3 == 0 && $sum % 7 == 0) {
                    $response = "Sum is: $sum. This number is divisible by 3 and 7.";
                } else {
                    $response = "Sum is: $sum. This number is not divisible by 3 and 7.";
                }
            }
        } else {
            $response = "Values should be in between 0 and 100.";
            break;
        }
    }
} else {
    $response = "Access denied.";
}
echo json_encode($response);
?>