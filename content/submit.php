<?php
header('Content-Type: application/json');

// for forms
function handleForm()
{
    $results = array(
        "section1" => "",
        "section2" => "",
        "section3" => "",
        "section4" => ""
    );

    // cpoint 1
    if (isset ($_GET["emailPH"], $_GET["voicePH"], $_GET["smsPH"], $_GET["pagePH"], $_GET["calendarPH"], $_GET["quishingPH"])) {
        $emailPhishing = $_GET["emailPH"];
        $voicePhishing = $_GET["voicePH"];
        $smsPhishing = $_GET["smsPH"];
        $pageHijacking = $_GET["pagePH"];
        $calendarPhishing = $_GET["calendarPH"];
        $quishing = $_GET["quishingPH"];

        if ($emailPhishing && $voicePhishing && $smsPhishing && $pageHijacking && $calendarPhishing && $quishing) {
            $results["section1"] = "Congratulations! All options for the first section are correct.";
        } else {
            $results["section1"] = "Sorry, not all options for the first section are correct. Please try again.";
        }
    }
    // cpoint 2
    if (isset ($_GET["persSecurity"], $_GET["enhPerformance"])) {
        $persSecurity = $_GET["persSecurity"];
        $enhPerformance = $_GET["enhPerformance"];

        if ($persSecurity && $enhPerformance) {
            $results["section2"] = "Congratulations! All options for the second section are correct.";
        } else {
            $results["section2"] = "Sorry, not all options for the second section are correct. Please try again.";
        }
    } else {
        $results["section2"] = "Please select all options for the second section before submitting.";
    }

    // cpoint 3
    if (isset ($_GET["avoidPhishing"])) {
        $avoidPhishing = $_GET["avoidPhishing"];

        if ($avoidPhishing == "allCorrect") {
            $results["section3"] = "Congratulations! Your answer for the third section is correct.";
        } else {
            $results["section3"] = "Sorry, your answer for the third section is incorrect. Please try again.";
        }
    } else {
        $results["section3"] = "Please select an answer for the third section before submitting.";
    }

    // cpoint 4
    if (isset ($_GET["crime"])) {
        $crime = $_GET["crime"];

        if ($crime == "allCorrect") {
            $results["section4"] = "Congratulations! Your answer for the fourth section is correct.";
        } else {
            $results["section4"] = "Sorry, your answer for the fourth section is incorrect. Please try again.";
        }
    } else {
        $results["section4"] = "Please select an answer for the fourth section before submitting.";
    }

    return $results;
}

// references contact form
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = isset ($_GET["name"]) ? test_input($_GET["name"]) : "";
    $email = isset ($_GET["email"]) ? test_input($_GET["email"]) : "";
    $comment = isset ($_GET["comment"]) ? test_input($_GET["comment"]) : "";
}

// deals with contact form data
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// handle form
$results = handleForm();
echo json_encode($results);
?>