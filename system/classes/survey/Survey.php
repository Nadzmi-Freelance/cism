<?php

/**
 * Class Survey - store temp data about the survey
 */
class Survey
{
    private $surveyName; // determine what survey
    private $score; // determine the survey score
    private $answers = array(); // list of answers

    // constructor
    public function __construct($surveyCode, $answers=array())
    {
        $this->answers = $answers;
        $this->surveyName = "inisiatif-" . $surveyCode . ".txt";
    }

    // getter
    public function getSurveyName() { return $this->surveyName; }
    public function getScore() { return $this->score; }
    public function getAnswers() { return $this->answers; }

    // setter
    public function setSurveyName($surveyName) { $this->surveyName = $surveyName; }
    public function setScore($score) { $this->score = $score; }
    public function setAnswers($answers) { $this->answers = $answers; }
}
?>