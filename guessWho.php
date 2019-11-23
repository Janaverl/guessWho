<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wie is het?</title>
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/guessWho.js"></script>

</head>
<body>
    <div class="wrapper">
    <h1>Ra ra ra, wie zou het zijn?</h1>
    <div class="container">
        <div class="controls">
            <form action="">
                <h2 class="title">Kies je vraag:</h2>
                <?php
                require_once './php/Question.php';

                $male = new Question("is het een man?", "male", "gender");
                $female = new Question("is het een vrouw?", "female", "gender");
                $redHair = new Question("rood haarkleur?", "red-hair", "haircolor");
                $blondHair = new Question("blond haarkleur?", "blond-hair", "haircolor");
                $darkBrownHair = new Question("donkerbruin haarkleur?", "dark-brown", "haircolor");
                $lightBrownHair = new Question("lichtbruin haarkleur?", "light-brown", "haircolor");
                $curly = new Question("krullen?", "curly", "curly");
                $hat = new Question("heeft hij/zij een hoed?", "hat", "hat");
                $scarf = new Question("heeft hij/zij een sjaal?", "scarf", "scarf");
                $moustache = new Question("heeft hij een snor?", "moustache", "moustache");
                $ringbeard = new Question("heeft hij een ringbaard?", "ringbeard", "ringbeard");
                $glasses = new Question("heeft hij/zij een bril?", "glasses", "glasses");
                $earrings = new Question("heeft zij oorbellen?", "earrings", "earrings");

                $male->makeQuestion();
                $female->makeQuestion();
                $redHair->makeQuestion();
                $blondHair->makeQuestion();
                $darkBrownHair->makeQuestion();
                $lightBrownHair->makeQuestion();
                $curly->makeQuestion();
                $hat->makeQuestion();
                $scarf->makeQuestion();
                $moustache->makeQuestion();
                $ringbeard->makeQuestion();
                $glasses->makeQuestion();
                $earrings->makeQuestion();

                ?>
            </form>
            
            <div class="answering">
            </div>
        </div>
        <div class="grid">

            <?php

            require_once './php/Person.php';

            $IMG_01 = new Person("IMG_01", "./img/IMG_01.jpg", "female", ["dark-brown", "glasses", "scarf"]);
            $IMG_02 = new Person("IMG_02", "./img/IMG_02.jpg", "female", ["light-brown", "glasses", "scarf"]);
            $IMG_03 = new Person("IMG_03", "./img/IMG_03.jpg", "female", ["red", "glasses", "earrings", "hat"]);
            $IMG_04 = new Person("IMG_04", "./img/IMG_04.jpg", "female", ["dark-brown", "earrings", "scarf"]);
            $IMG_05 = new Person("IMG_05", "./img/IMG_05.jpg", "male", ["dark-brown", "hat", "scarf"]);
            $IMG_06 = new Person("IMG_06", "./img/IMG_06.jpg", "female", ["light-brown", "glasses"]);
            $IMG_07 = new Person("IMG_07", "./img/IMG_07.jpg", "male", ["dark-brown", "hat", "scarf", "moustache"]);
            $IMG_08 = new Person("IMG_08", "./img/IMG_08.jpg", "male", ["dark-brown", "ringbeard", "moustache", "scarf"]);
            $IMG_09 = new Person("IMG_09", "./img/IMG_09.jpg", "male", ["dark-brown", "scarf", "glasses"]);
            $IMG_10 = new Person("IMG_10", "./img/IMG_10.jpg", "female", ["dark-brown", "earrings", "glasses"]);
            $IMG_11 = new Person("IMG_11", "./img/IMG_11.jpg", "female", ["blond-hair"]);
            $IMG_12 = new Person("IMG_12", "./img/IMG_12.jpg", "female", ["blond-hair", "curly", "hat"]);
            $IMG_13 = new Person("IMG_13", "./img/IMG_13.jpg", "female", ["light-brown", "curly", "glasses"]);
            $IMG_17 = new Person("IMG_17", "./img/IMG_17.jpg", "female", ["red-hair"]);
            $IMG_18 = new Person("IMG_18", "./img/IMG_18.jpg", "female", ["dark-brown", "hat", "glasses"]);

            $IMG_01->makeImg();
            $IMG_02->makeImg();
            $IMG_03->makeImg();
            $IMG_04->makeImg();
            $IMG_05->makeImg();
            $IMG_06->makeImg();
            $IMG_07->makeImg();
            $IMG_08->makeImg();
            $IMG_09->makeImg();
            $IMG_10->makeImg();
            $IMG_11->makeImg();
            $IMG_12->makeImg();
            $IMG_13->makeImg();
            $IMG_17->makeImg();
            $IMG_18->makeImg();

            ?>

            
        </div>
    </div>
    </div>

    <footer>
        <p><a href="http://www.janaverlinde.be/"  target="_blank" rel="noopener noreferrer">Bezoek mijn website</a></p>
        <p>by Jana Verlinde | 2019</p>
        <p><a href="https://github.com/Janaverl/guessWho" target="_blank" rel="noopener noreferrer">Zelf aan de slag?<br>Clone mijn code op github</a></p>
    </footer>

</body>
</html>