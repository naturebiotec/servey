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
                    <!-- <h2 id="heading">Test System Servey</h2> -->
                   <img src="./asset/img/1040x1040_AW_แบบสอบถาม-02.png" alt="" style="border-radius: 10px;">
                    <form id="msform"  name="form"  method="post" action="./database/servey_db.php" class="needs-validation" novalidate>
                        <div class="form-group">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <!-- <li class="active" id="personal"><strong>ข้อมูลส่วนตัว</strong></li>
                                <li id="personal"><strong>เคยใช้</strong></li>
                                <li id="payment" class="payment"><strong>ไม่เคยใช้</strong></li>
                                <li id="confirm"><strong>Finish</strong></li> -->
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
                                            <h2 class="steps"></h2>
                                        </div>
                                    </div> 
                                    <!-- input fileds data -->
                                    <div class="row">
                                        <input type="hidden" name="UID" id="UID" value="IDaudiadyuaiksjdksadklasjdlasdja778">
                                        <div class="col-6">
                                            <!-- name -->
                                            <label class="fieldlabels">ชื่อ: *</label> 
                                            <input type="text" name="name" id="name" class="form-control" placeholder="ชื่อ" /> 
                                        </div>
                                        <div class="col-6">
                                            <!-- last_name -->
                                            <label class="fieldlabels">นามสกุล: *</label>  <br>
                                            <input type="text" name="last_name" id="last_name"  class="form-control" placeholder="นามสกุล" /> 
                                        </div>
                                        <div class="col-12">
                                            <!-- tel -->
                                            <label class="fieldlabels">เบอร์โทรศัพท์: *</label>  <br>
                                            <input type="tel" name="tel" id="tel" maxlength="10" placeholder="เบอร์โทรศัพท์"  class="form-control" /> 
                                        </div>
                                        <div class="col-6">
                                            <!-- gender -->
                                            <label class="fieldlabels">เพศ: *</label> 
                                            <select class="custom-select " id="inputGroupSelect01" name="gender" id="gender">
                                                <option selected disabled>กรุณาเลือกเพศ</option>
                                                <option value="male">ชาย</option>
                                                <option value="female">หญิง</option>
                                                <option value="LGBT">LGBT</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <!-- age -->
                                            <label class="fieldlabels">อายุ: *</label>
                                            <input type="number" name="age" id="age" placeholder="กรุณากรอกอายุ"  class="form-control" /> 
                                        </div>
                                        <div class="col-12">
                                            <!-- grander -->
                                            <label class="fieldlabels">การศึกษา: *</label>
                                            <select class="custom-select" id="inputGroupSelect02" name="study" id="study">
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
                                            <select class="custom-select" id="inputGroupSelect03" name="job" id="job">
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
                                            <select name="" id="" class="custom-select" name="income" id="income">
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
                                                <input type="radio" id="customRadioInline1" name="status_inquiry" class="custom-control-input" value="เคย ใช้ผลิตภัณฑ์ของเนเจอร์ไบโอเทค(โปรดเลือก)">
                                                <label class="custom-control-label" for="customRadioInline1">เคย ใช้ผลิตภัณฑ์ของเนเจอร์ไบโอเทค(โปรดเลือก)</label>
                                            </div> <br>
                                            <!-- แก้เป็น seleced -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="status_inquiry" class="custom-control-input" value="ไม่เคย ใช้ผลิตภัณฑ์ของเนเจอร์ไบโอเทค">
                                                <label class="custom-control-label" for="customRadioInline2">ไม่เคย ใช้ผลิตภัณฑ์ของเนเจอร์ไบโอเทค</label>
                                            </div> <br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline3" name="status_inquiry" class="custom-control-input" value="เคย ใช้ผลิตภัณฑ์อื่นๆ (โปรดระบุ)">
                                                <label class="custom-control-label" for="customRadioInline3">เคย ใช้ผลิตภัณฑ์อื่นๆ (โปรดระบุ)</label>
                                            </div>
                                            <!-- แก้เป็น input  -->
                                        </div>
                                        <div class="col-12" style="margin-top: 10px;">
                                            <label class="fieldlabels">ท่านเคยรับประทานอาหารเสริมประเภทวิตามิน หรือไม่ : *</label> <br>
                                            <div class="custom-control custom-radio custom-control-inline customRadioInline4">
                                                <input type="radio" id="customRadioInline4" name="ever_vitamin" class="custom-control-input" value="used" >
                                                <label class="custom-control-label" for="customRadioInline4">เคย </label>
                                            </div> 
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline5" name="ever_vitamin" class="custom-control-input" value="non-used">
                                                <label class="custom-control-label" for="customRadioInline5">ไม่เคย </label>
                                            </div> <br>
                                        </div>
                                    </div>
                                </div> 
                                <!-- <input type="button" name="next" class="next action-button" value="Submit" />  -->
                                <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">เคยใช้: วิตามิน</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps"></h2>
                                        </div>
                                        <div class="col-12">
                                            <label class="fieldlabels">1.ท่านรับประทานวิตามินประเภทใด มากที่สุด (เลือกได้มากกว่า1ข้อ) : *</label> 
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check"> 
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox1" value="วิตามินเอ Vitamin A">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินเอ Vitamin A </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox2" value="วิตามินบีรวม Vitamin B Complex">
                                                        <label class="form-check-label" for="inlineCheckbox2">วิตามินบีรวม Vitamin B Complex </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox2" value="วิตามินบี12 Vitamin B12">
                                                        <label class="form-check-label" for="inlineCheckbox2">วิตามินบี12 Vitamin B12 </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox2" value="วิตามินบี7 Vitamin B7">
                                                        <label class="form-check-label" for="inlineCheckbox2">วิตามินบี7 Vitamin B7 </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox2" value="วิตามินบี8 Vitamin B8">
                                                        <label class="form-check-label" for="inlineCheckbox2">วิตามินบี8 Vitamin B8 </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox2" value="วิตามินซี Vitamin C">
                                                        <label class="form-check-label" for="inlineCheckbox2">วิตามินซี Vitamin C </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox2" value="วิตามินดี Vitamin D">
                                                        <label class="form-check-label" for="inlineCheckbox2">วิตามินดี Vitamin D </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox2" value="วิตามินอี Vitamin E">
                                                        <label class="form-check-label" for="inlineCheckbox2">วิตามินอี Vitamin E </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox2" value="วิตามินรวม  Multi Vitamins">
                                                        <label class="form-check-label" for="inlineCheckbox2">วิตามินรวม  Multi Vitamins </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox2" value="แคลเซียม Calcium">
                                                        <label class="form-check-label" for="inlineCheckbox2">แคลเซียม Calcium </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox2" value="ซิงค์ Zinc">
                                                        <label class="form-check-label" for="inlineCheckbox2">ซิงค์ Zinc </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox2" value="น้ำมันปลา Fish Oil">
                                                        <label class="form-check-label" for="inlineCheckbox2">น้ำมันปลา Fish Oil </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox2" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox2">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 1 -->
                                            <label class="fieldlabels">2.ท่านให้ความสำคัญกับเรื่องใด มากที่สุด
(เลือกได้มากกว่า1ข้อ) : *</label> 
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                 <div class="form-check">
                                                    <div class="form-check"> 
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ประสิทธิภาพด้านการมองเห็น">
                                                        <label class="form-check-label" for="inlineCheckbox1">ประสิทธิภาพด้านการมองเห็น </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="เสริมภูมิต้านทานให้ร่างกาย">
                                                        <label class="form-check-label" for="inlineCheckbox1">เสริมภูมิต้านทานให้ร่างกาย </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ช่วยชะลอความแก่และลดริ้วรอย">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยชะลอความแก่และลดริ้วรอย </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ลดความรุนแรงของไข้หวัด">
                                                        <label class="form-check-label" for="inlineCheckbox1">ลดความรุนแรงของไข้หวัด </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ช่วยชะลอหรือป้องกันโรคเกี่ยวกับกระดูก">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยชะลอหรือป้องกันโรคเกี่ยวกับกระดูก </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ช่วยในเรื่องระบบการขับถ่าย ">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยในเรื่องระบบการขับถ่าย  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ช่วยลดความรู้สึกอ่อนล้า อ่อนเพลีย">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยลดความรู้สึกอ่อนล้า อ่อนเพลีย </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ความสามารถในการจดจำและการเรียนรู้ ">
                                                        <label class="form-check-label" for="inlineCheckbox1">ความสามารถในการจดจำและการเรียนรู้  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ช่วยในการเผาผลาญ ไขมัน">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยในการเผาผลาญ ไขมัน </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ช่วยควบคุมน้ำหนัก">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยควบคุมน้ำหนัก </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="บำรุงผิว/ผม/เล็บ ลดสิว">
                                                        <label class="form-check-label" for="inlineCheckbox1">บำรุงผิว/ผม/เล็บ ลดสิว </label>
                                                    </div>
                                                 </div>
                                            </div> <br>
                                            <!-- 2 -->
                                            <label class="fieldlabels">3.สาเหตุหลักที่ทำให้ท่านทานวิตามิน คืออะไร
(เลือกได้มากกว่า1ข้อ) : *</label> 
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                        <div class="form-check"> 
                                                            <input class="form-check-input" type="checkbox" name="main_case[]" id="inlineCheckbox1" value="มีประโยชน์">
                                                            <label class="form-check-label" for="inlineCheckbox1">มีประโยชน์ </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="main_case[]" id="inlineCheckbox1" value="ช่วยบรรเทาหรือป้องกันอาการผิดปกติ/โรคต่างๆได้">
                                                            <label class="form-check-label" for="inlineCheckbox1">ช่วยบรรเทาหรือป้องกันอาการผิดปกติ/โรคต่างๆได้ </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="main_case[]" id="inlineCheckbox1" value="ต้องการเสริมวิตามิน เนื่องจากได้รับจากอาหารไม่เพียงพอ">
                                                            <label class="form-check-label" for="inlineCheckbox1">ต้องการเสริมวิตามิน เนื่องจากได้รับจากอาหารไม่เพียงพอ </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="main_case[]" id="inlineCheckbox1" value="ความเคยชิน">
                                                            <label class="form-check-label" for="inlineCheckbox1">ความเคยชิน </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="main_case[]" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                            <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                        </div>
                                                </div>
                                            </div> <br>
                                            <!-- 3 -->
                                            <label class="fieldlabels">4.ส่วนผสมหลักของผลิตภัณฑ์วิตามินที่ท่านต้องการคือข้อใด: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5 px;">
                                                <div class="form-check">
                                                    <div class="form-check"> 
                                                        <input class="form-check-input" type="checkbox" name="inredient" id="inlineCheckbox1" value="สารสกัดจากผลไม้">
                                                        <label class="form-check-label" for="inlineCheckbox1">สารสกัดจากผลไม้ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="inredient" id="inlineCheckbox1" value="สารสกัดจากดอกไม้ ">
                                                        <label class="form-check-label" for="inlineCheckbox1">สารสกัดจากดอกไม้  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="inredient" id="inlineCheckbox1" value="สารสกัดจากสมุนไพร ">
                                                        <label class="form-check-label" for="inlineCheckbox1">สารสกัดจากสมุนไพร  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="inredient" id="inlineCheckbox1" value="สารสังเคราะห์ ">
                                                        <label class="form-check-label" for="inlineCheckbox1">สารสังเคราะห์  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="inredient" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ) ">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ)  </label>
                                                    </div>
                                                </div>
                                            </div>  <br>
                                            <!-- 4 -->
                                            <label class="fieldlabels">5.รูปแบบของผลิตภัณฑ์วิตามินที่ท่านนิยมทาน: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check"> 
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แบบเม็ด บรรจุกระปุก">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบเม็ด บรรจุกระปุก </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แบบเม็ด บรรจุแผง">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบเม็ด บรรจุแผง </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แบบผง บรรจุกระปุกชงดื่ม">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบผง บรรจุกระปุกชงดื่ม </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แบบผง บรรจุซองฉีกซองรับประทาน">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบผง บรรจุซองฉีกซองรับประทาน </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แบบขนม(เยลลี่/คาราจีแนน)บรรจุกล่อง">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบขนม(เยลลี่/คาราจีแนน)บรรจุกล่อง </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แบบขนม(เยลลี่/คาราจีแนน)บรรจุกระปุก">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบขนม(เยลลี่/คาราจีแนน)บรรจุกระปุก </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แบบเครื่องดื่ม/น้ำดื่มผสมวิตามิน">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบเครื่องดื่ม/น้ำดื่มผสมวิตามิน </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                            <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                        </div>
                                                </div>
                                            </div> <br>
                                            <!-- 5 -->
                                            <label class="fieldlabels">6.จำนวนเงินที่ท่านใช้ในการเลือกซื้อผลิตภัณฑ์วิตามินในแต่ละครั้งอยู่ที่เท่าใด: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check"> 
                                                        <input class="form-check-input" type="checkbox" name="amount" id="inlineCheckbox1" value="ต่ำกว่า 200 บาท">
                                                        <label class="form-check-label" for="inlineCheckbox1">ต่ำกว่า 200 บาท </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amount" id="inlineCheckbox1" value="201-500 บาท">
                                                        <label class="form-check-label" for="inlineCheckbox1">201-500 บาท </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amount" id="inlineCheckbox1" value="501-900 บาท">
                                                        <label class="form-check-label" for="inlineCheckbox1">501-900 บาท </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amount" id="inlineCheckbox1" value="901-1,000 บาท">
                                                        <label class="form-check-label" for="inlineCheckbox1">901-1,000 บาท </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amount" id="inlineCheckbox1" value="1,000 บาทขึ้นไป">
                                                        <label class="form-check-label" for="inlineCheckbox1">1,000 บาทขึ้นไป </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 6 -->
                                            <label class="fieldlabels">7.ท่านซื้อผลิตภัณฑ์วิตามินบ่อยเพียงไร: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check"> 
                                                        <input class="form-check-input" type="checkbox" name="how_often" id="inlineCheckbox1" value="น้อยกว่า 1 เดือนต่อครั้ง">
                                                        <label class="form-check-label" for="inlineCheckbox1">น้อยกว่า 1 เดือนต่อครั้ง </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="how_often" id="inlineCheckbox1" value="ประมาณ 1 – 3 เดือนต่อครั้ง">
                                                        <label class="form-check-label" for="inlineCheckbox1">ประมาณ 1 – 3 เดือนต่อครั้ง </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="how_often" id="inlineCheckbox1" value="ประมาณ 4 –  6เดือนต่อครั้ง">
                                                        <label class="form-check-label" for="inlineCheckbox1">ประมาณ 4 –  6เดือนต่อครั้ง </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="how_often" id="inlineCheckbox1" value="มากกว่า 6เดือนต่อครั้ง">
                                                        <label class="form-check-label" for="inlineCheckbox1">มากกว่า 6เดือนต่อครั้ง </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 7 --> 
                                            <label class="fieldlabels">8.ท่านรับประทานวิตามินร่วมกันกี่ชนิดใน 1 วัน: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="many_kind" id="inlineCheckbox1" value="น้อยกว่า 1 ชนิด">
                                                        <label class="form-check-label" for="inlineCheckbox1">น้อยกว่า 1 ชนิด </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="many_kind" id="inlineCheckbox1" value="2-3 ชนิด">
                                                        <label class="form-check-label" for="inlineCheckbox1">2-3 ชนิด </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="many_kind" id="inlineCheckbox1" value="4-6 ชนิด">
                                                        <label class="form-check-label" for="inlineCheckbox1">4-6 ชนิด </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="many_kind" id="inlineCheckbox1" value="6 ชนิด ขึ้นไป">
                                                        <label class="form-check-label" for="inlineCheckbox1">6 ชนิด ขึ้นไป </label>
                                                    </div>
                                                </div>
                                            </div>  <br>
                                            <!-- 8 -->
                                            <label class="fieldlabels">9.ท่านรับรู้ข้อมูลผลิตภัณฑ์วิตามินที่ทานรับประทานในปัจจุบันจากสื่อใด: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="information_vitamin" id="inlineCheckbox1" value="TV (โปรดระบุช่องหรือรายการที่ท่านรับชม)">
                                                        <label class="form-check-label" for="inlineCheckbox1">TV (โปรดระบุช่องหรือรายการที่ท่านรับชม) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="information_vitamin" id="inlineCheckbox1" value="Online (โปรดระบุแพลตฟอร์มที่ท่านรับชม)">
                                                        <label class="form-check-label" for="inlineCheckbox1">Online (โปรดระบุแพลตฟอร์มที่ท่านรับชม) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="information_vitamin" id="inlineCheckbox1" value="Radio (โปรดระบุคลื่นวิทยุหรือรายการที่ท่านรับชม)">
                                                        <label class="form-check-label" for="inlineCheckbox1">Radio (โปรดระบุคลื่นวิทยุหรือรายการที่ท่านรับชม) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="information_vitamin" id="inlineCheckbox1" value="สื่อสิ่งพิมพ์ (โปรดระบุคอลัมน์ หรือ ชื่อสิ่งพิมพ์ที่ท่านรับชม)">
                                                        <label class="form-check-label" for="inlineCheckbox1">สื่อสิ่งพิมพ์ (โปรดระบุคอลัมน์ หรือ ชื่อสิ่งพิมพ์ที่ท่านรับชม) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="information_vitamin" id="inlineCheckbox1" value="สื่อกลางแจ้ง(โปรดระบุสื่อกลางแจ้งที่ท่านพบเช่น บิลบอร์ด,ป้ายโฆษณา,สติกเกอร์ติดรถ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">สื่อกลางแจ้ง(โปรดระบุสื่อกลางแจ้งที่ท่านพบเช่น บิลบอร์ด,ป้ายโฆษณา,สติกเกอร์ติดรถ) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="information_vitamin" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 9 -->
                                            <label class="fieldlabels">10.ท่านเลือกซื้อผลิตภัณฑ์วิตามินจากสถานที่ใด
(เลือกได้มากกว่า1ข้อ): *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check"> 
                                                        <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="CVS(เช่น 7-11, Family mart,CJ Express)">
                                                        <label class="form-check-label" for="inlineCheckbox1">CVS(เช่น 7-11, Family mart,CJ Express) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="Hyper (เช่น Big C, Tesco,Tops, Central Foodhall)">
                                                        <label class="form-check-label" for="inlineCheckbox1">Hyper (เช่น Big C, Tesco,Tops, Central Foodhall) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="ร้านขายยาชั้นนำ (เช่น Fascino,P&F,Save Drug,ตำรับไทย)">
                                                        <label class="form-check-label" for="inlineCheckbox1">ร้านขายยาชั้นนำ (เช่น Fascino,P&F,Save Drug,ตำรับไทย) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="ร้านขายยาทั่วไปใกล้บ้าน">
                                                        <label class="form-check-label" for="inlineCheckbox1">ร้านขายยาทั่วไปใกล้บ้าน </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="ร้านสุขภาพและความงาม (เช่น Watsons,Boots,TSURUHA,eveandboy)">
                                                        <label class="form-check-label" for="inlineCheckbox1">ร้านสุขภาพและความงาม (เช่น Watsons,Boots,TSURUHA,eveandboy) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="Shopping Online (เช่น Shopee, Lazada, JD Central)">
                                                        <label class="form-check-label" for="inlineCheckbox1">Shopping Online (เช่น Shopee, Lazada, JD Central) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="ช่องทางตรงกับบริษัท (เช่น ขายตรง,โทรสั่งกับบริษัท,สั่งกับเวปไซต์หรือFacebookของบริษัท)">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่องทางตรงกับบริษัท (เช่น ขายตรง,โทรสั่งกับบริษัท,สั่งกับเวปไซต์หรือFacebookของบริษัท) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="ช่องทางTV (เช่น TV Direct, True Select,O Shopping)">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่องทางTV (เช่น TV Direct, True Select,O Shopping) </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 10 -->
                                            <label class="fieldlabels">11.ท่านคิดว่า ปัจจัยใดที่มีอิทธิพลต่อการเลือกซื้อผลิตภัณฑ์วิตามินของท่าน: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check"> 
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="influence" id="inlineCheckbox1" value="ตัวท่านเอง">
                                                            <label class="form-check-label" for="inlineCheckbox1">ตัวท่านเอง </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="influence" id="inlineCheckbox1" value="เพื่อน / ครอบครัว / ที่ทำงาน">
                                                            <label class="form-check-label" for="inlineCheckbox1">เพื่อน / ครอบครัว / ที่ทำงาน </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="influence" id="inlineCheckbox1" value="พรีเซนเตอร์ (superstar , celebrity)">
                                                            <label class="form-check-label" for="inlineCheckbox1">พรีเซนเตอร์ (superstar , celebrity) </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="influence" id="inlineCheckbox1" value="อินฟูเอนเซอร์ (Net idol, Youtuber, Tiktoker)">
                                                            <label class="form-check-label" for="inlineCheckbox1">อินฟูเอนเซอร์ (Net idol, Youtuber, Tiktoker) </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="influence" id="inlineCheckbox1" value="ผู้เชี่ยวชาญ นักวิชาการ ผู้ที่มีความน่าเชื่อถือ (Blogger)">
                                                            <label class="form-check-label" for="inlineCheckbox1">ผู้เชี่ยวชาญ นักวิชาการ ผู้ที่มีความน่าเชื่อถือ (Blogger) </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="influence" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                            <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                        </div>
                                                </div>
                                            </div> <br>
                                            <label class="fieldlabels">12.แหล่งโฆษณาที่ท่านคิดว่าน่าเชื่อถือ 
(เลือกได้มากกว่า1ข้อ): *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check"> 
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="advert[]" id="inlineCheckbox1" value="TV (โปรดระบุช่องหรือรายการที่ท่านรับชม)">
                                                            <label class="form-check-label" for="inlineCheckbox1">TV (โปรดระบุช่องหรือรายการที่ท่านรับชม) </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="advert[]" id="inlineCheckbox1" value="Online (โปรดระบุแพลตฟอร์มที่ท่านรับชม)">
                                                            <label class="form-check-label" for="inlineCheckbox1">Online (โปรดระบุแพลตฟอร์มที่ท่านรับชม) </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="advert[]" id="inlineCheckbox1" value="Radio (โปรดระบุคลื่นวิทยุหรือรายการที่ท่านรับชม)">
                                                            <label class="form-check-label" for="inlineCheckbox1">Radio (โปรดระบุคลื่นวิทยุหรือรายการที่ท่านรับชม) </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="advert[]" id="inlineCheckbox1" value="สื่อสิ่งพิมพ์ (โปรดระบุคอลัมน์ หรือ ชื่อสิ่งพิมพ์ที่ท่านรับชม)">
                                                            <label class="form-check-label" for="inlineCheckbox1">สื่อสิ่งพิมพ์ (โปรดระบุคอลัมน์ หรือ ชื่อสิ่งพิมพ์ที่ท่านรับชม) </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="advert[]" id="inlineCheckbox1" value="สื่อกลางแจ้ง(โปรดระบุสื่อกลางแจ้งที่ท่านพบเช่น บิลบอร์ด,ป้ายโฆษณา,สติกเกอร์ติดรถ)">
                                                            <label class="form-check-label" for="inlineCheckbox1">สื่อกลางแจ้ง(โปรดระบุสื่อกลางแจ้งที่ท่านพบเช่น บิลบอร์ด,ป้ายโฆษณา,สติกเกอร์ติดรถ) </label>
                                                        </div>
                                                </div>
                                            </div> <br>
                                            <label class="fieldlabels">13.ท่านคิดว่า โปรโมชั่น/การส่งเสริมการขายใด ที่จะมีผลต่อการตัดสินใจซื้อผลิตภัณฑ์วิตามิน มากที่สุด: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="การลดราคา ณ.จุดขาย">
                                                        <label class="form-check-label" for="inlineCheckbox1">การลดราคา ณ.จุดขาย </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="การแจกสินค้าทดลองใช้ / สินค้าตัวอย่าง">
                                                        <label class="form-check-label" for="inlineCheckbox1">การแจกสินค้าทดลองใช้ / สินค้าตัวอย่าง </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="การได้รับคูปองส่วนลด">
                                                        <label class="form-check-label" for="inlineCheckbox1">การได้รับคูปองส่วนลด </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="การซื้อสินค้า 1แถม1 / 2แถม1">
                                                        <label class="form-check-label" for="inlineCheckbox1">การซื้อสินค้า 1แถม1 / 2แถม1 </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="การส่งชิงโชค">
                                                        <label class="form-check-label" for="inlineCheckbox1">การส่งชิงโชค </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="การสะสมแลกสินค้า">
                                                        <label class="form-check-label" for="inlineCheckbox1">การสะสมแลกสินค้า </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <label class="fieldlabels">14.ช่องทางออนไลน์ที่ท่านใช้งานบ่อยที่สุด
(เลือกได้มากกว่า1ข้อ): *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check"> 
                                                        <input class="form-check-input" type="checkbox" name="soical[]" id="inlineCheckbox1" value="Facebook">
                                                        <label class="form-check-label" for="inlineCheckbox1">Facebook </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="soical[]" id="inlineCheckbox1" value="Instagarm">
                                                        <label class="form-check-label" for="inlineCheckbox1">Instagarm </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="soical[]" id="inlineCheckbox1" value="Line">
                                                        <label class="form-check-label" for="inlineCheckbox1">Line </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="soical[]" id="inlineCheckbox1" value="Tiktok">
                                                        <label class="form-check-label" for="inlineCheckbox1">Tiktok </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="soical[]" id="inlineCheckbox1" value="Twitter">
                                                        <label class="form-check-label" for="inlineCheckbox1">Twitter </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="soical[]" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <label class="fieldlabels">15.กรณีสินค้าใหม่หรือสินค้าที่ไม่เคยรับประทาน ท่านมีวิธีหาข้อมูลหรือพิจารณาจากสื่อใด
(เลือกได้มากกว่า1ข้อ): *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider" id="inlineCheckbox1" value="รีวิวจาก Bloggers/รีวิวจาก Bloggers/Influencers (โปรดระบุBloggers/Influencersที่ท่านติดตาม)">
                                                        <label class="form-check-label" for="inlineCheckbox1">รีวิวจาก Bloggers/รีวิวจาก Bloggers/Influencers (โปรดระบุBloggers/Influencersที่ท่านติดตาม) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider" id="inlineCheckbox1" value="ค้นหาข้อมูลจาก Google">
                                                        <label class="form-check-label" for="inlineCheckbox1">ค้นหาข้อมูลจาก Google </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider" id="inlineCheckbox1" value="ค้นหาข้อมูลจากกระทู้ Pantip">
                                                        <label class="form-check-label" for="inlineCheckbox1">ค้นหาข้อมูลจากกระทู้ Pantip </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider" id="inlineCheckbox1" value="สอบถามกับทางบริษัทผู้จัดจำหน่าย (โปรดระบุวิธีการสอบถามเช่น โทรศัพท์สอบถาม,สอบถามผ่านเวปไซต์)">
                                                        <label class="form-check-label" for="inlineCheckbox1">สอบถามกับทางบริษัทผู้จัดจำหน่าย (โปรดระบุวิธีการสอบถามเช่น โทรศัพท์สอบถาม,สอบถามผ่านเวปไซต์) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider" id="inlineCheckbox1" value="หาข้อมูลสินค้าเพิ่มเติมที่เวปไซต์แบรนด์">
                                                        <label class="form-check-label" for="inlineCheckbox1">หาข้อมูลสินค้าเพิ่มเติมที่เวปไซต์แบรนด์ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider" id="inlineCheckbox1" value="ถามพนักงานขาย ตัวแทน เภสัช">
                                                        <label class="form-check-label" for="inlineCheckbox1">ถามพนักงานขาย ตัวแทน เภสัช </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider" id="inlineCheckbox1" value="ถามเพื่อนหรือคนในครอบครัว">
                                                        <label class="form-check-label" for="inlineCheckbox1">ถามเพื่อนหรือคนในครอบครัว </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <label class="fieldlabels">16.ถ้าท่านต้องการซื้อผลิตภัณฑ์วิตามิน คุณสมบัติใดบ้างที่ท่านใช้พิจารณาในการตัดสินใจซื้อ 
(เลือกได้มากกว่า1ข้อ): *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature" id="inlineCheckbox1" value="ส่วนผสม และ แหล่งที่มาของวัตถุดิบ">
                                                        <label class="form-check-label" for="inlineCheckbox1">ส่วนผสม และ แหล่งที่มาของวัตถุดิบ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature" id="inlineCheckbox1" value="คุณภาพ มาตรฐานการผลิต">
                                                        <label class="form-check-label" for="inlineCheckbox1">คุณภาพ มาตรฐานการผลิต </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature" id="inlineCheckbox1" value="คุณภาพ มาตรฐานการผลิต">
                                                        <label class="form-check-label" for="inlineCheckbox1">คุณภาพ มาตรฐานการผลิต </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature" id="inlineCheckbox1" value="การประชาสัมพันธ์ / แนะนำ">
                                                        <label class="form-check-label" for="inlineCheckbox1">การประชาสัมพันธ์ / แนะนำ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature" id="inlineCheckbox1" value="สรรพคุณ/คุณประโยชน์ของผลิตภัณฑ์">
                                                        <label class="form-check-label" for="inlineCheckbox1">สรรพคุณ/คุณประโยชน์ของผลิตภัณฑ์ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature" id="inlineCheckbox1" value="ราคา/โปรโมชั่น">
                                                        <label class="form-check-label" for="inlineCheckbox1">ราคา/โปรโมชั่น </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature" id="inlineCheckbox1" value="ตรายี่ห้อ">
                                                        <label class="form-check-label" for="inlineCheckbox1">ตรายี่ห้อ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature" id="inlineCheckbox1" value="บรรจุภัณฑ์">
                                                        <label class="form-check-label" for="inlineCheckbox1">บรรจุภัณฑ์ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div> 
                                            </div> <br>
                                            <label class="fieldlabels">17.ท่านเคยใช้ผลิตภัณฑ์วิตามินยี่ห้อใดบ้าง : *</label>
                                            <input type="input" name="brand" id="brand" placeholder="โปรดระบุ"  class="form-control" />  <br>
                                            <label class="fieldlabels">18.สาเหตุที่ท่านเลือกซื้อผลิตภัณฑ์วิตามินยื่ห้อดังกล่าว : *</label>
                                            <input type="input" name="case_question" id="case_question" placeholder="โปรดระบุ"  class="form-control" />  <br>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="terms_and_conditions" id="terms_and_conditions" value="1">
                                            <label class="form-check-label" for="terms_and_conditions">ยอมรับเงื่อนไข</label>
                                        </div>
                                    </div>
                                </div> 
                                <input type="submit" name="next" id="next" class="next action-button" value="submit" /> 
                                <!-- disabled="disabled" -->
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                            <fieldset class="part-2">
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">ไม่เคยใช้: วิตามิน</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps"></h2>
                                        </div>
                                        <div class="col-12">
                                            <label class="fieldlabels">1.สาเหตุที่ท่านไม่ทานผลิตภัณฑ์วิตามิน  
(เลือกได้มากกว่า1ข้อ) : *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check"> 
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="case_eat[]" id="inlineCheckbox1" value="ราคาสูงไม่สอดคล้องกับคุณภาพ">
                                                        <label class="form-check-label" for="inlineCheckbox1">ราคาสูงไม่สอดคล้องกับคุณภาพ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="case_eat[]" id="inlineCheckbox1" value="ยังไม่ถึงวัยที่ต้องการรับวิตามิน">
                                                        <label class="form-check-label" for="inlineCheckbox1">ยังไม่ถึงวัยที่ต้องการรับวิตามิน </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="case_eat[]" id="inlineCheckbox1" value="ไม่มีข้อมูลประกอบการตัดสินใจ">
                                                        <label class="form-check-label" for="inlineCheckbox1">ไม่มีข้อมูลประกอบการตัดสินใจ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="case_eat[]" id="inlineCheckbox1" value="ไม่เห็นความจำเป็นในการรับประทานวิตามิน">
                                                        <label class="form-check-label" for="inlineCheckbox1">ไม่เห็นความจำเป็นในการรับประทานวิตามิน </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="case_eat[]" id="inlineCheckbox1" value="คิดว่าบริโภคสินค้าทดแทน เช่น ผัก ผลไม้ ก็เพียงพอแล้ว">
                                                        <label class="form-check-label" for="inlineCheckbox1">คิดว่าบริโภคสินค้าทดแทน เช่น ผัก ผลไม้ ก็เพียงพอแล้ว </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="case_eat[]" id="inlineCheckbox1" value="ไม่พบแบรนด์ที่น่าสนใจ หรือ น่าเชื่อถือ">
                                                        <label class="form-check-label" for="inlineCheckbox1">ไม่พบแบรนด์ที่น่าสนใจ หรือ น่าเชื่อถือ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="case_eat[]" id="inlineCheckbox1" value="สิ้นเปลือง ">
                                                        <label class="form-check-label" for="inlineCheckbox1">สิ้นเปลือง  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="case_eat[]" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 1 -->
                                            <label class="fieldlabels">2.ท่านรู้จักผลิตภัณฑ์วิตามินประเภทใดบ้าง
(เลือกได้มากกว่า1ข้อ) : *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check"> 
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="วิตามินเอ Vitamin A">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินเอ Vitamin A </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="วิตามินบีรวม Vitamin B Complex">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินบีรวม Vitamin B Complex </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="วิตามินบี12 Vitamin B12">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินบี12 Vitamin B12 </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="วิตามินบี7 Vitamin B7">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินบี7 Vitamin B7 </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="วิตามินบี8 Vitamin B8">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินบี8 Vitamin B8 </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="วิตามินซี Vitamin C">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินซี Vitamin C </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="วิตามินดี Vitamin D">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินดี Vitamin D </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="วิตามินอี  Vitamin E">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินอี  Vitamin E </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="วิตามินรวม  Multi Vitamins">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินรวม  Multi Vitamins </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="แคลเซียม Calcium">
                                                        <label class="form-check-label" for="inlineCheckbox1">แคลเซียม Calcium </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="ซิงค์ Zinc">
                                                        <label class="form-check-label" for="inlineCheckbox1">ซิงค์ Zinc </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="น้ำมันปลา Fish Oil">
                                                        <label class="form-check-label" for="inlineCheckbox1">น้ำมันปลา Fish Oil </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="ไม่รู้จักเลย">
                                                        <label class="form-check-label" for="inlineCheckbox1">ไม่รู้จักเลย </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 2 --> 
                                            <label class="fieldlabels">3.ถ้าท่านจะตัดสินใจรับประทาน ท่านจะเลือกผลิตภัณฑ์วิตามินใด
(เลือกได้มากกว่า1ข้อ) : *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="วิตามินเอ Vitamin A">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินเอ Vitamin A </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="วิตามินบีรวม Vitamin B Complex">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินบีรวม Vitamin B Complex </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="วิตามินบี12 Vitamin B12">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินบี12 Vitamin B12 </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="วิตามินบี7 Vitamin B7">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินบี7 Vitamin B7 </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="วิตามินบี8 Vitamin B8">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินบี8 Vitamin B8 </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="วิตามินซี Vitamin C">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินซี Vitamin C </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="วิตามินดี Vitamin D">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินดี Vitamin D </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="วิตามินอี  Vitamin E">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินอี  Vitamin E </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="วิตามินรวม  Multi Vitamins">
                                                        <label class="form-check-label" for="inlineCheckbox1">วิตามินรวม  Multi Vitamins </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="แคลเซียม Calcium">
                                                        <label class="form-check-label" for="inlineCheckbox1">แคลเซียม Calcium </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="ซิงค์ Zinc">
                                                        <label class="form-check-label" for="inlineCheckbox1">ซิงค์ Zinc </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="น้ำมันปลา Fish Oil">
                                                        <label class="form-check-label" for="inlineCheckbox1">น้ำมันปลา Fish Oil </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="ไม่รู้จักเลย">
                                                        <label class="form-check-label" for="inlineCheckbox1">ไม่รู้จักเลย </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="decide[]" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 3 -->
                                            <label class="fieldlabels">4.ท่านให้ความสำคัญกับเรื่องใด มากที่สุด
(เลือกได้มากกว่า1ข้อ) : *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check"> 
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ประสิทธิภาพด้านการมองเห็น">
                                                        <label class="form-check-label" for="inlineCheckbox1">ประสิทธิภาพด้านการมองเห็น </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="เสริมภูมิต้านทานให้ร่างกาย">
                                                        <label class="form-check-label" for="inlineCheckbox1">เสริมภูมิต้านทานให้ร่างกาย </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ช่วยชะลอความแก่และลดริ้วรอย">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยชะลอความแก่และลดริ้วรอย </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ลดความรุนแรงของไข้หวัด">
                                                        <label class="form-check-label" for="inlineCheckbox1">ลดความรุนแรงของไข้หวัด </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ช่วยชะลอหรือป้องกันโรคเกี่ยวกับกระดูก">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยชะลอหรือป้องกันโรคเกี่ยวกับกระดูก </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ช่วยในเรื่องระบบการขับถ่าย ">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยในเรื่องระบบการขับถ่าย  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ช่วยลดความรู้สึกอ่อนล้า อ่อนเพลีย">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยลดความรู้สึกอ่อนล้า อ่อนเพลีย </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ความสามารถในการจดจำและการเรียนรู้ ">
                                                        <label class="form-check-label" for="inlineCheckbox1">ความสามารถในการจดจำและการเรียนรู้  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ช่วยในการเผาผลาญ ไขมัน">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยในการเผาผลาญ ไขมัน </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="ช่วยควบคุมน้ำหนัก">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยควบคุมน้ำหนัก </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="importen[]" id="inlineCheckbox1" value="บำรุงผิว/ผม/เล็บ ลดสิว">
                                                        <label class="form-check-label" for="inlineCheckbox1">บำรุงผิว/ผม/เล็บ ลดสิว </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 4 -->
                                            <label class="fieldlabels">5.ส่วนผสมหลักของผลิตภัณฑ์วิตามินที่ท่านต้องการคือข้อใด : *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="inredient" id="inlineCheckbox1" value="สารสกัดจากผลไม้">
                                                        <label class="form-check-label" for="inlineCheckbox1">สารสกัดจากผลไม้ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="inredient" id="inlineCheckbox1" value="สารสกัดจากดอกไม้ ">
                                                        <label class="form-check-label" for="inlineCheckbox1">สารสกัดจากดอกไม้  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="inredient" id="inlineCheckbox1" value="สารสกัดจากสมุนไพร">
                                                        <label class="form-check-label" for="inlineCheckbox1">สารสกัดจากสมุนไพร </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="inredient" id="inlineCheckbox1" value="สารสังเคราะห์">
                                                        <label class="form-check-label" for="inlineCheckbox1">สารสังเคราะห์ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="inredient" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 5 -->
                                            <label class="fieldlabels">6.รูปแบบของผลิตภัณฑ์วิตามินที่ท่านต้องการทาน : *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แบบเม็ด บรรจุกระปุก">
                                                        <label class="form-check-label" for="inlineCheckbox1">แบบเม็ด บรรจุกระปุก </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แบบเม็ด บรรจุแผง">
                                                        <label class="form-check-label" for="inlineCheckbox1">แบบเม็ด บรรจุแผง </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แบบผง บรรจุกระปุกชงดื่ม">
                                                        <label class="form-check-label" for="inlineCheckbox1">แบบผง บรรจุกระปุกชงดื่ม </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แบบผง บรรจุซองฉีกซองรับประทาน">
                                                        <label class="form-check-label" for="inlineCheckbox1">แบบผง บรรจุซองฉีกซองรับประทาน </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แบบขนม(เยลลี่/คาราจีแนน)บรรจุกล่อง">
                                                        <label class="form-check-label" for="inlineCheckbox1">แบบขนม(เยลลี่/คาราจีแนน)บรรจุกล่อง </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แแบบขนม(เยลลี่/คาราจีแนน)บรรจุกระปุก">
                                                        <label class="form-check-label" for="inlineCheckbox1">แแบบขนม(เยลลี่/คาราจีแนน)บรรจุกระปุก </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="แบบเครื่องดื่ม/น้ำดื่มผสมวิตามิน">
                                                        <label class="form-check-label" for="inlineCheckbox1">แบบเครื่องดื่ม/น้ำดื่มผสมวิตามิน </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="type_vitamin" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 6 -->
                                            <label class="fieldlabels">7.จำนวนเงินที่ท่านสามารถซื้อผลิตภัณฑ์วิตามินในแต่ละครั้งอยู่ที่เท่าใด : *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amount" id="inlineCheckbox1" value="ต่ำกว่า 200 บาท">
                                                        <label class="form-check-label" for="inlineCheckbox1">ต่ำกว่า 200 บาท </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amount" id="inlineCheckbox1" value="201-500 บาท">
                                                        <label class="form-check-label" for="inlineCheckbox1">201-500 บาท </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amount" id="inlineCheckbox1" value="501-900 บาท">
                                                        <label class="form-check-label" for="inlineCheckbox1">501-900 บาท </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amount" id="inlineCheckbox1" value="901-1,000 บาท">
                                                        <label class="form-check-label" for="inlineCheckbox1">901-1,000 บาท </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amount" id="inlineCheckbox1" value="1,000 บาทขึ้นไป">
                                                        <label class="form-check-label" for="inlineCheckbox1">1,000 บาทขึ้นไป </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 7 -->
                                            <label class="fieldlabels">8.ท่านคิดว่าควรเลือกซื้อผลิตภัณฑ์วิตามินจากสถานที่ใด
(เลือกได้มากกว่า1ข้อ) : *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check"> 
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="CVS(เช่น 7-11, Family mart,CJ Express)">
                                                            <label class="form-check-label" for="inlineCheckbox1">CVS(เช่น 7-11, Family mart,CJ Express) </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="Hyper (เช่น Big C, Tesco,Tops, Central Foodhall)">
                                                            <label class="form-check-label" for="inlineCheckbox1">Hyper (เช่น Big C, Tesco,Tops, Central Foodhall) </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="ร้านขายยาชั้นนำ (เช่น Fascino,P&F,Save Drug,ตำรับไทย)">
                                                            <label class="form-check-label" for="inlineCheckbox1">ร้านขายยาชั้นนำ (เช่น Fascino,P&F,Save Drug,ตำรับไทย) </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="ร้านขายยาทั่วไปใกล้บ้าน">
                                                            <label class="form-check-label" for="inlineCheckbox1">ร้านขายยาทั่วไปใกล้บ้าน </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="ร้านสุขภาพและความงาม (เช่น Watsons,Boots,TSURUHA,eveandboy)">
                                                            <label class="form-check-label" for="inlineCheckbox1">ร้านสุขภาพและความงาม (เช่น Watsons,Boots,TSURUHA,eveandboy) </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="Shopping Online (เช่น Shopee, Lazada, JD Central)">
                                                            <label class="form-check-label" for="inlineCheckbox1">Shopping Online (เช่น Shopee, Lazada, JD Central) </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="ช่องทางตรงกับบริษัท (เช่น ขายตรง,โทรสั่งกับบริษัท,สั่งกับเวปไซต์หรือFacebookของบริษัท)">
                                                            <label class="form-check-label" for="inlineCheckbox1">ช่องทางตรงกับบริษัท (เช่น ขายตรง,โทรสั่งกับบริษัท,สั่งกับเวปไซต์หรือFacebookของบริษัท) </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="location[]" id="inlineCheckbox1" value="ช่องทางTV (เช่น TV Direct, True Select,O Shopping)">
                                                            <label class="form-check-label" for="inlineCheckbox1">ช่องทางTV (เช่น TV Direct, True Select,O Shopping) </label>
                                                        </div>
                                                </div>
                                            </div> <br>
                                            <!-- 8 -->
                                            <label class="fieldlabels">9.ท่านคิดว่า ปัจจัยใดที่จะมีอิทธิพลต่อการเลือกซื้อผลิตภัณฑ์วิตามินของท่านในการเลือกซื้อครั้งแรก : *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="influence" id="inlineCheckbox1" value="ตัวท่านเอง">
                                                        <label class="form-check-label" for="inlineCheckbox1">ตัวท่านเอง </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="influence" id="inlineCheckbox1" value="เพื่อน / ครอบครัว / ที่ทำงาน">
                                                        <label class="form-check-label" for="inlineCheckbox1">เพื่อน / ครอบครัว / ที่ทำงาน </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="influence" id="inlineCheckbox1" value="พรีเซนเตอร์ (superstar , celebrity)">
                                                        <label class="form-check-label" for="inlineCheckbox1">พรีเซนเตอร์ (superstar , celebrity) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="influence" id="inlineCheckbox1" value="อินฟูเอนเซอร์ (Net idol, Youtuber, Tiktoker)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อินฟูเอนเซอร์ (Net idol, Youtuber, Tiktoker) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="influence" id="inlineCheckbox1" value="ผู้เชี่ยวชาญ นักวิชาการ ผู้ที่มีความน่าเชื่อถือ (Blogger)">
                                                        <label class="form-check-label" for="inlineCheckbox1">ผู้เชี่ยวชาญ นักวิชาการ ผู้ที่มีความน่าเชื่อถือ (Blogger) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="influence" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 9 -->
                                            <label class="fieldlabels">10.แหล่งโฆษณาที่ท่านคิดว่าน่าเชื่อถือ 
(เลือกได้มากกว่า1ข้อ) : *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check"> 
                                                        <input class="form-check-input" type="checkbox" name="advert[]" id="inlineCheckbox1" value="TV (โปรดระบุช่องหรือรายการที่ท่านรับชม)">
                                                        <label class="form-check-label" for="inlineCheckbox1">TV (โปรดระบุช่องหรือรายการที่ท่านรับชม) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="advert[]" id="inlineCheckbox1" value="Online (โปรดระบุแพลตฟอร์มที่ท่านรับชม)">
                                                        <label class="form-check-label" for="inlineCheckbox1">Online (โปรดระบุแพลตฟอร์มที่ท่านรับชม) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="advert[]" id="inlineCheckbox1" value="Radio (โปรดระบุคลื่นวิทยุหรือรายการที่ท่านรับชม)">
                                                        <label class="form-check-label" for="inlineCheckbox1">Radio (โปรดระบุคลื่นวิทยุหรือรายการที่ท่านรับชม) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="advert[]" id="inlineCheckbox1" value="สื่อสิ่งพิมพ์ (โปรดระบุคอลัมน์ หรือ ชื่อสิ่งพิมพ์ที่ท่านรับชม)">
                                                        <label class="form-check-label" for="inlineCheckbox1">สื่อสิ่งพิมพ์ (โปรดระบุคอลัมน์ หรือ ชื่อสิ่งพิมพ์ที่ท่านรับชม) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="advert[]" id="inlineCheckbox1" value="สื่อกลางแจ้ง(โปรดระบุสื่อกลางแจ้งที่ท่านพบเช่น บิลบอร์ด,ป้ายโฆษณา,สติกเกอร์ติดรถ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">สื่อกลางแจ้ง(โปรดระบุสื่อกลางแจ้งที่ท่านพบเช่น บิลบอร์ด,ป้ายโฆษณา,สติกเกอร์ติดรถ) </label>
                                                    </div>
                                                </div>   
                                            </div> <br>
                                            <!-- 10 -->
                                            <label class="fieldlabels">11.ท่านคิดว่า โปรโมชั่น/การส่งเสริมการขายใด ที่จะมีผลต่อการตัดสินใจซื้อผลิตภัณฑ์วิตามิน มากที่สุด : *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="การลดราคา ณ.จุดขาย">
                                                        <label class="form-check-label" for="inlineCheckbox1">การลดราคา ณ.จุดขาย </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="การแจกสินค้าทดลองใช้ / สินค้าตัวอย่าง">
                                                        <label class="form-check-label" for="inlineCheckbox1">การแจกสินค้าทดลองใช้ / สินค้าตัวอย่าง </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="การได้รับคูปองส่วนลด">
                                                        <label class="form-check-label" for="inlineCheckbox1">การได้รับคูปองส่วนลด </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="การซื้อสินค้า 1แถม1 / 2แถม1">
                                                        <label class="form-check-label" for="inlineCheckbox1">การซื้อสินค้า 1แถม1 / 2แถม1 </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="การส่งชิงโชค">
                                                        <label class="form-check-label" for="inlineCheckbox1">การส่งชิงโชค </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="การสะสมแลกสินค้า">
                                                        <label class="form-check-label" for="inlineCheckbox1">การสะสมแลกสินค้า </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="promtion" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 11 -->
                                            <label class="fieldlabels">12.ช่องทางออนไลน์ที่ท่านใช้งานบ่อยที่สุด
(เลือกได้มากกว่า1ข้อ) : *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check"> 
                                                        <input class="form-check-input" type="checkbox" name="soical[]" id="inlineCheckbox1" value="Facebook">
                                                        <label class="form-check-label" for="inlineCheckbox1">Facebook </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="soical[]" id="inlineCheckbox1" value="Instagarm">
                                                        <label class="form-check-label" for="inlineCheckbox1">Instagarm </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="soical[]" id="inlineCheckbox1" value="Line">
                                                        <label class="form-check-label" for="inlineCheckbox1">Line </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="soical[]" id="inlineCheckbox1" value="Tiktok">
                                                        <label class="form-check-label" for="inlineCheckbox1">Tiktok </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="soical[]" id="inlineCheckbox1" value="Twitter">
                                                        <label class="form-check-label" for="inlineCheckbox1">Twitter </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="soical[]" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 12 -->
                                            <label class="fieldlabels">13.กรณีสินค้าใหม่หรือสินค้าที่ไม่เคยรับประทาน ท่านมีวิธีหาข้อมูลหรือพิจารณาจากสื่อใด
(เลือกได้มากกว่า1ข้อ) : *</label>   
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check"> 
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider[]" id="inlineCheckbox1" value="รีวิวจาก Bloggers/รีวิวจาก Bloggers/Influencers (โปรดระบุBloggers/Influencersที่ท่านติดตาม)">
                                                        <label class="form-check-label" for="inlineCheckbox1">รีวิวจาก Bloggers/รีวิวจาก Bloggers/Influencers (โปรดระบุBloggers/Influencersที่ท่านติดตาม) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider[]" id="inlineCheckbox1" value="ค้นหาข้อมูลจาก Google">
                                                        <label class="form-check-label" for="inlineCheckbox1">ค้นหาข้อมูลจาก Google </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider[]" id="inlineCheckbox1" value="ค้นหาข้อมูลจากกระทู้ Pantip">
                                                        <label class="form-check-label" for="inlineCheckbox1">ค้นหาข้อมูลจากกระทู้ Pantip </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider[]" id="inlineCheckbox1" value="สอบถามกับทางบริษัทผู้จัดจำหน่าย (โปรดระบุวิธีการสอบถามเช่น โทรศัพท์สอบถาม,สอบถามผ่านเวปไซต์)">
                                                        <label class="form-check-label" for="inlineCheckbox1">สอบถามกับทางบริษัทผู้จัดจำหน่าย (โปรดระบุวิธีการสอบถามเช่น โทรศัพท์สอบถาม,สอบถามผ่านเวปไซต์) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider[]" id="inlineCheckbox1" value="หาข้อมูลสินค้าเพิ่มเติมที่เวปไซต์แบรนด์">
                                                        <label class="form-check-label" for="inlineCheckbox1">หาข้อมูลสินค้าเพิ่มเติมที่เวปไซต์แบรนด์ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider[]" id="inlineCheckbox1" value="ถามพนักงานขาย ตัวแทน เภสัช">
                                                        <label class="form-check-label" for="inlineCheckbox1">ถามพนักงานขาย ตัวแทน เภสัช </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="consider[]" id="inlineCheckbox1" value="ถามเพื่อนหรือคนในครอบครัว">
                                                        <label class="form-check-label" for="inlineCheckbox1">ถามเพื่อนหรือคนในครอบครัว </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 13 -->
                                            <label class="fieldlabels">14.ถ้าท่านต้องการซื้อผลิตภัณฑ์วิตามิน คุณสมบัติใดบ้างที่ท่านใช้พิจารณาในการตัดสินใจซื้อ 
(เลือกได้มากกว่า1ข้อ) : *</label>   
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check"> 
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature[]" id="inlineCheckbox1" value="ส่วนผสม และ แหล่งที่มาของวัตถุดิบ">
                                                        <label class="form-check-label" for="inlineCheckbox1">ส่วนผสม และ แหล่งที่มาของวัตถุดิบ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature[]" id="inlineCheckbox1" value="คุณภาพ มาตรฐานการผลิต">
                                                        <label class="form-check-label" for="inlineCheckbox1">คุณภาพ มาตรฐานการผลิต </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature[]" id="inlineCheckbox1" value="คุณภาพ มาตรฐานการผลิต">
                                                        <label class="form-check-label" for="inlineCheckbox1">คุณภาพ มาตรฐานการผลิต </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature[]" id="inlineCheckbox1" value="การประชาสัมพันธ์ / แนะนำ">
                                                        <label class="form-check-label" for="inlineCheckbox1">การประชาสัมพันธ์ / แนะนำ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature[]" id="inlineCheckbox1" value="สรรพคุณ/คุณประโยชน์ของผลิตภัณฑ์">
                                                        <label class="form-check-label" for="inlineCheckbox1">สรรพคุณ/คุณประโยชน์ของผลิตภัณฑ์ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature[]" id="inlineCheckbox1" value="ราคา/โปรโมชั่น">
                                                        <label class="form-check-label" for="inlineCheckbox1">ราคา/โปรโมชั่น </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature[]" id="inlineCheckbox1" value="ตรายี่ห้อ">
                                                        <label class="form-check-label" for="inlineCheckbox1">ตรายี่ห้อ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature[]" id="inlineCheckbox1" value="บรรจุภัณฑ์">
                                                        <label class="form-check-label" for="inlineCheckbox1">บรรจุภัณฑ์ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="feature[]" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>  <br>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="terms_and_conditions" id="terms_and_conditions" value="1">
                                            <label class="form-check-label" for="terms_and_conditions">ยอมรับเงื่อนไข</label>
                                        </div>
                                    </div>
                                </div> 
                                <input type="submit" name="next" id="submit" class="next action-button"  value="Submit" /> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Finish:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps"></h2>
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