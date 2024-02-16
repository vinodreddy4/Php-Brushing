<html>
<form method="post">
    <h3>Please enter the N words seperated by comma(,)...</h3>
    <label>Words</label>
    <input type="textarea" , name="words"><br><br />
    
    <input type="submit" name="submit" />
</form>
<?php
if (isset($_POST['submit'])) {
   
    $words = $_POST['words'];
  
    $arr_words = explode(',', $words);
   
    $capitalwords = array() ;
    $result = "";
    foreach ($arr_words as $word) {
        if (ctype_upper($word[0])) {
            $result = $result . $word . " ";
        }
    }
    print_r("Final output is: ". $result) ;
}
?>

</html>