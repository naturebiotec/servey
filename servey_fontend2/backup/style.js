// checkebox not checked
$(function () {
    $('.unbox').click(function(e) {
        $('.unbox').not(this).prop('checked', false);
    });
});

$(document).ready(function() {
    // varibale
    var current_fs, next_fs, previous_fs, next_fs_part; // fieldsets
    var opacity;
    var current = 1 ;
    var steps = $("fieldset").length;

    $("input[type='radio']").change(function(){
        var other = document.getElementById("other").checked;

        if(other)
          $(this).closest("div").find("input[id=status_inquiry]").css('display', 'inline-block');
        else
          $(this).closest("div").find("input[id=status_inquiry]").css('display', 'none'); 
      });
    //   hidden textbox -> infomation vitamin
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other")
        {
            $(this).closest("div").find("input[id=information_vitamin]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=information_vitamin]").css('display','none');
        }
    });
    // advert -> hide advert
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other")
        {
            $(this).closest("div").find("input[id=advert]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=advert]").css('display','none');
        }
    });
    // vitamin -> hide vitamin
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other")
        {
            $(this).closest("div").find("input[id=vitamin]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=vitamin]").css('display','none');
        }
    });
    // main_case -> hide main_case
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other")
        {
            $(this).closest("div").find("input[id=main_case]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=main_case]").css('display','none');
        }
    });
    // inredient -> hiden inredient
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other")
        {
            $(this).closest("div").find("input[id=inredient]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=inredient]").css('display','none');
        }
    });
    // type_vitamin -> hide type_vitamin
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other")
        {
            $(this).closest("div").find("input[id=type_vitamin]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=type_vitamin]").css('display','none');
        }
    });
    // influence ->hide influence
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other")
        {
            $(this).closest("div").find("input[id=influence]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=influence]").css('display','none');
        }
    });
    // promtion
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other")
        {
            $(this).closest("div").find("input[id=promtion]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=promtion]").css('display','none');
        }
    });
    // soical
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other")
        {
            $(this).closest("div").find("input[id=soical]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=soical]").css('display','none');
        }
    });
    // feature
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other")
        {
            $(this).closest("div").find("input[id=feature]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=feature]").css('display','none');
        }
    });
    // case_eat
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other")
        {
            $(this).closest("div").find("input[id=case_eat]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=case_eat]").css('display','none');
        }
    });
    //know_vitamin
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other")
        {
            $(this).closest("div").find("input[id=know_vitamin]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=know_vitamin]").css('display','none');
        }
    });
    // decide
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other")
        {
            $(this).closest("div").find("input[id=decide]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=decide]").css('display','none');
        }
    });

    // check disabled used and non-used -> button next 
    radioenble = (e) => {
        if($(e).prop("checked"))
        {
            $(".next").removeAttr('disabled')
        }
    };

    /**
     * run submit send data form to database
     */
    // check button  chekbox before submit
    $(".terms_and_conditions").click(function() {
        // if check click event handler into checkbox.
        if($(this).is(":checked"))
        {
            $(".next_sub").attr("disabled", false);
        }else{
            $(".next_sub").attr("disabled", true);
        }
    });
    

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