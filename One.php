<html>

<h1> My PHP Training.... </h1>
<br></br>
<h3>Please enter the numbers</h3>
<form method="post">
   <label>First Number:</label>
   <input type="Number" name="FirstNumber" /> </br> </br>
   <label>Second Number:</label>
   <input type="Number" name="SecondNumber" /> </br> </br>
   <input type="submit" name="submit" value="ADD">
</form>

<?php
if (isset($_POST['submit'])) {
   $number1 = $_POST['FirstNumber'];
   $number2 = $_POST['SecondNumber'];
   $sum = $number1 + $number2;
   echo "Sum is:" . $sum . ",";
   if ($sum % 3 == 0 && $sum % 7 == 0) {
      print_r("This number is divisible by 3 and 7.");
   }
}


?>

</html>