<?php $this->load->css('assets/css/register.css') ?>
<?php $this->load->start_inline_styling() ?>
<style type="text/css"></style>
<?php $this->load->end_inline_styling() ?>

<div class="wrapper">
	<div class="container">
		<h1 class="text-center mb-5">ขอบคุณที่ลงทะเบียน</h1>
		<h2 class="text-center mb-3"><?php echo $customer->firstname.' '.$customer->lastname ?></h2>
		<div class="text-center">หมายเลขสมาชิกเดอะวัน</div>
		<h2 class="text-center mb-5"><?php echo $customer->card_number ?></h2>
		<?php if($this->uri->segment(2)==='thankyou') : ?>
		<div class="text-center">คุณได้รับคะแนนเดอะวัน<br>100 คะแนน</div>
		<div class="text-center mb-5">คะแนนจะเพิ่มเข้าบัญชีสะสมภายใน 3 วันทำการ</div>
		<?php endif ?>
		<div class="text-center">ติดตามอัพเดทโปรโมชั่นพิเศษ ข่าวสาร<br>และสิทธิพิเศษเฉพาะสมาชิกได้ที่นี่</div>
	</div>
</div>

<?php $this->load->start_inline_scripting() ?>
<script type="text/javascript">
$(function(){

});
</script>
<?php $this->load->end_inline_scripting() ?>