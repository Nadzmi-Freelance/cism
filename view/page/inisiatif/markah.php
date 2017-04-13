<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/cism/system/includes/global-inc.php";

$sign_username = $acc->getUsername();
$ctrlAnalysis = new CtrlAnalysis(new Analysis());

$ctrlAnalysis->analyze($ctrlAcc);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Utama</title>

    <!-- CSS -->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../../source/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../source/css/bootstrap-theme.min.css" />
    <!-- CUSTOM -->
    <link rel="stylesheet" href="../../source/css/nav.css" />
    <link rel="stylesheet" href="../../source/css/content.css" />
</head>
<body class="container-fluid">
<div class="row">
    <!-- navigation menu -->
    <div class="col-md-3 nav-menu">
        <div class="row"> <!-- login form -->
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form action="../../func/sign-in.php" method="post">
                    <div class="form-group">
                        <input id="user-username" class="form-control" type="text" name="username" value="<?php echo $sign_username; ?>" readonly />
                    </div>
                    <div class="form-group">
                        <input class="form-control btn btn-warning" type="submit" name="signout" value="Sign Out" />
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
        <br /><br />
        <nav>
            <ul class="main-menu nav nav-pills nav-stacked">
                <li><a href="../index.php">Utama</a></li>
                <li><a href="#" id="inisiatif">Inisiatif</a></li>
                <ul class="sub-menu nav nav-pills nav-stacked">
                    <li><a href="inisiatif-1.php">Inisiatif 1</a></li>
                    <li><a href="inisiatif-2.php">Inisiatif 2</a></li>
                    <li><a href="inisiatif-3.php">Inisiatif 3</a></li>
                    <li><a href="inisiatif-4.php">Inisiatif 4</a></li>
                    <li><a href="inisiatif-5.php">Inisiatif 5</a></li>
                    <li><a href="inisiatif-6.php">Inisiatif 6</a></li>
                    <li><a href="inisiatif-7.php">Inisiatif 7</a></li>
                    <li><a href="inisiatif-8.php">Inisiatif 8</a></li>
                    <li><a href="inisiatif-9.php">Inisiatif 9</a></li>
                    <li><a href="inisiatif-10.php">Inisiatif 10</a></li>
                </ul>
                <li><a href="">Markah</a></li>
            </ul>
        </nav>
    </div>

    <!-- content -->
    <div class="content col-md-9">
        <div class="content-base">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <canvas id="radar-chart" width="400" height="400"></canvas>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>

<!-- JS -->
<!-- BOOTSTRAP -->
<!-- Latest compiled and minified JavaScript -->
<script src="../../source/js/bootstrap.min.js"></script>
<script src="../../source/js/npm.js"></script>
<script src="../../source/js/jquery-3.1.1.min.js"></script>
<!-- CUSTOM -->
<script src="../../source/js/menu.js"></script>
<script src="../../source/js/Chart.bundle.min.js"></script>
<script src="../../source/js/markah.js"></script>
</body>
</html>