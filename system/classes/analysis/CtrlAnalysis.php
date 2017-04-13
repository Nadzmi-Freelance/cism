<?php
class CtrlAnalysis
{
    private $analysis;

    // constructor
    public function __construct(Analysis $analysis)
    {
        $this->analysis = $analysis;
    }

    // getter
    public function getAnalysis() { return $this->analysis; }

    // setter
    public function setAnalysis(Analysis $analysis) { $this->analysis = $analysis; }

    // other methods
    /**
     * ## Pre-condition:
     *  - surveyScore != null
     *
     * ## Post condition:
     *  - analyze score data and create a radar graph
     *
     * ## Normal flow:
     * 1. extractScore()
     * 2. get username
     * 3. write the extracted score based on username to analysis file
     *
     * ## Exception:
     *  -
     *
     * @param CtrlAccount $ctrlAccount - load account info
     */
    // todo
    public function analyze(CtrlAccount $ctrlAccount)
    {
        $this->extractScore($ctrlAccount);

        $scores = $this->analysis->getSurveyScore();
        $acc = $ctrlAccount->getAccount();

        $readAnalysisFile = fopen(ANALYSIS_DATA, "r+");

        /*
        $readResult = fread($readAnalysisFile, filesize(ANALYSIS_DATA));
        $rows = explode("\n", $readResult);

        foreach($rows as $row)
        {
            $columns = explode(",", $row);

            if($columns[0] == $acc->getUsername())
                fwrite($readAnalysisFile, str_replace($row, "", $readResult));
        }
        */

        fwrite($readAnalysisFile, $acc->getUsername());
        foreach($scores as $score)
            fwrite($readAnalysisFile, "," . $score);
        fwrite($readAnalysisFile, "\n");

        fclose($readAnalysisFile);
    }

    /**
     * extract score and return them
     *
     * ## Pre-condition:
     *  - user answered a survey
     *
     * ## Post codition:
     *  - analyze the score
     *
     * ## Normal flow:
     * 1. get all survey file
     * 2. get score based on username
     * 3. compile all of the score into array and return them
     *
     * ## Exception:
     *  -
     *
     * @param CtrlAccount $ctrlAccount - get account detail
     */
    private function extractScore(CtrlAccount $ctrlAccount)
    {
        $scores = array();
        $acc = $ctrlAccount->getAccount();

        for($x=1 ; $x<=10 ; $x++)
        {
            $surveyFile = fopen(SURVEY_SCORE . "/inisiatif-" . $x . ".txt", "r");
            $dataList = fread($surveyFile, filesize(HOME . "/system/data/score/inisiatif-" . $x . ".txt"));
            $dataRows = explode("\n", $dataList);

            for($y=1 ; $y<sizeof($dataRows) ; $y++)
            {
                $dataColumns = explode(",", $dataRows[$y]);
                if($dataColumns[0] == $acc->getUsername())
                    $scores[] = $dataColumns[sizeof($dataColumns) - 1];
            }

            fclose($surveyFile);
        }

        $this->analysis->setSurveyScore($scores);
    }
}