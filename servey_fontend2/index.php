<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CND CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <!-- CND JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./asset/js/style.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">Test System Servey</h2>
                    <p>Fill all form field to go to next step</p>
                    <form id="msform"  name="form" id="form" method="post" action="#">
                        <div class="form-group">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="personal"><strong>ข้อมูลส่วนตัว</strong></li>
                                <li id="personal"><strong>เคยใช้</strong></li>
                                <li id="payment"><strong>System</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">ข้อมูลส่วนตัว:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 1 - 4</h2>
                                        </div>
                                    </div> 
                                    <!-- input fileds data -->
                                    <div class="row">
                                        <div class="col-6">
                                            <!-- name -->
                                            <label class="fieldlabels">ชื่อ: *</label> 
                                            <input type="text" name="name" id="name" class="form-control" placeholder="ชื่อ" /> 
                                        </div>
                                        <div class="col-6">
                                            <!-- last_name -->
                                            <label class="fieldlabels">นามสกุล: *</label> 
                                            <input type="text" name="last_name" id="last_name" placeholder="นามสกุล" /> 
                                        </div>
                                        <div class="col-12">
                                            <!-- tel -->
                                            <label class="fieldlabels">เบอร์โทรศัพท์: *</label> 
                                            <input type="tel" name="tel" id="tel" placeholder="เบอร์โทรศัพท์" /> 
                                        </div>
                                        <div class="col-6">
                                            <!-- gender -->
                                            <label class="fieldlabels">เพศ: *</label> 
                                            <select class="custom-select " id="inputGroupSelect01">
                                                <option selected disabled>กรุณาเลือกเพศ</option>
                                                <option value="male">ชาย</option>
                                                <option value="female">หญิง</option>
                                                <option value="LGBT">LGBT</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <!-- age -->
                                            <label class="fieldlabels">อายุ: *</label>
                                            <input type="number" name="age" id="age" placeholder="กรุณาเลือกอายุ"> 
                                        </div>
                                        <div class="col-12">
                                            <!-- grander -->
                                            <label class="fieldlabels">การศึกษา: *</label>
                                            <select class="custom-select" id="inputGroupSelect02">
                                                <option selected disabled>กรุณาเลือกระดับการศึกษา</option>
                                                <option value="มัธยมศึกษาตอนต้นหรือต่ำกว่า">มัธยมศึกษาตอนต้นหรือต่ำกว่า</option>
                                                <option value="มัธยมศึกษาตอนปลายหรือเทียบเท่า">มัธยมศึกษาตอนปลายหรือเทียบเท่า</option>
                                                <option value="อนุปริญญาหรือเทียบเท่า">อนุปริญญาหรือเทียบเท่า</option>
                                                <option value="ปริญญาตรี/สูงกว่าปริญญาตรี">ปริญญาตรี/สูงกว่าปริญญาตรี</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <!-- job -->
                                            <label class="fieldlabels">อาชีพ: *</label>
                                            <select class="custom-select" id="inputGroupSelect03">
                                                <option selected disabled>กรุณาเลือกอาชีพ</option>
                                                <option value="พนักงานเอกชน">พนักงานเอกชน</option>
                                                <option value="ข้าราชการ/พนักงานรัฐวิสาหกิจ">ข้าราชการ/พนักงานรัฐวิสาหกิจ</option>
                                                <option value="แม่บ้าน/พ่อบ้าน">แม่บ้าน/พ่อบ้าน</option>
                                                <option value="นักเรียน/นักศึกษา">นักเรียน/นักศึกษา</option>
                                                <option value="รับจ้างทั่วไป">รับจ้างทั่วไป</option>
                                                <option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
                                            </select>
                                        </div> 
                                        <div class="col-12" style="margin-top: 10px;">
                                            <!-- prcices -->
                                            <label class="fieldlabels">รายได้: *</label>
                                            <select name="" id="" class="custom-select">
                                                <option disabled selected>กรุณาเลือกรายได้</option>
                                                <option value="ต่ำกว่า 10,000บาท">ต่ำกว่า 10,000บาท</option>
                                                <option value="10,001-20,000บาท">10,001-20,000บาท</option>
                                                <option value="20,001-30,000บาท">20,001-30,000บาท</option>
                                                <option value="30,001-40,000บาท">30,001-40,000บาท</option>
                                                <option value="มากกว่า 40,001บาท">มากกว่า 40,001บาท</option>
                                            </select>
                                        </div>
                                        <div class="col-12" style="margin-top: 10px;">
                                            <label class="fieldlabels">สถานะของผู้สอบถาม: *</label> <br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1">เคย ใช้ผลิตภัณฑ์ของเนเจอร์ไบโอเทค(โปรดเลือก)</label>
                                            </div> <br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">ไม่เคย ใช้ผลิตภัณฑ์ของเนเจอร์ไบโอเทค</label>
                                            </div> <br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline3">เคย ใช้ผลิตภัณฑ์อื่นๆ (โปรดระบุ)</label>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin-top: 10px;">
                                            <label class="fieldlabels">ท่านเคยรับประทานอาหารเสริมประเภทวิตามิน หรือไม่ : *</label> <br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline4">เคย </label>
                                            </div> 
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline5" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline5">ไม่เคย </label>
                                            </div> <br>
                                        </div>
                                    </div>
                                </div> 
                                <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">เคยใช้: วิทตามิน</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 2 - 4</h2>
                                        </div>
                                        <div class="col-12">
                                            <label class="fieldlabels">ท่านรับประทานวิตามินประเภทใด มากที่สุด (เลือกได้มากกว่า1ข้อ) : *</label> 
                                           
                                        </div>
                                    </div> 
                                    
                                </div> 
                                <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Test System:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 3 - 4</h2>
                                        </div><label class="fieldlabels">First Name: *</label> <input type="text" name="fname" placeholder="First Name" /> <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname" placeholder="Last Name" /> <label class="fieldlabels">Contact No.: *</label> <input type="text" name="phno" placeholder="Contact No." /> <label class="fieldlabels">Alternate Contact No.: *</label> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                    </div> 
                                </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Finish:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 4 - 4</h2>
                                        </div>
                                    </div> <br><br>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>