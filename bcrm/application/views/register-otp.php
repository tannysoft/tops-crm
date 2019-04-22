<?php $this->load->css('assets/css/register.css') ?>
<?php $this->load->start_inline_styling() ?>
<style type="text/css"></style>
<?php $this->load->end_inline_styling() ?>

<div class="wrapper">
	<div class="container">
		<h2 class="text-center">กรอกรหัส OTP จาก SMS เพื่อยืนยันตัวตน</h2>
		<input id="otp" type="number" maxlength="6" class="form-control form-control-lg" placeholder="XXXXXX">
		<div class="text-center mt-3">รหัส OTP มีอายุใช้งาน 5 นาที</div>
		<div class="text-center mt-5">รหัสผ่านหมดอายุหรือไม่ได้รับรหัสผ่าน</div>
		<div id="otp-resend" class="text-center p-3"><u>โปรด คลิกที่นี่</u></div>
		<div class="text-center">เพื่อรับรหัสผ่านใหม่</div>
		<div class="text-center p-5">
			<button type="button" class="btn btn-dark btn-next" disabled="disabled">
				<div class="spinner-border text-light" style="display:none" role="status"></div>
				<div>ถัดไป</div>
			</button>
		</div>
	</div>
</div>

<?php $this->load->js('https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js') ?>
<?php $this->load->js('https://cdn.jsdelivr.net/npm/sweetalert2@8.7.0/dist/sweetalert2.all.min.js') ?>
<?php $this->load->start_inline_scripting() ?>
<script type="text/javascript">
var session = <?php echo json_encode($this->session->userdata()) ?>;
$(function(){
	var next = $('button.btn-next');
	var otp = $('#otp');
	var resend = $('#otp-resend');
	var formatted = false;
	// otp.on('change', function() {
	// 	console.log('change');
	// 	var number = $(this).val().replace(/[^\d]/g, '');
	// 	if (number.length === 6) {
	// 		formatted = true;
	// 	}else{
	// 		formatted = false;
	// 	}
	// 	$(this).val(number);
	// });
	otp.keyup(function(){
		console.log('change');
		var number = $(this).val().replace(/[^\d]/g, '');
		if (number.length === 6) {
			formatted = true;
		}else{
			formatted = false;
		}
		$(this).val(number);
		next.prop('disabled', !formatted);
	});
	resend.click(function(){
		var endpoint = '<?php echo site_url('api/customer-otp-resend') ?>';
		next.find('.spinner-border').show();
		next.find('div:not(.spinner-border)').hide();
		next.prop('disabled', true);
		otp.prop('disabled', true);
		$.post(endpoint, function(respond){
			console.log(respond);
			if (respond.resent) {
				next.find('.spinner-border').hide();
				next.find('div:not(.spinner-border)').show();
				otp.prop('disabled', false);
				otp.val('');
				otp.focus();
			}
		});
	});
	next.click(function(){
		var endpoint = '<?php echo site_url('api/customer-otp-verify') ?>';
		next.find('.spinner-border').show();
		next.find('div:not(.spinner-border)').hide();
		next.prop('disabled', true);
		otp.prop('disabled', true);
		$.post(endpoint, {code: otp.val().replace(/[^\d]/g, '')}, function(respond){
			console.log(respond);
			if (respond.verified) {
				window.location = '<?php echo site_url('register/confirm') ?>';
			}else{
				Swal.fire({
					html: "รหัส OTP ไม่ถูกต้องหรือหมดอายุ<br/>กรุณาลองใหม่อีกครั้ง",
					type: null,
					showCancelButton: false,
					confirmButtonColor: 'red',
					confirmButtonText: 'ตกลง'
				});
				next.find('.spinner-border').hide();
				next.find('div:not(.spinner-border)').show();
				next.prop('disabled', false);
				otp.prop('disabled', false);
			}
		});
	});
});
</script>
<?php $this->load->end_inline_scripting() ?>