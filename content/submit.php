<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get the form id
    $formId = $_GET["formId"];

    // Get the value of activityType from the form
    // Get the value of crime from the form
    $crime = $_GET["crime"];

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
