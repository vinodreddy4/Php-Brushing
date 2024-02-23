<html>
<form method="post">
    <div id="words">
        <h3>Please enter the words to print only the words starting with capital letters</h3>
        <label>Enter the number of words : </label>
        <input type="number" id="myInput" name="words" oninput="myFunction()"> </br> </br>
        <div id="words">
        </div>
    </div>
    <input type="submit" name="submit" />
</form>
<script>
    function myFunction() {
        var addlist = document.getElementById("words");
        let n = document.getElementById("myInput").value;
        if (n != 0) {
            for (i = 1; i <= n; i++) {
                var linebreak = document.createElement('br');

                var newlabel = document.createElement("Label");
                newlabel.innerHTML = "Word" + " " + i + ":";

                var inputElement = document.createElement('INPUT');
                inputElement.setAttribute('type', 'text');
                inputElement.setAttribute('id', i);
                inputElement.setAttribute('name', "word" + i);
                inputElement.setAttribute('placeholder', 'Enter word');
                inputElement.className = "inputclass";

                addlist.appendChild(newlabel);
                addlist.appendChild(inputElement);
                addlist.appendChild(linebreak);
            }
        } else {
            print("Please enter the word");
        }
    }
</script>
<?php
if (isset($_POST['submit'])) {

    $words = $_POST;
    array_shift($words);
    array_pop($words);
    $values = array_values($words);
    $capitalwords = array();
    $result = "";
    foreach ($words as $word) {
        if (ctype_upper($word[0])) {
            $result = $result . $word . " ";
        }
    }
    print_r("Final output is: " . $result);
}
?>

</html>