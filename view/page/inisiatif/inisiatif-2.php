<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/cism/system/includes/global-inc.php";

$sign_user = unserialize($_SESSION["user"]);
$sign_username = $sign_user->getUsername();

$surveyCode = 2;
$surveyChecker = new CtrlSurvey(new Survey($surveyCode));

if($surveyChecker->checkDone($ctrlAcc))
{
    echo "<script> alert('You have done this survey.\\nReturning to home.'); </script>";
    echo "<script> window.location.href='../index.php' </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inisiatif 2</title>

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
                        <input class="form-control" type="text" name="username" value="<?php echo $sign_username; ?>" readonly />
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
                <li><a href="#">Inisiatif</a></li>
                <ul class="sub-menu nav nav-pills nav-stacked">
                    <li><a href="inisiatif-1.php">Inisiatif 1</a></li>
                    <li><a href="">Inisiatif 2</a></li>
                    <li><a href="inisiatif-3.php">Inisiatif 3</a></li>
                    <li><a href="inisiatif-4.php">Inisiatif 4</a></li>
                    <li><a href="inisiatif-5.php">Inisiatif 5</a></li>
                    <li><a href="inisiatif-6.php">Inisiatif 6</a></li>
                    <li><a href="inisiatif-7.php">Inisiatif 7</a></li>
                    <li><a href="inisiatif-8.php">Inisiatif 8</a></li>
                    <li><a href="inisiatif-9.php">Inisiatif 9</a></li>
                    <li><a href="inisiatif-10.php">Inisiatif 10</a></li>
                </ul>
                <li><a href="markah.php">Markah</a></li>
            </ul>
        </nav>
    </div>

    <!-- content -->
    <div class="content col-md-9">
        <div class="content-base">
            <!-- description -->
            <div class="description row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <h1>INISIATIF 2:</h1>
                            <h2>
                                POLISI PENCEGAHAN KEPENTINGAN<br />
                                CONFLICT OF INTEREST DETERRENCE POLICY
                            </h2>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <p>
                                Polisi, prosedur, mekanisme yang diperkenalkan oleh korporat yang memerlukan kakitangan termasuklah Lembaga Pengarah dan pengurusan tertinggi, untuk mengisytiharkan apa-apa kepentingan peribadi dalam mana-mana keputusan perniagaan korporat yang signifikan.<br />
                                Policy, procedure, mechanism introduced by company/organization that require Board of Directors and top management, to declare any conflict of interest in any significant decision.
                                <br /><br />
                                Policy, procedure, mechanism introduced by company/organization that
                                require Board of Directors and top management, to declare any conflict of
                                interest in any significant decision.
                            </p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>

            <br />

            <!-- form -->
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <form action="../../func/survey.php" method="post">
                        <!-- forms -->
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <table>
                                    <tr>
                                        <th colspan="2"></th>
                                        <th style="text-align: center;">1</th>
                                        <th style="text-align: center;">2</th>
                                        <th style="text-align: center;">3</th>
                                        <th style="text-align: center;">4</th>
                                        <th style="text-align: center;">5</th>
                                    </tr>
                                    <tr> <!-- q1 -->
                                        <td><b>1</b></td>
                                        <td>
                                            <p>
                                                Mekanisme untuk mengurangkan risiko ketidaktelusan dalam membuat semua keputusan yang signifikan, merangkumi;<br />
                                                <br />
                                                Mechanism to reduce risk of non-transparency  in any significant decision, including;
                                            </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-0" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-0" value="2" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-0" value="3" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-0" value="4" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-0" value="5" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr> <!-- q1.1 -->
                                        <td><b>1.1</b></td>
                                        <td>
                                            <p>
                                                Tanggungjawab Lembaga Pengarah dan pengurusan tertinggi untuk membuat perakuan bertulis berkaitan konflik berkepentingan.<br />
                                                <br />
                                                Responsibility of Board of Director and top management to written consent regarding conflict of interest.
                                            </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-1" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-1" value="2" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-1" value="3" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-1" value="4" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-1" value="5" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr> <!-- q1.2 -->
                                        <td><b>1.2</b></td>
                                        <td>
                                            <p>
                                                Larangan ke atas Lembaga Pengarah dan pengurusan tertinggi daripada mengambil bahagian dalam membuat keputusan yang melibatkan konflik berkepentingan.<br />
                                                <br />
                                                Prohibition of Board of Director and top management to take part in making decision that involves self-interest.
                                            </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-2" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-2" value="2" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-2" value="3" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-2" value="4" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-2" value="5" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr> <!-- q1.3 -->
                                        <td><b>1.3</b></td>
                                        <td>
                                            <p>
                                                Kewajipan Lembaga Pengarah dan pengurusan tertinggi serta staf mengisytiharkan aset mereka dari masa ke semasa.<br />
                                                <br />
                                                Responsibility of Board of Director and top management to declare assets from time to time.
                                            </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-3" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-3" value="2" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-3" value="3" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-3" value="4" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1-3" value="5" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr> <!-- q2 -->
                                        <td><b>2</b></td>
                                        <td>
                                            <p>
                                                Pematuhan kepada polisi dipantau dan tindakan diambil sekiranya berlaku ketidakpatuhan.<br />
                                                <br />
                                                Compliance to policy is observed and action is taken if non-compliance occur.
                                            </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q2" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q2" value="2" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q2" value="3" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q2" value="4" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q2" value="5" />
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <br />

                        <!-- submit button -->
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="hidden" name="survey-code" value="<?php echo $surveyCode; ?>" />
                                    <input class="btn btn-hantar" type="submit" name="hantar" value="HANTAR" />
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
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
</body>
</html>