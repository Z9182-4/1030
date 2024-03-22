<!-- Q1 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $allCorrect = isset($_GET["emailPH"]) && isset($_GET["voicePH"]) && isset($_GET["smsPH"]) && isset($_GET["pagePH"]) && isset($_GET["calendarPH"]) && isset($_GET["quishingPH"]);

    if ($allCorrect) {
        echo "You are correct! All of these options are correct.";
    } else {
        echo "All of these options are correct. Please try again.";
    }
}
?>
<!-- Q2 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $correctAnswer = isset($_GET["persSecurity"]) && isset($_GET["safeSecrets"]);

    if ($correctAnswer) {
        echo "You are correct! The first and third options are correct.";
    } else {
        echo "The first and third options are correct. Please try again.";
    }
}
?>
<!-- Q3 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $selectedOption = $_GET["avoidPhishing"];

    if ($selectedOption == "allCorrect") {
        echo "You are correct! All of these options are correct.";
    } else {
        echo "All of these are correct. Please try again.";
    }
}
?>
<!-- Q4 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $selectedOption = $_GET["crime"];

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

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $name = test_input($_GET["name"]);
  $email = test_input($_GET["email"]);
  $comment = test_input($_GET["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>