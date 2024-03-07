<html>
<style>
   .btnclass {
      color: green;
      border-radius: 5px;
      border-color: black;
      margin-top: 20px;
   }

   .inputclass {
      color: gray;
      git branchhhjhbdnnfbnsgit border-start-end-radius: ;
      margin: 10px;
      border-style: outset;
      border-radius: 3px;
      border-top: dotted;
   }
</style>
<h1> My PHP Training.... </h1>
<br></br>
<h3>Please enter the numbers and find the sum is divisible by 3 and 7. </h3>

<form method="post">

   <body>
      <label>Please enter how many students you have:</label>
      <input type="text" id="myInput" name="number" min="1" oninput="myFunction()"> </br> </br>
      <p id="valid" style="color:red "></p>
      <div id="marks">

      </div>
      <p id="validation" style="color:red "></p>
      <p id="validation1" style="color:red "></p>
      <input id="button" type="submit" name="submit" value="Caliculate">
      <script>
         function myFunction() {
            var button = document.getElementById("button");
            var validation = document.getElementById("valid");
            var addlist = document.getElementById("marks");
            let n = document.getElementById("myInput").value;
            if (n > 0) {
               validation.innerHTML = "";
               for (i = 1; i <= n; i++) {
                  var linebreak = document.createElement('br');

                  var newlabel = document.createElement("Label");
                  newlabel.innerHTML = "Student" + " " + i + ":";

                  var inputElement = document.createElement('INPUT');
                  inputElement.setAttribute('type', 'number');
                  inputElement.setAttribute('id', i);
                  inputElement.setAttribute('name', "Student" + i);
                  inputElement.setAttribute('placeholder', '0 or more marks');
                  inputElement.setAttribute('min', '0')
                  inputElement.className = "inputclass";
                  inputElement.onchange = function () {
                     if (this.value < 0) {
                        validation1.innerHTML = "Please enter the marks 0 / greater than 0";
                     } 
                  }
                  addlist.appendChild(newlabel);
                  addlist.appendChild(inputElement);
                  addlist.appendChild(linebreak);
               }
            } else {
               validation.innerHTML = "Please enter the positive number";
            }
         }
       
      </script>
   </body>

   <?php
   if (isset($_POST['submit'])) {

      $numbers = $_POST;
      array_shift($numbers);
      array_pop($numbers);
      $values = array_values($numbers);

      $sum = 0;
      $marksState = true;
      foreach ($values as $number) {
         $sum += $number;
      }
      echo "Sum is:" . $sum . "," . " ";
      if ($sum % 3 == 0 && $sum % 7 == 0) {
         print_r("This number is divisible by 3 and 7.");
      } else {
         print_r("This number is not divisible by 3 and 7.");
      }
   }
   ?>
</form>

</html>