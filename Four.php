<html>
<form method="post">

    <h3>Please enter the marks of N students:</h3>
    <label>Please enter the number of students:</label>
    <input type="number" id="myInput" name="number" oninput="myFunction()"> </br> </br>
      <div id="marks">

      </div>
      <script>
         function myFunction() {
            var addlist = document.getElementById("marks");
            let n = document.getElementById("myInput").value;
            if (n != 0) {
               for (i = 1; i <= n; i++) {
                  var linebreak = document.createElement('br');

                  var newlabel = document.createElement("Label");
                  newlabel.innerHTML = "Student" + " " + i + ":";

                  var inputElement = document.createElement('INPUT');
                  inputElement.setAttribute('type', 'Number');
                  inputElement.setAttribute('id', i);
                  inputElement.setAttribute('name', "Student" + i);
                  inputElement.setAttribute('placeholder','Enter marks');
                  inputElement.className = "inputclass";

                  addlist.appendChild(newlabel);
                  addlist.appendChild(inputElement);
                  addlist.appendChild(linebreak);
               }
            } else {
             print("Please enter the number");
            }
         }
      </script>
    <input type="submit" name="submit" value="Average">

</form>
<?php
if (isset($_POST['submit'])) {
      $numbers = $_POST;
      array_shift($numbers);
      array_pop($numbers);
      $values = array_values($numbers);
      $sum = 0;
      $count =0;
    foreach ($values as $number) {
        $sum += $number;
        $count++;
    }
    $average = $sum / $count;
    print_r("Average of  "  . $count . "students marks is :" . $average);
}
?>

</html>