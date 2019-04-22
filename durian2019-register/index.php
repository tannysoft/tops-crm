<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="robots" content="noindex, nofollow">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" />
<style type="text/css">
body {
  font-family: -apple-system, BlinkMacSystemFont, 'Sarabun', sans-serif, "Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"
}
#mode.row {
  margin-right: -5px;
  margin-left: -5px;
  padding: 10px 0;
}
#mode.row .col-5, #mode.row .col-7 {
  padding-right: 5px;
  padding-left: 5px; 
}
</style>

<title>ลงทะเบียนงานทุเรียน</title>
</head>
<?php
require('database.php');
require("assets/sendgrid-php/sendgrid-php.php");

// mysql connecting
$connection = mysqli_connect($db[$active]['hostname'], $db[$active]['username'], $db[$active]['password'], $db[$active]['database']);
// check connection
if (mysqli_connect_errno()) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}

$max_seat = 200;
$max_seat_round_56 = 100;
$max_seat_round_78 = 100;
$paid_seat = 0;
$paid_seat_round_56 = 0;
$paid_seat_round_78 = 0;

// for all
if($result = mysqli_query($connection, "SELECT seat FROM registration WHERE status = 'paid'")){
  while ($row = mysqli_fetch_assoc($result)) {
    $paid_seat += $row['seat'];
  }
}
// for round 56
if($result = mysqli_query($connection, "SELECT SUM(seat) AS seat FROM registration WHERE round = '56' AND status = 'paid'")){
  $row = mysqli_fetch_assoc($result);
  $paid_seat_round_56 = $row['seat'];
}
// for round 78
if($result = mysqli_query($connection, "SELECT SUM(seat) AS seat FROM registration WHERE round = '78' AND status = 'paid'")){
  $row = mysqli_fetch_assoc($result);
  $paid_seat_round_78 = $row['seat'];
}
?>
<body style=" background-color: #f3f3f3 !important;">
<section id="cover">
  <div id="cover-caption">
    <div id="container" class="container">
      <div class="row">
        <div class="col-sm-6 offset-sm-3" style="background-color: #FFF !important;">
          <img class="img-fluid banner" src="assets/img/banner.jpg">

          <div id="mode" class="row">
            <div class="col-5">
              <a href="index.php" class="btn btn-warning btn-block">สำรองที่นั่ง<br>Reserve Seat(s)</a>
            </div>
            <div class="col-7">
              <a href="payment.php" class="btn btn-info btn-block">ส่งหลักฐานการโอนเงิน<br>Submit Payment Slip</a>
            </div>
          </div>

          <?php if ($paid_seat < $max_seat) { ?>
          <!-- <h3 class="display-8 text-center">ข้อมูลส่วนตัว</h3> -->
          <div class="info-form">
            <form id="registration" class="form-inlin justify-content-center" method="post" action="#">
              <div class="form-group">
                <label class="sr-only">Full Name</label>
                <input type="text" id="name" class="form-control" placeholder="ชื่อ-นามสกุล / Name-Surname">
              </div>
              <div class="form-group">
                <label class="sr-only">Business Unit</label>
                <input type="text" id="bu" class="form-control" placeholder="รหัสย่อหน่วยธุรกิจ / Business Unit (CFR, CG, อื่นๆ)">
              </div>
              <div class="form-group">
                <label class="sr-only">Staff ID</label>
                <input type="text" id="employeeid" class="form-control" placeholder="รหัสพนักงาน / Staff ID">
              </div>
              <div class="form-group">
                <label class="sr-only">Mobile Number</label>
                <input type="text" id="phone" class="form-control" placeholder="เบอร์โทรศัพท์ / Mobile Phone No.">
              </div>
              <div class="form-group">
                <label class="sr-only">Email</label>
                <input type="email" id="email" class="form-control" placeholder="อีเมล์พนักงาน / Staff E-mail">
              </div>

<!--               <h3 class="display-8 text-center">ข้อมูลการจอง</h3>
 -->            <div class="form-group">
                <label>รอบ/Rounds:</label><br>
                <label>วันจันทร์ที่ 22 เมษายน 2562 / Monday 22<sup>nd</sup> April, 2019</label>
                <?php if ($paid_seat_round_56 < $max_seat_round_56) { ?>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <input type="radio" name="round" checked="checked" value="56">
                    </div>
                  </div>
                  <input type="text" class="form-control" placeholder="17:00 - 18:00 น. / 5 P.M. - 6 P.M." disabled>
                </div>
                <?php } ?>
                <?php if ($paid_seat_round_78 < $max_seat_round_78) { ?>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <input type="radio" name="round" value="78"<?php echo ($paid_seat_round_56 >= $max_seat_round_56)?'checked="checked"':NULL ?>>
                    </div>
                  </div>
                  <input type="text" class="form-control" placeholder="19:00 - 20:00 น. / 7 P.M. - 8 P.M." disabled>
                </div>
              </div>
              <?php } ?>

              <div class="form-group">
                <label>จำนวนการจอง / Reservation Seat(s):</label>
                <select id="seat" class="form-control" min="1" max="2">
                    <option value="1">1 ที่นั่ง - 419 THB</option>
                    <option value="2">2 ที่นั่ง - 838 THB</option>
                </select>
<!--                 <input type="number" id="seat" class="form-control" min="1" max="2" placeholder="จำนวนที่ที่ทำการจอง (สูงสุด 2 ที่)">
                <div class="invalid-feedback">Sorry, maximum reservation is 2 seats</div> -->
              </div>
              <p style="font-size: smaller"><strong style="color:red;">* จำกัดการจอง 1 สิทธิ์ (สูงสุดไม่เกิน 2 ที่นั่ง) / พนักงาน 1 ท่านตลอดรายการ</strong><br><strong style="color:red;">* Limit purchase to 2 tickets / person</strong></p>

              <button type="button" id="register" class="btn btn-success">ยืนยัน / Reserve</button>
              <button type="reset" class="btn btn-outline-secondary">Clear</button>
            </form>
          </div>
          <?php } ?>

          <hr>

          <p class="text-center text-muted">หากพบปัญหาหรือสอบถามเพิ่มเติม<br>กรุณาติดต่อ แผนกลูกค้าสัมพันธ์เซ็นทรัล ฟู้ด ฮอลล์ และ ท็อปส์<br>โทร. 092-825-3440</p>
          <p class="text-center text-muted">If you encounter problems,<br>please contact customer service of Central Food Hall and Tops<br>Tel. 092-825-3440</p>
          <p class="text-center text-muted">&copy; 2019 Central Food Retail Co.,Ltd.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="result-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Result</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="result" class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.7.0/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="assets/registration.js"></script>
<?php if ($paid_seat >= $max_seat) { ?>
<script type="text/javascript">
$(document).ready(function(){
Swal.fire({
  type: 'error',
  html:[
    '<h3 class="text-center">ขออภัยค่ะ!</h3>',
    '<p class="text-center">ที่นั่งราคาพิเศษสำหรับ CG Staff ถูกสำรองเต็มแล้วทุกที่นั่ง<br>ท่านสามารถซื้อบัตรราคาปกติได้ที่หน้างานหรือ <a href=" https://bit.ly/2TSa4jz">https://bit.ly/2TSa4jz</a><br>ขอบคุณค่ะ</p>',
    '<h3 class="text-center">Sorry!</h3>',
    '<p class="text-center">There are no avaliable seats for CG Staff in any route.<br>Please find normal priced ticket at the on-site outlet or <a href=" https://bit.ly/2TSa4jz">https://bit.ly/2TSa4jz</a><br>Thank you</p>',
  ].join(''),
  showCloseButton: false,
  showCancelButton: false,
  showConfirmButton: false
});
});
</script>
<?php } ?>
</body>
</html>