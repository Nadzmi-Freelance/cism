<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/cism/system/includes/global-inc.php";

if(isset($_POST["signin"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $signInAcc = new Account($username, $password);
    $ctrlAcc = new CtrlAccount($signInAcc);

    $ctrlAcc->signIn();

    echo "<script> window.location.href='../page/index.php' </script>";
}
else if(isset($_POST["signout"]))
{
    if($_SESSION["user"] != null)
    {
        $sign_user = unserialize($_SESSION["user"]);

        $ctrlAcc = new CtrlAccount($sign_user);
        $ctrlAcc->signOut();
    }

    echo "<script> window.location.href='../page/index.php' </script>";
}
?>