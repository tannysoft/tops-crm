<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('header'); ?>

  <body>
    <div class="app">
      <div class="tops-welcome">
        <div class="container">
          <div class="welcome-ribbin">
            <img id="promo-ribbin" src="<?php echo base_url(); ?>assets/img/ribbin.png" alt="Promotion for you" />
          </div>
          <div class="welcome-text">
            <h2 id="welcome-title" class="title">...</h2>
            <p id="t1-title" class="number">...</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="tops-highlight">
        <div class="container">
          <div class="tops-highlight-shadow">
            <h2 class="title">
              <img src="<?php echo base_url(); ?>assets/img/header-2.png" />
              <div id="gift-header-title">...</div>
            </h2>
            <div class="gift-voucher">
              <div class="gift-image">
                <img src="<?php echo base_url(); ?>assets/img/voucher.png" alt="Gift Voucher" />
              </div>
              <div class="gift-detail">
                <div id="gfd-free" class="gfd-free">ฟรี!!!</div>
                <div class="gfd-bold"><strong id="gfd-value">...</strong> <span id="voucher-value">...</span></div>
                <div class="gfd-bold"><strong id="gfd-minimum">...</strong> <span id="min-purchase">...</span></div>
              </div>
              <div id="gfd-at" class="gfd-normal" style="font-size: 0.9rem">...</div>
              <div class="clearfix"></div>
              <div class="gift-timeline">
                <p id="gfd-timeline" style="font-size: 1.0rem">...</p>
              </div>
            </div>
            <div class="score">
              <div class="title">
                <h2 id="score-title">...</h2>
                <p id="score-date">...</p>
              </div>
              <div class="detail">
                <div class="score-bg">
                  <div class="score-purchase">
                    <div class="number"><strong id="balance">...</strong> / <span id="min-purchase-2">...</span></div>
                    <div class="progress"><span id="purchase-percent" style="width: 0%;"></span></div>
                  </div>
                  <div class="score-box">
                    <img src="<?php echo base_url(); ?>assets/img/box-new.png" alt="Box" />
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="score-evoucher">
                <p id="append-purchase">...</p>
              </div>
              <div class="more-condition">
                <a href="#">
                  <img src="<?php echo base_url(); ?>assets/img/icon-condition.svg" alt="more" />
                  <h3 class="condition-purchase">...</h3>
                </a>
                <div class="condition-detail">
                  <ul class="modal-th d-none">
                    <li>การสะสมยอดซื้อเฉพาะการซื้อสินค้าอุปโภคบริโภคในซูเปอร์มาร์เก็ตเท่านั้น <strong>ยกเว้น</strong> กระเช้าของขวัญทุกชนิด, เครื่องดื่มผสมแอลกอฮอล์,  นมผงเด็กสูตรทารกและต่อเนื่อง, บุหรี่, บัตรของขวัญ, บัตรเติมเงิน, บัตรอินเตอร์เน็ต และบัตรโทรศัพท์ระหว่างประเทศ</li>
                    <li>ยอดซื้อสะสมต้องเป็นยอดซื้อหลังหักส่วนลดทุกชนิดแล้ว ระหว่างวันที่ <strong>22 มี.ค. 2562 – 5 พ.ค. 2562</strong></li>
                    <li>เมื่อสะสมยอดซื้อครบตามที่กำหนด สามารถรับแลกรับ E-Gift Voucher ได้ทันที และใช้ได้ที่เซ็นทรัล ฟู้ด ฮอลล์ และท็อปส์ ทุกสาขา (ยกเว้นการช็อปผ่าน www.tops.co.th)</li>
                    <li>สงวนสิทธิ์เฉพาะลูกค้าที่ได้รับข้อความจาก SMS เท่านั้น</li>
                    <li>บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขรายการและของรางวัลที่มีมูลค่าเท่ากัน โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                  </ul>
                  <ul class="modal-en d-none">
                    <li> Only for an accumulated purchase of consumer goods in supermarket only except all gift baskets, alcoholic beverages, infant formula and follow-up formula of baby milk powder, tobacco, gift voucher, prepaid card, internet card and international phone card.</li>
                    <li>The accumulated purchase must be net price after deducting discounts from <strong>22 Mar 2019 – 5 May 2019.</strong></li>
                    <li>When accumulate purchase as required, you can redeem for E-Gift Vouchers instantly and use at all branches of Central Food Hall and Tops (excluding www.tops.co.th).</li>
                    <li>We reserve the right for the customers who receive SMS only.</li>
                    <li>Central Food Retail Co., Ltd. reserves the right to change any terms and conditions, or prize of equal value without prior notice.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div id="giftcoupon-content" class="your-evoucher d-none">
              <div class="title">
                <h2 id="evoucher-title">...</h2>
              </div>
              <div class="evoucher-timeline">
                <p id="evoucher-timeline">...</p>
              </div>
              <div class="evoucher-card">
                <div class="promo">
                    <div id="data-gpro" class="owl-carousel owl-theme"><?php /*<div id="owl-data" class="owl-carousel owl-theme">
                        <div class="item">
                            <a id="cat1-link" href="#">
                                <img src="<?php echo base_url(); ?>assets/img/gift-100-th.jpg" id="giftcoupon-image" alt="Gift Coupon" />
                            </a>
                        </div>*/ ?>
                    </div>
                </div>
              </div>
              <div class="more-condition">
                <a href="#">
                    <img src="<?php echo base_url(); ?>assets/img/icon-condition.svg" alt="more" />
                    <h3 class="condition-evoucher">...</h3>
                </a>
                <div class="condition-detail">
                  <ul class="modal-th d-none">
                    <li>บัตรของขวัญนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าเซ็นทรัล ฟู้ด ฮอลล์ และท็อปส์ ทุกสาขา</li>
                    <li>บัตรของขวัญนี้ไม่สามารถใช้ที่ท็อปส์ออนไลน์ได้</li>
                    <li>บัตรของขวัญนี้สำหรับสมาชิกเดอะวัน ที่ได้รับโปรโมชั่นสะสมยอดซื้อผ่านทาง SMS เท่านั้น</li>
                    <li>บัตรของขวัญนี้ใช้ได้กับสินค้าราคาปกติและสินค้าราคาโปรโมชั่น</li>
                    <li>บัตรของขวัญนี้ไม่สามารถใช้กับสินค้ากลุ่มหนังสือ (หนังสือพิมพ์, นิตยสาร), ซีดี, ร้านค้าเช่า, ฟู้ดคอร์ท, ร้านขายยา และเซกาเฟรโด ซาเนตติ เอสเพรสโซ</li>
                    <li>บัตรของขวัญนี้ไม่สามารถแลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
                    <li>ขอสงวนสิทธิ์การใช้บัตรของขวัญที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี</li>
                    <li>บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                  </ul>
                  <ul class="modal-en d-none">
                    <li>This gift voucher can be used to get discount at branches of Central Food Hall and Tops.</li>
                    <li>This gift voucher cannot be used at Tops online</li>
                    <li>This gift voucher must be used with The 1 member owned by customer whose receive accumulated spending promotion via SMS only.</li>
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
      </div>
      <div id="tops-mychoice" class="tops-mychoice d-none">
        <div class="container">
          <div class="tops-mychoice-shadow">
            <div class="title">
              <div class="logo">
                <img src="<?php echo base_url(); ?>assets/img/my-choice-logo.png" alt="My Choice" />
              </div>
              <div class="text">
                <h2>Health & Wellness</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="content">
              <div class="main-image">
                <a id="my-choice-link" href="#"><img id="my-choice-image" src="<?php echo base_url(); ?>assets/img/content/content-1.jpg" alt="My Choice" /></a>
              </div>
              <div id="owl-content" class="owl-carousel owl-theme">
                <?php /*<div class="item">
                  <div class="main-image">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/img/my-choice-logo.png" alt="My Choice" /></a>
                  </div>
                  <div class="sub-image">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/img/my-choice-logo.png" alt="My Choice" /></a>
                    <a href="#"><img src="<?php echo base_url(); ?>assets/img/my-choice-logo.png" alt="My Choice" /></a>
                  </div>
                </div>
                <div class="item">
                  <div class="main-image">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/img/my-choice-logo.png" alt="My Choice" /></a>
                  </div>
                  <div class="sub-image">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/img/my-choice-logo.png" alt="My Choice" /></a>
                    <a href="#"><img src="<?php echo base_url(); ?>assets/img/my-choice-logo.png" alt="My Choice" /></a>
                  </div>
                </div>*/ ?>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>

      <div id="cpn9-content" class="tops-card d-none">
          <div class="container">
              <h2 class="title"><a id="itemcoupon-title" href="#">...</a></h2>
              <div class="promo">
                  <div id="owl-cpn9" class="owl-carousel owl-theme owl-stage-show"></div>
                  <div class="more-condition">
                      <a href="#">
                          <img src="<?php echo base_url(); ?>assets/img/icon-condition.svg" alt="more" />
                          <h3 class="condition-title">...</h3>
                      </a>
                      <div class="condition-detail">
                        <div class="modal-th d-none">
                          <p class="-top"><strong>เงื่อนไขคูปอง Tops online</strong></p>
                          <ul>
                            <li>สิทธิพิเศษเฉพาะสมาชิกเดอะวัน</li>
                            <li>โปรโมชั่นนี้สำหรับการสั่งซื้อผ่าน www.tops.co.th ภายในระยะเวลาที่กำหนดนั้นยกเว้นสินค้าซื้อเหมา (การซื้อสินค้าที่มีบาร์โค้ดเดียวกันตั้งแต่ 7 ชิ้นขึ้นไป/ใบเสร็จ) สินค้ายกแพคยี่ห้อ M150 และเบอร์ดี้, กระเช้าของขวัญทุกชนิด, เครื่องดื่มผสมแอลกอฮอล์, น้ำมันประกอบอาหาร, น้ำตาล, อาหารเสริมสำหรับเด็กทารก, นมผงเด็กทารก และ สูตรต่อเนื่อง</li>
                            <li>ยอดซื้อคำนวณจากมูลค่าหลังหักส่วนลดทุกชนิดแล้ว</li>
                            <li>ลูกค้าจะได้รับส่วนลด เมื่อซื้อสินค้าครบตามเงื่อนไขที่กำหนด</li>
                            <li>ส่วนลดไม่สามารถโอนสิทธิ์ แลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
                            <li>บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไข โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                            <li>ตรวจสอบพื้นที่ให้บริการได้ที่ <a href="https://www.tops.co.th">www.tops.co.th</a></li>
                          </ul>
                          <p><strong>เงื่อนไขคูปองส่วนลดสินค้า</strong></p>
                          <ul>
                            <li>คูปองนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าที่เซ็นทรัล ฟู้ด ฮอลล์, ท็อปส์ มาร์เก็ต และท็อปส์ ซูเปอร์สโตร์เท่านั้น</li>
                            <li>คูปองนี้ใช้เป็นส่วนลดสินค้าตามจำนวนที่ระบุบนคูปองสำหรับสมาชิกเดอะวัน</li>
                            <li>คูปองนี้ไม่สามารถแลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
                            <li>ขอสงวนสิทธิ์การใช้บัตรของขวัญที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี</li>
                            <li>บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                          </ul>
                        </div>
                        <div class="modal-en d-none">
                          <p class="-top"><strong>Tops online coupon conditions</strong></p>
                          <ul>
                            <li>Exclusively for The1 members.</li>
                            <li>Promotion is valid for a limited time and on online purchase at www.tops.co.th only.</li>
                            <li>Excluding the following items: wholesale (7 or more items bearing the same barcode / receipt), bulk pack of M-150’s product and Birdy’s products, all gift baskets, alcoholic beverages, cooking oil, cooking sugar, baby foods, infant formula and follow-up formula of baby milk powder.</li>
                            <li>The purchase price is calculated on the net price after deducting discounts.</li>
                            <li>Customers will instantly receive discount at the time of purchase once the required purchase amount is made under the terms and conditions.</li>
                            <li>The discount cannot be transferred, exchanged, or redeemed for cash.</li>
                            <li>Central Food Retail Co., Ltd. reserves the right to change terms and conditions without prior notice. For more information, please visit <a href="https://www.tops.co.th">www.tops.co.th</a></li>
                          </ul>
                          <p><strong>Discount coupon conditions</strong></p>
                          <ul>
                            <li>This coupon can be used as a discount on the item on the coupon only at Central Food Hall, Tops market and Tops SUPERSTORE.</li>
                            <li>This coupon can be used for The 1 members to get discount at an exact amount stated on the coupon.</li>
                            <li>This coupon cannot be exchanged or redeemed for cash.</li>
                            <li>Central Food Retail Co., Ltd. reserves the right to reject the capture screen or duplicated version of coupons.</li>
                            <li>Central Food Retail Co., Ltd. reserves the right to change any terms and conditions without prior notice.</li>
                          </ul>
                        </div>
                      </div>
                  </div>
                  <div class="owl-theme">
                    <div class="owl-dots cpn9-dots"></div>
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
                  <div id="owl-credits" class="owl-carousel owl-theme owl-stage-show"></div>
              </div>
          </div>
      </div>

      <footer class="tops-footer">
          <div class="container">
              <img width="200" height="39" src="<?php echo base_url(); ?>assets/img/tops-footer.png" alt="Tops" />
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
                <li>เมื่อท่านกดใช้ต้องแสดงบาร์โค้ดต่อแคชเชียร์ภายในเวลา 10 นาที</li>
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
      request.open('GET', serverUrl + 'data/42/' + unique_id, true);

      request.onload = function() {
        if (request.status >= 200 && request.status < 400) {
          // Success!
          resp = JSON.parse(request.responseText);

          var language = resp.data.lang;
          //var language = lang.toLowerCase();
          var banner;

          var user_id = resp.data.id;

          if(language == "th") {
            <?php /*// document.getElementById("front-image").src = resp.data.th.promo_image;*/ ?>
            document.getElementById("promo-ribbin").src = "<?php echo base_url(); ?>assets/img/ribbin.png";
            document.getElementById('welcome-title').innerHTML = "<strong>สวัสดี</strong> คุณ" + resp.data.th.firstname;
            document.getElementById('t1-title').innerHTML = "<strong>หมายเลข</strong> <img src=\"<?php echo base_url(); ?>assets/img/the1-logo.png\" /> " + resp.data.t1c_card_no;
            document.getElementById('gift-header-title').innerHTML = "ของขวัญสำหรับ<span>นักช็อปตัวจริง</span>";
            document.getElementById('gfd-free').innerHTML = "ฟรี!!!";
            document.getElementById('gfd-value').innerHTML = "E-Gift Voucher มูลค่า";
            document.getElementById('gfd-minimum').innerHTML = "เมื่อสะสมยอดช็อปครบ";
            document.getElementById('gfd-at').innerHTML = "ที่ เซ็นทรัล ฟู้ด ฮอลล์, ท็อปส์ ทุกสาขา และ ท็อปส์ ออนไลน์";
            document.getElementById('gfd-timeline').innerHTML = "ระยะเวลาสะสมยอดซื้อ :<br />22 มี.ค. 2562 - 5 พ.ค. 2562";
            document.getElementById('score-title').innerHTML = "ยอดช็อปสะสมของคุณ";
            document.getElementById('voucher-value').innerHTML = resp.data.gproTotalDiscount + "&nbsp;บาท";
            document.getElementById('min-purchase').innerHTML = resp.data.minPurchase + "&nbsp;บาทขึ้นไป";
            document.getElementById('min-purchase-2').innerHTML = resp.data.minPurchase + "&nbsp;บาท";
            document.getElementById('append-purchase').innerHTML = '<img src="<?php echo base_url(); ?>assets/img/cart.svg" alt="Cart" />ช็อปเพิ่ม <span id="append-purchase">' + resp.data.appendPurchase + "&nbsp;บาท</span><br />เพื่อรับ E-Gift Voucher(s)";
            document.getElementById('evoucher-title').innerHTML = "E-Gift Voucher ของคุณ";
            document.getElementById('evoucher-timeline').innerHTML = "ระยะเวลาใช้ E-Gift Voucher :<br />22 มี.ค. 2562 - 31 พ.ค. 2562";
            document.getElementById('score-date').innerHTML = 'ณ วันที่ <span id="last-update">' + resp.data.lastUpdateTime.th + '</span>';
            document.getElementById('balance').innerHTML = resp.data.balance;
            <?php /*//document.getElementById('gift-title').innerHTML = "บัตรของขวัญพิเศษเฉพาะคุณ";
            //document.getElementById('reccoupon-title').innerHTML = "คูปองส่วนลดเฉพาะคุณ";
            //document.getElementById('discoupon-title').innerHTML = "คูปองส่วนลดเงินสด";*/ ?>
            document.getElementById('itemcoupon-title').innerHTML = "คูปองส่วนลด";
            document.getElementById('credits-title').innerHTML = "โปรโมชั่นบัตรเครดิต";
            document.getElementById('credits-subtitle').innerHTML = "เมื่อช็อปที่ Central Food Hall & Tops";
            $('#my-choice-image').attr('src', resp.data.contentGroup.item[0].image);
            $('#my-choice-link').attr('href', resp.data.contentGroup.item[0].link);
            $('.condition-title').html("เงื่อนไขคูปอง");
            $('.condition-purchase').html("เงื่อนไขการสะสมยอดซื้อ");
            $('.condition-evoucher').html("เงื่อนไขการใช้ E-Gift Voucher");
            $('.modal-th').removeClass('d-none');
            $('.condition-moda-th').removeClass('d-none');
            $('.btn-cancel').html('ยกเลิก');
            $('.btn-confirm').html('ตกลง');
            $('.title-timer').html('ระยะเวลาการใช้งาน');
            $('.title-caution').html('หากท่านปิดหน้านี้คูปองจะไม่สามารถใช้ได้อีก');
            $('.title-show').html('กรุณาแสดงเลขบาร์โค้ดต่อแคชเชียร์');
          } else {
            <?php /*// document.getElementById("front-image").src = resp.data.en.promo_image;*/ ?>
            document.getElementById("promo-ribbin").src = "<?php echo base_url(); ?>assets/img/ribbin-en.png";
            document.getElementById('welcome-title').innerHTML = "<strong>Hello</strong> khun " + resp.data.en.firstname;
            document.getElementById('t1-title').innerHTML = "<img src=\"<?php echo base_url(); ?>assets/img/the1-logo.png\" /> <strong>No.</strong> " + resp.data.t1c_card_no;
            document.getElementById('gift-header-title').innerHTML = "GIFT FOR REAL<span>SHOPPERS</span>";
            document.getElementById('gfd-free').innerHTML = "FREE!!!";
            document.getElementById('gfd-value').innerHTML = "E-Gift Vouchers worth";
            document.getElementById('gfd-minimum').innerHTML = "with a minimum accumulated purchase of";
            document.getElementById('gfd-at').innerHTML = "at all branches of Central Food Hall, Tops and Tops online.";
            document.getElementById('gfd-timeline').innerHTML = "Purchase Accumulation Period :<br />22 Mar 2019 - 5 May 2019";
            document.getElementById('score-title').innerHTML = "Accumulate spending balance";
            document.getElementById('voucher-value').innerHTML = resp.data.gproTotalDiscount + "&nbsp;Baht";
            document.getElementById('min-purchase').innerHTML = resp.data.minPurchase + "&nbsp;Baht";
            document.getElementById('min-purchase-2').innerHTML = resp.data.minPurchase + "&nbsp;Baht";
            document.getElementById('append-purchase').innerHTML = '<img src="<?php echo base_url(); ?>assets/img/cart.svg" alt="Cart" />Shop more <span id="append-purchase">' + resp.data.appendPurchase + "&nbsp;Baht</span><br />to get your E-Gift Voucher(s)";
            document.getElementById('evoucher-title').innerHTML = "E-Gift Voucher";
            document.getElementById('evoucher-timeline').innerHTML = "E-Gift Voucher Redemption Period :<br />22 Mar 2019 - 31 May 2019";
            document.getElementById('score-date').innerHTML = 'as of <span id="last-update">' + resp.data.lastUpdateTime.en + '</span>';
            document.getElementById('balance').innerHTML = resp.data.balance;
            <?php /*//document.getElementById('gift-title').innerHTML = "Special Gift Voucher for you";
            //document.getElementById('reccoupon-title').innerHTML = "Recommended coupon for you";*/ ?>
            //document.getElementById('discoupon-title').innerHTML = "Cash discount coupon";
            document.getElementById('itemcoupon-title').innerHTML = "Discount coupon";
            document.getElementById('credits-title').innerHTML = "Credit card promotion";
            document.getElementById('credits-subtitle').innerHTML = "when shop at Cental Food Hall & Tops";
            $('#my-choice-image').attr('src', resp.data.contentGroup.item[0].image);
            $('#my-choice-link').attr('href', resp.data.contentGroup.item[0].link);
            $('.condition-title').html("Coupon conditions");
            $('.condition-purchase').html("Accumulated spending conditions");
            $('.condition-evoucher').html("E-Gift Voucher conditions");
            $('.modal-en').removeClass('d-none');
            $('.condition-moda-en').removeClass('d-none');
            $('.btn-cancel').html('Cancel');
            $('.btn-confirm').html('OK');
            $('.title-timer').html('Time for use coupon');
            $('.title-caution').html('Once closed, you may not return to this page and the coupon will be invalid.');
            $('.title-show').html('Please present this barcode to cashier.');
          }

          document.getElementById("purchase-percent").style.width = resp.data.purchasePercent + "%";
<?php
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
          }
*/
?>
          if(resp.data.barcodes.GPRO) {

            var elementModal = document.getElementById("giftcoupon-content");
            elementModal.classList.remove("d-none");

            if(resp.data.appendPurchaseInteger > 0) {
              var elemGpro = document.getElementById("data-gpro");
              elemGpro.classList.add("disabled");
            }

            $.each(resp.data.barcodes.GPRO, function (key, value) {
              var htmlUsed = null;
              var classUsed = null;
              if(value.used == true) {
                htmlUsed = "<div class='stamp'><img src='" + serverUrl + "accummar2019/assets/img/icon-used.svg' alt='stamp' /></div>";
                classUsed = "bar-display coupon-used";
              } else {
                htmlUsed = "";
                classUsed = "bar-display";
              }
              
              $("#data-gpro").append(value.image_html);
              <?php /*$("#data-gpro").append('<div class="item"><a class="' + classUsed + '" data-customer="' + user_id + '" data-barcode="' + value.barcode + '" data-type="' + value.type + '" href="#"><img src="' + value.image + '" />' + htmlUsed + '</a></div>');*/ ?>
            });

            var carousel_cpn2 = $('#data-gpro');

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
<?php /*
          if(resp.data.barcodes.CPN2) {

            var elementModal = document.getElementById("cpn2-content");
            elementModal.classList.remove("d-none");

            $.each(resp.data.barcodes.CPN2, function (key, value) {
              var htmlUsed = null;
              var classUsed = null;
              if(value.used == true) {
                htmlUsed = "<div class='stamp'><img src='" + serverUrl + "accummar2019/assets/img/icon-used.svg' alt='stamp' /></div>";
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
              margin: 15,
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
                htmlUsed = "<div class='stamp'><img src='" + serverUrl + "accummar2019/assets/img/icon-used.svg' alt='stamp' /></div>";
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
*/ ?>

          if(resp.data.barcodes.ONLINE) {

          var elementModal = document.getElementById("cpn9-content");
          elementModal.classList.remove("d-none");

          $.each(resp.data.barcodes.ONLINE, function (key, value) {
            var htmlUsed = null;
            var classUsed = null;
            if(value.used == true) {
              classUsed = "bar-display coupon-used";
            } else {
              htmlUsed = "";
              classUsed = "bar-display";
            }
            $("#owl-cpn9").append('<div class="item"><img src="' + value.image + '" /></div>');
          });

          }

          if(resp.data.barcodes.CPN9) {

            var elementModal = document.getElementById("cpn9-content");
            elementModal.classList.remove("d-none");

            $.each(resp.data.barcodes.CPN9, function (key, value) {
              var htmlUsed = null;
              var classUsed = null;
              if(value.used == true) {
                htmlUsed = "<div class='stamp'><img src='" + serverUrl + "accummar2019/assets/img/icon-used.svg' alt='stamp' /></div>";
                classUsed = "bar-display coupon-used";
              } else {
                htmlUsed = "";
                classUsed = "bar-display";
              }
              $("#owl-cpn9").append('<div class="item"><a class="' + classUsed + '" data-customer="' + user_id + '" data-barcode="' + value.barcode + '" data-type="' + value.type + '" href="#"><img src="' + value.image + '" />' + htmlUsed + '</a></div>');
            });

          }

          var carousel_cpn9 = $('#owl-cpn9');

          carousel_cpn9.owlCarousel({
            items: 1,
            lazyLoad: true,
            //loop: true,
            dots: true,
            margin: 15,
            dotsContainer: '.cpn9-dots'
            //autoplay: true,
            //autoplayTimeout: 3000,
            //autoplayHoverPause: true
          });

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
              margin: 15,
              //autoplay: true,
              //autoplayTimeout: 3000,
              //autoplayHoverPause: true
            });
          }
                

          if(resp.data.content) {

            var elementModal = document.getElementById("tops-mychoice");
            elementModal.classList.remove("d-none");

            $.each(resp.data.content.item, function (key, value) {
              $("#owl-content").append('<div class="item"><a class="item-content" href="' + value.link + '"><img src="' + value.image + '" /></a></div>');
            });

            var carousel_content = $('#owl-content');

            carousel_content.owlCarousel({
              items: 2,
              lazyLoad: false,
              //loop: true,
              dots: true,
              margin: 10,
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

            $(".bar-display[data-customer='" + data_customer + "'][data-barcode='" + data_barcode + "']").append("<div class='stamp'><img src='" + serverUrl + "accummar2019/assets/img/icon-used.svg' alt='stamp' /></div>").addClass("coupon-used");
            $( '#barcode-type' ).html( data_type );
            $( '#barcode-image' ).html( "<img src='" + serverUrl + 'accummar2019/assets/barcode/' + data_barcode + ".png' alt='barcode' />" );
            $( '#barcode-number' ).html( data_barcode );
            $( '#timer' ).html( '10:00' );

            $('#barcodeModal').modal('show');
            
            if(setFirstTimer == null) {
              startTimer();
              setFirstTimer = "SET";
            }

            sendUseCoupon(data_customer, data_barcode);
<?php
            /*$( this ).append("<div class='stamp'><img src='" + serverUrl + "accummar2019/assets/img/icon-used.svg' alt='stamp' /></div>");
            $( this ).addClass("coupon-used");
            
            var customer_id = $( this ).attr("data-customer");
            var barcode_number = $( this ).attr("data-barcode");
            $( '#barcode-image' ).html( "<img src='" + serverUrl + 'accummar2019/assets/barcode/' + barcode_number + ".png' alt='barcode' />" );

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
        //console.log(serverUrl + 'coupon_click/40/' + respId + '/' + conditionId);
        requestCoupon.open('GET', serverUrl + 'coupon_click/42/' + respId + '/' + conditionId, true);

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