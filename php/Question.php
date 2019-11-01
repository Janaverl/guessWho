<?php
    class Question{
        function __construct($question, $value, $class){
            $this->question = $question;
            $this->value = $value;
            $this->class = $class;
        }
        function makeQuestion(){
            $string = '<label class="';
            $string .= $this->value;                   
            $string .= '"><input type="radio" name="questions" class="';
            $string .= $this->class.'"';
            $string .= ' value="';
            $string .= $this->value.'"';
            $string .='>';             
            $string .= $this->question;
            $string .= "</label>";
            echo $string;
        }

    }

?>