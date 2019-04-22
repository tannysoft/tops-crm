<?php
require('database.php');

$booking = isset($_GET['booking'])?$_GET['booking']:null;
$attend = isset($_GET['attend'])?$_GET['attend']:null;
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$current_url = str_replace('&attend=yes', '', $current_url);
$current_url = str_replace('&attend=no', '', $current_url);

//
list($bu, $empid) = explode('-', $booking);
if(empty($bu) || empty($empid)) {
  die('The booking number is required!');
}

// mysql connecting
$connection = mysqli_connect($db[$active]['hostname'], $db[$active]['username'], $db[$active]['password'], $db[$active]['database']);
// check connection
if (mysqli_connect_errno()) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}

if (!empty($attend) && $attend === 'yes') {
  mysqli_query($connection, "UPDATE registration SET status = 'attended' WHERE bu = '".$bu."' AND empid = '".$empid."'");
}

$result = mysqli_query($connection, "SELECT * FROM registration WHERE bu = '".$bu."' AND empid = '".$empid."'");
if (!mysqli_num_rows($result)) {
  die('This booking is not found!');
}

$row = mysqli_fetch_assoc($result);

?>
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
  font-family: -apple-system, BlinkMacSystemFont, 'Sarabun', sans-serif, "Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"; background-color: #f3f3f3 !important;
}
#attend.row {
  margin-right: -5px;
  margin-left: -5px;
  padding: 10px 0;
}
#attend.row .col-6, #attend.row .col-6 {
  padding-right: 5px;
  padding-left: 5px; 
}
</style>

<title>ลงทะเบียนงานทุเรียน</title>
</head>
<body>

<section id="cover">
  <div id="cover-caption">
    <div id="container" class="container">
      <div class="row">
        <div class="col-sm-6 offset-sm-3" style="background-color: #FFF">
          <img class="img-fluid banner" src="assets/img/banner.jpg">

          <h3 class="mt-3">ยืนยันการรับบัตร/Ticket confirmation</h3>

          <table class="table table-sm">
            <tr>
              <td>Booking ID:</td>
              <td><?php echo strtoupper($row['bu']).'-'.strtoupper($row['empid']) ?></td>
            </tr>
            <tr>
              <td>Name:</td>
              <td><?php echo $row['name'] ?></td>
            </tr>
            <tr>
              <td>Mobile Number:</td>
              <td><?php echo $row['tel'] ?></td>
            </tr>
            <tr>
              <td>E-mail:</td>
              <td><?php echo $row['email'] ?></td>
            </tr>
            <tr>
              <td>Status</td>
              <td><strong><?php echo $row['status'] ?></strong></td>
            </tr>
          </table>

          <p><strong style="color:red;">* ส่วนนี้สำหรับเจ้าหน้าที่เท่านั้น (เมื่อกดปุ่ม "รับบัตรเข้างาน" จะเป็นการยืนยันว่าคุณได้รับบัตรเข้างานแล้ว")</strong></p>
          <p><strong style="color:red;">* For staff only (After click the yellow botton below, this will mark that you received an event ticket.)</strong></p>
              
          <div id="attend" class="row mb-5">
            <button type="button" id="confirmation" class="btn btn-warning btn-block">รับบัตรเข้างาน</button>
            <!-- <div class="col-6">
              <a href="<?php echo $current_url ?>&attend=no" class="btn btn-info btn-block">ยกเลิก</a>
            </div> -->
          </div>

          <hr>

          <p class="text-center text-muted">หากพบปัญหาหรือสอบถามเพิ่มเติม<br>กรุณาติดต่อ แผนกลูกค้าสัมพันธ์เซ็นทรัล ฟู้ด ฮอลล์ และ ท็อปส์<br>โทร. 092-825-3440</p>
          <p class="text-center text-muted">If you encounter problems,<br>please contact customer service of Central Food Hall and Tops<br>Tel. 092-825-3440</p>
          <p class="text-center text-muted">&copy; 2019 Central Food Retail Co.,Ltd.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.7.0/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="assets/registration.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  var url = '<?php echo $current_url ?>&attend=yes';
  var status = '<?php echo $row['status'] ?>';
  if(status === 'attended') {
    $('#confirmation').prop('disabled', true);  
  }
  $('#confirmation').click(function(){
    Swal.fire({
      text: "เมื่อกดปุ่ม \"รับบัตรเข้างาน\" จะเป็นการยืนยันว่าคุณได้รับบัตรเข้างานแล้ว",
      type: 'info',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'รับบัตรเข้างาน'
    }).then((result) => {
      if (result.value) {
        Swal.fire({
          title: 'รับบัตรเข้างานแล้ว!',
          type: 'success',
          showConfirmButton: false,
          timer: 1500
        }).then((result) => {
          window.location = url;
        });
      }
    });
  });
});
</script>
</body>
</html>