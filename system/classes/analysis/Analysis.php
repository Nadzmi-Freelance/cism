<?php
class Analysis
{
    private $surveyScore;

    // constructor
    public function __construct($surveyScore=null)
    {
        $this->surveyScore = $surveyScore;
    }

    // getter
    public function getSurveyScore() { return $this->surveyScore; }

    // setter
    public function setSurveyScore($surveyScore) { $this->surveyScore = $surveyScore; }
}
?>