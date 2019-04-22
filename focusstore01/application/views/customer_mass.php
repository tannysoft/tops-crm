<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('header'); ?>

  <body>
    <div class="app">
      <div class="tops-welcome">
        <div class="container">
          <h2 class="title"><?php echo ($lang=='th') ? 'สวัสดี คุณลูกค้าคนพิเศษ': 'Hello Valued Customer'; ?></h2>
        </div>
      </div>
      <div class="tops-highlight">
          <div class="container">
              <div class="front">
                  <img src="<?php echo base_url(); ?>assets/img/store-mass.jpg" alt="Banner" />
              </div>
          </div>
      </div>
      <div class="clear"></div>
      <div id="cpn8-content" class="tops-card d-none">
          <div class="container">
              <h2 class="title"><a id="reccoupon-title">...</a></h2>
              <div class="promo -no-side">
                  <div id="owl-cpn8" class="owl-carousel owl-theme"></div>
                  <div class="more-condition">
                      <a href="#">
                          <img src="<?php echo base_url(); ?>assets/img/icon-condition.svg" alt="more" />
                          <h3 class="condition-title">...</h3>
                      </a>
                      <div class="condition-detail">
                        <ul class="modal-th d-none">
                          <li>คูปองส่วนลดนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าตามที่กำหนด</li>
                          <li>คูปองส่วนลดนี้สามารถใช้ร่วมกับคูปองส่วนลดอื่นได้ หากยอดซื้อของใบเสร็จนั้น มากกว่าหรือเท่ากับยอดซื้อตามเงื่อนไขของแต่ละคูปองรวมกัน</li>
                          <li>คูปองนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าที่<strong>ท็อปส์ มาร์เก็ต สาขาเซ็นทรัลพลาซา แกรนด์ พระราม 9, ท็อปส์ มาร์เก็ต สาขาเซ็นทรัลพลาซา แจ้งวัฒนะ และท็อปส์ มาร์เก็ต สาขาเซ็นทรัลพลาซา ลาดพร้าว</strong></li>
                          <li>คูปองนี้ใช้เป็นส่วนลดสำหรับสมาชิกเดอะวัน</li>
                          <li>คูปองนี้ไม่สามารถลดเพิ่มจากสินค้าที่ลดราคาอยู่แล้ว</li>
                          <li>คูปองนี้ไม่สามารถแลกแลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
                          <li>ขอสงวนสิทธิ์การใช้คูปองที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี</li>
                          <li>บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                        </ul>
                        <ul class="modal-en d-none">
                          <li>This coupon is for a purchase the required products.</li>
                          <li>This discount coupon can be used with other coupons had the purchase price in the receipt is greater than or equal to the purchase price of all coupons combined.</li>
                          <li>This coupon can be used to get discount at <strong>Tops Market, CentralPlaza Grand Rama 9, Tops Market, CentralPlaza Chaengwattana and Tops Market, CentralPlaza Ladprao</strong></li>
                          <li>This coupon can be used once/receipt with the 1 members.</li>
                          <li>This coupon is not valid with special priced items.</li>
                          <li>This coupon cannot be exchanged or redeemed for cash.</li>
                          <li>Central Food Retail Co., Ltd. reserves the right to reject the capture screen or duplicated version of discount coupon.</li>
                          <li>Central Food Retail Co., Ltd. reserves the right to changes terms and conditions without prior notice.</li>
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div id="cpn9-content" class="tops-card d-none">
          <div class="container">
              <h2 class="title"><a id="itemcoupon-title" href="#">...</a></h2>
              <div class="promo -no-side -no-side-wide">
                  <div id="owl-cpn9" class="owl-carousel owl-theme"></div>
                  <div class="more-condition">
                      <a href="#">
                          <img src="<?php echo base_url(); ?>assets/img/icon-condition.svg" alt="more" />
                          <h3 class="condition-title">...</h3>
                      </a>
                      <div class="condition-detail">
                        <ul class="modal-th d-none">
                          <li>คูปองนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าที่<strong>เซ็นทรัล ฟู้ด ฮอลล์, ท็อปส์ และซูเปอร์คุ้ม เฉพาะสาขาที่มีสินค้าจำหน่ายเท่านั้น</strong></li>
                          <li>ราคาสุทธิของสินค้าต้องมากกว่ามูลค่าส่วนลดที่ระบุบนคูปอง</li>
                          <li>คูปองนี้ใช้เป็นส่วนลดสินค้าตามจำนวนที่ระบุบนคูปองสำหรับสมาชิกเดอะวัน</li>
                          <li>คูปองนี้ใช้ได้เพียง 1 ใบ / ใบเสร็จเท่านั้น</li>
                          <li>คูปองนี้ไม่สามารถแลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
                          <li>ขอสงวนสิทธิ์การใช้คูปองที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี</li>
                          <li>บริษัทเซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงือนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                        </ul>
                        <ul class="modal-en d-none">
                          <li>This coupon can be used to get discount at branches of <strong>Central Food Hall, Tops and Superkoom that have this item available.</strong></li>
                          <li>Net price of this item must be of greater value than a discount stated on the coupon.</li>
                          <li>The coupon can be used with The1 to get discount on the product at an exact amount stated on the coupon</li>
                          <li>Limit to 1 coupon / receipt</li>
                          <li>This coupon cannot be exchanged or redeemed for cash</li>
                          <li>Central Food Retail Co., Ltd. reserves the right to reject the capture screen or duplicated version of this coupon. </li>
                          <li>Central Food Retail Co., Ltd. reserves the right to changes terms and conditions without prior notice.</li>
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="tops-card">
        <div class="container">
          <h2 class="title -credits">
              <a id="credits-title" href="#">...</a>
              <span id="credits-subtitle">...</span>
          </h2>
          <div class="promo">
            <!-- Set up your HTML -->
            <div id="owl-data" class="owl-carousel owl-theme">
                <div class="item">
                  <a href="<?php echo ($lang=='th') ? 'https://bit.ly/2B5whzd' : 'https://bit.ly/2DC23FJ'; ?>">
                    <img src="<?php echo base_url(); ?>assets/img/scb-<?php echo ($lang=='th') ? 'th': 'en'; ?>.jpg" alt="SCB" />
                  </a>
                </div>
                <div class="item">
                  <a href="<?php echo ($lang=='th') ? 'https://bit.ly/2RUYFyq' : 'https://bit.ly/2Rk8rVw'; ?>">
                    <img src="<?php echo base_url(); ?>assets/img/ktc-<?php echo ($lang=='th') ? 'th': 'en'; ?>.jpg" alt="KTC" />
                  </a>
                </div>
                <div class="item">
                  <a href="<?php echo ($lang=='th') ? 'https://bit.ly/2G4uRIw' : 'https://bit.ly/2S9hZHv'; ?>">
                    <img src="<?php echo base_url(); ?>assets/img/krungsri-<?php echo ($lang=='th') ? 'th': 'en'; ?>.jpg" alt="BAY" />
                  </a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="tops-footer">
        <div class="container">
          <img src="<?php echo base_url(); ?>assets/img/logo-footer.png" alt="Tops" />
        </div>
      </footer>

      <!-- Modal -->
      <div class="modal fade" id="conditionModal" tabindex="-1" role="dialog" aria-labelledby="conditionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div id="modal-body" class="modal-body">
              <div class="condition-moda-th d-none">
                <p>การใช้คูปองที่หน้าร้าน / สาขา</p>
                <ul>
                  <li>คูปองไม่สามารถนำกลับมาใช้ต่อได้ เมื่อเวลาที่แสดงหมดลง</li>
                  <li>เมื่อท่านกดใช้ต้องแสดงบาร์โค้ดต่อแคชเชียร์ภายใน 10 นาที</li>
                  <li>หากปิดหน้าแสดงคูปองท่านจะไม่สามารถกลับมาใช้คูปองได้</li>
                </ul>
                <p class="font-weight-bold">ท่านต้องการดำเนินการต่อหรือไม่?</p>
              </div>
              <div class="condition-moda-en d-none">
                <p>To use this Coupon</p>
                <ul>
                  <li>Coupon is invalid after the time has run</li>
                  <li>Tap use and present barcode to the cashier within 10 minutes.</li>
                  <li>Closing the coupon page will invalidate the coupon.</li>
                </ul>
                <p class="font-weight-bold">Do you want to continue?</p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-cancel" data-dismiss="modal">ยกเลิก</button>
              <button type="button" class="btn btn-primary btn-confirm">ตกลง</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="barcodeModal" tabindex="-1" role="dialog" aria-labelledby="barcodeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div id="modal-body" class="modal-body">
              <div class="coupon-timer text-center">
                <div class="text-right btn-close">
                  <span data-dismiss="modal">x</span>
                </div>
                <h4 class="font-weight-bold title-timer">...</h4>
                <h2 class="text-danger display-4 mt-2 title-countdown" id="timer">10:00</h2>
                <h6 class="text-danger px-4 font-weight-bold mt-3 title-caution">...</h6>
                <h5 class="mt-5 px-4 title-show">...</h5>
              </div>
              <div class="coupon-barcode text-center mt-5">
                <div class="barcode-container">
                  <div id="barcode-type" class="text-right">...</div>
                  <div id="barcode-image" class="barcode-image"></div>
                  <span id="barcode-number">XXXXXXXXXXX</span>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/owl-carousel/owl.carousel.min.js"></script>

    <script>

      var serverUrl = 'https://crm.tops.co.th/';

      var resp;
      var request = new XMLHttpRequest();
      request.open('GET', serverUrl + 'data/39/mass', true);

      request.onload = function() {
        if (request.status >= 200 && request.status < 400) {
          // Success!
          resp = JSON.parse(request.responseText);

          var language = 'th';

          if(resp.data.barcodes.CPN8) {

            var elementModal = document.getElementById("cpn8-content");
            elementModal.classList.remove("d-none");

            $.each(resp.data.barcodes.CPN8, function (key, value) {
              var htmlUsed = null;
              var classUsed = null;
              if(value.used == true) {
                htmlUsed = "<div class='stamp'><img src='" + serverUrl + "focusstore01/assets/img/icon-used.svg' alt='stamp' /></div>";
                classUsed = "bar-display coupon-used";
              } else {
                htmlUsed = "";
                classUsed = "bar-display";
              }
              $("#owl-cpn8").append('<div class="item"><a class="' + classUsed + '" data-barcode="' + value.barcode + '" data-type="' + value.type + '" href="#"><img src="' + value.image + '" />' + htmlUsed + '</a></div>');
            });

            var carousel_cpn8 = $('#owl-cpn8');

            carousel_cpn8.owlCarousel({
              items: 1,
              lazyLoad: true,
              //loop: true,
              dots: true,
              margin: 0,
              //autoplay: true,
              //autoplayTimeout: 3000,
              //autoplayHoverPause: true
            });
          }

          if(resp.data.barcodes.CPN9) {

            var elementModal = document.getElementById("cpn9-content");
            elementModal.classList.remove("d-none");

            $.each(resp.data.barcodes.CPN9, function (key, value) {
              var htmlUsed = null;
              var classUsed = null;
              if(value.used == true) {
                htmlUsed = "<div class='stamp'><img src='" + serverUrl + "focusstore01/assets/img/icon-used.svg' alt='stamp' /></div>";
                classUsed = "bar-display coupon-used";
              } else {
                htmlUsed = "";
                classUsed = "bar-display";
              }
              $("#owl-cpn9").append('<div class="item"><a class="' + classUsed + '" data-barcode="' + value.barcode + '" data-type="' + value.type + '" href="#"><img src="' + value.image + '" />' + htmlUsed + '</a></div>');
            });

            var carousel_cpn9 = $('#owl-cpn9');

            carousel_cpn9.owlCarousel({
              items: 1,
              lazyLoad: true,
              //loop: true,
              dots: true,
              margin: 0,
              //autoplay: true,
              //autoplayTimeout: 3000,
              //autoplayHoverPause: true
            });
          }

          if(resp.data.credits) {

            $.each(resp.data.credits, function (key, value) {
              if(language=='th') {
                $("#owl-credits").append('<div class="item"><a href="#"><img src="' + value.th.image + '" /></a></div>');
              } else {
                $("#owl-credits").append('<div class="item"><a href="#"><img src="' + value.en.image + '" /></a></div>');
              }
            });

            var carousel_credits = $('#owl-credits');

            carousel_credits.owlCarousel({
              items: 1,
              lazyLoad: true,
              //loop: true,
              dots: true,
              margin: 0,
              //autoplay: true,
              //autoplayTimeout: 3000,
              //autoplayHoverPause: true
            });
          }

          $( ".bar-display" ).click(function(e) {
            e.preventDefault();

            var data_customer = $( this ).attr("data-customer");
            var data_barcode = $( this ).attr("data-barcode");
            var data_type = $( this ).attr("data-type");

            $('.btn-confirm').attr('data-customer', data_customer)
            $('.btn-confirm').attr('data-barcode', data_barcode)
            $('.btn-confirm').attr('data-type', data_type)

            $('#conditionModal').modal('show');

          });

          var setFirstTimer = null;

          $( ".btn-confirm" ).click(function(e) {

            $('#conditionModal').modal('hide');

            var data_customer = $( this ).attr("data-customer");
            var data_barcode = $( this ).attr("data-barcode");
            var data_type = $( this ).attr("data-type");

            if(data_type == 'CPN8') {
              data_type = 'CPN2';
            }

            $(".bar-display[data-barcode='" + data_barcode + "']").append("<div class='stamp'><img src='" + serverUrl + "focusstore01/assets/img/icon-used.svg' alt='stamp' /></div>").addClass("coupon-used");
            $( '#barcode-type' ).html( data_type );
            $( '#barcode-image' ).html( "<img src='" + serverUrl + 'focusstore01/assets/barcode/' + data_barcode + ".png' alt='barcode' />" );
            $( '#barcode-number' ).html( data_barcode );
            $( '#timer' ).html( '10:00' );

            $('#barcodeModal').modal('show');
            if(setFirstTimer == null) {
              startTimer();
              setFirstTimer = "SET";
            }
          });

        } else {
          // We reached our target server, but it returned an error
        }
      };

      request.onerror = function() {
        // There was a connection error of some sort
      };

      request.send();

    $( ".more-condition" ).click(function(e) {
      e.preventDefault();
      $( this ).toggleClass( "-shadow" );
      $( this ).find(".condition-detail").toggleClass( "-show-condition" );
    });

    $('#conditionModal').on('hidden.bs.modal', function (e) {
      console.log('Done!');
    });

    function startTimer() {
      var presentTime = document.getElementById('timer').innerHTML;
      var timeArray = presentTime.split(/[:]+/);
      var m = timeArray[0];
      var s = checkSecond((timeArray[1] - 1));
      if(s==59){m=m-1}
      
      document.getElementById('timer').innerHTML = m + ":" + s;
      if((m == 0) && (s == 0)) {
        $('#barcodeModal').modal('hide');
      }
      setTimeout(startTimer, 1000);
    }

    function checkSecond(sec) {
      if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
      if (sec < 0) {sec = "59"};
      return sec;
    }


      <?php if($lang=='th'): ?>
      document.getElementById('reccoupon-title').innerHTML = "คูปองส่วนลดเฉพาะคุณ";
      document.getElementById('itemcoupon-title').innerHTML = "คูปองส่วนลดสินค้า";
      document.getElementById('credits-title').innerHTML = "โปรโมชั่นบัตรเครดิต";
      document.getElementById('credits-subtitle').innerHTML = "เมื่อช็อปที่ Central Food Hall & Tops";
      $('.condition-title').html("เงื่อนไขการใช้คูปอง");
      $('.modal-th').removeClass('d-none');
      $('.condition-moda-th').removeClass('d-none');
      $('.btn-cancel').html('ยกเลิก');
      $('.btn-confirm').html('ตกลง');
      $('.title-timer').html('ระยะเวลาการใช้งาน');
      $('.title-caution').html('หากท่านปิดหน้านี้คูปองจะไม่สามารถใช้ได้อีก');
      $('.title-show').html('กรุณาแสดงเลขบาร์โค้ดต่อแคชเชียร์');
      <?php else: ?>
      document.getElementById('reccoupon-title').innerHTML = "Recommended coupon for you";
      document.getElementById('itemcoupon-title').innerHTML = "Item discount coupon";
      document.getElementById('credits-title').innerHTML = "Credit card promotion";
      document.getElementById('credits-subtitle').innerHTML = "when shop at Cental Food Hall & Tops";
      $('.condition-title').html("Conditions");
      $('.modal-en').removeClass('d-none');
      $('.condition-moda-en').removeClass('d-none');
      $('.btn-cancel').html('Cancel');
      $('.btn-confirm').html('OK');
      $('.title-timer').html('Time for use coupon');
      $('.title-caution').html('Once closed, you may not return to this page and the coupon will be invalid.');
      $('.title-show').html('Please present this barcode to cashier.');
      <?php endif; ?>

      let carousel = $('#owl-data');

      carousel.owlCarousel({
        items: 1,
        //lazyLoad: true,
        //loop: true,
        dots: true,
        margin: 0,
        //autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
      });

    </script>

  </body>
</html>