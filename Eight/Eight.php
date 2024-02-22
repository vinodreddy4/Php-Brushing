<html>
<form method="post">
    <div id="words">
    <h3>Please enter the words...</h3>
    <label>Word 1 : </label>
    <input type="text" , name="words"><br><br />
    
    <img src=.\plus.png height="20px" width="20px" margin="21px" style="margin:10px" onclick="addInput(this)" />
   
</div>
    <input type="submit" name="submit" />
</form>
<script>
    function addInput() {
        $count =1;
        $count++;
       var adds = document.getElementById("words");
       var inputElement = document.createElement('INPUT');
                  inputElement.setAttribute('type', 'text');
                  inputElement.setAttribute('name', "Word" + $count);
                  inputElement.setAttribute('placeholder','Enter word')
    adds.appendChild(inputElement);
 }
    </script>
<?php
if (isset($_POST['submit'])) {
   
    $words = $_POST;
    print_r($_POST);
   
   
    $capitalwords = array() ;
    $result = "";
    // foreach ($arr_words as $word) {
    //     if (ctype_upper($word[0])) {
    //         $result = $result . $word . " ";
    //     }
    // }
    print_r("Final output is: ". $result) ;
}
?>

</html>
