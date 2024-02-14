<html>
<form method="post">
    <h3>Please enter the words...</h3>
    <label>First word</label>
    <input type="text" , name="Firstword"><br><br />
    <label>Second word</label>
    <input type="text" , name="Secondword"><br><br />
    <label>Third word</label>
    <input type="text" , name="Thirdword"><br><br />
    <label>Fourth word</label>
    <input type="text" , name="Fourthword"><br><br />
    <label>Fifth word</label>
    <input type="text" , name="Fifthword"><br><br />
    <input type="submit" name="submit" />
</form>
<?php
if (isset($_POST['submit'])) {

    $one = $_POST['Firstword'];
    $two = $_POST['Secondword'];
    $three = $_POST['Thirdword'];
    $four = $_POST['Fourthword'];
    $five = $_POST['Fifthword'];
    $words = array($one, $two, $three, $four, $five);
    $capitalwords = array() ;
    $result = "";
    foreach ($words as $word) {
        if (ctype_upper($word[0])) {
            $result = $result . $word . " ";
        }
    }
    print_r("Final output is: ". $result) ;
}
?>

</html>