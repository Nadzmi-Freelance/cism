<?php
// global includes

include_once "config.php";

include_once HOME . "/system/classes/account/Account.php";
include_once HOME . "/system/classes/account/CtrlAccount.php";
include_once HOME . "/system/classes/survey/Survey.php";
include_once HOME . "/system/classes/survey/CtrlSurvey.php";
include_once HOME . "/system/classes/analysis/Analysis.php";
include_once HOME . "/system/classes/analysis/CtrlAnalysis.php";

session_start();
ob_start();

if(isset($_SESSION["user"]))
{
    $acc = unserialize($_SESSION["user"]);
    $ctrlAcc = new CtrlAccount($acc);
}
?>
