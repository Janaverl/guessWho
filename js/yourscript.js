$(document).ready(function () {
    // detect form change (event)

    // search for elements with same property

    // change DOM (add or remove persons)

    var len = $('.person').length;
    console.log(len);
    var random = Math.floor( Math.random() * len );
    console.log(random);
    var whoItIs = $('.person').eq(random);
    console.log(whoItIs);

    var t = 0;

    $("input[type='radio']").click(function(){
        t += 1;
        var radioValue = $("input[name='questions']:checked").val();
        if($( whoItIs ).hasClass( radioValue )){
            $(".person").not('.'+radioValue).replaceWith("<div><p>Deze is het niet!</p></div>");
        } else{
            $('.'+radioValue).replaceWith("<div><p>Deze is het niet!</p></div>");
        }
        var len = $('.person').length;
        if(len == 1 ){
            alert("you won in "+t+" times!");
        }
    });    


});
