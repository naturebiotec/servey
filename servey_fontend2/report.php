<?php 
    include_once './includes/header.php'; // -> header.php
    include_once './includes/navbar.php';
    // connect database -> database -> connect
    include_once './database/connect.php';
?>
    <!-- body  -->
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <!-- total count UID  -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">จำนวนผู้ลงทะเบียนทั้งหมด</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                        $sql_count = "SELECT UID FROM servey ORDER BY UID";
                                        $query_count = mysqli_query($conn,$sql_count);
                                        $row = mysqli_num_rows($query_count);

                                        echo $row;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end count UID -->
            <!-- count used -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">จำนวนผู้เคยใช้</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php 
                                        $sql_count_uesd = "SELECT ever_vitamin FROM servey WHERE ever_vitamin = 'used' ORDER BY ever_vitamin";
                                        $query_count_used = mysqli_query($conn,$sql_count_uesd);
                                        $row_used = mysqli_num_rows($query_count_used);

                                        echo $row_used;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end used -->
            <!-- non-used -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase">จำนวนผู้ไม่เคยใช้</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                        $sql_count_non = "SELECT ever_vitamin FROM servey WHERE ever_vitamin = 'non-used' ORDER BY ever_vitamin";
                                        $query_count_non = mysqli_query($conn,$sql_count_non);
                                        $row_non = mysqli_num_rows($query_count_non);

                                        echo $row_non;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end non-used -->
        </div>
        <!-- row 2 -->
        <div class="row">
            <!-- gender -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">  
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">เพศ</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="falase">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div> 
                    <!-- sql query count gender  -->
                    <?php 
                        $sql_count_gender = "SELECT gender,count(gender) as total_gender FROM servey GROUP BY gender";
                        $query_gender = mysqli_query($conn,$sql_count_gender);
                        $data_gender  = array();
                        foreach ($query_gender as $gender)
                        {
                            $data_gender[] = "['".$gender['gender']."'".",".$gender['total_gender']."]";
                        }
                        $data_gender = implode(",", $data_gender);
                    ?>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie">
                            <div id="piechart_gender"></div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- end gender -->
            <!-- chart study -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">การศึกษา</h6>
                        <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="falase">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        $sql_count_study = "SELECT study,count(study) as total_study FROM servey GROUP BY study";
                        $query_sutdy = mysqli_query($conn, $sql_count_study);
                        $data_study = array();
                        foreach ($query_sutdy as $study)
                        {
                            $data_study[] = "['".$study['study']."'".",".$study['total_study']."]";
                        }
                        $data_study = implode(",", $data_study);
                    ?>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie">
                            <div id="piechart_study"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- study -->
            <!-- chart job -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">อาชีพ</h6>
                        <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="falase">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        $sql_count_job = "SELECT job,count(job) as total_job FROM servey GROUP BY job ";
                        $query_count_job = mysqli_query($conn,$sql_count_job);
                        $data_job = array();
                        foreach($query_count_job as $job)
                        {
                            $data_job[] = "['".$job['job']."'".",".$job['total_job']."]";
                        }
                        $data_job = implode(",", $data_job);
                    ?>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie">
                            <div id="piechart_job"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end job -->
            <!-- income -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">รายได้</h6>
                        <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="falase">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $sql_count_income = "SELECT income, count(income) as total_income FROM servey ORDER BY income ";
                        $query_count_income = mysqli_query($conn, $sql_count_income);
                        $data_income = array();
                        foreach($query_count_income as $income)
                        {
                            $data_income[] = "['".$income['income']."'".",".$income['total_income']."]"; 
                        }
                        $data_income = implode(",", $data_income);
                    ?>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie">
                            <div id="piechart_income"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end income -->
            <!-- inredient -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">สารสกัด</h6>
                        <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="falase">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        $sql_count_inredient = "SELECT inredient,count(inredient) as total_inredient FROM servey ORDER BY inredient";
                        $query_count_inredient = mysqli_query($conn,$sql_count_inredient);
                        $data_inredient = array();
                        foreach ($query_count_inredient as $inredient)
                        {
                            $data_inredient[] = "['".$inredient['inredient']."'".",".$inredient['total_inredient']."]";
                        }
                        $data_inredient = implode(",", $data_inredient);
                    ?>
                    <div class="card-body">
                        <div class="chart-pie">
                            <div id="piechart_inredient"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end inredient -->
            <!-- type_vitamin -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">รูปแบบวิตามิน</h6>
                        <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="falase">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        $sql_count_type = "SELECT type_vitamin,count(type_vitamin) as total_type FROM servey ORDER BY type_vitamin";
                        $query_count_type = mysqli_query($conn,$sql_count_type);
                        $data_type = array();
                        foreach($query_count_type as $type)
                        {
                            $data_type[] = "['".$type['type_vitamin']."'".",".$type['total_type']."]";
                        }

                        $data_type = implode(",", $data_type);
                    ?>
                    <div class="card-body">
                        <div class="chart-pie">
                            <div id="piechart_type"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end type vitamin -->
            <!-- amount -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">ราคา</h6>
                        <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="falase">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        $sql_count_amount = "SELECT amount,count(amount) as total_amount FROM servey ORDER BY amount";
                        $query_count_amount = mysqli_query($conn, $sql_count_amount);
                        $data_amount = array();
                        foreach($query_count_amount as $amount)
                        {
                            $data_amount[] = "['".$amount['amount']."'".",".$amount['total_amount']."]";
                        }

                        $data_amount = implode(",", $data_amount);
                    ?>
                    <div class="card-body">
                        <div class="chart-pie ">
                            <div id="piechart_amount"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end amount -->
            <!-- vitamin -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">วิตามิน</h6>
                        <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="falase">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                            </div> 
                        </div>
                    </div>
                    <?php                        
                       $sql_show_data = "SELECT vitamin FROM servey WHERE id = 52";
                       $query_show_data = mysqli_query($conn,$sql_show_data);
                       $data_vitamin = array();
                       foreach($query_show_data as $vitamin)
                       {
                           $data_vitamin[] = $vitamin['vitamin'];
                        //    "['".$vitamin['vitamin']."']";
                       }

                        // $vitamin = implode(",", $data_vitamin);

                        echo '<pre>';
                        print_r (array_count_values($data_vitamin));
                        echo '</pre>';
                       

                        // $array = array($vitamin);
                        // echo $array;
                    ?>
                    <div class="card-body">
                        <div class="chart-pie ">
                            <div id="piechart_vitamin"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php
    include_once './includes/footer.php';
    include_once './includes/script.php';
    include_once './includes/script_chart.php';
?>