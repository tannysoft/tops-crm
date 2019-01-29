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
          <div id="card" class="tops-card d-none">
            <div class="front">
              <img src="<?php echo base_url(); ?>assets/img/banner-1.png" id="front-image" alt="Banner" />
            </div> 
            <div class="back">
              <img src="<?php echo base_url(); ?>assets/img/banner-1.png" id="back-image" alt="Banner" />
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="tops-condition d-none">
        <div class="container">
          <h2 class="title"><a id="cond-title" href="#" data-toggle="modal" data-target="#conditionModal">...</a></h2>
          <div class="promo">
            <div class="item">
              <a id="cat1-link" href="#">
                <img src="<?php echo base_url(); ?>assets/img/category-1.png" id="cat1-image" alt="Foods" />
              </a>
            </div>
            <div class="item">
              <a id="cat2-link" href="#">
                <img src="<?php echo base_url(); ?>assets/img/category-2.png" id="cat2-image" alt="Fruits" />
              </a>
            </div>
            <div class="item">
              <a id="cat3-link" href="#">
                <img src="<?php echo base_url(); ?>assets/img/category-3.png" id="cat3-image" alt="Clean" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="tops-credits d-none">
        <div class="container">
          <div class="credits-title">
            <img src="<?php echo base_url(); ?>assets/img/credits-title.png" id="credits-image" alt="Credit Card" />
          </div>
          <div class="credits-content">
            <!-- Set up your HTML -->
            <div id="owl-data" class="owl-carousel owl-theme"></div>
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
          <div id="modal-body" class="modal-body">
            <ul id="modal-th" class="d-none">
              <li>รับคะแนนเดอะวันพิเศษ  เมื่อซื้อเนื้อสัตว์, อาหารทะเล, ผัก, ผลไม้สด, ผลิตภัณฑ์ทำความสะอาดบ้านและเสื้อผ้า (ยกเว้น ถุงขยะ, แผ่นเช็ดทำความสะอาดสำหรับเด็ก และผลิตภัณฑ์ทำความสะอาดรถยนต์) ครบตามที่กำหนด</li>
              <li>ยอดซื้อคำนวณจากมูลค่าหลังหักส่วนลดทุกชนิดแล้ว</li>
              <li>คะแนนเดอะวัน {{ points }} เท่า คำนวณจากยอดซื้อสินค้าที่ร่วมรายการ หารด้วย 25 คูณ {{ points }} ที่เซ็นทรัล ฟู้ด ฮอลล์ และ ท็อปส์ ทุกสาขา</li>
              <li>จำกัดคะแนนสูงสุด 2,000 คะแนน/ใบเสร็จ</li>
              <li>ระบบจะเพิ่มคะแนนเข้าบัญชีสะสมเดอะวันอัตโนมัติภายใน 1 - 5 วันทำการ นับจากวันที่ซื้อสินค้าตามเงื่อนไข</li>
              <li>ขอสงวนสิทธิ์การเพิ่มคะแนนพิเศษเฉพาะลูกค้าที่ได้รับสิทธิ์เท่านั้นและขอสงวนสิทธิ์การใช้สิทธิ์แทนทุกกรณี</li>
              <li>บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขรายการโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
            </ul>
            <ul id="modal-en" class="d-none">
              <li>Extra The 1 points will be calculated from a purchase of meat, seafood, fresh vegetables, fruits, home cleaning products and fabric detergent (excluding garbage bags, baby wipes and car cleaning products) as required.</li>
              <li>The purchase price must be net price after deducting discounts.</li>
              <li>x{{ points }} The 1 points is calculated from the purchase price of participating products divided by 25 and multiplied by {{ points }} at any Central Food Hall and Tops.</li>
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

	  let unique_id = '<?php echo $unique_id; ?>';
      let serverUrl = 'https://crm.tops.co.th/';

      let resp;
      let request = new XMLHttpRequest();
      request.open('GET', serverUrl + 'data/' + unique_id, true);

      request.onload = function() {
        if (request.status >= 200 && request.status < 400) {
          // Success!
          resp = JSON.parse(request.responseText);

          let lang = resp.LANGUAGE;
          let language = lang.toLowerCase();
          let banner;

          if(language == "th") {
            banner = "<?php echo base_url(); ?>assets/img/banner-1.png";
            document.getElementById('welcome-title').innerHTML = "สวัสดี คุณ" + resp.FIRST_TH_NAME + "&nbsp;" + resp.LAST_TH_NAME;
            document.getElementById('cond-title').innerHTML = "เงื่อนไขรายการ";
            document.getElementById("cat1-image").src = "assets/img/category-1.png";
            document.getElementById("cat2-image").src = "assets/img/category-2.png";
            document.getElementById("cat3-image").src = "assets/img/category-3.png";
            document.getElementById("credits-image").src = "assets/img/credits-title.png";
            document.getElementById('conditionModalLabel').innerHTML = "เงื่อนไขการรับคะแนน The1";
            let elementModal = document.getElementById("modal-th");
            elementModal.classList.remove("d-none");
            document.getElementById("cat1-link").href = serverUrl + "rurl/" + resp.id + "/9";
            document.getElementById("cat2-link").href = serverUrl + "rurl/" + resp.id + "/11";
            document.getElementById("cat3-link").href = serverUrl + "rurl/" + resp.id + "/13";
          } else {
            banner = "<?php echo base_url(); ?>assets/img/banner-1-en.png";
            document.getElementById('welcome-title').innerHTML = "Hello " + resp.FIRST_EN_NAME + "&nbsp;" + resp.LAST_EN_NAME;
            document.getElementById('cond-title').innerHTML = "Conditions";
            document.getElementById("cat1-image").src = "assets/img/category-1-en.png";
            document.getElementById("cat2-image").src = "assets/img/category-2-en.png";
            document.getElementById("cat3-image").src = "assets/img/category-3-en.png";
            document.getElementById("credits-image").src = "assets/img/credits-title-en.png";
            document.getElementById('conditionModalLabel').innerHTML = "Extra The 1 Point Conditions";
            let elementModal = document.getElementById("modal-en");
            elementModal.classList.remove("d-none");
            document.getElementById("cat1-link").href = serverUrl + "rurl/" + resp.id + "/10";
            document.getElementById("cat2-link").href = serverUrl + "rurl/" + resp.id + "/12";
            document.getElementById("cat3-link").href = serverUrl + "rurl/" + resp.id + "/14";
          }

          if(resp.promotion_click_condition_id == null) {
            $("#card").flip();

            $("#card").on('flip:done',function(){
                $('#card').addClass('disabled');
                sendUsePromotion(resp.id, resp.Condition_ID);
            });
            
            document.getElementById("front-image").src = banner;
			document.getElementById("back-image").src = "assets/img/" + resp.Condition_ID + "-" + language + ".png";

			if(resp.Condition_ID == 43582) {
				let src_str = document.getElementById("modal-body").innerHTML;
				let str_rep = src_str.replace(/{{ points }}/g,"25");
				document.getElementById("modal-body").innerHTML = str_rep;
			}else if(resp.Condition_ID == 43583) {
				let src_str = document.getElementById("modal-body").innerHTML;
				let str_rep = src_str.replace(/{{ points }}/g,"15");
				document.getElementById("modal-body").innerHTML = str_rep;
			}else if(resp.Condition_ID == 43584) {
				let src_str = document.getElementById("modal-body").innerHTML;
				let str_rep = src_str.replace(/{{ points }}/g,"10");
				document.getElementById("modal-body").innerHTML = str_rep;
			}else if(resp.Condition_ID == 43585) {
				let src_str = document.getElementById("modal-body").innerHTML;
				let str_rep = src_str.replace(/{{ points }}/g,"10");
				document.getElementById("modal-body").innerHTML = str_rep;
			}
          } else {
            $("#card").html('<img src="assets/img/' + resp.Condition_ID + '-' + language + '.png">');
          }

          let creditsCard = [];
          
          if(resp.CC_Central == 1) {
            let creditsRedirect;
            if(language == "en") {
              creditsRedirect = 1;
            } else {
              creditsRedirect = 5;
            }
            creditsCard.push({"central": creditsRedirect});
          }
          if(resp.CC_SCB == 1) {
            let creditsRedirect;
            if(language == "en") {
              creditsRedirect = 2;
            } else {
              creditsRedirect = 6;
            }
            creditsCard.push({"scb": creditsRedirect});
          }
          if(resp.CC_KTC == 1) {
            let creditsRedirect;
            if(language == "en") {
              creditsRedirect = 3;
            } else {
              creditsRedirect = 7;
            }
            creditsCard.push({"ktc": creditsRedirect});
          }
          if(resp.CC_BAY == 1) {
            let creditsRedirect;
            if(language == "en") {
              creditsRedirect = 4;
            } else {
              creditsRedirect = 8;
            }
            creditsCard.push({"bay": creditsRedirect});
          }

          reloadCarousel(creditsCard, resp.id);

        } else {
          // We reached our target server, but it returned an error
        }
      };

      request.onerror = function() {
        // There was a connection error of some sort
      };

      request.send();

      let elementPromo = document.getElementById("card");
      elementPromo.classList.remove("d-none");

      let elementCondition = document.getElementsByClassName("tops-condition");
      elementCondition[0].classList.remove("d-none");

      let elementCredits = document.getElementsByClassName("tops-credits");
      elementCredits[0].classList.remove("d-none");

      function reloadCarousel(creditsCard, sid) {
        for (let i = 0; i < creditsCard.length; i++) {
          $.each(creditsCard[i], function (key, value) {
            $("#owl-data").append('<div class="item"><a href="' + serverUrl + '/rurl/' + sid + '/' + value + '"><img src="assets/img/credits-' + key + '.jpg" /></a></div>');
          });
        }

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

      }

      function sendUsePromotion(respId, conditionId) {
        let respPromo;
        let requestPromo = new XMLHttpRequest();
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

    </script>

    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

  </body>
</html>