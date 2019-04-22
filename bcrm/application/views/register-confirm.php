<?php $this->load->css('assets/css/register.css') ?>
<?php $this->load->start_inline_styling() ?>
<style type="text/css"></style>
<?php $this->load->end_inline_styling() ?>

<div class="wrapper">
	<div class="container">
		<div class="text-center mb-5">กรุณาตรวจสอบข้อมูล</div>
		<h2 class="text-center mb-3"><?php echo $customer->firstname.' '.$customer->lastname ?></h2>
		<div class="text-center">หมายเลขสมาชิก The1</div>
		<h2 class="text-center mb-5"><?php echo $customer->card_number ?></h2>
		<div class="text-center">กรณีที่ข้อมูลไม่ถูกต้องกรุณาติดต่อ<br>Call Center 02-660-1000</div>
		<div class="text-center p-5">
			<button type="button" class="btn btn-dark btn-next">
				<div class="spinner-border text-light" style="display:none" role="status"></div>
				<div>ยืนยัน</div>
			</button>
		</div>
	</div>
</div>

<?php $this->load->js('https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js') ?>
<?php $this->load->js('https://cdn.jsdelivr.net/npm/sweetalert2@8.7.0/dist/sweetalert2.all.min.js') ?>
<?php $this->load->start_inline_scripting() ?>
<script type="text/javascript">
var endpoint = 'https://crm.tops.co.th/';
$(function(){
	var next = $('button.btn-next');
	next.click(function(){
		var endpoint = '<?php echo site_url('api/customer-confirm') ?>';
		next.find('.spinner-border').show();
		next.find('div:not(.spinner-border)').hide();
		next.prop('disabled', true);
		$.post(endpoint, function(respond){
			console.log(respond);
			if (respond.confirmed) {
				window.location = '<?php echo site_url('register/thankyou') ?>';
			}else{
				console.log(respond.message);
				next.find('.spinner-border').hide();
				next.find('div:not(.spinner-border)').show();
				next.prop('disabled', false);
			}
		});
	});
});
</script>
<?php $this->load->end_inline_scripting() ?>