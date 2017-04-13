<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/cism/system/includes/global-inc.php";

$sign_user = unserialize($_SESSION["user"]);
$sign_username = $sign_user->getUsername();

$surveyCode = 8;
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
    <title>Inisiatif 8</title>

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
                    <li><a href="inisiatif-7.php">Inisiatif 7</a></li>
                    <li><a href="">Inisiatif 8</a></li>
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
                            <h1>INISIATIF 8:</h1>
                            <h2>
                                PELAPORAN PENCEGAHAN RASUAH<br />
                                ANTI-CORRUPTION PREVENTION REPORTING
                            </h2>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <p>
                                Merujuk kepada keperluan pelaporan inisiatif pengukuhan integriti dan pencegahan rasuah kepada semua lapisan pekerja termasuk pengurusan tertinggi dan ahli lembaga serta pihak ketiga dan orang-orang yang berkepentingan dengan syarikat.
                                <br /><br />
                                In accordance to the reporting requirement on integrity and anti-corruption strengthening initiative to all level of employees including senior management and board of directors as well third parties and other stakeholders of the company.
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
                                                Syarikat mempamerkan dasar dan komitmen mengenai pendirian berkaitan integriti dan pencegahan rasuah untuk pengetahuan umum.
                                                <br /><br />
                                                Companies make known to the public, the company’s policies and commitment, pertaining to ethics and anti-corruption.
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
                                                Laporan mengenai program integriti dan  pencegahan rasuah dimasukkan dalam Laporan Tahunan.
                                                <br /><br />
                                                Reporting on integrity and anti-corruption program are incorporated in the company’s annual report.
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
                                                Laporan mengenai program integriti dan  pencegahan rasuah dibentangkan di dalam Mesyuarat Lembaga Pengarah secara berkala.
                                                <br /><br />
                                                Reporting on integrity and anti-corruption program presented at the Board of Director’s scheduled meeting.
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
                                                Bahagian yang bertanggungjawab mengenai integriti melaksanakan pemantauan yang berterusan ke atas program anti-rasuah yang merangkumi aspek kesesuaian, ketercukupan (adequacy) dan keberkesanan program serta melaksanakan penambahbaikan di mana perlu.
                                                <br /><br />
                                                The responsible division to implement continuous monitoring on anti-corruption programs that must be relevant, adequate and effective, and implement improvements wherever necessary.
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
                                                Program yang dilaksanakan memberi peluang kepada pekerja dan stakeholders untuk menyuarakan keprihatinan mengenai sebarang pelanggaran dasar dan peraturan anti-rasuah syarikat.
                                                <br /><br />
                                                The implemented programs must provide platform for the employees and stakeholders to voice their concerns on breach of policies and procedures on anti-corruption.
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
                                                Syarikat mewar-warkan inisiatif mencegah rasuah seperti larangan menerima hadiah kepada stakeholders dan orang awam.
                                                <br /><br />
                                                Companies promote initiatives on anti-corruption such as prohibition on giving and receiving gifts to and/or from the stakeholder and the public.
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