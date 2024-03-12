<?php
$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = $_POST;
    $values = array_values($result);
    $result = "";
    foreach ($values as $value) {
        if (ctype_upper($value[0])) {
            $result = $result . ' ' . $value;
        } else {
            $response = "Please enter the word.";
            break;
        }
    }
    $response = "Output is: $result.";


} else {
    $response = "Access denied.";
}
echo json_encode($response);
?>