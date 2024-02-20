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
      <label>Please enter how many numbers you have:</label>
      <input type="text" id="myInput" name="number" oninput="myFunction()"> </br> </br>
      <script>
         function myFunction() {
            let n = document.getElementById("myInput").value;
            if (n != 0) {
               for (i = 1; i <= n; i++) {
                  var linebreak = document.createElement('br');

                  var newlabel = document.createElement("Label");
                  newlabel.innerHTML = "Student" + " " + i + ":";

                  var inputElement = document.createElement('INPUT');
                  inputElement.setAttribute('type', 'Number');
                  inputElement.setAttribute('id', i)
                  inputElement.setAttribute('name', "Student" + i)
                  inputElement.className = "inputclass";

                  document.body.appendChild(newlabel);
                  document.body.appendChild(inputElement);
                  document.body.appendChild(linebreak);
               }
            } else {
           
            }
            var btn = document.createElement("BUTTON");
            btn.innerHTML = "Caliculate";
            btn.id = "btn-id";
            btn.type = "submit";
            btn.name = "btn-name";
            btn.className = "btnclass";
            document.body.appendChild(btn);
         }
      </script>
   </body>

   <?php
   if (isset($_POST['submit'])) {
       $numbers = $_POST['numbers'];
      $sum = 0;
      $numbers = explode(',', $numbers);
      foreach ($numbers as $number) {

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