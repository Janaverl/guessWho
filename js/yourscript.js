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
        var radioClass = $("input[name='questions']:checked").attr('class');
        if($( whoItIs ).hasClass( radioValue )){
            $(".person").not('.'+radioValue).replaceWith("<div><p>Deze is het niet!</p></div>");
        } else{
            $('.person.'+radioValue).replaceWith("<div><p>Deze is het niet!</p></div>");
        }
        
        // $("label."+radioClass).fadeOut();
        $("input").each(function(){
            var that = this;
            // console.log($(this).val());
            var exists = false;
            // console.log(exists);
            $(".person").each(function(){
                if($(this).hasClass($(that).val())){
                    console.log("yep");
                    exists = true;
                }
            });
            if(exists==false){
                $("label."+$(this).val()).remove();
            }

            //     var $deze = $(this);
            //     if($($deze).hasClass("."+that.val()){
            //         exists = true;
            //     });
            // });
            // if(exists = false){
            //     $(this).fadeOut();
            // };

        // if($( this ).hasClass( radioClass )){
        //     var $this = $(this);
        //     console.log($this);
        //     }
        });
        var len = $('.person').length;
        if(len == 1 ){
            alert("you won in "+t+" times!");
        }
    });    


});
