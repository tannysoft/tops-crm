<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('header'); ?>

  <body>
    <div class="app">
      <div class="tops-welcome">
          <div class="container">
          <h2 id="welcome-title" class="title">...</h2>
          </div>
      </div>
      <div class="tops-highlight">
          <div class="container">
              <div class="front">
                  <img src="<?php echo base_url(); ?>assets/img/store0110-th.jpg" id="front-image" alt="Banner" />
              </div>
          </div>
      </div>
      <div class="clear"></div>
      <div id="giftcoupon-content" class="tops-card d-none">
          <div class="container">
              <h2 class="title"><a id="gift-title" href="#">...</a></h2>
              <div class="promo">
                  <div id="data-gpro"><?php /*<div id="owl-data" class="owl-carousel owl-theme">
                      <div class="item">
                          <a id="cat1-link" href="#">
                              <img src="<?php echo base_url(); ?>assets/img/gift-100-th.jpg" id="giftcoupon-image" alt="Gift Coupon" />
                          </a>
                      </div>*/ ?>
                  </div>
                  <div class="more-condition">
                      <a href="#">
                          <img src="<?php echo base_url(); ?>assets/img/icon-condition.svg" alt="more" />
                          <h3 class="condition-title">...</h3>
                      </a>
                      <div class="condition-detail">
                        <ul class="modal-th d-none">
                          <li>บัตรของขวัญนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าที่<strong>ท็อปส์ มาร์เก็ต สาขาเซ็นทรัลพลาซาแกรนด์ พระราม 9, ท็อปส์ มาร์เก็ต สาขาเซ็นทรัลพลาซา แจ้งวัฒนะและท็อปส์ มาร์เก็ต สาขาเซ็นทรัลพลาซา ลาดพร้าว</strong></li>
                          <li>บัตรของขวัญนี้ไม่สามารถใช้ที่ท็อปส์ออนไลน์ได้</li>
                          <li>บัตรของขวัญนี้สำหรับสมาชิกเดอะวัน ที่เป็นชื่อเดียวกับที่ระบุบนคูปองเท่านั้น</li>
                          <li>บัตรของขวัญนี้ใช้ได้กับสินค้าราคาปกติและสินค้าราคาโปรโมชั่น</li>
                          <li>บัตรของขวัญนี้ไม่สามารถใช้กับสินค้ากลุ่มหนังสือ (หนังสือพิมพ์, นิตยสาร), ซีดี, ร้านค้าเช่า, ฟู้ดคอร์ท, ร้านขายยา และเซกาเฟรโด ซาเนตติ เอสเพรสโซ</li>
                          <li>บัตรของขวัญนี้ไม่สามารถแลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
                          <li>ขอสงวนสิทธิ์การใช้บัตรของขวัญที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี</li>
                          <li>บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงือนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                        </ul>
                        <ul class="modal-en d-none">
                          <li>This gift voucher can be used to get discount at <strong>Tops Market, CentralPlaza Grand Rama 9, Tops Market, CentralPlaza Chaengwattana and Tops Market, CentralPlaza Ladprao</strong></li>
                          <li>This gift voucher cannot be used at Tops online</li>
                          <li>This gift voucher must be used with The 1 card owned by customer whose name is on the voucher.</li>
                          <li>This gift voucher can be used with normal and promotional-priced items.</li>
                          <li>This gift voucher cannot be used with books (newspaper and magazine), CD, rental shop, food court, drugstore and Segafredo Zanetti Espresso.</li>
                          <li>This gift voucher cannot be exchanged or redeemed for cash.</li>
                          <li>Central Food Retail Co., Ltd. reserves the right to reject the capture screen or duplicated version of gift vouchers.</li>
                          <li>Central Food Retail Co., Ltd. reserves the right to change terms and conditions without prior notice.</li>
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>

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

      <div id="cpn2-content" class="tops-card d-none">
          <div class="container">
              <h2 class="title"><a id="discoupon-title" href="#">...</a></h2>
              <div class="promo -no-side">
                  <div id="owl-cpn2" class="owl-carousel owl-theme"></div>
                  <div class="more-condition">
                      <a href="#">
                          <img src="<?php echo base_url(); ?>assets/img/icon-condition.svg" alt="more" />
                          <h3 class="condition-title">...</h3>
                      </a>
                      <div class="condition-detail">
                        <ul class="modal-th d-none">
                          <li>ยอดซื้อตามที่กำหนด คำนวณจากมูลค่าหลังหักส่วนลดทุกชนิดแล้ว</li>
                          <li>ยกเว้นสินค้าซื้อเหมา (การซื้อสินค้าที่มีบาร์โค้ดเดียวกันตั้งแต่ 7 ชิ้นขึ้นไป/ใบเสร็จ), สินค้ายกแพ็คยี่ห้อ เอ็ม 150 และ ยี่ห้อเบอร์ดี้, สินค้าแผนกเครื่องใช้ไฟฟ้า, กระเช้าของขวัญทุกชนิด, เครื่องดื่มผสมแอลกอฮอล์, บุหรี่, นมผงเด็กสูตรทารกและสูตรต่อเนื่อง, อาหารเสริมสำหรับเด็ก, น้ำมันประกอบอาหาร, น้ำตาลประกอบอาหาร, บริการชำระบิล, บัตรเติมเงิน, บัตรอินเทอร์เน็ต, บัตรโทรศัพท์ระหว่างประเทศ, บัตรของขวัญ, ร้านขายยา, ร้านหนังสือ, ร้านค้าเช่า, ฟู้ดคอร์ท, Tops FLAVOUR, dining area at Central Food Hall และร้านเซกาเฟรโด ซาเนตติ เอสเพรสโซ</li>
                          <li>คูปองส่วนลดนี้สามารถใช้ร่วมกับคูปองส่วนลดอื่นได้ หากยอดซื้อของใบเสร็จนั้นมากกว่าหรือเท่ากับยอดซื้อตามเงื่อนไขของแต่ละคูปองรวมกัน</li>
                          <li>คูปองนี้ใช้เป็นส่วนลดสำหรับสมาชิกเดอะวัน และใช้ได้เพียง 1 ครั้ง /ใบเสร็จ ที่<strong>ท็อปส์ มาร์เก็ต สาขาเซ็นทรัลพลาซา แกรนด์ พระราม 9, ท็อปส์ มาร์เก็ต สาขาเซ็นทรัลพลาซา แจ้งวัฒนะ และท็อปส์ มาร์เก็ต สาขาเซ็นทรัลพลาซา ลาดพร้าว</strong></li>
                          <li>คูปองนี้ไม่สามารถแลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
                          <li>ขอสงวนสิทธิ์การใช้คูปองที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี</li>
                          <li>บริษัทเซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงือนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                          <li>การอนุมัติการใช้คูปองนี้ขึ้นอยู่กับดุลยพินิจของบริษัทเซ็นทรัล ฟู้ด รีเทล จำกัด</li>
                        </ul>
                        <ul class="modal-en d-none">
                          <li>The purchase price must be net price after deducting discounts</li>
                          <li>Excluding the following items: wholesale (7 or more items bearing the same barcode/receipt), bulk pack of M-150's products and Birdy's  products, electronics, all gift baskets, alcoholic beverages, tobacco, infant formula and follow-up formula of baby milk powder, baby dietary supplement, cooking oil, cooking sugar, bill payment, internet card, international phone card, prepaid card, gift voucher, drug store, bookstore, rental shop, food court, Tops FLAVOUR, dining area at Central Food Hall and Segafredo Zanetti Espresso.</li>
                          <li>This discount coupon can be used with other coupons had the purchase price in the receipt is greater than or equal to the purchase price of all coupons combined.</li>
                          <li>This coupon can be used once/receipt with The 1 members at <strong>Tops Market, CentralPlaza Grand Rama 9, Tops Market, CentralPlaza Chaengwattana and Tops Market, CentralPlaza Ladprao</strong></li>
                          <li>This coupon cannot be exchanged or redeemed for cash.</li>
                          <li>Central Food Retail Co., Ltd. reserves the right to reject the capture screen or duplicated version of this coupon.</li>
                          <li>Central Food Retail Co., Ltd. reserves the right to changes terms and conditions without prior notice.</li>
                          <li>Central Food Retail Co., Ltd. reserves the right to approve the validity of a coupon.</li>
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
                          <li>This coupon can be used to get discount at <strong>branches of Central Food Hall, Tops and Superkoom that have this item available.</strong></li>
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
                  <div id="owl-credits" class="owl-carousel owl-theme"></div>
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
          <div id="modal-body" class="modal-body">
            <div class="condition-moda-th d-none">
              <p>การใช้คูปองที่หน้าร้าน / สาขา</p>
              <ul>
                <li>คูปองไม่สามารถนำกลับมาใช้ต่อได้ เมื่อเวลาที่แสดงหมดลง</li>
                <li>เมื่อท่านกดใช้ต้องแสดงบาร์โค้ดต่อแคชเชียร์ในระยะเวลาที่กำหนด</li>
                <li>หากปิดหน้าแสดงคูปองท่านจะไม่สามารถกลับมาใช้คูปองได้</li>
              </ul>
              <p class="font-weight-bold">ท่านต้องการดำเนินการต่อหรือไม่?</p>
            </div>
            <div class="condition-moda-en d-none">
              <p>To use this Coupon</p>
              <ul>
                <li>Coupon is invalid after the time has run</li>
                <li>Tap use and present barcode to the cashier within the time shown.</li>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/owl-carousel/owl.carousel.min.js"></script>

    <script>

	    var unique_id = '<?php echo $unique_id; ?>';
      var serverUrl = 'https://crm.tops.co.th/';

      var resp;
      var request = new XMLHttpRequest();
      request.open('GET', serverUrl + 'data/39/' + unique_id, true);

      request.onload = function() {
        if (request.status >= 200 && request.status < 400) {
          // Success!
          resp = JSON.parse(request.responseText);

          var language = resp.data.lang;
          //var language = lang.toLowerCase();
          var banner;

          var user_id = resp.data.id;

          if(language == "th") {
            document.getElementById("front-image").src = resp.data.th.promo_image;
            document.getElementById('welcome-title').innerHTML = "สวัสดี คุณ" + resp.data.th.firstname;
            document.getElementById('gift-title').innerHTML = "บัตรของขวัญพิเศษเฉพาะคุณ";
            document.getElementById('reccoupon-title').innerHTML = "คูปองส่วนลดเฉพาะคุณ";
            document.getElementById('discoupon-title').innerHTML = "คูปองส่วนลดเงินสด";
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
          } else {
            document.getElementById("front-image").src = resp.data.en.promo_image;
            document.getElementById('welcome-title').innerHTML = "Hello " + resp.data.en.firstname;
            document.getElementById('gift-title').innerHTML = "Special Gift Voucher for you";
            document.getElementById('reccoupon-title').innerHTML = "Recommended coupon for you";
            document.getElementById('discoupon-title').innerHTML = "Cash discount coupon";
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
          }
/*
          if(resp.data.gift_coupon) {
            if(language == "th") {
              document.getElementById("giftcoupon-image").src = resp.data.gift_coupon.th;
              var elementModal = document.getElementById("giftcoupon-content");
              elementModal.classList.remove("d-none");
            } else {
              document.getElementById("giftcoupon-image").src = resp.data.gift_coupon.en;
              var elementModal = document.getElementById("giftcoupon-content");
              elementModal.classList.remove("d-none");
            }
          }*/

          if(resp.data.barcodes.GPRO) {

            var elementModal = document.getElementById("giftcoupon-content");
            // elementModal.classList.remove("d-none");

            $.each(resp.data.barcodes.GPRO, function (key, value) {
              var htmlUsed = null;
              var classUsed = null;
              if(value.used == true) {
                htmlUsed = "<div class='stamp'><img src='" + serverUrl + "focusstore01/assets/img/icon-used.svg' alt='stamp' /></div>";
                classUsed = "bar-display coupon-used";
              } else {
                htmlUsed = "";
                classUsed = "bar-display";
              }
              $("#data-gpro").append('<div class="item"><a class="' + classUsed + '" data-customer="' + user_id + '" data-barcode="' + value.barcode + '" data-type="' + value.type + '" href="#"><img src="' + value.image + '" />' + htmlUsed + '</a></div>');
            });

          }

          if(resp.data.barcodes.CPN2) {

            var elementModal = document.getElementById("cpn2-content");
            elementModal.classList.remove("d-none");

            $.each(resp.data.barcodes.CPN2, function (key, value) {
              var htmlUsed = null;
              var classUsed = null;
              if(value.used == true) {
                htmlUsed = "<div class='stamp'><img src='" + serverUrl + "focusstore01/assets/img/icon-used.svg' alt='stamp' /></div>";
                classUsed = "bar-display coupon-used";
              } else {
                htmlUsed = "";
                classUsed = "bar-display";
              }
              $("#owl-cpn2").append('<div class="item"><a class="' + classUsed + '" data-customer="' + user_id + '" data-barcode="' + value.barcode + '" data-type="' + value.type + '" href="#"><img src="' + value.image + '" />' + htmlUsed + '</a></div>');
            });

            var carousel_cpn2 = $('#owl-cpn2');

            carousel_cpn2.owlCarousel({
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
              $("#owl-cpn8").append('<div class="item"><a class="' + classUsed + '" data-customer="' + user_id + '" data-barcode="' + value.barcode + '" data-type="' + value.type + '" href="#"><img src="' + value.image + '" />' + htmlUsed + '</a></div>');
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
              $("#owl-cpn9").append('<div class="item"><a class="' + classUsed + '" data-customer="' + user_id + '" data-barcode="' + value.barcode + '" data-type="' + value.type + '" href="#"><img src="' + value.image + '" />' + htmlUsed + '</a></div>');
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
                $("#owl-credits").append('<div class="item"><a href="' + value.th.link + '"><img src="' + value.th.image + '" /></a></div>');
              } else {
                $("#owl-credits").append('<div class="item"><a href="' + value.en.link + '"><img src="' + value.en.image + '" /></a></div>');
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

            if(data_type == 'CPN8') {
              data_type = 'CPN2';
            }

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

            $(".bar-display[data-customer='" + data_customer + "'][data-barcode='" + data_barcode + "']").append("<div class='stamp'><img src='" + serverUrl + "focusstore01/assets/img/icon-used.svg' alt='stamp' /></div>").addClass("coupon-used");
            $( '#barcode-type' ).html( data_type );
            $( '#barcode-image' ).html( "<img src='" + serverUrl + 'focusstore01/assets/barcode/' + data_barcode + ".png' alt='barcode' />" );
            $( '#barcode-number' ).html( data_barcode );
            $( '#timer' ).html( '10:00' );

            $('#barcodeModal').modal('show');
            
            if(setFirstTimer == null) {
              startTimer();
              setFirstTimer = "SET";
            }

            sendUseCoupon(data_customer, data_barcode);
<?php
            /*$( this ).append("<div class='stamp'><img src='" + serverUrl + "focusstore01/assets/img/icon-used.svg' alt='stamp' /></div>");
            $( this ).addClass("coupon-used");
            
            var customer_id = $( this ).attr("data-customer");
            var barcode_number = $( this ).attr("data-barcode");
            $( '#barcode-image' ).html( "<img src='" + serverUrl + 'focusstore01/assets/barcode/' + barcode_number + ".png' alt='barcode' />" );

            $('#barcodeModal').modal('show');

            sendUseCoupon(customer_id, barcode_number);
*/ ?>
          });
          <?php /*
          $('#conditionModal').on('hidden.bs.modal', function (e) {
            console.log('Done!');
          });

          barcodeModal

          if(language == "th") {
            document.getElementById("front-image").src = resp.data.th.front_image;
            document.getElementById("back-image").src = resp.data.th.back_image;
            document.getElementById('welcome-title').innerHTML = "สวัสดี คุณ" + resp.data.th.firstname + "&nbsp;" + resp.data.th.lastname;
            document.getElementById('cond-title').innerHTML = "เงื่อนไขรายการ";
            document.getElementById("cat1-image").src = resp.data.th.cat_image_1;
            document.getElementById("cat2-image").src = resp.data.th.cat_image_2;
            document.getElementById("cat3-image").src = resp.data.th.cat_image_3;
            document.getElementById("credits-image").src = "assets/img/credits-title-th.png";
            document.getElementById('conditionModalLabel').innerHTML = "เงื่อนไขการรับคะแนน The1";
            var elementModal = document.getElementById("modal-th");
            elementModal.classList.remove("d-none");
            document.getElementById("cat1-link").href = resp.data.th.cat_link_1;
            document.getElementById("cat2-link").href = resp.data.th.cat_link_2;
            document.getElementById("cat3-link").href = resp.data.th.cat_link_3;
          } else {
            document.getElementById("front-image").src = resp.data.en.front_image;
            document.getElementById("back-image").src = resp.data.en.back_image;
            document.getElementById('welcome-title').innerHTML = "Hello " + resp.data.en.firstname + "&nbsp;" + resp.data.en.lastname;
            document.getElementById('cond-title').innerHTML = "Conditions";
            document.getElementById("cat1-image").src = resp.data.en.cat_image_1;
            document.getElementById("cat2-image").src = resp.data.en.cat_image_2;
            document.getElementById("cat3-image").src = resp.data.en.cat_image_3;
            document.getElementById("credits-image").src = "assets/img/credits-title-en.png";
            document.getElementById('conditionModalLabel').innerHTML = "Extra The 1 Point Conditions";
            var elementModal = document.getElementById("modal-en");
            elementModal.classList.remove("d-none");
            document.getElementById("cat1-link").href = resp.data.en.cat_link_1;
            document.getElementById("cat2-link").href = resp.data.en.cat_link_2;
            document.getElementById("cat3-link").href = resp.data.en.cat_link_3;
          }

          var src_str = document.getElementById("modal-body").innerHTML;
          var str_rep = src_str.replace(/{{ points }}/g,resp.data.points);
          document.getElementById("modal-body").innerHTML = str_rep;

          if(resp.data.promotion_click_condition_id == null) {
            $("#card").flip();

            $("#card").on('flip:done',function(){
                $('#card').addClass('disabled');
                sendUsePromotion(resp.data.id, resp.data.Condition_ID);
            });

          } else {
            if(language=='th') {
              $("#card").html('<img src="' + resp.data.th.back_image + '" id="front-image" alt="Banner" />');
            } else {
              $("#card").html('<img src="' + resp.data.en.back_image + '" id="front-image" alt="Banner" />');
            }
          }

          //var creditsCard = [];
          if(language=='th') {
            reloadCarousel(resp.data.th.credits.data, resp.data.credits.counts);
          } else {
            reloadCarousel(resp.data.en.credits.data, resp.data.credits.counts);
          }
*/ ?>
        } else {
          // We reached our target server, but it returned an error
        }
      };

      request.onerror = function() {
        // There was a connection error of some sort
      };

      request.send();

      function sendUseCoupon(respId, conditionId) {
        var respCoupon;
        var requestCoupon = new XMLHttpRequest();
        //console.log(serverUrl + 'coupon_click/39/' + respId + '/' + conditionId);
        requestCoupon.open('GET', serverUrl + 'coupon_click/39/' + respId + '/' + conditionId, true);

        requestCoupon.onload = function() {
          if (requestCoupon.status >= 200 && requestCoupon.status < 400) {
            // Success!
            //console.log(requestCoupon.responseText);
          } else {
            // We reached our target server, but it returned an error
            console.log('error');
          }
        };

        requestCoupon.onerror = function() {
          // There was a connection error of some sort
        };

        requestCoupon.send();
      }
<?php /*
      var elementPromo = document.getElementById("card");
      elementPromo.classList.remove("d-none");

      var elementCondition = document.getElementsByClassName("tops-condition");
      elementCondition[0].classList.remove("d-none");

      var elementCredits = document.getElementsByClassName("tops-credits");
      elementCredits[0].classList.remove("d-none");

      function reloadCarousel(creditsCard, creditsCount) {

        if(creditsCount > 1) {

          $.each(creditsCard, function (key, value) {
            $("#owl-data").append('<div class="item"><a href="' + value.link + '"><img src="' + value.image + '" /></a></div>');
          });

          var carousel = $('#owl-data');

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

        } else {
          $.each(creditsCard, function (key, value) {
            $("#owl-data").removeClass();
            $("#owl-data").html('<a href="' + value.link + '"><img src="' + value.image + '" /></a>');
          });
        }

      }

      function sendUsePromotion(respId, conditionId) {
        var respPromo;
        var requestPromo = new XMLHttpRequest();
        console.log(serverUrl + 'pclick/' + respId + '/' + conditionId);
        requestPromo.open('GET', serverUrl + 'pclick/' + respId + '/' + conditionId, true);

        requestPromo.onload = function() {
          if (requestPromo.status >= 200 && requestPromo.status < 400) {
            // Success!
            console.log(requestPromo.responseText);
          } else {
            // We reached our target server, but it returned an error
            console.log('error');
          }
        };

        requestPromo.onerror = function() {
          // There was a connection error of some sort
        };

        requestPromo.send();
      }

      var carousel = $('#owl-data');

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

      var carousel_credits = $('#owl-credits');

      carousel_credits.owlCarousel({
          items: 1,
          lazyLoad: true,
          loop: true,
          dots: true,
          margin: 0,
          autoplay: true,
          autoplayTimeout: 3000,
          autoplayHoverPause: true
      });
      
*/ ?>
    $( ".more-condition" ).click(function(e) {
      e.preventDefault();
      $( this ).toggleClass( "-shadow" );
      //$( this ).toggleClass( "-show-condition" );
      $( this ).find(".condition-detail").toggleClass( "-show-condition" );
      //$( this ).find(".condition-detail").slideToggle( "slow", function() {
        
      //});
    });

    function startTimer() {
      var presentTime = document.getElementById('timer').innerHTML;
      var timeArray = presentTime.split(/[:]+/);
      var m = timeArray[0];
      var s = checkSecond((timeArray[1] - 1));
      if(s==59){m=m-1}
      //if(m<0){alert('timer completed')}
      
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

    </script>

  </body>
</html>