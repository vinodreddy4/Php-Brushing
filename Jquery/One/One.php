<html>

<head>
    <title>Caliculate the some is divisible by 3 & 7.</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <label>Please enter how many numbers you have:</label>
    <input type="number" id="numInputs" placeholder="Enter number of inputs">
    <button id="generateInputsButton">Generate Inputs</button>
    <form id="inputContainer">

    </form>
    <!-- Input elements will be appended here -->
    </div>
    <div style="color:red " id="message"></div>
    <button id="submitForm">Submit</button>
    <script>
        $(document).ready(function () {
            $('#generateInputsButton').click(function () {
                // Get the number of inputs to generate
                var numInputs = parseInt($('#numInputs').val());

                // Check if the entered value is valid
                if (isNaN(numInputs) || numInputs <= 0) {
                    $('#message').text("Please enter a valid number greater than zero");
                    return;
                } else {
                    $('#message').text("");
                }

                // Clear previous inputs
                $('#inputContainer').empty();

                // Create and append input elements to the container
                for (var i = 0; i < numInputs; i++) {
                    var inputElement = $('<input>').attr({
                        type: 'number',
                        name: 'student' + i,
                        id: 'student' + i,

                    });

                    var labelElement = $('<label>').text('Student ' + (i + 1) + ': '); // Create label
                    $('#inputContainer').append(labelElement).append(inputElement).append('<br>').append('<br>'); // Append label, input element, and a line break for spacing
                }
            });

            // Add validation function
            $('#submitForm').click(function () {
                var isValid = true;

                // Loop through each input element and validate
                $('#inputContainer input').each(function () {
                    var value = parseInt($(this).val());
                    if (isNaN(value) || value < 0 || value > 100) {
                        isValid = false;
                        return false;
                    }
                });
                if (isValid) {
                    var d = $('#inputContainer').serialize();

                    $.ajax({
                        type: "POST",
                        url: "submit.php",
                        data: $('#inputContainer').serialize(),
                        success: function (response) {
                            $('#message').text(response); // Display response from PHP script
                        }
                    });
                } else {
                    $('#message').text('Please fill in all input fields with values between 0 and 100');
                }
            });
        });
    </script>

</body>

</html>