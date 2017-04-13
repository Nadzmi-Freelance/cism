<?php
class CtrlSurvey
{
    private $survey;

    // constructor
    public function __construct(Survey $survey)
    {
        $this->survey = $survey;
    }

    // getter
    public function getSurvey() { return $this->survey; }

    // setter
    public function setSurvey(Survey $survey) { $this->survey = $survey; }

    // other methods
    /**
     * evaluate and save the data for each survey
     *
     * ## Pre-condition:
     *  - survey != null
     *
     * ## Post-Condition:
     *  -
     *
     * ## Normal flow:
     * 1. calculate the score of the survey
     * 2. find survey score data file
     * 3. if exist, save the score data into each of the survey data file
     * 4. if not, refer E1
     *
     * ## Exception:
     *  E1 - create new file based on the survey code
     *
     * @param CtrlAccount $ctrlAccount - ctrl account used to control the account entity
     */
    public function evaluate(CtrlAccount $ctrlAccount)
    {
        $this->calcScore();

        $user = $ctrlAccount->getAccount();
        $username = $user->getUsername();
        $score = $this->survey->getScore();
        $answers = $this->survey->getAnswers();

        $scoreFile = fopen(SURVEY_SCORE . "/" . $this->survey->getSurveyName(), "a");

        fwrite($scoreFile, $username . ",");
        foreach($answers as $answer)
            fwrite($scoreFile, $answer . ",");
        fwrite($scoreFile, $score . "\n");

        fclose($scoreFile);
    }

    /**
     * check whether the user has submitted a survey or not
     *
     * ## Pre-condition:
     *  - survey file must exist
     *
     * ## Post condition:
     *  -
     *
     * ## Normal flow:
     * 1. Search survey file
     * 2. read survey file
     * 3. search for similar username in the file
     * 4. if found, return true, else return false
     *
     * ## Exception:
     *  -
     *
     * @param CtrlAccount $ctrlAccount - get account controller
     * @return bool - true=user has submitted, false=user haven't submitted
     */
    public function checkDone(CtrlAccount $ctrlAccount)
    {
        $surveyFilePath = SURVEY_SCORE . "/" . $this->survey->getSurveyName();
        $surveyFile = fopen($surveyFilePath, "r");
        $surveyData = fread($surveyFile, filesize($surveyFilePath));
        $surveyTokenLine = explode("\n", $surveyData);
        $user = $ctrlAccount->getAccount();

        foreach($surveyTokenLine as $line)
        {
            $surveyTokenData = explode(",", $line);

            if(in_array($user->getUsername(), $surveyTokenData))
                return true;
        }

        return false;
    }

    /**
     * calculate score for each survey
     *
     * ## Pre-condition:
     *  - survey.answer != null
     *
     * ## Post-Condition:
     *  -
     *
     * ## Normal flow:
     * 1. get list of answers from survey
     * 2. calculate summation of the score
     * 3. calculate the average for the score
     * 4. set the score of the survey
     *
     * ## Exception:
     *  -
     */
    private function calcScore()
    {
        $sum = 0;
        foreach($this->survey->getAnswers() as $answer)
            $sum += $answer;

        $average = $sum / sizeof($this->survey->getAnswers());

        $this->survey->setScore($average);
    }
}
?>

