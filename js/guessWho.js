$(document).ready(function () {
    // pick a random person
    var len = $('.person').length;
    var random = Math.floor( Math.random() * len );
    var whoItIs = $('.person').eq(random);

    // start counting the efforts
    var t = 0;

    // on event "click", check question with all the persons
    $("input[type='radio']").click(function(){

        // count efforts
        t += 1;

        // disable the buttons so they can't try again
        $("input[type=radio]").attr('disabled', true);

        // capture 

        // save the value of the checked question
        var radioValue = $("input[name='questions']:checked").val();

        // write the question and add a button
        if($( whoItIs ).hasClass( radioValue )){
            $(".controls").append('<p class="answer">'+$("input[name='questions']:checked").parent('label').text()+' > ja</p><button type="button" class="turn">draai kaarten om</button>');
        } else{
            $(".controls").append('<p class="answer">'+$("input[name='questions']:checked").parent('label').text()+' > nee</p><button type="button" class="turn">draai kaarten om</button>');
        }

        // check if the value exists as a class with the random picked person. If it's true, turn over all the cards that don't have that class. If not, turn over all the cards that has.
        $(".turn").on( "click", function() {
            // turn the cards over
            function turnCardsOver(){
                if($( whoItIs ).hasClass( radioValue )){
                    $(".person").not('.'+radioValue).replaceWith("<div class='back'><img src='./img/back.jpg'></div>");
                    
                } else{
                    $('.person.'+radioValue).replaceWith("<div class='back'><img src='./img/back.jpg'></div>");
                }
            }

            turnCardsOver();

            // end the game when only one character remains
            function checkIfWon(){
                var len = $('.person').length;
                if(len == 1 ){
                    $('.title').remove();
                    // alert("Je hebt gewonnen! In "+t+" keer!");
                    $('.controls').append('<h2>Je hebt gewonnen!</h2><p>En daar had je '+t+' beurten voor nodig.</p> <form action="./guessWho.php"><button type="submit">speel opnieuw</button><button><a href="#">bezoek mijn website</a></button></form>')
                }
            }
            checkIfWon();

            // check all the questions with all the remaining classes in the playboard. only keep the relevant questions. 
            function removeIrrelevantQuestions(){
                $("input[type=radio]").each(function(){
                    var that = this;
                    // console.log("---"+$(that).val()+"---");
                    var exists = false;
                    var c = 0;
                    $(".person").each(function(){
                        if($(this).hasClass($(that).val())){
                            // console.log($(this).html()+" yep "+$(that).val());
                            exists = true;
                            c += 1;
                        }
                    });
                    if(exists==false){
                        $("label."+$(this).val()).remove();
                    }else if(c == $('.person').length){
                        $("label."+$(this).val()).remove();
                    }

                });
            }

            removeIrrelevantQuestions();
            
            // remove the question and the button
            $('.answer').remove();
            $('.turn').remove();

            // enable the buttons for the next one
            $("input[type=radio]").attr('disabled', false);

        });  
    });    
});
