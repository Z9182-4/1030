<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form id
    $formId = $_POST["formID"];

    // Get the value of crime from the form
    $crime = $_POST["crime"];

    // Check which form was submitted and handle accordingly
    if ($formId == "cyberCrime") {
        // Check if the correct answer was selected for form1
        if ($crime == "allCorrect") {
            echo "You are correct! All of these options are correct.";
        } else {
            echo "All of these options are correct. Please try again.";
        }
    }
}
?>
<?php
// define variables and set to empty values
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>