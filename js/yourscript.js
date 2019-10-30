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
        // save the value of the checked question
        var radioValue = $("input[name='questions']:checked").val();
        // check if the value exists as a class with the random picked person. If it's true, turn over all the cards that don't have that class. If not, turn over all the cards that has.
        if($( whoItIs ).hasClass( radioValue )){
            $(".person").not('.'+radioValue).replaceWith("<div><img src='./img/back.jpg'></div>");
            
        } else{
            $('.person.'+radioValue).replaceWith("<div><img src='./img/back.jpg'></div>");
        }
        // check all the questions with all the remaining classes in the playboard. only keep the relevant questions. 
        $("input").each(function(){
            var that = this;
            var exists = false;
            $(".person").each(function(){
                if($(this).hasClass($(that).val())){
                    console.log("yep");
                    exists = true;
                }
            });
            if(exists==false){
                $("label."+$(this).val()).remove();
            }
        });
        var len = $('.person').length;
        // end the game when only one character remains
        if(len == 1 ){
            alert("you won in "+t+" times!");
        }
    });    
});
