$(document).ready(function() {
    var current_fs, next_fs, previous_fs, next_fs_part; // fieldsets
    var opacity;
    var current = 1 ;
    var steps = $("fieldset").length;

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
    // chanage radio input 
    $("input[type='radio']").change(function() {
        var other_status_inquiry = document.getElementById("status_inquiry_other").checked;

        if(other_status_inquiry)
        {
            $(this).closest("div").find("input[id=status_inquiry]").css('display', 'inline-block');
        }else {
            $(this).closest("div").find("input[id=status_inquiry]").css('display', 'none');
        }
    });
    // chanage radio select 
    $("input[type='radio']").change(function() {
        var other_select_inquiry = document.getElementById("status_inquiry_used").checked;

        if(other_select_inquiry)
        {
           $(this).closest("div").find("select[id=status_inquiry]").css('display','inline-block');
        }else
        {
            $(this).closest("div").find("select[id=status_inquiry]").css('display','none');
        }
    });
    // chanage checkbox  -> vitamin
    $("input[type='checkbox']").change(function() {
        // if checkbox is checked
        if($(this).val() == "other_vitamin")
        {
            $(this).closest("div").find("input[id=vitamin]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=vitamin]").css('display','none');
        }
    });
    // chanage checkbox -> important
    $("input[type='checkbox']").change(function(){
        // if checkbox is checked
        if($(this).val() == "other_importen")
        {
            $(this).closest("div").find("input[id=importen]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=importen]").css('display','none');
        }
    });
    // checage checkbox -> inredient
    $("input[type='radio']").change(function() {
        var inredient_other = document.getElementById("inredient_other").checked;
        // check radio -> checked
        if(inredient_other)
        {
            $(this).closest("div").find("input[id=inredient]").css('display', 'inline-block');
        }else{
            $(this).closest("div").find("input[id=inredient]").css('display', 'none');
        }
    });
    // chanage checkbox -> type_vitamin
    $("input[type='radio']").change(function() {
        var type_vitamin_other = document.getElementById("type_vitamin_other").checked;

        if(type_vitamin_other)
        {
            $(this).closest("div").find("input[id=type_vitamin]").css('display','inline-block');
        }else{
           $(this).closest("div").find("input[id=type_vitamin]").css('display','none');
        }
    });
    // check loop soical input slected box
    $("input[type='radio']").change(function(){
        var information_vitamin_TV = document.getElementById("information_vitamin_TV").checked;
        var information_vitamin_Online = document.getElementById("information_vitamin_Online").checked;
        var information_vitamin_Radio = document.getElementById("information_vitamin_Radio").checked;
        var information_vitamin_print = document.getElementById("information_vitamin_print").checked;
        var information_vitamin_outdoor = document.getElementById("information_vitamin_outdoor").checked;
        var information_vitamin_other = document.getElementById("information_vitamin_other").checked;
        // if check radio
        if(information_vitamin_TV)
        {
           $(this).closest("div").find("input[id=information_vitamin_TV]").css('display','inline-block');
        }else if(information_vitamin_Online){
            $(this).closest("div").find("input[id=information_vitamin_Online]").css('display','inline-block');
        }else if(information_vitamin_Radio){
            $(this).closest("div").find("input[id=information_vitamin_Radio]").css('display','inline-block');
        }else if(information_vitamin_print)
        {
            $(this).closest("div").find("input[id=information_vitamin_print]").css('display','inline-block');
        }else if(information_vitamin_outdoor)
        {
            $(this).closest("div").find("input[id=information_vitamin_outdoor]").css('display','inline-block');
        }else if(information_vitamin_other)
        {
            $(this).closest("div").find("input[id=information_vitamin_other]").css('display','inline-block');
        }
        else {
            // empty
        }
    });
    // check location_other
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "location_other")
        {
            $(this).closest("div").find("input[id=location_other]").css('display','inline-block');
        }else if($(this).val() == 'CVS'){
            $(this).closest("div").find("input[id=location_CVS]").css('display','inline-block');
        }else if($(this).val() == 'Hyper'){
            $(this).closest("div").find("input[id=location_Hyper]").css('display','inline-block');
        }else if($(this).val() == 'shop'){
            $(this).closest("div").find("input[id=location_shop]").css('display','inline-block');
        }else if($(this).val() == 'HT') {
            $(this).closest("div").find("input[id=location_HT]").css('display','inline-block');
        }else if($(this).val() == 'Shopping_Online'){
            $(this).closest("div").find("input[id=location_Shopping_Online]").css('display','inline-block');
        }else if($(this).val() == 'information'){
            $(this).closest("div").find("input[id=location_information]").css('display','inline-block');
        }else if($(this).val() == 'TV'){
            $(this).closest("div").find("input[id=location_TV]").css('display','inline-block');
        }
    });
    // input radio ->influence_other
    $("input[type=radio]").change(function() {
        var influence_other = document.getElementById("influence_other").checked;
        if(influence_other)
        {
            $(this).closest("div").find("input[id=influence_other]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=influence_other]").css('display','none');
        }
    });
    // checkbox advert 
    $("input[type=checkbox]").change(function() {
        if($(this).val() == "TV")
        {
            $(this).closest("div").find("input[id=advert_TV]").css('display','inline-block');
        }else if($(this).val() == "Online"){
            $(this).closest("div").find("input[id=advert_online]").css('display','inline-block');
        }else if($(this).val() == "Radio"){
            $(this).closest("div").find("input[id=advert_Radio]").css('display','inline-block');
        }else if($(this).val() == "print"){
            $(this).closest("div").find("input[id=advert_print]").css('display','inline-block');
        }else if($(this).val() == "ourdoor"){ 
            $(this).closest("div").find("input[id=advert_ourdoor]").css('display','inline-block');
        }else if($(this).val() == "other_advert"){
            $(this).closest("div").find("input[id=advert_other]").css('display','inline-block');
        }
        else{
            // console.log("Error");
        }
    });
    // check soical other
    $("input[type=checkbox]").change(function(){
        if($(this).val() == "otehr_soical"){
            $(this).closest("div").find("input[id=otehr_soical]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=otehr_soical]").css('display','none');
        }
    });
    // check consider
    $('input[type=checkbox]').change(function(){
        if($(this).val() == "review"){
            $(this).closest("div").find("input[id=consider_review]").css('display','inline-block');
        }else if($(this).val() == "Inquire"){
            $(this).closest("div").find("input[id=consider_Inquire]").css('display','inline-block');
        }else if($(this).val() == "consider_other"){
            $(this).closest("div").find("input[id=consider_other]").css('display','inline-block');
        }else{
            // 
        }
    });
    // feature_other
    $('input[type=checkbox]').change(function(){
        if($(this).val() == "feature_other")
        {
            $(this).closest("div").find("input[id=feature_other]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=feature_other]").css('display','none');
        }
    });
    // case_question_other
    $('input[type=checkbox').change(function() {
        if($(this).val() == 'case_question_other'){
            $(this).closest("div").find("input[id=case_question_other]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=case_question_other]").css('display','none');
        }
    });
    // Part 2
    // other_case_eat
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other_case_eat")
        {
            $(this).closest("div").find("input[id=other_case_eat]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=other_case_eat]").css('display','none');
        }
    });
    // other_know
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other_know")
        {
            $(this).closest("div").find("input[id=other_know]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=other_know]").css('display','none');
        }
    });
    // other_decide
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other_decide"){
            $(this).closest("div").find("input[id=other_decide]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=other_decide]").css('display','none');
        }
    });
    // other_importen
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other_importen"){
            $(this).closest("div").find("input[id=other_importen]").css('display','inline-block');
        }else {
            $(this).closest("div").find("input[id=other_importen]").css('display','none');
        }
    });
    // other_inredient -> radio
    $("input[type='radio']").change(function() {
        var other_inredient = document.getElementById("other_inredient").checked;
        if(other_inredient){
            $(this).closest("div").find("input[id=other_inredient]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=other_inredient]").css('display','none');
        }
    });
    // type_vitamin_other
    $("input[type=radio]").change(function(){
        var type_vitamin_other_2 = document.getElementById("type_vitamin_other_2").checked;
        if(type_vitamin_other_2){
            $(this).closest("div").find("input[id=type_vitamin_other_2]").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id=type_vitamin_other_2]").css('display','none');
        }
    });
    // location
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "CVS"){
            $(this).closest("div").find("input[id=location_CVS]").css('display','inline-block');
        }else if($(this).val() == "Hyper"){
            $(this).closest("div").find("input[id=location_Hyper]").css('display','inline-block');
        }else if($(this).val() == "prescription"){ 
            $(this).closest("div").find("input[id=location_prescription]").css('display','inline-block');
        }else if($(this).val() == "health"){
            $(this).closest("div").find("input[id=location_health]").css('display','inline-block');
        }else if($(this).val() == "location_Shopping_Online")
        {
            $(this).closest("div").find("input[id=location_Shopping_Online]").css('display','inline-block');
        }else if($(this).val() == "channel")
        {
            $(this).closest("div").find("input[id=location_channel]").css('display','inline-block');
        }else if($(this).val() == "channel_TV")
        {
            $(this).closest("div").find("input[id=location_channel_TV]").css('display','inline-block');
        }
        else{
            // 
        }
    });
    // other_influence
    $("input[type='radio']").change(function() {
        var other_influence = document.getElementById("other_influence").checked;
        if(other_influence)
        {
            $(this).closest("div").find("input[id='other_influence']").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id='other_influence']").css('display','none');
        }
    });
    //other_advert
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other_advert"){
            $(this).closest("div").find("input[id='other_advert']").css('display','inline-block');
        }else if($(this).val() == "Online"){
            $(this).closest("div").find("input[id='advert_Online']").css('display','inline-block');
        }else if($(this).val() == "Radio"){
            $(this).closest("div").find("input[id='advert_Radio']").css('display','inline-block');
        }else if($(this).val() == "Print"){
            $(this).closest("div").find("input[id='advert_Print']").css('display','inline-block');
        }else if($(this).val() == "ourdoor"){
            $(this).closest("div").find("input[id='advert_ourdoor']").css('display','inline-block');
        }else if($(this).val() == "other_advert"){
            $(this).closest("div").find("input[id='other_advert']").css('display','inline-block');
        }else if($(this).val() == "TV"){
            $(this).closest("div").find("input[id='advert_TV']").css('display','inline-block');
        }else {
            //
        }
    });// ->  แก้ เป็น if else
    //other_promtion
    $("input[type='radio']").change(function(){
        var other_promtion = document.getElementById('other_promtion');
        if(other_promtion){
            $(this).closest("div").find("input[id='other_promtion']").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id='other_promtion']").css('display','none');
        }
    });
    // other_promotion
    $("input[type='radio']").change(function(){
        var other_promotion = document.getElementById('other_promotion');
        if(other_promotion){
            $(this).closest("div").find("input[id='other_promotion']").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id='other_promotion']").css('display','none');
        }
    });
    // other_soical
    $("input[type='checkbox']").change(function(){
        if($(this).val() == "other_soical"){
            $(this).closest("div").find("input[id='other_soical']").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id='other_soical']").css('display','none');
        }
    });
    // consider
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "Bloggers"){
            $(this).closest("div").find("input[id='consider_Bloggers']").css('display','inline-block');
        }else if($(this).val() == "Inquire"){
            $(this).closest("div").find("input[id='consider_Inquire']").css('display','inline-block');
        }else if($(this).val() == "other_consider") {
            $(this).closest("div").find("input[id='other_consider']").css('display','inline-block');
        }else{
            //
        }
    });
    // other_feature
    $("input[type='checkbox']").change(function() {
        if($(this).val() == "other_feature"){
            $(this).closest("div").find("input[id='other_feature']").css('display','inline-block');
        }else{
            $(this).closest("div").find("input[id='other_feature']").css('display','none');
        }
    });



})