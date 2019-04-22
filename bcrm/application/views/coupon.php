<?php $this->load->css('assets/css/custom.css') ?>
<?php $this->load->start_inline_styling() ?>
<style type="text/css">
h1 {
	font-size: 1.5rem;
	font-weight: bold;
}
.wrapper { margin-bottom: 6rem }
#coupon { position: relative }
#coupon > .coupon-disabled {
	filter:url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter     id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+, Firefox on Android */
	filter:gray; /* IE6-9 */
	-webkit-filter:grayscale(100%); /* Chrome 19+, Safari 6+, Safari 6+ iOS */
	-moz-filter: grayscale(100%);
	-o-filter: grayscale(100%);
}
#coupon > .coupon-used-stamp,
#coupon > .coupon-expired-stamp,
#coupon > .coupon-exceeded-stamp {
	position: absolute;
	width: 100px;
	font-weight: bold;
	right: 30px;
	bottom: 30px;
}
#coupon > .coupon-used-stamp {
	font-size: 24.5px;
}
#coupon > .coupon-expired-stamp {
	font-size: 26.5px;
}
#coupon > .coupon-exceeded-stamp {
	font-size: 29px;
}
#coupon > .coupon-used-stamp path,
#coupon > .coupon-expired-stamp path,
#coupon > .coupon-exceeded-stamp path {
	fill: transparent
}
#coupon > .coupon-used-stamp text,
#coupon > .coupon-expired-stamp text,
#coupon > .coupon-exceeded-stamp text {
	fill: red
}
#coupon > .coupon-expired-rotate,
#coupon > .coupon-exceeded-rotate {
	position: absolute;
	color: red;
	padding: 5px 10px;
	border: 4px solid red;
	transform: rotate(-20deg);
	font-size: 1.5rem;
}
#coupon > .coupon-expired-rotate {
	right: 25%;
    bottom: 35%;
}
#coupon > .coupon-exceeded-rotate {
	right: 15%;
    bottom: 35%;
}
#apply {
	font-size: 1.8rem;
	font-weight: bold;
	border-radius: unset;
	padding-bottom: env(safe-area-inset-bottom);
	padding-top: 15px;
	padding-bottom: 15px;
}
</style>
<?php $this->load->end_inline_styling() ?>
<div class="wrapper">
	<header id="coupon">
		<div class="coupon-container<?php echo ($used || $expired || $exceeded) ? ' coupon-disabled' : NULL ?>">
			<img class="img-fluid" src="<?php echo base_url('assets/coupon/'.$coupon->barcode.'.png') ?>" alt="<?php echo $coupon->barcode ?>">
		</div>
		<svg class="coupon-used-stamp<?php echo ($used) ? NULL : ' d-none' ?>" preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200">
			<path id="curve" d="M0,100a100,100 0 1,0 200,0a100,100 0 1,0 -200,0" />
			<text>
				<textPath xlink:href="#curve">USED USED USED USED USED USED USED USED USED USED</textPath>
			</text>
		</svg>
		<?php if ($expired && !$used) : ?>
		<!-- <svg class="coupon-expired-stamp" preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200">
			<path id="curve" d="M0,100a100,100 0 1,0 200,0a100,100 0 1,0 -200,0" />
			<text>
				<textPath xlink:href="#curve">EXPIRED EXPIRED EXPIRED EXPIRED EXPIRED EXPIRED</textPath>
			</text>
		</svg> -->
		<div class="coupon-expired-rotate">คูปองนี้หมดอายุแล้ว</div>
		<?php endif ?>
		<?php if ($exceeded && !$expired && !$used) : ?>
		<!-- <svg class="coupon-exceeded-stamp" preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200">
			<path id="curve" d="M0,100a100,100 0 1,0 200,0a100,100 0 1,0 -200,0" />
			<text>
				<textPath xlink:href="#curve">LIMIT EXCEEDED LIMIT EXCEEDED LIMIT EXCEEDED LIMIT EXCEEDED</textPath>
			</text>
		</svg> -->
		<div class="coupon-exceeded-rotate">คูปองถูกใช้ครบจำนวนสิทธิ์แล้ว</div>
		<?php endif ?>
	</header>
	<div class="container mt-3">
		<h1 class="coupon-title"><?php echo $coupon->title ?></h1>
		<div class="coupon-description mb-3">
			<div><strong><u>ระยะเวลาการใช้คูปอง</u></strong></div>
			<?php echo to_thai_date_format($coupon->start) . ' ถึง ' . to_thai_date_format($coupon->end) ?>
		</div>
		<div class="coupon-description mb-3">
			<div><strong><u>รายละเอียด</u></strong></div>
			<?php echo $coupon->description ?>
		</div>
		<div class="condition-detail">
			<div><strong><u>เงื่อนไขการใช้คูปอง</u></strong></div>
			<?php echo $coupon->tac ?>
		</div>
	</div>
	<footer class="fixed">
		<button id="apply" type="button" class="btn btn-red btn-lg btn-block"<?php echo ($used || $expired || $exceeded) ? ' disabled="disabled"' : NULL ?>>ใช้คูปอง</button>
	</footer>
</div>

<div id="condition-modal" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="condition-modal-label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="modal-body" class="modal-body">
				<div class="condition-modal-th">
					<h5 class="font-weight-bold">การใช้คูปองที่หน้าร้าน / สาขา</h5>
					<ul>
						<li>คูปองไม่สามารถนำกลับมาใช้ต่อได้ เมื่อเวลาที่แสดงหมดลง</li>
						<li>เมื่อท่านกดใช้ต้องแสดงบาร์โค้ดต่อแคชเชียร์ภายใน 10 นาที</li>
						<li>หากปิดหน้าแสดงคูปองท่านจะไม่สามารถกลับมาใช้คูปองได้</li>
					</ul>
					<h5 class="font-weight-bold">ท่านต้องการดำเนินการต่อหรือไม่?</h5>
				</div>
				<div class="condition-modal-en d-none">
					<h5 class="font-weight-bold">To use this Coupon</h5>
					<ul>
						<li>Coupon is invalid after the time has run</li>
						<li>Tap use and present barcode to the cashier within 10 minutes.</li>
						<li>Closing the coupon page will invalidate the coupon.</li>
					</ul>
					<h5 class="font-weight-bold">Do you want to continue?</h5>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-cancel" data-dismiss="modal">ยกเลิก</button>
				<button type="button" class="btn btn-primary btn-confirm">ตกลง</button>
			</div>
		</div>
	</div>
</div>

<div id="barcode-modal" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="barcode-modal-label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="coupon-timer text-center">
					<h4 class="font-weight-bold title-timer">ระยะเวลาการใช้งาน</h4>
					<h2 class="text-danger display-4 mt-2 title-countdown" id="timer">10:00</h2>
					<h6 class="text-danger px-4 font-weight-bold mt-3 title-caution"></h6>
					<h5 class="mt-5 px-4 title-show">กรุณาแสดงเลขบาร์โค้ดต่อแคชเชียร์</h5>
				</div>
				<div class="coupon-barcode text-center mt-5">
					<div class="barcode-container">
						<div id="barcode-type" class="text-right"><?php echo $coupon->type ?></div>
						<div id="barcode-image" class="barcode-image">
							<img class="img-fluid" src="<?php echo base_url('assets/barcode/'.$coupon->barcode.'.png') ?>" alt="<?php echo $coupon->barcode ?>">
						</div>
						<span id="barcode-number"><?php echo $coupon->barcode ?></span>  
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-finish" data-dismiss="modal">เสร็จสิ้น</button>
			</div>
		</div>
	</div>
</div>

<?php $this->load->start_inline_scripting() ?>
<script type="text/javascript">
var condition = $('#condition-modal');
var barcode = $('#barcode-modal');
$(function(){
	function timer(target, modal){
		var counter = 600;
		var t = setInterval(function() { 
			// Time calculations for days, hours, minutes and seconds
			var minutes = Math.floor(counter / (60));
			var seconds = Math.floor(counter % (60));
			counter--;
			if(minutes < 10) minutes = "0"+minutes;
			if(seconds < 10) seconds = "0"+seconds;
			$(target).html(minutes+":"+seconds);
			if (counter < 0) {
				clearInterval(t);
				modal.modal('hide');
			}
		}, 1000);
	}
	//
	$('#coupon').click(function(){
		var target = $('#apply');
		if(!target.prop('disabled')){
			target.trigger('click');
		}
	});
	$('#apply').click(function(){
		condition.modal('show');
		condition.find('.btn-confirm').unbind();
		condition.find('.btn-confirm').click(function(){
			condition.modal('hide');
			barcode.modal({
				show: true,
				backdrop: 'static',
				keyboard: false
			});
			timer(barcode.find('#timer'), barcode);
			var endpoint = '<?php echo site_url($coupon->group === 'WELCOME' ? 'api/coupon-welcome-used' : 'api/coupon-weekly-used') ?>';
			$.post(endpoint, {barcode: '<?php echo $coupon->barcode ?>'}, function(respond){
				console.log(respond);
			});
			//
			$('#apply').prop('disabled', true);
			$('#coupon > .coupon-container').addClass('coupon-disabled');
			$('#coupon > .coupon-used-stamp').removeClass('d-none');
		});
	});
});
//-- image preload --//
var images = [];
function preload() {
	for (var i = 0; i < arguments.length; i++) {
		images[i] = new Image();
		images[i].src = preload.arguments[i];
	}
}
preload(
	'<?php echo base_url('assets/coupon/'.$coupon->barcode.'.png') ?>'
)
</script>
<?php $this->load->end_inline_scripting() ?>