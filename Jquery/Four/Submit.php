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
        } else {
            $response = "Values should be in between 0 and 100.";
            break;
        }
    }
    $average = $sum/$count;
    $response = "Average of marks is: $average.";


} else {
    $response = "Access denied.";
}
echo json_encode($response);
?>