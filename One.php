<html>

<h1> My PHP Training.... </h1>
<br></br>
<h3>Please enter the numbers and find the sum is divisible by 3 and 7. </h3>
<form method="post">
   <label>Enter the N numbers seperated by comma(,):</label>
   <input type="text" name="numbers" /> </br> </br>
   <!-- <label>Second Number:</label>
   <input type="Number" name="SecondNumber" /> </br> </br> -->
   <input type="submit" name="submit" value="ADD">
</form>

<?php
if (isset($_POST['submit'])) {
  
   $numbers = $_POST['numbers'];
   $sum = 0;
   $numbers = explode(',', $numbers);
  foreach ($numbers as $number) {
   
   $sum += $number;
  }
  
   echo "Sum is:" . $sum . ",". " ";
   if ($sum % 3 == 0 && $sum % 7 == 0) {
      print_r("This number is divisible by 3 and 7.");
   }else{
      print_r("This number is not divisible by 3 and 7.");
   }
}


?>

</html>