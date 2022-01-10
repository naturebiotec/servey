$(document).ready(function() {
    // varibale
    var current_fs, next_fs, previous_fs, next_fs_part; // fieldsets
    var opacity;
    var current = 1 ;
    var steps = $("fieldset").length;


     /**
     * !!BUG
     */
    // check button  chekbox before submit
    // $("#terms_and_conditions").click(function() {
    //     // if check click event handler into checkbox.
    //     if($(this).is(":checked"))
    //     {
    //         $(".next").attr("disabled", false);
    //     }else{
    //         $(".next").attr("disabled", true);
    //     }
    // }); -> 

    // button next page
    $(".next").click(function() {
        current_fs = $(this).parent();
        next_fs = $(this).parent().next(); 
        

        var ever_vitamin = document.getElementById("customRadioInline4").checked;
        // debug readio == true
        if(ever_vitamin)
        {
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            //   fieldset1
            next_fs.show(("fieldset"));
            // console.log("used");

        }else {
            next_fs_part = $(document.getElementsByClassName("part-2"));
            
            $("#progressbar payment").eq($("fieldset").index(next_fs_part)).addClass("active");
            next_fs_part.show();
        }

        // Add Class Ative Bar Process 
        // $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        // Show the text fieldset 
        // next_fs.show();

        /***
         * hide the current fieldset with style 
         * for marking fielset appear animation
         */
        current_fs.animate({ opacity:0 }, { step: function(now) {
                opacity = 1 - now;

                current_fs.css({
                    'display' : 'none',
                    'position': 'relaive'
                });
            },
            duration: 500
        });
        setProgressBar(++current);
    });
    
    // button previous page
    $(".previous").click(function() {
            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            // Remove class previous fieldset 
            $('#progressbar li').eq($('fieldset').index(current_fs)).removeClass("active");

            // show the previous fielset 
            previous_fs.show();

            /***
             *  hide the current fieldset with style
             *  for marking fielset appear animation
             */
            current_fs.animate({ opacity:0  }, { step:function(now){
                opacity = 1 - now ;

                current_fs.css({
                    'display' : 'none',
                    'position' : 'relative'
                });
                previous_fs.css({ 'opacity': opacity });        
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    // show process bar how many success 
    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps ) * curStep;
        $(".progress-bar").css("width", percent + "%")
    }
});