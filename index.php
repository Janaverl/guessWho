<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wie is het?</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Ra ra ra, wie zou het zijn?</h1>
    <div class="container">
        <div class="controls">
            <form action="">
                <label for="questions">choose your question:</label>

                <?php
                class Question{
                    function __construct($question, $value, $class){
                        $this->question = $question;
                        $this->value = $value;
                        $this->class = $class;

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

                new Question("is het een man?", "male", "gender");
                new Question("is het een vrouw?", "female", "gender");
                new Question("zwart haarkleur?", "black-hair", "haircolor");
                new Question("rood haarkleur?", "red-hair", "haircolor");
                new Question("blond haarkleur?", "blond-hair", "haircolor");
                new Question("bruin haarkleur?", "brown-hair", "haircolor");
                new Question("wit haarkleur?", "white-hair", "haircolor");
                new Question("is de persoon kaal?", "bold", "bold");            
                new Question("heeft hij/zij een hoed?", "hat", "hat");
                new Question("heeft hij een snor?", "moustache", "moustache");
                new Question("heeft hij een sikje?", "goatee", "goatee");
                new Question("heeft hij/zij een bril?", "glasses", "glasses");
                ?>
            </form>
        </div>
        <div class="grid">

            <?php

            // $allPersons = [];

            class Person{
                function __construct($name, $img, $gender, $array) {		
                    $this->name = $name;
                    $this->img = $img;
                    $this->gender = $gender;
                    $this->array = $array;

                    $string = "<div class='person ";
                    $string .= $this->name." ";
                    foreach($this->array as $value){
                        $string .= $value." ";                    
                    }
                    $string .= $this->gender."'>";
                    $string .= "<img src='".$this->img."'>";
                    $string .= "</div>";
                    echo $string;

                    // array_push($GLOBALS['allPersons'], $this);
                }
            }

            $IMG_01 = new Person("IMG_01", "./img/IMG_01.jpg", "female", ["dark-brown", "glasses", "bandana"]);
            $IMG_02 = new Person("IMG_02", "./img/IMG_02.jpg", "female", ["light-brown", "glasses", "headscarf"]);
            $IMG_03 = new Person("IMG_03", "./img/IMG_03.jpg", "female", ["red", "glasses", "earrings", "hat"]);
            $IMG_04 = new Person("IMG_04", "./img/IMG_04.jpg", "female", ["dark-brown", "earrings", "scarf"]);
            $IMG_05 = new Person("IMG_05", "./img/IMG_05.jpg", "male", ["dark-brown", "hat", "scarf"]);

            // TODO VANAF HIER
            $IMG_06 = new Person("IMG_06", "./img/IMG_06.jpg", "female", ["blond-hair", "hat"]);
            $IMG_07 = new Person("IMG_07", "./img/IMG_07.jpg", "male", ["brown-hair", "hat"]);
            $IMG_08 = new Person("IMG_08", "./img/IMG_08.jpg", "male", ["bold", "white-hair", "glasses"]);
            $IMG_09 = new Person("IMG_09", "./img/IMG_09.jpg", "male", ["bold", "white-hair", "glasses"]);
            $IMG_10 = new Person("IMG_10", "./img/IMG_10.jpg", "male", ["bold", "white-hair", "glasses"]);
            $IMG_11 = new Person("IMG_11", "./img/IMG_11.jpg", "male", ["bold", "white-hair", "glasses"]);
            $IMG_12 = new Person("IMG_12", "./img/IMG_12.jpg", "male", ["bold", "white-hair", "glasses"]);
            $IMG_13 = new Person("IMG_13", "./img/IMG_13.jpg", "male", ["bold", "white-hair", "glasses"]);
            // $IMG_14 = new Person("IMG_14", "./img/IMG_14.jpg", "male", ["bold", "white-hair", "glasses"]);
            // $IMG_15 = new Person("IMG_15", "./img/IMG_15.jpg", "male", ["bold", "white-hair", "glasses"]);
            // $IMG_16 = new Person("IMG_16", "./img/IMG_16.jpg", "male", ["bold", "white-hair", "glasses"]);
            $IMG_17 = new Person("IMG_17", "./img/IMG_17.jpg", "male", ["bold", "white-hair", "glasses"]);
            $IMG_18 = new Person("IMG_18", "./img/IMG_18.jpg", "male", ["bold", "white-hair", "glasses"]);

            // $whoItIs = $allPersons[array_rand($allPersons, 1)];

            ?>

            
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/yourscript.js"></script>
</body>
</html>