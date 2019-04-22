<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('header'); ?>

  <body class="land-the1">
    <div class="app">
      <div class="tops-container">
        <div class="container d-flex h-100">
          <div class="logo">
            <img src="<?php echo base_url(); ?>assets/img/the1-header-logo.png" alt="the1 card" />
          </div>
          <div class="content justify-content-center align-self-center">
            <div class="top">
              <div class="alert alert-danger d-none">กรุณากรอกหมายเลขโทรศัพท์ / Please fill in your mobile number.</div>
              <p>กรุณากรอก</p>
              <p><strong>หมายเลขโทรศัพท์ มือถือ 10 หลัก</strong></p>
              <p>เพื่อรับคูปองส่วนลด</p>
              <p>และโปรโมชั่นพิเศษเฉพาะคุณ</p>
            </div>
            <div class="bottom">
              <p>Please fill in your</p>
              <p><strong>mobile phone number (10-Digit)</strong></p>
              <p>to get special coupons and offers.</p>
            </div>
            <div class="bottom">
              <form id="theoneForm" class="tops-form">
                <div class="form-group">
                  <label for="inputPhone">Phone</label>
                  <input type="phone" class="form-control" id="inputPhone">
                </div>
                <button type="submit" class="btn btn-primary">Next</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="tops-footer -yellow">
        <div class="container">
          <img src="<?php echo base_url(); ?>assets/img/topsmarket-footer-logo.png" alt="Tops" />
        </div>
      </footer>
    </div>
<?php /*
    <!-- Modal -->
    <div class="modal fade" id="cautionModal" tabindex="-1" role="dialog" aria-labelledby="cautionModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="cautionModalLabel">คำเตือน</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Test
          </div>
        </div>
      </div>
    </div>
*/ ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/jquery-mask/jquery.mask.js"></script>

    <script>

      var sblCookie = getCookie("sblCookie");
      if(sblCookie!==null) {
        window.location.href = "https://crm.tops.co.th/data/39/sid/" + sblCookie;
      }

      $('#inputPhone').mask('0000000000000000');

      $("#theoneForm").submit(function(e) {

        e.preventDefault();

        var form = $(this);
        var phone = $('#inputPhone').val();
        var phoneLength = phone.length;

        if(phoneLength !== 10 && phoneLength !== 16) {

          $('.alert-danger').removeClass('d-none');

        } else {

          var url = 'https://crm.tops.co.th/data/getCustomerProfile/39/' + phone;

          var resp;
          var request = new XMLHttpRequest();
          request.open('GET', url, true);

          request.onload = function() {
            if (request.status >= 200 && request.status < 400) {
              //console.log(request.responseText);
              resp = JSON.parse(request.responseText);
              if(resp.code==200 && resp.message == "success to get target customer profile") {
                document.cookie = "sblCookie=" + resp.data.sblMemberId + ";";
                window.location.href = "https://crm.tops.co.th/data/39/sid/" + resp.data.sblMemberId;
              } else {
                window.location.href = "https://crm.tops.co.th/focusstore01/mass";
              }
            } else {
              // We reached our target server, but it returned an error
              console.log('error');
            }
          };

          request.onerror = function() {
            // There was a connection error of some sort
          };

          request.send();

        }

      });

      function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return null;
      }
  

    </script>

  </body>
</html>