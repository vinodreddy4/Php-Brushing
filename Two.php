<html>
    <h3>Check if a number is positive or negetive </h3>
    <form method="post">
        <label>Please enter the number:</label>
        <input type="number" name="number" >
        <input type="submit" name="submit" value="Check">
     </form>
    <?php
     if (isset($_POST['submit'])) {
        $number1 = $_POST['number'];
        if ($number1 < 0) {
           print_r("This number is Negetive.");
        }elseif($number1 > 0){
            print_r("This number is positive.");
        }else{
            print_r("This number is 0.");
        }
    }
    ?>
    </html>