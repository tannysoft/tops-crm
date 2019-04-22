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
                  <img src="<?php echo base_url(); ?>assets/img/store012-th.jpg" id="front-image" alt="Banner" />
              </div>
          </div>
      </div>
      <div class="clear"></div>
       <div id="cpn-21sup-content" class="tops-card d-none">
          <div class="container">
              <h2 class="title"><a id="reccoupon-title">...</a></h2>
              <div class="promo">
              <h4 class="promo-sub-1">คูปองอาหารสด</h4>
                  <div id="owl-cpn-21sup" class="owl-carousel owl-theme"></div>
                  <div class="more-condition">
                      <a href="#">
                          <img src="<?php echo base_url(); ?>assets/img/icon-condition.svg" alt="more" />
                          <h3 class="condition-title">...</h3>
                      </a>
                      <div class="condition-detail">
                        <ul class="modal-th d-none">
                          <strong><u>เงื่อนไขคูปองส่วนลด Dining Area at Central Food Hall, CentralWorld</u></strong>
                          <li>คูปองนี้ใช้สำหรับรับประทานอาหารที่ Dining Area โซน Deli Bar, Grill Bar, Mediterranean Bar, Ocean Bar,ชั้น 7 เซ็นทรัล ฟู้ด ฮอลล์ สาขาเซ็นทรัลเวิลด์ ยกเว้นเครื่องดื่มผสมแอลกอฮอล์</li>
                          <li>กรุณาติดต่อพนักงานก่อนการใช้บริการ</li>
                          <li>คูปองนี้ไม่สามารถใช้ชำระค่าสินค้าหรือบริการอื่นๆ ภายนอก Dining Area</li>
                          <li>คูปองนี้ใช้ได้ภายในวันที่กำหนดเท่านั้น</li>
                          <li>คูปองนี้ไม่สามารถแลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
                          <li>บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                          <li>การอนุมัติใช้คูปองนี้ขึ้นอยู่กับดุลยพินิจของ บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด</li>
                          <li>หากคูปองขึ้นคำว่า "USED" แสดงว่าคูปองถูกใช้ไปแล้ว</li>
                          <br>
                          <strong><u>เงื่อนไขการใช้คูปองส่วนลดกลุ่มสินค้า</u></strong>
                          <li>คูปองส่วนลดนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าตามที่กำหนด </li>
                          <li>คูปองส่วนลดนี้สามารถใช้ร่วมกับคูปองส่วนลดอื่นได้ หากยอดซื้อของใบเสร็จนั้น <u>มากกว่าหรือเท่ากับ</u>ยอดซื้อตามเงื่อนไขของแต่ละคูปองรวมกัน</li>
                          <li>คูปองนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าที่<strong>เซ็นทรัล ฟู้ด ฮอลล์และท็อปส์ทุกสาขา</strong></li>
                          <li>คูปองนี้ใช้เป็นส่วนลดสำหรับสมาชิกเดอะวัน</li>
                          <li>คูปองนี้ไม่สามารถลดเพิ่มจากสินค้าที่ลดราคาอยู่แล้ว</li>
                          <li>คูปองนี้ไม่สามารถแลกแลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
                          <li>ขอสงวนสิทธิ์การใช้คูปองที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี </li>
                          <li>บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                        </ul>
                        <ul class="modal-en d-none">
                          <strong><u>Discount coupon Dining Area at Central Food Hall, CentralWorld</u></strong>
                          <li>This coupon can be used at Deli Bar, Grill Bar, Mediterranean Bar and Ocean Bar at dining area on 7th Floor at Central Food Hall, CentralWorld (excluding alcoholic beverages).</li>
                          <li>Please approach the staff prior to a dine-in.</li>
                          <li>This coupon does not apply to any purchase outside the dining area.</li>
                          <li>This coupon is valid on the specified date only.</li>
                          <li>This coupon cannot be exchanged or redeemed for cash.</li>
                          <li>Central Food Retail Co., Ltd. reserves the right to change any terms and conditions without prior notice. </li>
                          <li>Central Food Retail Co., Ltd. reserves the right to approve the validity of a coupon.</li>
                          <li>“USED” tag on the coupon indicates that the coupon has been used. </li>
                          <br>
                          <strong><u>Category coupon conditions</u></strong>
                          <li>This coupon is for a purchase the required products.</li>
                          <li>This discount coupon can be used with other coupons had the purchase price in the receipt is greater than or equal to the purchase price of all coupons combined.</li>
                          <li>This coupon can be used to get discount at <strong>all branches of Central Food Hall and Tops.</strong></li>
                          <li>This coupon can be used once/receipt with the 1 members.</li>
                          <li>This coupon is not valid with special priced items.</li>
                          <li>This coupon cannot be exchanged or redeemed for cash.</li>
                          <li>Central Food Retail Co., Ltd. reserves the right to reject the capture screen or duplicated version of discount coupon.</li>
                          <li>Central Food Retail Co., Ltd. reserves the right to changes terms and conditions without prior notice. </li>
                        </ul>
                      </div>
                  </div>

                  <h4 class="promo-sub-2">คูปองสินค้าอุปโภค บริโภค</h4>

                  <div id="owl-cpn-22" class="owl-carousel owl-theme"></div>
                  <div class="more-condition">
                      <a href="#">
                          <img src="<?php echo base_url(); ?>assets/img/icon-condition.svg" alt="more" />
                          <h3 class="condition-title">...</h3>
                      </a>
                      <div class="condition-detail">
                        <ul class="modal-th d-none">
                          <strong><u>เงื่อนไขการใช้คูปอง</u></strong>

                          <li>คูปองส่วนลดนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าตามที่กำหนด </li>
                          <li>คูปองส่วนลดนี้สามารถใช้ร่วมกับคูปองส่วนลดอื่นได้ หากยอดซื้อของใบเสร็จนั้น <u>มากกว่าหรือเท่ากับ</u>ยอดซื้อตามเงื่อนไขของแต่ละคูปองรวมกัน</li>
                          <li>คูปองนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าที่<strong>เซ็นทรัล ฟู้ด ฮอลล์และท็อปส์ทุกสาขา</strong></li>
                          <li>คูปองนี้ใช้เป็นส่วนลดสำหรับสมาชิกเดอะวัน</li>
                          <li>คูปองนี้ไม่สามารถลดเพิ่มจากสินค้าที่ลดราคาอยู่แล้ว</li>
                          <li>คูปองนี้ไม่สามารถแลกแลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
                          <li>ขอสงวนสิทธิ์การใช้คูปองที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี </li>
                          <li>บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                        </ul>
                        <ul class="modal-en d-none">
                          <strong><u>Conditions</u></strong>

                          <li>This coupon is for a purchase the required products.</li>
                          <li>This discount coupon can be used with other coupons had the purchase price in the receipt is greater than or equal to the purchase price of all coupons combined.</li>
                          <li>This coupon can be used to get discount at all branches of <strong>Central Food Hall and Tops.</strong></li>
                          <li>This coupon can be used once/receipt with the 1 members.</li>
                          <li>This coupon is not valid with special priced items.</li>
                          <li>This coupon cannot be exchanged or redeemed for cash.</li>
                          <li>Central Food Retail Co., Ltd. reserves the right to reject the capture screen or duplicated version of discount coupon.</li>
                          <li>Central Food Retail Co., Ltd. reserves the right to changes terms and conditions without prior notice. </li>

                        </ul>
                      </div>
                  </div>             
              </div>
          </div>
      </div>

      <div id="cpn2-content" class="tops-card d-none">
          <div class="container">
              <h2 class="title"><a id="discoupon-title" href="#">...</a></h2>
              <div class="promo">
                  <div id="owl-cpn2" class="owl-carousel owl-theme"></div>
                  <div class="more-condition">
                      <a href="#">
                          <img src="<?php echo base_url(); ?>assets/img/icon-condition.svg" alt="more" />
                          <h3 class="condition-title">...</h3>
                      </a>
                      <div class="condition-detail">
                        <ul class="modal-th d-none">
                          <strong><u>เงื่อนไขการใช้คูปอง</u></strong>
                          <li>ยอดซื้อตามที่กำหนด คำนวณจากมูลค่าหลังหักส่วนลดทุกชนิดแล้ว</li>
                          <li>ยกเว้นสินค้าซื้อเหมา (การซื้อสินค้าที่มีบาร์โค้ดเดียวกันตั้งแต่ 7 ชิ้นขึ้นไป/ใบเสร็จ),สินค้ายกแพ็คยี่ห้อ เอ็ม 150 และ ยี่ห้อเบอร์ดี้, สินค้าแผนกเครื่องใช้ไฟฟ้า, กระเช้าของขวัญทุกชนิด, เครื่องดื่มผสมแอลกอฮอล์, บุหรี่, นมผงเด็กสูตรทารกและสูตรต่อเนื่อง, อาหารเสริมสำหรับเด็ก, น้ำมันประกอบอาหาร, น้ำตาลประกอบอาหาร, บริการชำระบิล, บัตรเติมเงิน, บัตรอินเทอร์เน็ต, บัตรโทรศัพท์ระหว่างประเทศ, บัตรของขวัญ, ร้านขายยา, ร้านหนังสือ, ร้านค้าเช่า, ฟู้ดคอร์ท, Tops FLAVOUR, dining area at Central Food Hall และร้านเซกาเฟรโด ซาเนตติ เอสเพรสโซ</li>
                          <li>คูปองส่วนลดนี้สามารถใช้ร่วมกับคูปองส่วนลดอื่นได้ หากยอดซื้อของใบเสร็จนั้น <u>มากกว่าหรือเท่ากับ</u>ยอดซื้อตามเงื่อนไขของแต่ละคูปองรวมกัน</li>
                          <li>คูปองนี้ใช้เป็นส่วนลดสำหรับสมาชิกเดอะวัน และใช้ได้เพียง 1 ครั้ง /ใบเสร็จ <strong>ที่เซ็นทรัล ฟู้ด ฮอลล์และท็อปส์ทุกสาขา</strong></li>
                          <li>ขอสงวนสิทธิ์การใช้คูปองที่บันทึกผ่านการจับภาพหน้าจอทุกกรณี </li>
                          <li>บริษัทเซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงือนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                          <li>การอนุมัติการใช้คูปองนี้ขึ้นอยู่กับดุลยพินิจของบริษัทเซ็นทรัล ฟู้ด รีเทล จำกัด</li>
                        </ul>
                        <ul class="modal-en d-none">
                         <strong><u>Coupon Conditions</u></strong>
                          <li>The purchase price must be net price after deducting discounts </li>
                          <li>Excluding the following items: wholesale (7 or more items bearing the same barcode/receipt), bulk pack of M-150's products and Birdy's products, electronics, all gift baskets, alcoholic beverages, tobacco, infant formula and follow-up formula of baby milk powder, baby dietary supplement, cooking oil, cooking sugar, bill payment, internet card, international phone card, prepaid card, gift voucher, drug store, bookstore, rental shop, food court, Tops FLAVOUR, dining area at Central Food Hall and Segafredo Zanetti Espresso. </li>
                          <li>This discount coupon can be used with other coupons had the purchase price in the receipt is greater than or equal to the purchase price of all coupons combined.</li>
                          <li>This coupon can be used once/receipt with The 1 members <strong>at Central Food Hall and Tops.</strong></li>
                          <li>This coupon cannot be exchanged or redeemed for cash. </li>
                          <li>Central Food Retail Co., Ltd. reserves the right to reject the capture screen or duplicated version of this coupon. </li>
                          <li>Central Food Retail Co., Ltd. reserves the right to changes terms and conditions without prior notice. </li>
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
                  <a href="<?php echo ($lang=='th') ? 'http://bit.ly/2HXDvcP' : 'http://bit.ly/2WwCvjT'; ?>">
                    <img src="<?php echo base_url(); ?>assets/img/1.jpg" alt="SCB" />
                  </a>
                </div>
                <div class="item">
                  <a href="<?php echo ($lang=='th') ? 'http://bit.ly/2Cz5wDV' : 'http://bit.ly/2CvcidS'; ?>">
                    <img src="<?php echo base_url(); ?>assets/img/2<?php echo ($lang=='th') ? 'TH': 'EN'; ?>.jpg"/>
                  </a>
                </div>
                <div class="item">
                  <a href="<?php echo ($lang=='th') ? 'http://bit.ly/2TNMBim' : 'http://bit.ly/2O0H8zI'; ?>">
                    <img src="<?php echo base_url(); ?>assets/img/3<?php echo ($lang=='th') ? 'TH': 'EN'; ?>.jpg"/>
                  </a>
                </div>
                <div class="item">
                  <a href="<?php echo ($lang=='th') ? 'http://bit.ly/2FIpfDj' : 'http://bit.ly/2JUoqeK'; ?>">
                    <img src="<?php echo base_url(); ?>assets/img/4.jpg" alt="SCB" />
                  </a>
                </div>
                <div class="item">
                  <a href="<?php echo ($lang=='th') ? 'http://bit.ly/2CfjcDK' : 'http://bit.ly/2TGqfiZ'; ?>">
                    <img src="<?php echo base_url(); ?>assets/img/5.jpg" alt="SCB" />
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
                  <span id="barcode-number"></span>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/owl-carousel/owl.carousel.min.js"></script>

    <script>

      var serverUrl = 'https://crm.tops.co.th/';

        // var userIP;
        // $.getJSON('https://ipapi.co/json/',
        // function(data){
        //     userIP = data.ip;
        //     var readCookie = Cookies.get('focusstore02');
        //     if(readCookie != null){
        //         if(userIP == readCookie){
        //         $(".bar-display").append("<div class='stamp'><img src='https://crm.tops.co.th/focusstore02/assets/img/icon-used.svg' alt='stamp' /></div>").addClass("coupon-used");
        //         }
        //     }        
        // });

      var resp;
      var request = new XMLHttpRequest();
      request.open('GET', serverUrl + 'data/46/mass', true);

      request.onload = function() {
        if (request.status >= 200 && request.status < 400) {
          // Success!
          resp = JSON.parse(request.responseText);

          var language = 'th';
          var user_id = '';

         if(resp.data.barcodes.CPN21 || resp.data.barcodes.SUP) {

            var elementModal = document.getElementById("cpn-21sup-content");
            elementModal.classList.remove("d-none");

            $.each(resp.data.barcodes.SUP, function (key, value) {
              var htmlUsed = null;
              var classUsed = null;
              if(value.used == true) {
                htmlUsed = "<div class='stamp'><img src='" + serverUrl + "focusstore02/assets/img/icon-used.svg' alt='stamp' /></div>";
                classUsed = "bar-display coupon-used";
              } else {
                htmlUsed = "";
                classUsed = "bar-display";
              }
              
              $("#owl-cpn-21sup").append('<div class="item"><a class="' + classUsed + '" data-customer="' + user_id + '" data-barcode="' + value.barcode + '" data-type="' + value.type + '" href="#"><img src="' + value.image + '" />' + htmlUsed + '</a></div>');
            });


            $.each(resp.data.barcodes.CPN21, function (key, value) {
              var htmlUsed = null;
              var classUsed = null;
              if(value.used == true) {
                htmlUsed = "<div class='stamp'><img src='" + serverUrl + "focusstore02/assets/img/icon-used.svg' alt='stamp' /></div>";
                classUsed = "bar-display coupon-used";
              } else {
                htmlUsed = "";
                classUsed = "bar-display";
              }

              $("#owl-cpn-21sup").append('<div class="item"><a class="' + classUsed + '" data-customer="' + user_id + '" data-barcode="' + value.barcode + '" data-type="' + value.type + '" href="#"><img src="' + value.image + '" />' + htmlUsed + '</a></div>');
            });

            var carousel_cpn21sup = $('#owl-cpn-21sup');

            carousel_cpn21sup.owlCarousel({
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

          if(resp.data.barcodes.CPN22 || resp.data.barcodes.CPN9) {

            $.each(resp.data.barcodes.CPN22, function (key, value) {
              var htmlUsed = null;
              var classUsed = null;
              if(value.used == true) {
                htmlUsed = "<div class='stamp'><img src='" + serverUrl + "focusstore02/assets/img/icon-used.svg' alt='stamp' /></div>";
                classUsed = "bar-display coupon-used";
              } else {
                htmlUsed = "";
                classUsed = "bar-display";
              }

              $("#owl-cpn-22").append('<div class="item"><a class="' + classUsed + '" data-customer="' + user_id + '" data-barcode="' + value.barcode + '" data-type="' + value.type + '" href="#"><img src="' + value.image + '" />' + htmlUsed + '</a></div>');
            });

            $.each(resp.data.barcodes.CPN9, function (key, value) {
              var htmlUsed = null;
              var classUsed = null;
              if(value.used == true) {
                htmlUsed = "<div class='stamp'><img src='" + serverUrl + "focusstore02/assets/img/icon-used.svg' alt='stamp' /></div>";
                classUsed = "bar-display coupon-used";
              } else {
                htmlUsed = "";
                classUsed = "bar-display";
              }
              
              $("#owl-cpn-22").append('<div class="item"><a class="' + classUsed + '" data-customer="' + user_id + '" data-barcode="' + value.barcode + '" data-type="' + value.type + '" href="#"><img src="' + value.image + '" />' + htmlUsed + '</a></div>');
            });

            var carousel_cpn22 = $('#owl-cpn-22');

            carousel_cpn22.owlCarousel({
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

          if(resp.data.barcodes.CPN2) {

            var elementModal = document.getElementById("cpn2-content");
            elementModal.classList.remove("d-none");

            $.each(resp.data.barcodes.CPN2, function (key, value) {
              var htmlUsed = null;
              var classUsed = null;
              if(value.used == true) {
                htmlUsed = "<div class='stamp'><img src='" + serverUrl + "focusstore02/assets/img/icon-used.svg' alt='stamp' /></div>";
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

            // Cookies.set("focusstore02", userIP, {
            //        expires : 60,           
            //        path    : '/',
            //        domain  : 'crm.tops.co.th', 
            //        secure  : true 
            // });

            var data_customer = $( this ).attr("data-customer");
            var data_barcode = $( this ).attr("data-barcode");
            var data_type = $( this ).attr("data-type");

            if(data_type == 'CPN21' || data_type == 'CPN22') {
              data_type = 'CPN2';
            }
//
            if(data_barcode != "DISCOUNT50"){
                $(".bar-display[data-customer='" + data_customer + "'][data-barcode='" + data_barcode + "']").append("<div class='stamp'><img src='" + serverUrl + "focusstore02/assets/img/icon-used.svg' alt='stamp' /></div>").addClass("coupon-used");
                $( '#barcode-type' ).html( data_type );
                // $( '#barcode-image' ).html( "<img src='" + serverUrl + 'focusstore02/assets/barcode/' + data_barcode + ".png' alt='barcode' />" );
                $( '#barcode-image' ).html( '<svg class="barcode" jsbarcode-format="CODE128" jsbarcode-value="'+data_barcode+'" jsbarcode-width="2" jsbarcode-height="50" jsbarcode-textmargin="0"></svg>' );
                    JsBarcode(".barcode").init();

                //$( '#barcode-number' ).html( data_barcode );
                $( '#timer' ).html( '10:00' );
            }else{

                $(".bar-display[data-customer='" + data_customer + "'][data-barcode='" + data_barcode + "']").append("<div class='stamp'><img src='" + serverUrl + "focusstore02/assets/img/icon-used.svg' alt='stamp' /></div>").addClass("coupon-used");
                $( '#barcode-type' ).html('');
                $('.barcode-container').css('padding: 2.3rem 2.5rem 3rem 2.5rem;!important;');
                $( '#barcode-image' ).html( '<h1 style="margin-bottom:40px;font-size:30px;">Code: <span style="color:red;font-weight-bold">DISCOUNT50</span></h1>' );
                $( '#timer' ).html( '10:00' );
            }
//
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
      document.getElementById('discoupon-title').innerHTML = "คูปองส่วนลดเงินสด";
      document.getElementById('credits-subtitle').innerHTML = "เมื่อช็อปที่ Central Food Hall & Tops";
      $('.condition-title').html("เงื่อนไขการใช้คูปอง");
      $('.modal-th').removeClass('d-none');
      $('.condition-moda-th').removeClass('d-none');
      $('.btn-cancel').html('ยกเลิก');
      $('.btn-confirm').html('ตกลง');
      $('.title-timer').html('ระยะเวลาการใช้งาน');
      $('.title-caution').html('หากท่านปิดหน้านี้คูปองจะไม่สามารถใช้ได้อีก');
      $('.title-show').html('กรุณาแสดงเลขบาร์โค้ดต่อแคชเชียร์');
      $('.promo-sub-1').html('คูปองอาหารสด');
      $('.promo-sub-2').html('คูปองสินค้าอุปโภค บริโภค');


      <?php else: ?>
      document.getElementById('reccoupon-title').innerHTML = "Recommended coupon for you";
      document.getElementById('itemcoupon-title').innerHTML = "Item discount coupon";
      document.getElementById('discoupon-title').innerHTML = "Cash discount coupon";
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
      $('.promo-sub-1').html('Fresh food coupon');
      $('.promo-sub-2').html('Consumer products coupon');     

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