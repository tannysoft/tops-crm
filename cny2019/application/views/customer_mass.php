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
          <div id="card" class="tops-card">
            <div class="front">
              <img src="<?php echo base_url(); ?>assets/img/banner-1-<?php echo ($lang=='th') ? 'th': 'en'; ?>.png" id="front-image" alt="Banner" />
            </div>
            <div class="back">
              <img src="<?php echo base_url(); ?>assets/img/43582-<?php echo ($lang=='th') ? 'th': 'en'; ?>.png" alt="Banner" />
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="tops-condition">
        <div class="container">
          <h2 class="title"><a id="cond-title" href="#" data-toggle="modal" data-target="#conditionModal"><?php echo ($lang=='th') ? 'เงื่อนไขรายการ': 'Conditions'; ?></a></h2>
          <div class="promo">
            <div class="item">
              <a id="cat1-link" href="<?php echo ($lang=='th') ? 'https://www.tops.co.th/th/campaign/promotion-product-chinese-new-year-2019?utm_source=sms_the1&utm_medium=sms&utm_campaign=|da:20190131|ch:sms|br:topsonline|cat:all|cm:the1-chinesenewyear|' : 'https://www.tops.co.th/en/campaign/promotion-product-chinese-new-year-2019?utm_source=sms_the1&utm_medium=sms&utm_campaign=|da:20190131|ch:sms|br:topsonline|cat:all|cm:the1-chinesenewyear|'; ?>">
                <img src="<?php echo base_url(); ?>assets/img/category-1-<?php echo ($lang=='th') ? 'th': 'en'; ?>.png" alt="Foods" />
              </a>
            </div>
            <div class="item">
              <a id="cat2-link" href="<?php echo ($lang=='th') ? 'https://www.tops.co.th/th/campaign/promotion-product-chinese-new-year-2019?utm_source=sms_the1&utm_medium=sms&utm_campaign=|da:20190131|ch:sms|br:topsonline|cat:all|cm:the1-chinesenewyear|' : 'https://www.tops.co.th/en/campaign/promotion-product-chinese-new-year-2019?utm_source=sms_the1&utm_medium=sms&utm_campaign=|da:20190131|ch:sms|br:topsonline|cat:all|cm:the1-chinesenewyear|'; ?>">
                <img src="<?php echo base_url(); ?>assets/img/category-2-<?php echo ($lang=='th') ? 'th': 'en'; ?>.png" alt="Fruits" />
              </a>
            </div>
            <div class="item">
              <a id="cat3-link" href="<?php echo ($lang=='th') ? 'https://www.tops.co.th/th/campaign/promotion-cleaning-chinese-new-year-2019?utm_source=sms_the1&utm_medium=sms&utm_campaign=|da:20190131|ch:sms|br:topsonline|cat:all|cm:the1-chinesenewyear|' : 'https://www.tops.co.th/en/campaign/promotion-cleaning-chinese-new-year-2019?utm_source=sms_the1&utm_medium=sms&utm_campaign=|da:20190131|ch:sms|br:topsonline|cat:all|cm:the1-chinesenewyear|'; ?>">
                <img src="<?php echo base_url(); ?>assets/img/category-3-<?php echo ($lang=='th') ? 'th': 'en'; ?>.png" alt="Clean" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="tops-credits">
        <div class="container">
          <div class="credits-title">
            <img src="<?php echo base_url(); ?>assets/img/credits-title-<?php echo ($lang=='th') ? 'th': 'en'; ?>.png" alt="Credit Card" />
          </div>
          <div class="credits-content">
            <!-- Set up your HTML -->
            <div id="owl-data" class="owl-carousel owl-theme">
                <div class="item">
                  <a href="<?php echo ($lang=='th') ? 'https://bit.ly/2B7NYOx' : 'https://bit.ly/2sR112a'; ?>">
                    <img src="<?php echo base_url(); ?>assets/img/credits-central-<?php echo ($lang=='th') ? 'th': 'en'; ?>.jpg" alt="Central" />
                  </a>
                </div>
                <div class="item">
                  <a href="<?php echo ($lang=='th') ? 'https://bit.ly/2B5whzd' : 'https://bit.ly/2DC23FJ'; ?>">
                    <img src="<?php echo base_url(); ?>assets/img/credits-scb-<?php echo ($lang=='th') ? 'th': 'en'; ?>.jpg" alt="SCB" />
                  </a>
                </div>
                <div class="item">
                  <a href="<?php echo ($lang=='th') ? 'https://bit.ly/2RUYFyq' : 'https://bit.ly/2Rk8rVw'; ?>">
                    <img src="<?php echo base_url(); ?>assets/img/credits-ktc-<?php echo ($lang=='th') ? 'th': 'en'; ?>.jpg" alt="KTC" />
                  </a>
                </div>
                <div class="item">
                  <a href="<?php echo ($lang=='th') ? 'https://bit.ly/2G4uRIw' : 'https://bit.ly/2S9hZHv'; ?>">
                    <img src="<?php echo base_url(); ?>assets/img/credits-bay-<?php echo ($lang=='th') ? 'th': 'en'; ?>.jpg" alt="BAY" />
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
    </div>

    <!-- Modal -->
    <div class="modal fade" id="conditionModal" tabindex="-1" role="dialog" aria-labelledby="conditionModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="conditionModalLabel">เงื่อนไขการรับคะแนน The1</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ul id="modal-th" class="d-none">
              <li>รับคะแนนเดอะวันพิเศษ  เมื่อซื้อเนื้อสัตว์, อาหารทะเล, ผัก, ผลไม้สด, ผลิตภัณฑ์ทำความสะอาดบ้านและเสื้อผ้า (ยกเว้น ถุงขยะ, แผ่นเช็ดทำความสะอาดสำหรับเด็ก และผลิตภัณฑ์ทำความสะอาดรถยนต์) ครบตามที่กำหนด</li>
              <li>ยอดซื้อคำนวณจากมูลค่าหลังหักส่วนลดทุกชนิดแล้ว</li>
              <li>คะแนนเดอะวัน 25 เท่า คำนวณจากยอดซื้อสินค้าที่ร่วมรายการ หารด้วย 25 คูณ 25 ที่เซ็นทรัล ฟู้ด ฮอลล์ และ ท็อปส์ ทุกสาขา</li>
              <li>จำกัดคะแนนสูงสุด 2,000 คะแนน/ใบเสร็จ</li>
              <li>ระบบจะเพิ่มคะแนนเข้าบัญชีสะสมเดอะวันอัตโนมัติภายใน 1 - 5 วันทำการ นับจากวันที่ซื้อสินค้าตามเงื่อนไข</li>
              <li>ขอสงวนสิทธิ์การเพิ่มคะแนนพิเศษเฉพาะลูกค้าที่ได้รับสิทธิ์เท่านั้นและขอสงวนสิทธิ์การใช้สิทธิ์แทนทุกกรณี</li>
              <li>บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขรายการโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
            </ul>
            <ul id="modal-en" class="d-none">
              <li>Extra The 1 points will be calculated from a purchase of meat, seafood, fresh vegetables, fruits, home cleaning products and fabric detergent (excluding garbage bags, baby wipes and car cleaning products) as required.</li>
              <li>The purchase price must be net price after deducting discounts.</li>
              <li>x25 The 1 points is calculated from the purchase price of participating products divided by 25 and multiplied by 25 at any Central Food Hall and Tops.</li>
              <li>Limit The 1 point redemption to 2,000 points / receipt.</li>
              <li>The 1 points will be automatically credited to your account within 1 – 5 business days from the date of purchase under required conditions.</li>
              <li>We reserve the right to give extra points to The1 account owner only and to decline any other individuals to claim the prize.</li>
              <li>Central Food Retail Co., Ltd. reserves the right to change any terms and conditions without prior notice.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/jquery-flip/jquery.flip.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/owl-carousel/owl.carousel.min.js"></script>

    <script>

      $("#card").flip();

      $("#card").on('flip:done',function(){
          $('#card').addClass('disabled');
      });

      <?php if($lang=='th'): ?>
      document.getElementById('conditionModalLabel').innerHTML = "เงื่อนไขการรับคะแนน The1";
      let elementModal = document.getElementById("modal-th");
      elementModal.classList.remove("d-none");
      <?php else: ?>
      document.getElementById('conditionModalLabel').innerHTML = "Extra The 1 Point Conditions";
      let elementModal = document.getElementById("modal-en");
      elementModal.classList.remove("d-none");
      <?php endif; ?>

      let carousel = $('#owl-data');

      carousel.owlCarousel({
        items: 1,
        lazyLoad: true,
        loop: true,
        dots: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
      });

    </script>

    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

  </body>
</html>