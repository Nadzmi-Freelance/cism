<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/cism/system/includes/global-inc.php";

if(isset($_POST["daftar"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $newAcc = new Account($username, $password, $email);
    $ctrlAcc = new CtrlAccount($newAcc);

    $ctrlAcc->signUp();

    echo "<script> window.location.href='../page/index.php' </script>";
}
?>