<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('header'); ?>

  <body>
    <div class="app">
      <div class="tops-welcome">
        <div class="container">
          <h2 class="title">สวัสดี คุณลูกค้าคนพิเศษ</h2>
        </div>
      </div>
      <div class="tops-highlight">
        <div class="container">
          <div class="tops-card">
            <img src="<?php echo base_url(); ?>assets/img/robinson.png" id="front-image" alt="Banner" />
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="tops-condition">
        <div class="container">
          <h2 class="title"><a id="cond-title" href="#" data-toggle="modal" data-target="#conditionModal">เงื่อนไขรายการ</a></h2>
          <div class="promo">
            <div class="item">
              <a id="cat1-link" href="https://www.tops.co.th/th/campaign/promotion-product-chinese-new-year-2019?utm_source=sms_the1&utm_medium=sms&utm_campaign=|da:20190131|ch:sms|br:topsonline|cat:all|cm:the1-chinesenewyear|">
                <img src="<?php echo base_url(); ?>assets/img/category-1-th.png" alt="Foods" />
              </a>
            </div>
            <div class="item">
              <a id="cat2-link" href="https://www.tops.co.th/th/campaign/promotion-product-chinese-new-year-2019?utm_source=sms_the1&utm_medium=sms&utm_campaign=|da:20190131|ch:sms|br:topsonline|cat:all|cm:the1-chinesenewyear|">
                <img src="<?php echo base_url(); ?>assets/img/category-2-th.png" alt="Fruits" />
              </a>
            </div>
            <div class="item">
              <a id="cat3-link" href="https://www.tops.co.th/th/campaign/promotion-cleaning-chinese-new-year-2019?utm_source=sms_the1&utm_medium=sms&utm_campaign=|da:20190131|ch:sms|br:topsonline|cat:all|cm:the1-chinesenewyear|">
                <img src="<?php echo base_url(); ?>assets/img/category-3-th.png" alt="Clean" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="tops-credits">
        <div class="container">
          <div class="credits-title">
            <img src="<?php echo base_url(); ?>assets/img/credits-title-th.png" alt="Credit Card" />
          </div>
          <div class="credits-content">
            <!-- Set up your HTML -->
            <div id="owl-data" class="owl-carousel owl-theme">
                <div class="item">
                  <a href="https://bit.ly/2B7NYOx">
                    <img src="<?php echo base_url(); ?>assets/img/credits-central-th.jpg" alt="Central" />
                  </a>
                </div>
                <div class="item">
                  <a href="https://bit.ly/2B5whzd">
                    <img src="<?php echo base_url(); ?>assets/img/credits-scb-th.jpg" alt="SCB" />
                  </a>
                </div>
                <div class="item">
                  <a href="https://bit.ly/2RUYFyq">
                    <img src="<?php echo base_url(); ?>assets/img/credits-ktc-th.jpg" alt="KTC" />
                  </a>
                </div>
                <div class="item">
                  <a href="https://bit.ly/2G4uRIw">
                    <img src="<?php echo base_url(); ?>assets/img/credits-bay-th.jpg" alt="BAY" />
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
            <h5 class="modal-title">เงื่อนไขการรับคะแนน The1</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ul id="modal-th">
              <li>ยอดซื้อตามที่กำหนด คำนวณจากมูลค่าหลังหักส่วนลดทุกชนิดแล้ว</li>
              <li>ยกเว้นสินค้าซื้อเหมา (การซื้อสินค้าที่มีบาร์โค้ดเดียวกันตั้งแต่ 7 ชิ้นขึ้นไป/ใบเสร็จ),สินค้ายกแพ็คยี่ห้อ เอ็ม 150 และ ยี่ห้อเบอร์ดี้, สินค้าแผนกเครื่องใช้ไฟฟ้า, กระเช้าของขวัญทุกชนิด, เครื่องดื่มผสมแอลกอฮอล์, บุหรี่, นมผงเด็กสูตรทารกและสูตรต่อเนื่อง, อาหารเสริมสำหรับเด็ก, น้ำมันประกอบอาหาร, น้ำตาลประกอบอาหาร, บริการชำระบิล, บัตรเติมเงิน, บัตรอินเทอร์เน็ต, บัตรโทรศัพท์ระหว่างประเทศ, บัตรของขวัญ, ร้านขายยา, ร้านหนังสือ, ร้านค้าเช่า, ฟู้ดคอร์ท, Tops FLAVOUR, dining area at Central Food Hall และร้านเซกาเฟรโด ซาเนตติ เอสเพรสโซ</li>
              <li>คูปองส่วนลดนี้สามารถใช้ร่วมกับคูปองส่วนลดอื่นได้ หากยอดซื้อของใบเสร็จนั้น มากกว่าหรือเท่ากับยอดซื้อตามเงื่อนไขของแต่ละคูปองรวมกัน</li>
              <li>คูปองนี้ใช้เป็นส่วนลดสำหรับสมาชิกเดอะวัน และใช้ได้เพียง 1 ครั้ง /ใบเสร็จ ที่เซ็นทรัล ฟู้ด ฮอลล์ และท็อปส์ ทุกสาขา</li>
              <li>คูปองนี้ไม่สามารถแลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
              <li>ขอสงวนสิทธิ์การใช้คูปองที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี</li>
              <li>บริษัทเซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงือนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
              <li>การอนุมัติการใช้คูปองนี้ขึ้นอยู่กับดุลยพินิจของบริษัทเซ็นทรัล ฟู้ด รีเทล จำกัด</li>
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