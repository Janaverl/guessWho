<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guess Who?</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Guess Who?</h1>
    <div class="grid">

        <?php

        // $allPersons = [];

        class Person{

            // function __construct($name, $img, $gender, $hair, $hat, $moustache, $glasses) {		
            //     $this->name = $name;
            //     $this->img = $img;
            //     $this->gender = $gender;
            //     $this->hair = $hair;		
            //     $this->hat = $hat;
            //     $this->moustache = $moustache;
            //     $this->glasses = $glasses;

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

        $alex = new Person("alex", "./img/GWAlex.jpg", "male", ["black-hair", "moustache"]);
        $alfred = new Person("alfred", "./img/GWAlfred.jpg", "male", ["red-hair", "moustache"]);
        $anita = new Person("anita", "./img/GWAnita.jpg", "female", ["blond-hair"]);
        $bill = new Person("bill", "./img/GWBill.jpg", "male", ["bold", "red-hair", "goatee"]);
        $claire = new Person("claire", "./img/GWClaire.jpg", "female", ["red-hair", "hat", "glasses"]);
        $eric = new Person("eric", "./img/GWEric.jpg", "male", ["blond-hair", "hat"]);
        $maria = new Person("maria", "./img/GWMaria.jpg", "female", ["brown-hair", "hat"]);
        $sam = new Person("sam", "./img/GWSam.jpg", "male", ["bold", "white-hair", "glasses"]);

        // $whoItIs = $allPersons[array_rand($allPersons, 1)];

        ?>

        
    </div>


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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/yourscript.js"></script>
</body>
</html>