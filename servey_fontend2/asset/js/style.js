$(document).ready(function() {
    // varibale
    var current_fs, next_fs, previous_fs; // fieldsets
    var opacity;
    var current = 1 ;
    var steps = $("fieldset").length;

    // button next page
    $(".next").click(function() {
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        // Add Class Ative Bar Process 
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        // Show the text fieldset 
        next_fs.show();

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

    // summit insert database and show staus suceess or faill
    $('.submit').click(function() {
       console.log("Statr Debug!!");
    });
});