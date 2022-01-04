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
                                            <label class="fieldlabels">นามสกุล: *</label>  <br>
                                            <input type="text" name="last_name" id="last_name"  class="form-control" placeholder="นามสกุล" /> 
                                        </div>
                                        <div class="col-12">
                                            <!-- tel -->
                                            <label class="fieldlabels">เบอร์โทรศัพท์: *</label>  <br>
                                            <input type="tel" name="tel" id="tel" placeholder="เบอร์โทรศัพท์"  class="form-control" /> 
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
                                            <input type="number" name="age" id="age" placeholder="กรุณาเลือกอายุ"  class="form-control" /> 
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
                                                        <input class="form-check-input" type="checkbox" name="vitamin[]" id="inlineCheckbox2" value="วิตามินอี  Vitamin E">
                                                        <label class="form-check-label" for="inlineCheckbox2">วิตามินอี  Vitamin E </label>
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
                                                        <input class="form-check-input" type="checkbox" name="insert[]" id="inlineCheckbox1" value="ประสิทธิภาพด้านการมองเห็น">
                                                        <label class="form-check-label" for="inlineCheckbox1">ประสิทธิภาพด้านการมองเห็น </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="insert[]" id="inlineCheckbox1" value="เสริมภูมิต้านทานให้ร่างกาย">
                                                        <label class="form-check-label" for="inlineCheckbox1">เสริมภูมิต้านทานให้ร่างกาย </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="insert[]" id="inlineCheckbox1" value="ช่วยชะลอความแก่และลดริ้วรอย">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยชะลอความแก่และลดริ้วรอย </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="insert[]" id="inlineCheckbox1" value="ลดความรุนแรงของไข้หวัด">
                                                        <label class="form-check-label" for="inlineCheckbox1">ลดความรุนแรงของไข้หวัด </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="insert[]" id="inlineCheckbox1" value="ช่วยชะลอหรือป้องกันโรคเกี่ยวกับกระดูก">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยชะลอหรือป้องกันโรคเกี่ยวกับกระดูก </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="insert[]" id="inlineCheckbox1" value="ช่วยในเรื่องระบบการขับถ่าย ">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยในเรื่องระบบการขับถ่าย  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="insert[]" id="inlineCheckbox1" value="ช่วยลดความรู้สึกอ่อนล้า อ่อนเพลีย">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยลดความรู้สึกอ่อนล้า อ่อนเพลีย </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="insert[]" id="inlineCheckbox1" value="ความสามารถในการจดจำและการเรียนรู้ ">
                                                        <label class="form-check-label" for="inlineCheckbox1">ความสามารถในการจดจำและการเรียนรู้  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="insert[]" id="inlineCheckbox1" value="ช่วยในการเผาผลาญ ไขมัน">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยในการเผาผลาญ ไขมัน </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="insert[]" id="inlineCheckbox1" value="ช่วยควบคุมน้ำหนัก">
                                                        <label class="form-check-label" for="inlineCheckbox1">ช่วยควบคุมน้ำหนัก </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="insert[]" id="inlineCheckbox1" value="บำรุงผิว/ผม/เล็บ ลดสิว">
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
                                                            <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="มีประโยชน์">
                                                            <label class="form-check-label" for="inlineCheckbox1">มีประโยชน์ </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="ช่วยบรรเทาหรือป้องกันอาการผิดปกติ/โรคต่างๆได้">
                                                            <label class="form-check-label" for="inlineCheckbox1">ช่วยบรรเทาหรือป้องกันอาการผิดปกติ/โรคต่างๆได้ </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="ต้องการเสริมวิตามิน เนื่องจากได้รับจากอาหารไม่เพียงพอ">
                                                            <label class="form-check-label" for="inlineCheckbox1">ต้องการเสริมวิตามิน เนื่องจากได้รับจากอาหารไม่เพียงพอ </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="ความเคยชิน">
                                                            <label class="form-check-label" for="inlineCheckbox1">ความเคยชิน </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                            <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                        </div>
                                                </div>
                                            </div> <br>
                                            <!-- 3 -->
                                            <label class="fieldlabels">4.ส่วนผสมหลักของผลิตภัณฑ์วิตามินที่ท่านต้องการคือข้อใด: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5 px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="สารสกัดจากผลไม้">
                                                        <label class="form-check-label" for="inlineCheckbox1">สารสกัดจากผลไม้ </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="สารสกัดจากดอกไม้ ">
                                                        <label class="form-check-label" for="inlineCheckbox1">สารสกัดจากดอกไม้  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="สารสกัดจากสมุนไพร ">
                                                        <label class="form-check-label" for="inlineCheckbox1">สารสกัดจากสมุนไพร  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="สารสังเคราะห์ ">
                                                        <label class="form-check-label" for="inlineCheckbox1">สารสังเคราะห์  </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ) ">
                                                        <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ)  </label>
                                                    </div>
                                                </div>
                                            </div>  <br>
                                            <!-- 4 -->
                                            <label class="fieldlabels">5.รูปแบบของผลิตภัณฑ์วิตามินที่ท่านนิยมทาน: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="แบบเม็ด บรรจุกระปุก">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบเม็ด บรรจุกระปุก </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="แบบเม็ด บรรจุแผง">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบเม็ด บรรจุแผง </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="แบบผง บรรจุกระปุกชงดื่ม">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบผง บรรจุกระปุกชงดื่ม </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="แบบผง บรรจุซองฉีกซองรับประทาน">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบผง บรรจุซองฉีกซองรับประทาน </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="แบบขนม(เยลลี่/คาราจีแนน)บรรจุกล่อง">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบขนม(เยลลี่/คาราจีแนน)บรรจุกล่อง </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="แบบขนม(เยลลี่/คาราจีแนน)บรรจุกระปุก">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบขนม(เยลลี่/คาราจีแนน)บรรจุกระปุก </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="แบบเครื่องดื่ม/น้ำดื่มผสมวิตามิน">
                                                            <label class="form-check-label" for="inlineCheckbox1">แบบเครื่องดื่ม/น้ำดื่มผสมวิตามิน </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="อื่นๆ(โปรดระบุ)">
                                                            <label class="form-check-label" for="inlineCheckbox1">อื่นๆ(โปรดระบุ) </label>
                                                        </div>
                                                </div>
                                            </div> <br>
                                            <!-- 5 -->
                                            <label class="fieldlabels">6.จำนวนเงินที่ท่านใช้ในการเลือกซื้อผลิตภัณฑ์วิตามินในแต่ละครั้งอยู่ที่เท่าใด: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="ต่ำกว่า 200 บาท">
                                                        <label class="form-check-label" for="inlineCheckbox1">ต่ำกว่า 200 บาท </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="201-500 บาท">
                                                        <label class="form-check-label" for="inlineCheckbox1">201-500 บาท </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="501-900 บาท">
                                                        <label class="form-check-label" for="inlineCheckbox1">501-900 บาท </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="901-1,000 บาท">
                                                        <label class="form-check-label" for="inlineCheckbox1">901-1,000 บาท </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="1,000 บาทขึ้นไป">
                                                        <label class="form-check-label" for="inlineCheckbox1">1,000 บาทขึ้นไป </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 6 -->
                                            <label class="fieldlabels">7.ท่านซื้อผลิตภัณฑ์วิตามินบ่อยเพียงไร: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="น้อยกว่า 1 เดือนต่อครั้ง">
                                                        <label class="form-check-label" for="inlineCheckbox1">น้อยกว่า 1 เดือนต่อครั้ง </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="ประมาณ 1 – 3 เดือนต่อครั้ง">
                                                        <label class="form-check-label" for="inlineCheckbox1">ประมาณ 1 – 3 เดือนต่อครั้ง </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="ประมาณ 4 –  6เดือนต่อครั้ง">
                                                        <label class="form-check-label" for="inlineCheckbox1">ประมาณ 4 –  6เดือนต่อครั้ง </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="มากกว่า 6เดือนต่อครั้ง">
                                                        <label class="form-check-label" for="inlineCheckbox1">มากกว่า 6เดือนต่อครั้ง </label>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <!-- 7 -->
                                            <label class="fieldlabels">8.ท่านรับประทานวิตามินร่วมกันกี่ชนิดใน 1 วัน: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="น้อยกว่า 1 ชนิด">
                                                        <label class="form-check-label" for="inlineCheckbox1">น้อยกว่า 1 ชนิด </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="2-3 ชนิด">
                                                        <label class="form-check-label" for="inlineCheckbox1">2-3 ชนิด </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="4-6 ชนิด">
                                                        <label class="form-check-label" for="inlineCheckbox1">4-6 ชนิด </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="why[]" id="inlineCheckbox1" value="6 ชนิด ขึ้นไป">
                                                        <label class="form-check-label" for="inlineCheckbox1">6 ชนิด ขึ้นไป </label>
                                                    </div>
                                                </div>
                                            </div>  <br>
                                            <!-- 8 -->
                                            <label class="fieldlabels">9.ท่านรับรู้ข้อมูลผลิตภัณฑ์วิตามินที่ทานรับประทานในปัจจุบันจากสื่อใด: *</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div> 
                                <input type="button" name="next" class="next action-button" value="Next" /> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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