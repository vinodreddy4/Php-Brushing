<html>

<h3>generate 20 random numbers from 1 to 50, display those which are divisible by 3 and 2. </h3>

<?php
$serial = 0;
for ($i = 1; $i < 20; $i++) {
    $temp = rand(1, 50);
    if ($temp % 2 == 0 && $temp % 3 == 0) {
        $serial++;
        print_r("The generated number that meets the requirement, item number:" . $serial . "  is:" . " " . $temp);
        echo "</br>";
    }
}
echo "</br>";
print_r("The total number of generated values which are divisible by 2 and 3 is:" . " " . $serial );





?>

</html>