<html>
<form method="post">

    <h3>Please enter the marks of N students:</h3>
    <label>Please enter the marks of N students seperated by comma(,):</label>
    <input type="text" name="marks" /><br><br />

    <input type="submit" name="submit" value="Caliculate">

</form>
<?php
if (isset($_POST['submit'])) {
    $marks = $_POST['marks'];
    $sum = 0;
    $count = 0;
    $numbers = explode(',', $marks);
    foreach ($numbers as $number) {

        $sum += $number;
        $count++;
    }
    $average = $sum / 10;
    print_r("Average of  "  . $count . "students marks is :" . $average);
}
?>

</html>