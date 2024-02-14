<html>
    <form method="post">

    <h3>Please enter the marks of students:</h3>
        <label>Student 1:</label>
        <input type="number" name="one" /><br><br/>
        <label>Student 2:</label>
        <input type="number" name="two" /><br><br/>
        <label>Student 3:</label>
        <input type="number" name="three" /><br><br/>
        <label>Student 4:</label>
        <input type="number" name="four" /><br><br/>
        <label>Student 5:</label>
        <input type="number" name="five" /><br><br/>
        <label>Student 6:</label>
        <input type="number" name="six" /><br><br/>
        <label>Student 7:</label>
        <input type="number" name="seven" /><br><br/>
        <label>Student 8:</label>
        <input type="number" name="eight" /><br><br/>
        <label>Student 9:</label>
        <input type="number" name="nine" /><br><br/>
        <label>Student 10:</label>
        <input type="number" name="ten" /><br></br>
        <input type="submit" name="submit" value="Caliculate" >

    </form>
    <?php
         if (isset($_POST['submit'])) {
            $sum = $_POST['one'] + $_POST['two'] + $_POST['three']+ $_POST['four']+ $_POST['five']+ $_POST['six']+ $_POST['seven']+ $_POST['eight']+ $_POST['nine']+ $_POST['ten'];
            $average = $sum/10;
            print_r("Average is :" . $average);
         }
    ?>
    </html>