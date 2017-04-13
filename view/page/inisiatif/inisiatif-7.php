<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/cism/system/includes/global-inc.php";

$sign_user = unserialize($_SESSION["user"]);
$sign_username = $sign_user->getUsername();

$surveyCode = 7;
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
    <title>Inisiatif 7</title>

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
                    <li><a href="inisiatif-2.php">Inisiatif 2</a></li>
                    <li><a href="inisiatif-3.php">Inisiatif 3</a></li>
                    <li><a href="inisiatif-4.php">Inisiatif 4</a></li>
                    <li><a href="inisiatif-5.php">Inisiatif 5</a></li>
                    <li><a href="inisiatif-6.php">Inisiatif 6</a></li>
                    <li><a href="">Inisiatif 7</a></li>
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
                            <h1>INISIATIF 7:</h1>
                            <h2>
                                PROGRAM PEMATUHAN<br />
                                COMPLIANCE PROGRAMME
                            </h2>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <p>
                                Merujuk kepada bagaimana syarikat telah mengambil langkah-langkah memastikan pematuhan ke atas undang-undang, peraturan dan dasar syarikat berkaitan pengukuhan integriti dan pencegahan rasuah diamalkan oleh lembaga pengarah, pengurusan atasan dan para pekerja pada setiap masa.
                                <br /><br />
                                Refers to procedures/steps taken by company in ensuring compliance to laws, rules and company’s policies in regards to strengthening integrity and anti-corruption is practiced by the BOD, top management and every employees at all times.
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
                                                Syarikat melaksanakan program pematuhan secara berterusan.
                                                <br /><br />
                                                Company conducts its compliance programme regularly and consistently.
                                            </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1" value="2" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1" value="3" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1" value="4" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q1" value="5" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr> <!-- q2 -->
                                        <td><b>2</b></td>
                                        <td>
                                            <p>
                                                Syarikat mengeluarkan laporan ketidakpatuhan (non-compliance report).
                                                <br /><br />
                                                Company produces non-compliance report.
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
                                    <tr> <!-- q3 -->
                                        <td><b>3</b></td>
                                        <td>
                                            <p>
                                                Syarikat mengambil langkah-langkah penambahbaikan dan pemulihan ke atas laporan ketidakpatuhan.
                                                <br /><br />
                                                Company takes corrective actions to non-compliance report and measures to improvise.
                                            </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q3" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q3" value="2" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q3" value="3" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q3" value="4" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q3" value="5" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr> <!-- q4 -->
                                        <td><b>4</b></td>
                                        <td>
                                            <p>
                                                Syarikat memantau pelaksanaan ke atas penambahbaikan dan pemulihan yang diperakukan.
                                                <br /><br />
                                                Company oversees the implementation of the corrective actions and measures to improvise.
                                            </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q4" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q4" value="2" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q4" value="3" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q4" value="4" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q4" value="5" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr> <!-- q5 -->
                                        <td><b>5</b></td>
                                        <td>
                                            <p>
                                                Laporan program pematuhan dibentang kepada lembaga pengarah secara berterusan.
                                                <br /><br />
                                                Report on the Compliance Programme is presented to the BOD periodically.
                                            </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q5" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q5" value="2" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q5" value="3" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q5" value="4" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q5" value="5" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr> <!-- q6 -->
                                        <td><b>6</b></td>
                                        <td>
                                            <p>
                                                Syarikat telah menyenaraikan polisi-polisi, peraturan dan undang-undang negara dan luar Negara dalam urusan perniagaannya.
                                                <br /><br />
                                                Company has listed out its policies, rules, laws of the country and the laws of the countries it has business association with.
                                            </p>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q6" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q6" value="2" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q6" value="3" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q6" value="4" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="radio" type="radio" name="q6" value="5" />
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