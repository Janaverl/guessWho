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

            function __construct($name, $img, $gender, $hair, $hat, $moustache, $glasses) {		
                $this->name = $name;
                $this->img = $img;
                $this->gender = $gender;
                $this->hair = $hair;		
                $this->hat = $hat;
                $this->moustache = $moustache;
                $this->glasses = $glasses;

                $string = "<div class='person ";
                $string .= $this->name." ";
                $string .= $this->gender." ";
                $string .= $this->hair." ";
                $string .= $this->moustache." ";
                $string .= $this->glasses."'>";
                $string .= "<img src='".$this->img."'>";
                $string .= "</div>";
                echo $string;

                // array_push($GLOBALS['allPersons'], $this);
            }
        }

        $alex = new Person("alex", "./img/GWAlex.jpg", "male", "black-hair", "no-hat", "moustache", "no-glasses");
        $alfred = new Person("alfred", "./img/GWAlfred.jpg", "male", "red-hair", "no-hat", "moustache", "no-glasses");
        $anita = new Person("anita", "./img/GWAnita.jpg", "female", "blond-hair", "no-hat", "no-moustache", "no-glasses");
        $bill = new Person("bill", "./img/GWBill.jpg", "male", "no-hair", "no-hat", "goatee", "no-glasses");
        $claire = new Person("claire", "./img/GWClaire.jpg", "female", "red-hair", "hat", "no-moustache", "glasses");
        $eric = new Person("eric", "./img/GWEric.jpg", "male", "blond-hair", "hat", "no-moustache", "no-glasses");
        $maria = new Person("maria", "./img/GWMaria.jpg", "female", "brown-hair", "hat", "no-moustache", "no-glasses");
        $sam = new Person("sam", "./img/GWSam.jpg", "male", "white-hair", "no-hat", "no-moustache", "glasses");

        // $whoItIs = $allPersons[array_rand($allPersons, 1)];

        ?>

        
    </div>


    <div class="controls">
        <form action="">
            <label for="questions">choose your question:</label>

            <?php
            class Question{
                function __construct($question, $value){
                    $this->question = $question;
                    $this->value = $value;

                    $string = '<input type="radio" name="questions" value="';
                    $string .= $this->value.'">';
                    $string .= $this->question;
                    $string .= "<br>";
                    echo $string;
                }
            }

            new Question("is het een man?", "male");
            new Question("is het een vrouw?", "female");
            new Question("zwart haarkleur?", "black-hair");
            new Question("rood haarkleur?", "red-hair");
            new Question("blond haarkleur?", "blond-hair");
            new Question("bruin haarkleur?", "brown-hair");
            new Question("wit haarkleur?", "white-hair");
            new Question("is de persoon kaal?", "no-hair");            
            new Question("heeft hij/zij een hoed?", "hat");
            new Question("heeft hij een snor?", "moustache");
            new Question("heeft hij een sikje?", "Goatee");
            new Question("heeft hij/zij een bril?", "glasses");
            




            ?>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/yourscript.js"></script>
</body>
</html>