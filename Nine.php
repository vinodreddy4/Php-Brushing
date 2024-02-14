<html>
<h3>Program to find the list of anagram words from the given list of words. </h3>
<?php
$words = array("cat", "mat", "fat", "gat", "kat", "hat", "rat","tac");
$name = "cat";
$anagramlist = array();
foreach ($words as $word) {
    $count = 0;
    for ($i = 0; $i < strlen($word); $i++) {
       
        if (strpos($name, $word[$i]) !== false) {
            $count++;
            if ($count == strlen($word)) {
                print_r($word);
                echo"<br>";
            }
        } else {
            break;
        }
    }
}
?>

</html>