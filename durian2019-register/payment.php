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

          <h3 class="mb-3">หลักฐานการโอนเงิน<br>Submit your payment slip</h3>
          <div class="info-form">
            <form id="submitBill" class="form-inlin justify-content-center" method="post" action="#">
              <div class="form-group">
                <label>หมายเลขการจอง (Booking ID):</label>
                <p style="font-size: smaller"><strong>* กรุณาดูหมายเลขการจองที่อีเมลท่านลงทะเบียนไว้ / Please check booking ID from your email.</strong></p>
                <div class="row">
                  <div class="col-4">
                    <input type="text" id="bu" name="bookingbu" class="form-control" style="text-transform:uppercase">
                  </div>
                  <div class="col-1">&minus;</div>
                  <div class="col-7">
                    <input type="text" id="empid" name="bookingempid" class="form-control" style="text-transform:uppercase">
                  </div>
                </div>
              </div>
              <div class="form-group" style="margin-bottom: 20px;">
                <label class="sr-only">Slip Image</label>
                <input type="file" name="file" id="file" class="form-control">
                <span style="color:red;font-size: smaller">ไฟล์ภาพขนาดไม่เกิน 3 MB / limit image file up to 3MB</span>
              </div>

              <button type="submit" class="btn btn-success submitSlip">อัพโหลดสลิป / Submit</button>
              <button type="reset" class="btn btn-outline-secondary">Clear</button>

              <hr>

              <p class="text-center text-muted">หากพบปัญหาหรือสอบถามเพิ่มเติม<br>กรุณาติดต่อ แผนกลูกค้าสัมพันธ์เซ็นทรัล ฟู้ด ฮอลล์ และ ท็อปส์<br>โทร. 092-825-3440</p>
              <p class="text-center text-muted">If you encounter problems,<br>please contact customer service of Central Food Hall and Tops<br>Tel. 092-825-3440</p>
              <p class="text-center text-muted">&copy; 2019 Central Food Retail Co.,Ltd.</p>
            </form>
          </div>
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
<script type="text/javascript">
$(document).ready(function(){
  $('#bu').keyup(function(){
    var bu = $(this).val();
    if(bu.length >= 3) {
      $('#empid').focus();
    }
  });
});
</script>
</body>
</html>