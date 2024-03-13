<!-- Q1 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $allCorrect = isset($_POST["emailPH"]) && isset($_POST["voicePH"]) && isset($_POST["smsPH"]) && isset($_POST["pagePH"]) && isset($_POST["calendarPH"]) && isset($_POST["quishingPH"]);

    if ($allCorrect) {
        echo "You are correct! All of these options are correct.";
    } else {
        echo "All of these options are correct. Please try again.";
    }
}
?>
<!-- Q2 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correctAnswer = isset($_POST["persSecurity"]) && isset($_POST["safeSecrets"]);

    if ($correctAnswer) {
        echo "You are correct! The first and third options are correct.";
    } else {
        echo "The first and third options are correct. Please try again.";
    }
}
?>
<!-- Q3 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedOption = $_POST["avoidPhishing"];

    if ($selectedOption == "allCorrect") {
        echo "You are correct! All of these options are correct.";
    } else {
        echo "All of these are correct. Please try again.";
    }
}
?>
<!-- Q4 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedOption = $_POST["crime"];

    if ($selectedOption == "allCorrect") {
        echo "You are correct! All of these options are correct.";
    } else {
        echo "All of these are correct. Please try again.";
    }
}
?>
<!-- reference contact -->
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