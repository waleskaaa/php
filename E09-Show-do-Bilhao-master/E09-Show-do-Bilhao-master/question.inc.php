<?php 

    class Question{
        var $question_text;
        var $alternatives;
        var $answer;

        function Question($question_text, $alternatives, $answer){
            $this->question_text = $question_text;
            $this->alternatives = $alternatives;
            $this->answer = $answer;
        }
    }
?>