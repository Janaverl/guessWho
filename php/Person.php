<?php
    class Person{
        function __construct($name, $img, $gender, $array) {		
            $this->name = $name;
            $this->img = $img;
            $this->gender = $gender;
            $this->array = $array;
        }
        function makeImg(){
            $string = "<div class='person ";
            $string .= $this->name." ";
            foreach($this->array as $value){
                $string .= $value." ";                    
            }
            $string .= $this->gender."'>";
            $string .= "<img src='".$this->img."'>";
            $string .= "</div>";
            echo $string;
        }
    }
?>