<?php
// for forms
function handleForm()
{
    // cpoint 1
    if (isset ($_GET["emailPH"], $_GET["voicePH"], $_GET["smsPH"], $_GET["pagePH"], $_GET["calendarPH"], $_GET["quishingPH"])) {
        $emailPhishing = $_GET["emailPH"];
        $voicePhishing = $_GET["voicePH"];
        $smsPhishing = $_GET["smsPH"];
        $pageHijacking = $_GET["pagePH"];
        $calendarPhishing = $_GET["calendarPH"];
        $quishing = $_GET["quishingPH"];

        if ($emailPhishing && $voicePhishing && $smsPhishing && $pageHijacking && $calendarPhishing && $quishing) {
            echo "Congratulations! All options for the first section are correct.";
        } else {
            echo "Sorry, not all options for the first section are correct. Please try again.";
        }
    } else {
        echo "Please select all options for the first section before submitting.";
    }

    // cpoint 2
    if (isset ($_GET["persSecurity"], $_GET["enhPerformance"])) {
        $persSecurity = $_GET["persSecurity"];
        $enhPerformance = $_GET["enhPerformance"];

        if ($persSecurity && $enhPerformance) {
            echo "<br>Congratulations! All options for the second section are correct.";
        } else {
            echo "<br>Sorry, not all options for the second section are correct. Please try again.";
        }
    } else {
        echo "<br>Please select all options for the second section before submitting.";
    }

    // cpoint 3
    if (isset ($_GET["avoidPhishing"])) {
        $avoidPhishing = $_GET["avoidPhishing"];

        if ($avoidPhishing == "allCorrect") {
            echo "<br>Congratulations! Your answer for the third section is correct.";
        } else {
            echo "<br>Sorry, your answer for the third section is incorrect. Please try again.";
        }
    } else {
        echo "<br>Please select an answer for the third section before submitting.";
    }

    // cpoint 4
    if (isset ($_GET["crime"])) {
        $crime = $_GET["crime"];

        if ($crime == "allCorrect") {
            echo "<br>Congratulations! Your answer for the fourth section is correct.";
        } else {
            echo "<br>Sorry, your answer for the fourth section is incorrect. Please try again.";
        }
    } else {
        echo "<br>Please select an answer for the fourth section before submitting.";
    }
}

// references contact form
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = isset ($_GET["name"]) ? test_input($_GET["name"]) : "";
    $email = isset ($_GET["email"]) ? test_input($_GET["email"]) : "";
    $comment = isset ($_GET["comment"]) ? test_input($_GET["comment"]) : "";
}

// deals with contact form data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// handle form
handleForm();
?>