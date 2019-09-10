<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8" />

  <title>Anil Labs - Codeigniter mail templates</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>

<div>

  <div style="font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center" align="center" id="emb-email-header"><img style="border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px" src="<?php echo base_url(); ?>assets/img/Final_LOGO_fitnessOnline_R.png" alt="" width="152" height="108"></div>
  <h4 style='color:#3336FF'> ชื่อผู้ใช้งาน :  "test" </h4>
  <h4 style='color:#3336FF'> ประเภทผู้ใช้ :  "traner" </h4>
  <h3 style='color:#3336FF'> รายเดือน "1200" บาท </h3>
  <h4 style='color:#3336FF'> กรุณาชำระค่าบริการ และส่งหลักฐานยืนยันให้เจ้าหน้าที่ตรวจสอบด้วยนะค่ะ</h4>

<br><br><br>
  <p>ขอบคุณสำหรับการสมัครสมาชิกกับ Fitnessonline.co.th! กรุณายืนยัน  <strong> <a href=" '.base_url().'auth/validate_email/'.$_POST['member_username'].'">ยืนยัน</a></strong>สำหรับการสมัครสมาชิก. หลังจากยืนยัน คุณจะสามารถเข้าใช้ระบบได้นะคะ  </p>


<br><br><br>

  <p> บริษัท ฟิตเนส ออนไลน์ จำกัด </p>
  <p> 91/17 ซอยวัฒนานิเวศน์ 4  </p>
  <p> แขวงสามเสนนอก เขตห้วยขวาง </p>
  <p> กรุงเทพมหานคร 10310 </p>
  <p> โทร : 0-2276-5763 , 06-3978-8222 </p>
  <p> Email : info@fitnessonline.com </p>

</div>

</body>

</html>
