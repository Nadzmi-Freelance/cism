<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/cism/system/includes/global-inc.php";

if(isset($_POST["hantar"]))
{
    $surveyCode = $_POST["survey-code"];
    $answer = getAnswer($surveyCode);

    $newSurvey = new Survey($surveyCode, $answer);
    $ctrlSurvey = new CtrlSurvey($newSurvey);

    $ctrlSurvey->evaluate($ctrlAcc);

    echo "<script> window.location.href='../page/index.php' </script>";
}

function getAnswer($surveyCode)
{
    $answer = array();

    switch($surveyCode)
    {
        case 1:
            for($x=0 ; $x<=5 ; $x++)
                $answer[] = $_POST["q1-" . $x];
            $answer[] = $_POST["q2"];
            $answer[] = $_POST["q3"];
            break;
        case 2:
            for($x=0 ; $x<=3 ; $x++)
                $answer[] = $_POST["q1-" . $x];
            $answer[] = $_POST["q2"];
            break;
        case 3:
            $answer[] = $_POST["q1"];
            $answer[] = $_POST["q2"];
            $answer[] = $_POST["q3"];
            $answer[] = $_POST["q4"];
            $answer[] = $_POST["q5"];
            $answer[] = $_POST["q6"];
            break;
        case 4:
            $answer[] = $_POST["q1"];
            $answer[] = $_POST["q2"];
            $answer[] = $_POST["q3"];
            $answer[] = $_POST["q4"];
            break;
        case 5:
            $answer[] = $_POST["q1"];
            $answer[] = $_POST["q2"];
            $answer[] = $_POST["q3"];
            $answer[] = $_POST["q4"];
            $answer[] = $_POST["q5"];
            $answer[] = $_POST["q6"];
            break;
        case 6:
            $answer[] = $_POST["q1"];
            $answer[] = $_POST["q2"];
            $answer[] = $_POST["q3"];
            $answer[] = $_POST["q4"];
            $answer[] = $_POST["q5"];
            break;
        case 7:
            $answer[] = $_POST["q1"];
            $answer[] = $_POST["q2"];
            $answer[] = $_POST["q3"];
            $answer[] = $_POST["q4"];
            $answer[] = $_POST["q5"];
            $answer[] = $_POST["q6"];
            break;
        case 8:
            $answer[] = $_POST["q1"];
            $answer[] = $_POST["q2"];
            $answer[] = $_POST["q3"];
            $answer[] = $_POST["q4"];
            $answer[] = $_POST["q5"];
            $answer[] = $_POST["q6"];
            break;
        case 9:
            $answer[] = $_POST["q1"];
            $answer[] = $_POST["q2"];
            $answer[] = $_POST["q3"];
            $answer[] = $_POST["q4"];
            $answer[] = $_POST["q5"];
            $answer[] = $_POST["q6"];
            break;
        case 10:
            $answer[] = $_POST["q1"];
            $answer[] = $_POST["q2"];
            $answer[] = $_POST["q3"];
            $answer[] = $_POST["q4"];
            $answer[] = $_POST["q5"];
            $answer[] = $_POST["q6"];
            break;
    }

    return $answer;
}
?>