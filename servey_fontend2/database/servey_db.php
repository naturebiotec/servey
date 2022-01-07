<?php
    include_once('./connect.php');

    // pre array vaibale 

    echo '<pre>';
        print_r($_POST);
    echo '</pre>';

    if(isset($_POST['submit']))
    {
    
        // varibale input
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
        $information_vitamin = $_POST['information_vitamin'];
        $influence = $_POST['influence'];
        $promtion = $_POST['promtion'];
        $soical = $_POST['soical'];
        $consider = $_POST['consider'];
        $feature = $_POST['feature'];
        $brand = $_POST['brand'];
        $case_question = $_POST['case_question'];

        // varibale array
        $vitamin = $_POST['vitamin'];
        $vitamin_arr = '';
        // loop array 
        foreach($vitamin as $arr)
        {
            $vitamin_arr .= $arr.',';
        }

        // variable array importen
        $importen = $_POST['importen'];
        $importen_arr = '';
        // loop array
        foreach($importen as $arr_im)
        {
            $importen_arr .= $arr_im.',';
        }

        // variable array main_case
        $main_case = $_POST['main_case'];
        $main_case_arr = '';
        // loop array 
        foreach($main_case as $arr_mc)
        {
            $main_case_arr .= $arr_mc.',';
        }

        // variable array location
        $location = $_POST['location'];
        $location_arr = '';
        // loop array
        foreach($location as $arr_ln)
        {
            $location_arr .= $arr_ln.',';
        }

        // variable array advert
        $advert = $_POST['advert'];
        $advert_arr = '';
        // loop array
        foreach($advert as $arr_ad)
        {
            $advert_arr .= $arr_ad.',';
        }

        // variable array case_eat
        $case_eat = $_POST['case_eat'];
        $case_eat_arr = '';
        // loop array 
        foreach($case_eat as $arr_ce)
        {
            $case_eat_arr .= $arr_ce.',';
        }

        // variable array know_vitamin
        $know_vitamin = $_POST['know_vitamin'];
        $know_vitamin_arr = '';
        // loop array
        foreach($know_vitamin as $arr_kv)
        {
            $know_vitamin_arr .= $arr_kv;
        }

        // variable array decide
        $decide = $_POST['decide'];
        $decide_arr = '';
        // loop array
        foreach($decide as $arr_dd)
        {
            $decide_arr .= $arr_dd;
        }

        // insert data  to database -> servery 
        // $sql_insetr_data = "INSERT INTO servey (UID,name,last_name,tel,gender,age,study,job,income,status_inquiry,ever_vitamin,address,district,amphoe,provices,zip_code,vitamin,importen,amount,how_often,many_kind,information_vitamin,location,influence,advert,promtion,soical,consider,feature,brand,case_question,case_eat,know_vitamin,decide,agree) 
        // VALUES ()";
        // query save data
        // $query_insert_data = mysqli_query($conn,$sql_insetr_data) or die("Errors: $sql_insetr_data".mysqli_error($conn));

    } 

?>