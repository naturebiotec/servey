<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบสอบถามเพื่อการพัฒนาสินค้าของบริษัท</title>
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
                    <img src="./asset/img/NB - แบบสอบถาม 2022 - 02.jpg" alt="" class="img-fluid" style="border-radius: 10px;">
                    <form id="msform"  name="form"  method="post" action="./database/servey_db.php">
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
                                <div class="row" style="border: 1px solid #dddddd; border-radius: 5px;">
                                    <input type="hidden" class="form-control" name="UID" id="UID">
                                    <!-- UID -->
                                    <div class="col-6 br_pre">
                                        <label class="fieldlabels">ชื่อ :</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <!-- name -->
                                    <div class="col-6 br_pre">
                                        <label class="fieldlabels">นามสกุล :</label>
                                        <input type="text" class="form-control" name="last_name" id="last_name">
                                    </div>
                                    <!-- last_name -->
                                    <div class="col-12 br_pre">
                                        <label class="fieldlabels">เบอร์โทรศัพท์ :</label>
                                        <input type="tel" maxlength="10" class="form-control" name="tel" id="tel">
                                    </div>
                                    <!-- tel -->
                                    <div class="col-6 br_pre">
                                        <label class="fieldlabels">เพศ :</label>
                                        <select name="gender" id="gender" class="custom-select">
                                            <option selected disabled>กรุณาเลือกเพศ</option>
                                            <option value="Male">ชาย</option>
                                            <option value="Female">หญิง</option>
                                            <option value="LGBT">LGBT</option>
                                        </select>
                                    </div>
                                    <!-- gender -->
                                    <div class="col-6 br_pre">
                                        <label class="fieldlabels">อายุ :</label>
                                        <input type="text" class="form-control" maxlength="2">
                                    </div>
                                    <!-- age -->
                                    <div class="col-6 br_pre">
                                        <label class="fieldlabels">อาชีพ :</label>
                                        <select name="job" id="job" class="custom-select">
                                            <option  selected disabled>กรุณาเลือกอาชีพ</option>
                                            <option value="พนักงานเอกชน">พนักงานเอกชน</option>
                                            <option value="ข้าราชการ/พนักงานรัฐวิสาหกิจ">ข้าราชการ/พนักงานรัฐวิสาหกิจ</option>
                                            <option value="แม่บ้าน/พ่อบ้าน">แม่บ้าน/พ่อบ้าน</option>
                                            <option value="นักเรียน/นักศึกษา">นักเรียน/นักศึกษา</option>
                                            <option value="รับจ้างทั่วไป">รับจ้างทั่วไป</option>
                                            <option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
                                        </select>
                                    </div>
                                    <!-- job -->
                                    <div class="col-6 br_pre">
                                        <label class="fieldlabels">รายได้ :</label>
                                        <select name="income" id="income" class="custom-select">
                                            <option disabled selected>กรุณาเลือกรายได้</option>
                                            <option value="ต่ำกว่า 10,000บาท">ต่ำกว่า 10,000บาท</option>
                                            <option value="10,001-20,000บาท">10,001-20,000บาท</option>
                                            <option value="20,001-30,000บาท">20,001-30,000บาท</option>
                                            <option value="30,001-40,000บาท">30,001-40,000บาท</option>
                                            <option value="มากกว่า 40,001บาท">มากกว่า 40,001บาท</option>
                                        </select>
                                    </div>
                                    <!-- income -->
                                    <div class="col-12 br_pre">
                                        <label class="fieldlabels">ที่อยู่ในการจัดส่งสินค้า :</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="address">ที่อยู่</label>
                                                    <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                                                </div>
                                                <div class="col-6 br_pre">
                                                    <label for="district">ตำบล</label>
                                                    <input type="text" class="form-control" name="district" id="district">
                                                </div>
                                                <div class="col-6 br_pre">
                                                    <label for="amphoe">อำเภอ</label>
                                                    <input type="text" class="form-control" name="amphoe" id="amphoe">
                                                </div>
                                                <div class="col-6 br_pre">
                                                    <label for="provices">จังหวัด</label>
                                                    <input type="text" class="form-control" name="provices" id="provices">
                                                </div>
                                                <div class="col-6 br_pre">
                                                    <label for="zip_code">รหัสไปรษณีย์</label>
                                                    <input type="text" class="form-control" maxlength="5" name="zip_code" id="zip_code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- address -->
                                    <div class="col-12 br_pre">
                                        <label class="fieldlabels">สถานะของผู้ตอบแบบสอบถาม :</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" name="status_inquiry[]" id="status_inquiry_used" value="เคย">
                                                <label class="custom-control-label" for="status_inquiry_used">เคย ใช้ผลิตภัณฑ์ของเนเจอร์ไบโอเทค(โปรดเลือก): </label>
                                                <select name="status_inquiry[]" id="status_inquiry" class="custom-select hidden-other-select">
                                                    <option disabled selected>กรุณาเลือกผลิตภัณฑ์</option>
                                                    <option value="หลินจือมิน">หลินจือมิน</option>
                                                    <option value="หลินจือมินแองเจิ้ล">หลินจือมินแองเจิ้ล</option>
                                                    <option value="หลินจินโกลด์">หลินจินโกลด์</option>
                                                    <option value="หลินจือมิน เอ็กซ์ตร้า">หลินจือมิน เอ็กซ์ตร้า</option>
                                                    <option value="เซนโก">เซนโก</option>
                                                    <option value="จีทูเอ็กซ์">จีทูเอ็กซ์</option>
                                                    <option value="คอลลาเจน เซนโก">คอลลาเจน เซนโก</option>
                                                    <option value="เอ็กซ์เอท">เอ็กซ์เอท</option>
                                                </select>
                                            </div>
                                            <!-- used product -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" name="status_inquiry[]" id="status_inquiry_non" value="เคย">
                                                <label class="custom-control-label" for="status_inquiry_non">ไม่เคย ใช้ผลิตภัณฑ์ของเนเจอร์ไบโอเทค </label>
                                            </div>
                                            <!-- non used product -->
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" name="status_inquiry[]" id="status_inquiry_other">
                                                <label class="custom-control-label" for="status_inquiry_other">เคย ใช้ผลิตภัณฑ์อื่นๆ (โปรดระบุ) </label>
                                                <input type="text" class="form-control hidden-other" name="status_inquiry[]" id="status_inquiry" >
                                            </div>
                                        </div>
                                    </div>
                                    <!-- status_inquiry -->
                                    <div class="col-12 br_pre">
                                    <label class="fieldlabels">ท่านเคยรับประทานอาหารเสริมประเภทวิตามิน หรือไม่ : *</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="custom-control custom-radio custom-control-inline customRadioInline4">
                                                <input type="radio" id="customRadioInline4" name="ever_vitamin" class="custom-control-input" value="used" onclick="radioenble(this)">
                                                <label class="custom-control-label" for="customRadioInline4">เคย </label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline5" name="ever_vitamin" class="custom-control-input" value="non-used" onclick="radioenble(this)">
                                                <label class="custom-control-label" for="customRadioInline5">ไม่เคย </label>
                                            </div>
                                        </div> <br>
                                    </div>
                                    <!-- ever_vitamin -->
                                </div> 
                            </div>
                            <input type="button" name="next" id="next" class="next action-button disabled" value="ถัดไป" disabled/>
                        </fieldset>
                        <!-- information detail customers -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">แบบสอบถามเพื่อการพัฒนาสินค้าของบริษัท เนเจอร์ไบโอเทค</h2>
                                    </div>
                                    <div class="col-5">
                                        <div class="steps"></div>
                                    </div>
                                    <!-- setps 2 -->
                                    <div class="col-12">
                                        <label class="fieldlabels">1.ท่านรับประทานวิตามินประเภทใด มากที่สุด  (เลือกได้มากกว่า1ข้อ) :</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="vitamin[]" id="vitamin[]" value="Vitamin A"> 
                                                <label class="form-check-label" for="vitamin[]">
                                                    วิตามินเอ Vitamin A
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="vitamin[]" id="vitamin[]" value="Vitamin B Complex">
                                                <label class="form-check-label" for="vitamin[]">
                                                    วิตามินบีรวม Vitamin B Complex
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="vitamin[]" id="vitamin[]" value="Vitamin B12">
                                                <label class="form-check-label" for="vitamin[]">
                                                    วิตามินบี12 Vitamin B12
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="vitamin[]" id="vitamin[]" value="Vitamin B7">
                                                <label class="form-check-label" for="vitamin[]">
                                                    วิตามินบี7 Vitamin B7
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="vitamin[]" id="vitamin[]" value="Vitamin B8">
                                                <label class="form-check-label" for="vitamin[]">
                                                    วิตามินบี8 Vitamin B8
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="vitamin[]" id="vitamin[]" value="Vitamin C">
                                                <label class="form-check-label" for="vitamin[]">
                                                    วิตามินซี Vitamin C
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="vitamin[]" id="vitamin[]" value="Vitamin D">
                                                <label class="form-check-label" for="vitamin[]">
                                                    วิตามินดี Vitamin D
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="vitamin[]" id="vitamin[]" value="Vitamin E">
                                                <label class="form-check-label" for="vitamin[]">
                                                    วิตามินอี Vitamin E
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="vitamin[]" id="vitamin[]" value="Multi Vitamins">
                                                <label class="form-check-label" for="vitamin[]">
                                                    วิตามินรวม  Multi Vitamins
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="vitamin[]" id="vitamin[]" value="Calcium">
                                                <label class="form-check-label" for="vitamin[]">
                                                    แคลเซียม Calcium
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="vitamin[]" id="vitamin[]" value="Zinc">
                                                <label class="form-check-label" for="vitamin[]">
                                                    ซิงค์ Zinc
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="vitamin[]" id="vitamin[]" value="Fish Oil">
                                                <label class="form-check-label" for="vitamin[]">
                                                    น้ำมันปลา Fish Oil
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="other" id="other" value="other_vitamin">
                                                <label class="form-check-label" for="other">
                                                    อื่นๆ(โปรดระบุ)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="vitamin[]" id="vitamin">
                                            </div>
                                        </div> <br>
                                        <!-- 1. -->
                                        <label class="fieldlabels">2.ท่านให้ความสำคัญกับเรื่องใดมากที่สุด (เลือกได้มากกว่า1ข้อ):</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ประสิทธิภาพด้านการมองเห็น">
                                                <label class="form-check-label" for="importen[]">
                                                    ประสิทธิภาพด้านการมองเห็น
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="เสริมภูมิต้านทานให้ร่างกาย">
                                                <label class="form-check-label" for="importen[]">
                                                    เสริมภูมิต้านทานให้ร่างกาย
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ช่วยชะลอความแก่และลดริ้วรอย">
                                                <label class="form-check-label" for="importen[]">
                                                    ช่วยชะลอความแก่และลดริ้วรอย
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ลดความรุนแรงของไข้หวัด">
                                                <label class="form-check-label" for="importen[]">
                                                    ลดความรุนแรงของไข้หวัด
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ช่วยชะลอหรือป้องกันโรคเกี่ยวกับกระดูก">
                                                <label class="form-check-label" for="importen[]">
                                                    ช่วยชะลอหรือป้องกันโรคเกี่ยวกับกระดูก
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ช่วยในเรื่องระบบการขับถ่าย">
                                                <label class="form-check-label" for="importen[]">
                                                    ช่วยในเรื่องระบบการขับถ่าย
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ช่วยลดความรู้สึกอ่อนล้า อ่อนเพลีย">
                                                <label class="form-check-label" for="importen[]">
                                                    ช่วยลดความรู้สึกอ่อนล้า อ่อนเพลีย
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ความสามารถในการจดจำและการเรียนรู้">
                                                <label class="form-check-label" for="importen[]">
                                                    ความสามารถในการจดจำและการเรียนรู้
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ช่วยในการเผาผลาญ ไขมัน">
                                                <label class="form-check-label" for="importen[]">
                                                    ช่วยในการเผาผลาญ ไขมัน
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ช่วยควบคุมน้ำหนัก">
                                                <label class="form-check-label" for="importen[]">
                                                    ช่วยควบคุมน้ำหนัก
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="บำรุงผิว/ผม/เล็บ ลดสิว">
                                                <label class="form-check-label" for="importen[]">
                                                    บำรุงผิว/ผม/เล็บ ลดสิว
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="other_importen" id="other_importen" value="other_importen">
                                                <label class="form-check-label" for="other_importen">
                                                    อื่นๆ(โปรดระบุ)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="importen[]" id="importen">
                                            </div>
                                        </div> <br>
                                        <!-- 2. -->
                                        <label class="fieldlabels">3.สาเหตุหลักที่ทำให้ท่านทานวิตามิน คืออะไร</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="main_case[]" id="main_case[]" value="มีประโยชน์">
                                                <label class="form-check-label" for="main_case[]">
                                                    มีประโยชน์
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="main_case[]" id="main_case[]" value="ช่วยบรรเทาหรือป้องกันอาการผิดปกติ/โรคต่างๆได้">
                                                <label class="form-check-label" for="main_case[]">
                                                    ช่วยบรรเทาหรือป้องกันอาการผิดปกติ/โรคต่างๆได้
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="main_case[]" id="main_case[]" value="ต้องการเสริมวิตามิน เนื่องจากได้รับจากอาหารไม่เพียงพอ">
                                                <label class="form-check-label" for="main_case[]">
                                                    ต้องการเสริมวิตามิน เนื่องจากได้รับจากอาหารไม่เพียงพอ
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="main_case[]" id="main_case[]" value="ความเคยชิน">
                                                <label class="form-check-label" for="main_case[]">
                                                    ความเคยชิน
                                                </label>
                                            </div>
                                        </div> <br>
                                        <!-- 3. -->
                                        <label class="fieldlabels">4.ส่วนผสมหลักของผลิตภัณฑ์วิตามินที่ท่านต้องการคือข้อใด: </label>
                                        <div class="card-body" style="border:  1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check"> 
                                                <input class="form-check-input" type="radio" name="inredient[]" id="inredient" value="สารสกัดจากผลไม้">
                                                <label class="form-check-label" for="inredient">
                                                    สารสกัดจากผลไม้
                                                </label>
                                            </div>
                                            <div class="form-check"> 
                                                <input class="form-check-input" type="radio" name="inredient[]" id="inredient2" value="สารสกัดจากดอกไม้">
                                                <label class="form-check-label" for="inredient2">
                                                    สารสกัดจากดอกไม้
                                                </label>
                                            </div>
                                            <div class="form-check"> 
                                                <input class="form-check-input" type="radio" name="inredient[]" id="inredient3" value="สารสกัดจากสมุนไพร">
                                                <label class="form-check-label" for="inredient3">
                                                    สารสกัดจากสมุนไพร
                                                </label>
                                            </div>
                                            <div class="form-check"> 
                                                <input class="form-check-input" type="radio" name="inredient[]" id="inredient4" value="สารสังเคราะห์">
                                                <label class="form-check-label" for="inredient4">
                                                    สารสังเคราะห์
                                                </label>
                                            </div>
                                            <div class="form-check"> 
                                                <input class="form-check-input" type="radio" name="inredient[]" id="inredient_other" value="สารสังเคราะห์">
                                                <label class="form-check-label" for="inredient_other">
                                                    อื่นๆ(โปรดระบุ)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="inredient[]" id="inredient">
                                            </div>
                                        </div> <br>
                                        <!-- 4. -->
                                        <label class="fieldlabels">5.รูปแบบของผลิตภัณฑ์วิตามินที่ท่านนิยมทาน:</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin" value="แบบเม็ด บรรจุกระปุก" >
                                                <label class="form-check-label" for="type_vitamin">
                                                    แบบเม็ด บรรจุกระปุก
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin2" value="แบบผง บรรจุกระปุกชงดื่ม" >
                                                <label class="form-check-label" for="type_vitamin2">
                                                    แบบผง บรรจุกระปุกชงดื่ม
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin3" value="แบบผง บรรจุซองฉีกซองรับประทาน" >
                                                <label class="form-check-label" for="type_vitamin3">
                                                    แบบผง บรรจุซองฉีกซองรับประทาน
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin4" value="แบบขนม(เยลลี่/คาราจีแนน)บรรจุกล่อง" >
                                                <label class="form-check-label" for="type_vitamin4">
                                                    แบบขนม(เยลลี่/คาราจีแนน)บรรจุกล่อง
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin5" value="แบบขนม(เยลลี่/คาราจีแนน)บรรจุกระปุก" >
                                                <label class="form-check-label" for="type_vitamin5">
                                                    แบบขนม(เยลลี่/คาราจีแนน)บรรจุกระปุก
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin6" value="แบบเครื่องดื่ม/น้ำดื่มผสมวิตามิน" >
                                                <label class="form-check-label" for="type_vitamin6">
                                                    แบบเครื่องดื่ม/น้ำดื่มผสมวิตามิน
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin_other" value="type_vitamin_other" >
                                                <label class="form-check-label" for="type_vitamin_other">
                                                อื่นๆ(โปรดระบุ)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="type_vitamin[]" id="type_vitamin">
                                            </div>
                                        </div> <br>
                                        <!-- 5. -->
                                        <label class="fieldlabels">6.จำนวนเงินที่ท่านใช้ในการเลือกซื้อผลิตภัณฑ์วิตามินในแต่ละครั้งอยู่ที่เท่าใด:</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="amount" id="amount1" value="ต่ำกว่า 200 บาท ">
                                                <label class="form-check-label" for="amount1">
                                                    ต่ำกว่า 200 บาท 
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="amount" id="amount2" value="201-500 บาท">
                                                <label class="form-check-label" for="amount2">
                                                    201-500 บาท 
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="amount" id="amount3" value="501-900 บาท">
                                                <label class="form-check-label" for="amount3">
                                                    501-900 บาท 
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="amount" id="amount4" value="901-1,000 บาท">
                                                <label class="form-check-label" for="amount4">
                                                    901-1,000 บาท 
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="amount" id="amount5" value="1,000 บาทขึ้นไป">
                                                <label class="form-check-label" for="amount5">
                                                    1,000 บาทขึ้นไป 
                                                </label>
                                            </div>
                                        </div> <br>
                                        <!-- 6. -->
                                        <label class="fieldlabels">7.ท่านซื้อผลิตภัณฑ์วิตามินบ่อยเพียงไร:</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="how_often" id="how_often1" value="น้อยกว่า 1 เดือนต่อครั้ง">
                                                <label class="form-check-label" for="how_often1">
                                                    น้อยกว่า 1 เดือนต่อครั้ง
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="how_often" id="how_often2" value="ประมาณ 1 - 3 เดือนต่อครั้ง">
                                                <label class="form-check-label" for="how_often2">
                                                    ประมาณ 1 - 3 เดือนต่อครั้ง
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="how_often" id="how_often3" value="ประมาณ 4 -  6เดือนต่อครั้ง">
                                                <label class="form-check-label" for="how_often3">
                                                    ประมาณ 4 -  6เดือนต่อครั้ง
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="how_often" id="how_often4" value="มากกว่า 6เดือนต่อครั้ง">
                                                <label class="form-check-label" for="how_often4">
                                                    มากกว่า 6เดือนต่อครั้ง
                                                </label>
                                            </div>
                                        </div> <br>
                                        <!-- 7. -->
                                        <label class="fieldlabels">8.ท่านรับประทานวิตามินร่วมกันกี่ชนิดใน 1 วัน:</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="many_kind" id="many_kind1" value="1 ชนิด">
                                                <label class="form-check-label" for="many_kind1">
                                                    1 ชนิด
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="many_kind" id="many_kind2" value="2-3 ชนิด">
                                                <label class="form-check-label" for="many_kind2">
                                                    2-3 ชนิด
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="many_kind" id="many_kind3" value="6 ชนิด ขึ้นไป">
                                                <label class="form-check-label" for="many_kind3">
                                                    4-6 ชนิด
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="many_kind" id="many_kind4" value="4-6 ชนิด">
                                                <label class="form-check-label" for="many_kind4">
                                                    6 ชนิด ขึ้นไป
                                                </label>
                                            </div>
                                        </div> <br>
                                        <!-- 8. -->
                                        <label class="fieldlabels">9.ท่านรับรู้ข้อมูลผลิตภัณฑ์วิตามินที่ทานรับประทานในปัจจุบันจากสื่อใด:</label>
                                        <div class="card-body"  style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="information_vitamin[]" id="information_vitamin_TV" value="TV (โปรดระบุช่องหรือรายการที่ท่านรับชม)">
                                                <label class="form-check-label" for="information_vitamin_TV">
                                                    TV (โปรดระบุช่องหรือรายการที่ท่านรับชม)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="information_vitamin[]" id="information_vitamin_TV">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="information_vitamin[]" id="information_vitamin_Online" value="Online (โปรดระบุแพลตฟอร์มที่ท่านรับชม)">
                                                <label class="form-check-label" for="information_vitamin_Online">
                                                    Online (เช่น Facebook,IG,Tiktok)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="information_vitamin[]" id="information_vitamin_Online">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="information_vitamin[]" id="information_vitamin_Radio" value="Radio (โปรดระบุคลื่นวิทยุหรือรายการที่ท่านรับชม)">
                                                <label class="form-check-label" for="information_vitamin_Radio">
                                                    Radio (โปรดระบุคลื่นวิทยุหรือรายการที่ท่านรับชม)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="information_vitamin[]" id="information_vitamin_Radio">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="information_vitamin[]" id="information_vitamin_print" value="สื่อสิ่งพิมพ์ (โปรดระบุคอลัมน์ หรือ ชื่อสิ่งพิมพ์ที่ท่านรับชม)">
                                                <label class="form-check-label" for="information_vitamin_print">
                                                    สื่อสิ่งพิมพ์ (โปรดระบุคอลัมน์ หรือ ชื่อสิ่งพิมพ์ที่ท่านรับชม)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="information_vitamin[]" id="information_vitamin_print">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="information_vitamin[]" id="information_vitamin_outdoor" value="สื่อกลางแจ้ง(โปรดระบุสื่อกลางแจ้งที่ท่านพบเช่น บิลบอร์ด,ป้ายโฆษณา,สติกเกอร์ติดรถ)">
                                                <label class="form-check-label" for="information_vitamin_outdoor">
                                                    สื่อกลางแจ้ง(โปรดระบุสื่อกลางแจ้งที่ท่านพบเช่น บิลบอร์ด,ป้ายโฆษณา,สติกเกอร์ติดรถ)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="information_vitamin[]" id="information_vitamin_outdoor">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="information_vitamin[]" id="information_vitamin_other" value="other">
                                                <label class="form-check-label" for="information_vitamin_other">
                                                    อื่นๆ(โปรดระบุ)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="information_vitamin[]" id="information_vitamin_other">
                                            </div>
                                        </div> <br>
                                        <!-- 9. -->
                                        <label class="fieldlabels">10.ท่านเลือกซื้อผลิตภัณฑ์วิตามินจากสถานที่ใด:</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="CVS">
                                                <label class="form-check-label" for="location[]">
                                                    CVS(เช่น 7-11, Family mart,CJ Express)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="location[]" id="location_CVS">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="Hyper">
                                                <label class="form-check-label" for="location[]">
                                                    Hyper (เช่น Big C, Tesco,Tops, Central Foodhall)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="location[]" id="location_Hyper">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="shop">
                                                <label class="form-check-label" for="location[]">
                                                    ร้านขายยาชั้นนำ (เช่น Fascino,P&F,Save Drug,ตำรับไทย)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="location[]" id="location_shop">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="ร้านขายยาทั่วไปใกล้บ้าน">
                                                <label class="form-check-label" for="location[]">
                                                    ร้านขายยาทั่วไปใกล้บ้าน
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="HT">
                                                <label class="form-check-label" for="location[]">
                                                    ร้านสุขภาพและความงาม (เช่น Watsons,Boots,TSURUHA,eveandboy)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="location[]" id="location_HT">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="Shopping_Online">
                                                <label class="form-check-label" for="location[]">
                                                    Shopping Online (เช่น Shopee, Lazada, JD Central)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="location[]" id="location_Shopping_Online">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="information">
                                                <label class="form-check-label" for="location[]">
                                                    ช่องทางตรงกับบริษัท (เช่น ขายตรง,โทรสั่งกับบริษัท,สั่งกับเวปไซต์หรือFacebookของบริษัท)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="location[]" id="location_information">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="TV">
                                                <label class="form-check-label" for="location[]">
                                                    ช่องทางTV (เช่น TV Direct, True Select,O Shopping)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="location[]" id="location_TV">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="location_other" id="location_other" value="location_other">
                                                <label class="form-check-label" for="location[]">
                                                    อื่นๆโปรดระบุ
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="location[]" id="location_other">
                                            </div>
                                        </div> <br>
                                        <!-- 10. -->
                                        <label class="fieldlabels">11.ท่านคิดว่า ปัจจัยใดที่มีอิทธิพลต่อการเลือกซื้อผลิตภัณฑ์วิตามินของท่าน:</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="influence[]" id="influence1" value="ตัวท่านเอง">
                                                <label class="form-check-label" for="influence1">
                                                ตัวท่านเอง
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="influence[]" id="influence2" value="เพื่อน / ครอบครัว / ที่ทำงาน">
                                                <label class="form-check-label" for="influence2">
                                                เพื่อน / ครอบครัว / ที่ทำงาน
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="influence[]" id="influence3" value="พรีเซนเตอร์ (superstar , celebrity)">
                                                <label class="form-check-label" for="influence3">
                                                พรีเซนเตอร์ (superstar , celebrity)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="influence[]" id="influence4" value="อินฟูเอนเซอร์ (Net idol, Youtuber, Tiktoker)">
                                                <label class="form-check-label" for="influence4">
                                                อินฟูเอนเซอร์ (Net idol, Youtuber, Tiktoker)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="influence[]" id="influence5" value="ผู้เชี่ยวชาญ นักวิชาการ ผู้ที่มีความน่าเชื่อถือ (Blogger)">
                                                <label class="form-check-label" for="influence5">
                                                ผู้เชี่ยวชาญ นักวิชาการ ผู้ที่มีความน่าเชื่อถือ (Blogger)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="influence[]" id="influence_other" value="influence_other">
                                                <label class="form-check-label" for="influence_other">
                                                    อื่นๆโปรดระบุ
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="influence[]" id="influence_other">
                                            </div>
                                        </div> <br>
                                        <!-- 11. -->
                                        <label class="fieldlabels">12.แหล่งโฆษณาที่ท่านคิดว่าน่าเชื่อถือ </label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="advert[]" id="advert_TV" value="TV">
                                                <label class="form-check-label" for="advert[]">
                                                    TV (โปรดระบุช่องหรือรายการที่ท่านรับชม)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="advert[]" id="advert_TV">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="advert[]" id="advert[]" value="Online">
                                                <label class="form-check-label" for="advert[]">
                                                    Online (เช่น Facebook,IG,Tiktok)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="advert[]" id="advert_online">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="advert[]" id="advert[]" value="Radio">
                                                <label class="form-check-label" for="advert[]">
                                                    Radio (โปรดระบุคลื่นวิทยุหรือรายการที่ท่านรับชม)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="advert[]" id="advert_Radio">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="advert[]" id="advert[]" value="print">
                                                <label class="form-check-label" for="advert[]">
                                                    สื่อสิ่งพิมพ์ (โปรดระบุคอลัมน์ หรือ ชื่อสิ่งพิมพ์ที่ท่านรับชม)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="advert[]" id="advert_print">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="advert[]" id="advert[]" value="ourdoor">
                                                <label class="form-check-label" for="advert[]">
                                                    สื่อกลางแจ้ง(โปรดระบุสื่อกลางแจ้งที่ท่านพบเช่น บิลบอร์ด,ป้ายโฆษณา,สติกเกอร์ติดรถ)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="advert[]" id="advert_ourdoor">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="advert[]" id="advert[]" value="other_advert">
                                                <label class="form-check-label" for="advert[]">
                                                   อื่นๆ(โปรดระบุ)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="advert[]" id="advert_other">
                                            </div>
                                        </div> <br>
                                        <!-- 12. -->
                                        <label class="fieldlabels">13.ท่านคิดว่า โปรโมชั่น/การส่งเสริมการขายใด ที่จะมีผลต่อการตัดสินใจซื้อผลิตภัณฑ์วิตามิน มากที่สุด:</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="promtion[]" id="promtion1" value="การลดราคา ณ.จุดขาย">
                                                <label class="form-check-label" for="promtion1">
                                                    การลดราคา ณ.จุดขาย
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="promtion[]" id="promtion2" value="การแจกสินค้าทดลองใช้ / สินค้าตัวอย่าง">
                                                <label class="form-check-label" for="promtion2">
                                                    การแจกสินค้าทดลองใช้ / สินค้าตัวอย่าง
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="promtion[]" id="promtion3" value="การได้รับคูปองส่วนลด">
                                                <label class="form-check-label" for="promtion3">
                                                    การได้รับคูปองส่วนลด
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="promtion[]" id="promtion4" value="การซื้อสินค้า 1แถม1 / 2แถม1">
                                                <label class="form-check-label" for="promtion4">
                                                    การซื้อสินค้า 1แถม1 / 2แถม1
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="promtion[]" id="promtion5" value="การส่งชิงโชค">
                                                <label class="form-check-label" for="promtion5">
                                                    การส่งชิงโชค
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="promtion[]" id="promtion6" value="การสะสมแลกสินค้า">
                                                <label class="form-check-label" for="promtion6">
                                                    การสะสมแลกสินค้า
                                                </label>
                                            </div><div class="form-check">
                                                <input class="form-check-input" type="radio" name="promtion[]" id="promtion7" value="การสะสมแลกสินค้า">
                                                <label class="form-check-label" for="promtion7">
                                                    การสะสมแลกสินค้า
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="promtion[]" id="promtion[]">
                                            </div>
                                        </div>  <br>
                                        <!-- 13. -->
                                        <label class="fieldlabels">14.ช่องทางออนไลน์ที่ท่านใช้งานบ่อยที่สุด</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="soical[]" id="soical[]" value="Facebook">
                                                <label class="form-check-label" for="soical[]">
                                                   Facebook
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="soical[]" id="soical[]" value="Instagarm">
                                                <label class="form-check-label" for="soical[]">
                                                   Instagarm
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="soical[]" id="soical[]" value="Line">
                                                <label class="form-check-label" for="soical[]">
                                                   Line
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="soical[]" id="soical[]" value="Tiktok">
                                                <label class="form-check-label" for="soical[]">
                                                   Tiktok
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="soical[]" id="soical[]" value="Twitter">
                                                <label class="form-check-label" for="soical[]">
                                                   Twitter
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="soical[]" id="soical[]" value="otehr_soical">
                                                <label class="form-check-label" for="soical[]">
                                                อื่นๆ(โปรดระบุ)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="soical[]" id="otehr_soical">
                                            </div>

                                        </div> <br>
                                        <!-- 14. -->
                                        <label class="fieldlabels">15.กรณีสินค้าใหม่หรือสินค้าที่ไม่เคยรับประทาน ท่านมีวิธีหาข้อมูลหรือพิจารณาจากสื่อใด</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="review">
                                                <label class="form-check-label" for="consider[]">
                                                   รีวิวจาก Bloggers/รีวิวจาก Bloggers/Influencers (โปรดระบุBloggers/Influencersที่ท่านติดตาม)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="consider[]" id="consider_review">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="ค้นหาข้อมูลจาก Google">
                                                <label class="form-check-label" for="consider[]">
                                                   ค้นหาข้อมูลจาก Google
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="consider[]" id="consider[]">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="Inquire">
                                                <label class="form-check-label" for="consider[]">
                                                   สอบถามกับทางบริษัทผู้จัดจำหน่าย (โปรดระบุวิธีการสอบถามเช่น โทรศัพท์สอบถาม,สอบถามผ่านเวปไซต์)
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="consider[]" id="consider_Inquire">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="หาข้อมูลสินค้าเพิ่มเติมที่เวปไซต์แบรนด์">
                                                <label class="form-check-label" for="consider[]">
                                                   หาข้อมูลสินค้าเพิ่มเติมที่เวปไซต์แบรนด์
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="consider[]" id="consider[]">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="ถามพนักงานขาย ตัวแทน เภสัช">
                                                <label class="form-check-label" for="consider[]">
                                                   ถามพนักงานขาย ตัวแทน เภสัช
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="consider[]" id="consider[]">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="ถามเพื่อนหรือคนในครอบครัว">
                                                <label class="form-check-label" for="consider[]">
                                                   ถามเพื่อนหรือคนในครอบครัว
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="consider[]" id="consider[]">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="consider_other">
                                                <label class="form-check-label" for="consider[]">
                                                   อื่นๆโปรดระบุ
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="consider[]" id="consider_other">
                                            </div>
                                        </div> <br>
                                        <!-- 15. -->
                                        <label class="fieldlabels">16.ถ้าท่านต้องการซื้อผลิตภัณฑ์วิตามิน คุณสมบัติใดบ้างที่ท่านใช้พิจารณาในการตัดสินใจซื้อ </label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="ส่วนผสม และ แหล่งที่มาของวัตถุดิบ">
                                                <label class="form-check-label" for="feature[]">
                                                    ส่วนผสม และ แหล่งที่มาของวัตถุดิบ
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="คุณภาพ มาตรฐานการผลิต">
                                                <label class="form-check-label" for="feature[]">
                                                    คุณภาพ มาตรฐานการผลิต
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="การประชาสัมพันธ์ / แนะนำ">
                                                <label class="form-check-label" for="feature[]">
                                                    การประชาสัมพันธ์ / แนะนำ
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="สรรพคุณ/คุณประโยชน์ของผลิตภัณฑ์">
                                                <label class="form-check-label" for="feature[]">
                                                    สรรพคุณ/คุณประโยชน์ของผลิตภัณฑ์
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="ราคา/โปรโมชั่น">
                                                <label class="form-check-label" for="feature[]">
                                                    ราคา/โปรโมชั่น
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="บรรจุภัณฑ์">
                                                <label class="form-check-label" for="feature[]">
                                                    บรรจุภัณฑ์
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="feature_other">
                                                <label class="form-check-label" for="feature[]">
                                                    อื่นๆโปรดระบุ
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="feature[]" id="feature_other">
                                            </div>
                                        </div> <br>
                                        <!-- 16. -->
                                        <label class="fieldlabels">17.ท่านเคยใช้ผลิตภัณฑ์วิตามินยี่ห้อใดบ้าง :</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <input type="text" class="form-control" name="brand" id="brand">
                                        </div>
                                        <!-- 17. -->
                                        <label class="fieldlabels">18.สาเหตุที่ท่านเลือกซื้อผลิตภัณฑ์วิตามินยื่ห้อดังกล่าว :</label>
                                        <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="case_question[]" id="case_question[]" value="ส่วนผสม และ แหล่งที่มาของวัตถุดิบ">
                                                <label class="form-check-label" for="case_question[]">
                                                    ส่วนผสม และ แหล่งที่มาของวัตถุดิบ
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="case_question[]" id="case_question[]" value="คุณภาพ มาตรฐานการผลิต">
                                                <label class="form-check-label" for="case_question[]">
                                                    คุณภาพ มาตรฐานการผลิต
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="case_question[]" id="case_question[]" value="การประชาสัมพันธ์ / แนะนำ">
                                                <label class="form-check-label" for="case_question[]">
                                                    การประชาสัมพันธ์ / แนะนำ
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="case_question[]" id="case_question[]" value="สรรพคุณ/คุณประโยชน์ของผลิตภัณฑ์">
                                                <label class="form-check-label" for="case_question[]">
                                                    สรรพคุณ/คุณประโยชน์ของผลิตภัณฑ์
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="case_question[]" id="case_question[]" value="ราคา/โปรโมชั่น">
                                                <label class="form-check-label" for="case_question[]">
                                                    ราคา/โปรโมชั่น
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="case_question[]" id="case_question[]" value="บรรจุภัณฑ์">
                                                <label class="form-check-label" for="case_question[]">
                                                    บรรจุภัณฑ์
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="case_question[]" id="case_question[]" value="case_question_other">
                                                <label class="form-check-label" for="case_question[]">
                                                    อื่นๆโปรดระบุ
                                                </label>
                                                <input type="text" class="form-control hidden-other" name="case_question[]" id="case_question_other">
                                            </div>
                                        </div> <br>
                                        <!-- 18. -->

                                        <div class="form-check br_pre">
                                            <input class="form-check-input terms_and_conditions" type="checkbox" name="terms_and_conditions" id="terms_and_conditions" value="1" >
                                            <label class="form-check-label" for="terms_and_conditions">ยอมรับเงื่อนไข <a href="conditions.php" target="_blank">ดูเพิ่มเติม</a> </label>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="next" id="next"  class="next_sub action-button disabled" value="ยืนยัน" disabled="disabled" />
                            <input type="button" name="previous" class="previous action-button-previous" value="ย้อนกลับ" />
                        </fieldset>
                        <!-- part 2 -->
                        <fieldset class="part-2">
                                <div class="form-card">
                                    <div class="row"> 
                                        <div class="col-7">
                                            <h2 class="fs-title">แบบสอบถามเพื่อการพัฒนาสินค้าของบริษัท เนเจอร์ไบโอเทค</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps"></h2>
                                        </div>
                                        <div class="col-12">
                                        <label class="fieldlabels">1.สาเหตุที่ท่านไม่ทานผลิตภัณฑ์วิตามิน  
(เลือกได้มากกว่า1ข้อ): </label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="case_eat[]" id="case_eat[]" value="ราคาสูงไม่สอดคล้องกับคุณภาพ">
                                                    <label class="form-check-label" for="case_eat[]">
                                                        ราคาสูงไม่สอดคล้องกับคุณภาพ
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="case_eat[]" id="case_eat[]" value="ยังไม่ถึงวัยที่ต้องการรับวิตามิน">
                                                    <label class="form-check-label" for="case_eat[]">
                                                        ยังไม่ถึงวัยที่ต้องการรับวิตามิน
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="case_eat[]" id="case_eat[]" value="ไม่มีข้อมูลประกอบการตัดสินใจ">
                                                    <label class="form-check-label" for="case_eat[]">
                                                        ไม่มีข้อมูลประกอบการตัดสินใจ
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="case_eat[]" id="case_eat[]" value="ไม่เห็นความจำเป็นในการรับประทานวิตามิน">
                                                    <label class="form-check-label" for="case_eat[]">
                                                        ไม่เห็นความจำเป็นในการรับประทานวิตามิน
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="case_eat[]" id="case_eat[]" value="คิดว่าบริโภคสินค้าทดแทน เช่น ผัก ผลไม้ ก็เพียงพอแล้ว">
                                                    <label class="form-check-label" for="case_eat[]">
                                                        คิดว่าบริโภคสินค้าทดแทน เช่น ผัก ผลไม้ ก็เพียงพอแล้ว
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="case_eat[]" id="case_eat[]" value="ไม่พบแบรนด์ที่น่าสนใจ หรือ น่าเชื่อถือ">
                                                    <label class="form-check-label" for="case_eat[]">
                                                        ไม่พบแบรนด์ที่น่าสนใจ หรือ น่าเชื่อถือ
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="case_eat[]" id="case_eat[]" value="สิ้นเปลือง">
                                                    <label class="form-check-label" for="case_eat[]">
                                                        สิ้นเปลือง
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="case_eat[]" id="case_eat[]" value="other_case_eat">
                                                    <label class="form-check-label" for="case_eat[]">
                                                     อื่นๆ(โปรดระบุ)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="case_eat[]" id="other_case_eat">
                                                </div>
                                            </div> <br>
                                            <!-- 1. -->
                                            <label class="fieldlabels">2.ท่านรู้จักผลิตภัณฑ์วิตามินประเภทใดบ้าง
(เลือกได้มากกว่า1ข้อ) :</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="Vitamin A">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                        วิตามินเอ Vitamin A
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="Vitamin B Complex">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                        วิตามินบีรวม Vitamin B Complex
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="Vitamin B12">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                        วิตามินบี12 Vitamin B12
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="Vitamin B7">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                        วิตามินบี7 Vitamin B7
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="Vitamin B8">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                        วิตามินบี8 Vitamin B8
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="Vitamin C">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                        วิตามินซี Vitamin C
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="Vitamin D">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                        วิตามินดี Vitamin D
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="Vitamin E">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                        วิตามินอี Vitamin E
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="Multi Vitamins">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                        วิตามินรวม  Multi Vitamins
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="Calcium">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                        แคลเซียม Calcium
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="Zinc">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                        ซิงค์ Zinc
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="Fish Oil">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                        น้ำมันปลา Fish Oil
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="ไม่รู้จักเลย">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                        ไม่รู้จักเลย
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="know_vitamin[]" id="know_vitamin[]" value="other_know">
                                                    <label class="form-check-label" for="know_vitamin[]">
                                                       อื่นๆโปรดระบุ
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="know_vitamin[]" id="other_know">
                                                </div>
                                            </div> <br>
                                            <!-- 2. -->
                                            <label class="fieldlabels">3.ถ้าท่านจะตัดสินใจรับประทาน ท่านจะเลือกผลิตภัณฑ์วิตามินใด
(เลือกได้มากกว่า1ข้อ) :</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="Vitamin A">
                                                    <label class="form-check-label" for="decide[]">
                                                        วิตามินเอ Vitamin A
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="Vitamin B Complex">
                                                    <label class="form-check-label" for="decide[]">
                                                        วิตามินบีรวม Vitamin B Complex
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="Vitamin B12">
                                                    <label class="form-check-label" for="decide[]">
                                                        วิตามินบี12 Vitamin B12
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="Vitamin B7">
                                                    <label class="form-check-label" for="decide[]">
                                                        วิตามินบี7 Vitamin B7
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="Vitamin B8">
                                                    <label class="form-check-label" for="decide[]">
                                                        วิตามินบี8 Vitamin B8
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="Vitamin C">
                                                    <label class="form-check-label" for="decide[]">
                                                        วิตามินซี Vitamin C
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="Vitamin D">
                                                    <label class="form-check-label" for="decide[]">
                                                        วิตามินดี Vitamin D
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="Vitamin E">
                                                    <label class="form-check-label" for="decide[]">
                                                        วิตามินอี Vitamin E
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="Multi Vitamins">
                                                    <label class="form-check-label" for="decide[]">
                                                        วิตามินรวม  Multi Vitamins
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="Calcium">
                                                    <label class="form-check-label" for="decide[]">
                                                        แคลเซียม Calcium
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="Zinc">
                                                    <label class="form-check-label" for="decide[]">
                                                        ซิงค์ Zinc
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="Fish Oil">
                                                    <label class="form-check-label" for="decide[]">
                                                        น้ำมันปลา Fish Oil
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="ไม่รู้จักเลย">
                                                    <label class="form-check-label" for="decide[]">
                                                        ไม่รู้จักเลย
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="decide[]" id="decide[]" value="other_decide">
                                                    <label class="form-check-label" for="decide[]">
                                                       อื่นๆโปรดระบุ
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="decide[]" id="other_decide">
                                                </div>
                                            </div> <br>
                                            <!-- 3. -->
                                            <label class="fieldlabels">4.ท่านให้ความสำคัญกับเรื่องใด มากที่สุด
(เลือกได้มากกว่า1ข้อ) : </label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ประสิทธิภาพด้านการมองเห็น">
                                                    <label class="form-check-label" for="importen[]">
                                                        ประสิทธิภาพด้านการมองเห็น
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="เสริมภูมิต้านทานให้ร่างกาย">
                                                    <label class="form-check-label" for="importen[]">
                                                        เสริมภูมิต้านทานให้ร่างกาย
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ช่วยชะลอความแก่และลดริ้วรอย">
                                                    <label class="form-check-label" for="importen[]">
                                                        ช่วยชะลอความแก่และลดริ้วรอย
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ลดความรุนแรงของไข้หวัด">
                                                    <label class="form-check-label" for="importen[]">
                                                        ลดความรุนแรงของไข้หวัด
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ช่วยชะลอหรือป้องกันโรคเกี่ยวกับกระดูก">
                                                    <label class="form-check-label" for="importen[]">
                                                        ช่วยชะลอหรือป้องกันโรคเกี่ยวกับกระดูก
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ช่วยในเรื่องระบบการขับถ่าย">
                                                    <label class="form-check-label" for="importen[]">
                                                        ช่วยในเรื่องระบบการขับถ่าย
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ช่วยลดความรู้สึกอ่อนล้า อ่อนเพลีย">
                                                    <label class="form-check-label" for="importen[]">
                                                        ช่วยลดความรู้สึกอ่อนล้า อ่อนเพลีย
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ความสามารถในการจดจำและการเรียนรู้">
                                                    <label class="form-check-label" for="importen[]">
                                                        ความสามารถในการจดจำและการเรียนรู้
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ช่วยในการเผาผลาญ ไขมัน">
                                                    <label class="form-check-label" for="importen[]">
                                                        ช่วยในการเผาผลาญ ไขมัน
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="ช่วยควบคุมน้ำหนัก">
                                                    <label class="form-check-label" for="importen[]">
                                                        ช่วยควบคุมน้ำหนัก
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="importen[]" id="importen[]" value="บำรุงผิว/ผม/เล็บ ลดสิว">
                                                    <label class="form-check-label" for="importen[]">
                                                        บำรุงผิว/ผม/เล็บ ลดสิว
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="importen[]" id="other_importen" value="other_importen">
                                                    <label class="form-check-label" for="importen[]">
                                                       อื่นๆโปรดระบุ
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="importen[]" id="other_importen">
                                                </div>
                                            </div> <br>
                                            <!-- 4. -->
                                            <label class="fieldlabels">5.ส่วนผสมหลักของผลิตภัณฑ์วิตามินที่ท่านต้องการคือข้อใด :</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="inredient[]" id="inredient1" value="สารสกัดจากผลไม้">
                                                    <label class="form-check-label" for="inredient1">
                                                        สารสกัดจากผลไม้
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="inredient[]" id="inredient2" value="สารสกัดจากดอกไม้">
                                                    <label class="form-check-label" for="inredient2">
                                                        สารสกัดจากดอกไม้
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="inredient[]" id="inredient3" value="สารสกัดจากสมุนไพร">
                                                    <label class="form-check-label" for="inredient3">
                                                        สารสกัดจากสมุนไพร
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="inredient[]" id="inredient4" value="สารสังเคราะห์">
                                                    <label class="form-check-label" for="inredient4">
                                                        สารสังเคราะห์
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="inredient[]" id="other_inredient" value="other_inredient">
                                                    <label class="form-check-label" for="other_inredient">
                                                        อื่นๆ(โปรดระบุ)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="inredient[]" id="other_inredient">
                                                </div>
                                            </div> <br>
                                            <!-- 5. -->
                                            <label class="fieldlabels">6.รูปแบบของผลิตภัณฑ์วิตามินที่ท่านต้องการทาน :</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin1" value="แบบเม็ด บรรจุกระปุก">
                                                    <label class="form-check-label" for="type_vitamin1">
                                                        แบบเม็ด บรรจุกระปุก
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin2" value="แบบเม็ด บรรจุแผง">
                                                    <label class="form-check-label" for="type_vitamin2">
                                                        แบบเม็ด บรรจุแผง
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin3" value="แบบผง บรรจุกระปุกชงดื่ม">
                                                    <label class="form-check-label" for="type_vitamin3">
                                                        แบบผง บรรจุกระปุกชงดื่ม
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin4" value="แบบผง บรรจุซองฉีกซองรับประทาน">
                                                    <label class="form-check-label" for="type_vitamin4">
                                                        แบบผง บรรจุซองฉีกซองรับประทาน
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin5" value="แบบขนม(เยลลี่/คาราจีแนน)บรรจุกล่อง">
                                                    <label class="form-check-label" for="type_vitamin5">
                                                        แบบขนม(เยลลี่/คาราจีแนน)บรรจุกล่อง
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin6" value="แบบขนม(เยลลี่/คาราจีแนน)บรรจุกระปุก">
                                                    <label class="form-check-label" for="type_vitamin6">
                                                        แบบขนม(เยลลี่/คาราจีแนน)บรรจุกระปุก
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin7" value="แบบเครื่องดื่ม/น้ำดื่มผสมวิตามิน">
                                                    <label class="form-check-label" for="type_vitamin7">
                                                        แบบเครื่องดื่ม/น้ำดื่มผสมวิตามิน
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="type_vitamin[]" id="type_vitamin_other_2" value="other">
                                                    <label class="form-check-label" for="type_vitamin_other_2">
                                                        อื่นๆ(โปรดระบุ)
                                                    </label>
                                                    <input type="text" name="type_vitamin[]" id="type_vitamin_other_2" class="form-control hidden-other">
                                                </div>
                                                
                                            </div> <br>
                                            <!-- 6. -->
                                            <label class="fieldlabels">7.จำนวนเงินที่ท่านสามารถซื้อผลิตภัณฑ์วิตามินในแต่ละครั้งอยู่ที่เท่าใด :</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="amount1" value="ต่ำกว่า 200 บาท">
                                                    <label class="form-check-label" for="amount1">
                                                        ต่ำกว่า 200 บาท
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="amount2" value="201-500 บาท">
                                                    <label class="form-check-label" for="amount2">
                                                        201-500 บาท
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="amount3" value="501-900 บาท">
                                                    <label class="form-check-label" for="amount3">
                                                        501-900 บาท
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="amount4" value="901-1,000 บาท">
                                                    <label class="form-check-label" for="amount4">
                                                        901-1,000 บาท
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="amount5" value="1,000 บาทขึ้นไป">
                                                    <label class="form-check-label" for="amount5">
                                                        1,000 บาทขึ้นไป
                                                    </label>
                                                </div>
                                            </div> <br>
                                            <!-- 7. -->
                                            <label class="fieldlabels">8.ท่านคิดว่าควรเลือกซื้อผลิตภัณฑ์วิตามินจากสถานที่ใด
(เลือกได้มากกว่า1ข้อ) :</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="CVS">
                                                    <label class="form-check-label" for="location[]">
                                                        CVS(เช่น 7-11, Family mart,CJ Express)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="location[]" id="location_CVS">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="Hyper" for="location[]">
                                                        Hyper (เช่น Big C, Tesco,Tops, Central Foodhall)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="location[]" id="location_Hyper">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="prescription">
                                                    <label class="form-check-label" for="location[]">
                                                        ร้านขายยาชั้นนำ (เช่น Fascino,P&F,Save Drug,ตำรับไทย)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="location[]" id="location_prescription">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="ร้านขายยาทั่วไปใกล้บ้าน">
                                                    <label class="form-check-label" for="location[]">
                                                        ร้านขายยาทั่วไปใกล้บ้าน
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="health">
                                                    <label class="form-check-label" for="location[]">
                                                        ร้านสุขภาพและความงาม (เช่น Watsons,Boots,TSURUHA,eveandboy)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="location[]" id="location_health">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="location_Shopping_Online">
                                                    <label class="form-check-label" for="location[]">
                                                        Shopping Online (เช่น Shopee, Lazada, JD Central)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="location[]" id="location_Shopping_Online">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="channel">
                                                    <label class="form-check-label" for="location[]">
                                                        ช่องทางตรงกับบริษัท (เช่น ขายตรง,โทรสั่งกับบริษัท,สั่งกับเวปไซต์หรือFacebookของบริษัท)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="location[]" id="location_channel">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="location[]" id="location[]" value="channel_TV">
                                                    <label class="form-check-label" for="location[]">
                                                        ช่องทางTV (เช่น TV Direct, True Select,O Shopping)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="location[]" id="location_channel_TV">
                                                </div>
                                            </div> <br>
                                            <!-- 8. -->
                                            <label class="fieldlabels">9.ท่านคิดว่า ปัจจัยใดที่จะมีอิทธิพลต่อการเลือกซื้อผลิตภัณฑ์วิตามินของท่านในการเลือกซื้อครั้งแรก :</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="influence[]" id="influence1" value="ตัวท่านเอง">
                                                    <label class="form-check-label" for="influence1">
                                                        ตัวท่านเอง    
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="influence[]" id="influence2" value="เพื่อน / ครอบครัว / ที่ทำงาน">
                                                    <label class="form-check-label" for="influence2">
                                                        เพื่อน / ครอบครัว / ที่ทำงาน    
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="influence[]" id="influence3" value="พรีเซนเตอร์ (superstar , celebrity)">
                                                    <label class="form-check-label" for="influence3">
                                                        พรีเซนเตอร์ (superstar , celebrity)    
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="influence[]" id="influence3" value="อินฟูเอนเซอร์ (Net idol, Youtuber, Tiktoker)">
                                                    <label class="form-check-label" for="influence3">
                                                        อินฟูเอนเซอร์ (Net idol, Youtuber, Tiktoker)    
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="influence[]" id="influence4" value="ผู้เชี่ยวชาญ นักวิชาการ ผู้ที่มีความน่าเชื่อถือ (Blogger)">
                                                    <label class="form-check-label" for="influence4">
                                                        ผู้เชี่ยวชาญ นักวิชาการ ผู้ที่มีความน่าเชื่อถือ (Blogger)    
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="influence[]" id="other_influence" value="other_influence">
                                                    <label class="form-check-label" for="other_influence">
                                                        อื่นๆโปรดระบุ   
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="influence[]" id="other_influence">
                                                </div>
                                            </div> <br>
                                            <!-- 9. -->
                                            <label class="fieldlabels">10.แหล่งโฆษณาที่ท่านคิดว่าน่าเชื่อถือ</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="advert[]" id="advert[]" value="TV">
                                                    <label class="form-check-label" for="advert[]">
                                                        TV (โปรดระบุช่องหรือรายการที่ท่านรับชม)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="advert[]" id="advert_TV">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="advert[]" id="advert[]" value="Online">
                                                    <label class="form-check-label" for="advert[]">
                                                        Online (เช่น Facebook,IG,Tiktok)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="advert[]" id="advert_Online">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="advert[]" id="advert[]" value="Radio">
                                                    <label class="form-check-label" for="advert[]">
                                                        Radio (โปรดระบุคลื่นวิทยุหรือรายการที่ท่านรับชม)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="advert[]" id="advert_Radio">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="advert[]" id="advert[]" value="Print">
                                                    <label class="form-check-label" for="advert[]">
                                                        สื่อสิ่งพิมพ์ (โปรดระบุคอลัมน์ หรือ ชื่อสิ่งพิมพ์ที่ท่านรับชม)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="advert[]" id="advert_Print">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="advert[]" id="advert[]" value="ourdoor">
                                                    <label class="form-check-label" for="advert[]">
                                                        สื่อกลางแจ้ง(โปรดระบุสื่อกลางแจ้งที่ท่านพบเช่น บิลบอร์ด,ป้ายโฆษณา,สติกเกอร์ติดรถ)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="advert[]" id="advert_ourdoor">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="advert[]" id="other_advert" value="other_advert">
                                                    <label class="form-check-label" for="advert[]">
                                                        อื่นๆ(โปรดระบุ)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="advert[]" id="other_advert">
                                                </div>
                                            </div> <br>
                                            <!-- 10. -->
                                            <label class="fieldlabels">11.ท่านคิดว่า โปรโมชั่น/การส่งเสริมการขายใด ที่จะมีผลต่อการตัดสินใจซื้อผลิตภัณฑ์วิตามิน มากที่สุด :</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="promtion[]" id="promtion1" value="การลดราคา ณ.จุดขาย">
                                                    <label class="form-check-label" for="promtion1">
                                                        การลดราคา ณ.จุดขาย
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="promtion[]" id="promtion2" value="การแจกสินค้าทดลองใช้ / สินค้าตัวอย่าง">
                                                    <label class="form-check-label" for="promtion2">
                                                        การแจกสินค้าทดลองใช้ / สินค้าตัวอย่าง
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="promtion[]" id="promtion3" value="การได้รับคูปองส่วนลด">
                                                    <label class="form-check-label" for="promtion3">
                                                        การได้รับคูปองส่วนลด
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="promtion[]" id="promtion4" value="การซื้อสินค้า 1แถม1 / 2แถม1">
                                                    <label class="form-check-label" for="promtion4">
                                                        การซื้อสินค้า 1แถม1 / 2แถม1
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="promtion[]" id="promtion5" value="การส่งชิงโชค">
                                                    <label class="form-check-label" for="promtion5">
                                                        การส่งชิงโชค
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="promtion[]" id="promtion6" value="การสะสมแลกสินค้า">
                                                    <label class="form-check-label" for="promtion6">
                                                        การสะสมแลกสินค้า
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="promtion[]" id="other_promtion" value="other_promtion">
                                                    <label class="form-check-label" for="other_promtion">
                                                    อื่นๆ(โปรดระบุ)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="promtion[]" id="other_promtion">
                                                </div>
                                            </div> <br>
                                            <!-- 11. -->
                                            <label class="fieldlabels">12.ช่องทางออนไลน์ที่ท่านใช้งานบ่อยที่สุด
(เลือกได้มากกว่า1ข้อ) :</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="soical[]" id="soical[]" value="Facebook">
                                                    <label class="form-check-label" for="soical[]">
                                                        Facebook
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="soical[]" id="soical[]" value="Instagarm">
                                                    <label class="form-check-label" for="soical[]">
                                                        Instagarm
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="soical[]" id="soical[]" value="Tiktok">
                                                    <label class="form-check-label" for="soical[]">
                                                        Tiktok
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="soical[]" id="soical[]" value="Twitter">
                                                    <label class="form-check-label" for="soical[]">
                                                        Twitter
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="soical[]" id="soical[]" value="other_soical">
                                                    <label class="form-check-label" for="soical[]">
                                                        อื่นๆ(โปรดระบุ) 
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="soical[]" id="other_soical">
                                                </div>
                                            </div> <br>
                                            <!-- 12. -->
                                            <label class=" fieldlabels">13.กรณีสินค้าใหม่หรือสินค้าที่ไม่เคยรับประทาน ท่านมีวิธีหาข้อมูลหรือพิจารณาจากสื่อใด
(เลือกได้มากกว่า1ข้อ) :</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="Bloggers">
                                                    <label class="form-check-label" for="consider[]">
                                                        รีวิวจาก Bloggers/รีวิวจาก Bloggers/Influencers (โปรดระบุBloggers/Influencersที่ท่านติดตาม)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="consider[]" id="consider_Bloggers">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="ค้นหาข้อมูลจาก Google">
                                                    <label class="form-check-label" for="consider[]">
                                                        ค้นหาข้อมูลจาก Google
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="ค้นหาข้อมูลจากกระทู้ Pantip">
                                                    <label class="form-check-label" for="consider[]">
                                                        ค้นหาข้อมูลจากกระทู้ Pantip
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="Inquire">
                                                    <label class="form-check-label" for="consider[]">
                                                        สอบถามกับทางบริษัทผู้จัดจำหน่าย (โปรดระบุวิธีการสอบถามเช่น โทรศัพท์สอบถาม,สอบถามผ่านเวปไซต์)
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="consider[]" id="consider_Inquire">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="หาข้อมูลสินค้าเพิ่มเติมที่เวปไซต์แบรนด์">
                                                    <label class="form-check-label" for="consider[]">
                                                        หาข้อมูลสินค้าเพิ่มเติมที่เวปไซต์แบรนด์
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="ถามพนักงานขาย ตัวแทน เภสัช">
                                                    <label class="form-check-label" for="consider[]">
                                                        ถามพนักงานขาย ตัวแทน เภสัช
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="ถามเพื่อนหรือคนในครอบครัว">
                                                    <label class="form-check-label" for="consider[]">
                                                        ถามเพื่อนหรือคนในครอบครัว
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="consider[]" id="consider[]" value="other_consider">
                                                    <label class="form-check-label" for="consider[]">
                                                        อื่นๆโปรดระบุ
                                                    </label>
                                                    <input type="text" class="form-control hidden-other" name="consider[]" id="other_consider">
                                                </div>
                                            </div> <br>
                                            <!-- 13. -->
                                            <label class="fieldlabels">14.ถ้าท่านต้องการซื้อผลิตภัณฑ์วิตามิน คุณสมบัติใดบ้างที่ท่านใช้พิจารณาในการตัดสินใจซื้อ 
(เลือกได้มากกว่า1ข้อ) :</label>
                                            <div class="card-body" style="border: 1px solid #dddddd; border-radius: 5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="ส่วนผสม และ แหล่งที่มาของวัตถุดิบ">
                                                    <label class="form-check-label" for="feature[]">
                                                        ส่วนผสม และ แหล่งที่มาของวัตถุดิบ
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="คุณภาพ มาตรฐานการผลิต">
                                                    <label class="form-check-label" for="feature[]">
                                                        คุณภาพ มาตรฐานการผลิต
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="คุณภาพ มาตรฐานการผลิต">
                                                    <label class="form-check-label" for="feature[]">
                                                        คุณภาพ มาตรฐานการผลิต
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="การประชาสัมพันธ์ / แนะนำ">
                                                    <label class="form-check-label" for="feature[]">
                                                        การประชาสัมพันธ์ / แนะนำ
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="สรรพคุณ/คุณประโยชน์ของผลิตภัณฑ์">
                                                    <label class="form-check-label" for="feature[]">
                                                        สรรพคุณ/คุณประโยชน์ของผลิตภัณฑ์
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="ราคา/โปรโมชั่น">
                                                    <label class="form-check-label" for="feature[]">
                                                        ราคา/โปรโมชั่น
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="ตรายี่ห้อ">
                                                    <label class="form-check-label" for="feature[]">
                                                        ตรายี่ห้อ
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="บรรจุภัณฑ์">
                                                    <label class="form-check-label" for="feature[]">
                                                        บรรจุภัณฑ์
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="feature[]" id="feature[]" value="other_feature">
                                                    <label class="form-check-label" for="feature[]">
                                                        อื่นๆ(โปรดระบุ)
                                                    </label>
                                                    <input type="text" name="feature[]" id="other_feature" class="form-control hidden-other">
                                                </div>
                                            </div> <br>
                                            <!-- 14. -->
                                            <div class="form-check">
                                                <input class="form-check-input terms_and_conditions" type="checkbox" name="terms_and_conditions" id="terms_and_conditions" value="1" >
                                                <label class="form-check-label" for="terms_and_conditions">ยอมรับเงื่อนไข <a href="conditions.php" target="_blank">ดูเพิ่มเติม</a></label>
                                            </div>
                                        </div> 
                                    </div>  
                                </div>
                                <input type="submit" name="next" id="next"  class="next_sub action-button disabled" value="ยืนยัน" disabled="disabled" />  
                                <input type="button" name="previous" class="previous action-button-previous" value="ย้อนกลับ" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>