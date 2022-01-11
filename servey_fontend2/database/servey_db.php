<?php
    include_once('./connect.php');

    // pre array vaibale 

    echo '<pre>';
        print_r($_POST);
    echo '</pre>';

    if(isset($_POST['next']))
    {
        // varibale input
        $UID = $_POST['UID'];
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $tel = $_POST['tel'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $study = $_POST['study'];
        $job = $_POST['job'];
        $income = $_POST['income'];
        $status_inquiry = $_POST['status_inquiry'];
        $ever_vitamin = $_POST['ever_vitamin'];
        $address = $_POST['address'];
        $district = $_POST['district'];
        $amphoe = $_POST['amphoe'];
        $provices = $_POST['provices'];
        $zip_code = $_POST['zip_code'];  
        $inredient = $_POST['inredient'];     
        $type_vitamin = $_POST['type_vitamin'];
        $amount = $_POST['amount'];
        $how_often = $_POST['how_often'];
        $many_kind = $_POST['many_kind'];
        $influence = $_POST['influence'];
        $promtion = $_POST['promtion'];
        $consider = $_POST['consider'];
        $brand = $_POST['brand'];
        $case_question = $_POST['case_question'];
        $terms_and_conditions = $_POST['terms_and_conditions'];

        // varibale array
        $vitamin = $_POST['vitamin'];
        $vitamin_arr = '';
        // loop array 
        foreach($vitamin as $arr)
        {
            // $vitamin_arr .= $arr.',';
            if(empty($arr))
            {
                unset($vitamin[$arr]);
            }else{
                $vitamin_arr .= $arr.',';
            }
        }

        // variable array importen
        $importen = $_POST['importen'];
        $importen_arr = '';
        // loop array
        foreach($importen as $arr_im)
        {
            //$importen_arr .= $arr_im.',';
            if(empty($arr_im))
            {
                unset($importen[$arr_im]);
            }else{
                $importen_arr .= $arr_im.',';
            }
        }

        // variable array main_case
        $main_case = $_POST['main_case'];
        $main_case_arr = '';
        // loop array 
        foreach($main_case as $arr_mc)
        {
            // $main_case_arr .= $arr_mc.',';
            if(empty($arr_mc))
            {
                unset($main_case[$arr_mc]);
            }else{
                $main_case_arr .= $arr_mc.',';
            }
        }

        // variable array information vitamin
        $information_vitamin = $_POST['information_vitamin'];
        $information_vitamin_arr = '';
        // loop array 
        foreach($information_vitamin as $arr_iv)
        {
            //$information_vitamin_arr .= $arr_iv.',';
            if(empty($arr_iv))
            {
                unset($information_vitamin[$arr_iv]);
            }else{
                $information_vitamin_arr .= $arr_iv.',';
            }
        }
        
        // variable array location
        $location = $_POST['location'];
        $location_arr = '';
        // loop array
        foreach($location as $arr_ln)
        {
            //$location_arr .= $arr_ln.',';
            if(empty($arr_ln))
            {
                unset($location[$arr_ln]);
            }else{
                $location_arr .= $arr_ln.',';
            }
        }

        // variable array advert
        $advert = $_POST['advert'];
        $advert_arr = '';
        // loop array
        foreach($advert as $arr_ad)
        {
            if(empty($arr_ad))
            {
                unset($advert[$arr_ad]);
            }else{
                $advert_arr .= $arr_ad.',';
            }
        }

        // variable array case_eat
        $case_eat = $_POST['case_eat'];
        $case_eat_arr = '';
        // loop array 
        foreach($case_eat as $arr_ce)
        {
            //$case_eat_arr .= $arr_ce.',';
            if(empty($arr_ce))
            {
                unset($case_eat[$arr_ce]);
            }else{
                $case_eat_arr .= $arr_ce.',';
            }
        }

        // variable array know_vitamin
        $know_vitamin = $_POST['know_vitamin']; 
        $know_vitamin_arr = '';
        // loop array
        foreach($know_vitamin as $arr_kv)
        {
            // $know_vitamin_arr .= $arr_kv.',';
            if(empty($arr_kv))
            {
                unset($know_vitamin[$arr_kv]);
            }else{
                $know_vitamin_arr .= $arr_kv.',';
            }
        }

        // variable array decide
        $decide = $_POST['decide'];
        $decide_arr = '';
        // loop array
        foreach($decide as $arr_dd)
        {
            //$decide_arr .= $arr_dd.',';
            if(empty($arr_dd))
            {
                unset($decide[$arr_dd]);
            }else{
                $decide_arr .= $arr_dd.',';
            }
        }

        // variable array soical
        $soical = $_POST['soical'];
        $soical_arr = '';
        // loop array
        foreach($soical as $arr_so)
        {
            if(empty($arr_so))
            {
                unset($soical[$arr_so]);
            }else{
                $soical_arr .= $arr_so.',';
            }
        }

        // variable array feature
        $feature = $_POST['feature'];
        $feature_arr = '';
        // loop array
        foreach($feature as $arr_ft)
        {
            //$feature_arr .= $arr_ft.',';
            if(empty($arr_ft))
            {
                unset($feature[$arr_ft]);
            }else{
                $feature_arr .= $arr_ft.',';
            }
        }


        /**
         * insert database
         * @void add  
         */
        $sql_add_servery = "INSERT INTO servey(UID,name,last_name,tel,gender,age,study,job,income,status_inquiry,ever_vitamin,address,district,amphoe,provices,zip_code,vitamin,importen,main_case,inredient,type_vitamin,amount,how_often,many_kind,information_vitamin,location,influence,advert,promtion,soical,consider,feature,brand,case_question,case_eat,know_vitamin,decide,agree) 

        VALUE('$UID','$name','$last_name','$tel','$gender','$age','$study','$job','$income','$status_inquiry','$ever_vitamin','$address','$district','$amphoe','$provices','$zip_code','$vitamin_arr','$importen_arr','$main_case_arr','$inredient','$type_vitamin','$amount','$how_often','$many_kind','$information_vitamin_arr','$location_arr','$influence','$advert_arr','$promtion','$soical_arr','$consider','$feature_arr','$brand','$case_eat_arr','$case_eat_arr','$know_vitamin_arr','$decide_arr','$terms_and_conditions')";

        $query_add = mysqli_query($conn,$sql_add_servery) or die("Errors: $sql_add_servery".mysqli_error($conn));

        /**
         * check send data trastion to database -> servey
         * if success echo Successfully 
         * or faild echo Error Somting 
         */

         if($query_add)
         {
             echo "Successfully :D";
         }else {
             echo "Errors Somting D:";
         }
    } 

?>