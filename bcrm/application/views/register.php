<?php $this->load->css('assets/css/register.css') ?>
<?php $this->load->start_inline_styling() ?>
<style type="text/css">
#privacy-policy-modal .modal-body {
	max-height: 65vh;
}
</style>
<?php $this->load->end_inline_styling() ?>

<div class="wrapper">
	<div class="container">
		<h2 class="text-center">ลงทะเบียนเพื่อเชื่อมบัญชีไลน์เข้ากับสมาชิกเดอะวัน</h2>
		<div class="text-center mb-3">กรุณากรอกหมายเลขโทรศัพท์มือถือ</div>
		<input type="number" id="phone-number" class="form-control form-control-lg" placeholder="">
		<div class="text-center mt-3">
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="privacy-policy-accepted">
				<label class="form-check-label" for="privacy-policy-accepted">ฉันยอมรับ <a href="#" data-toggle="modal" data-target="#privacy-policy-modal"><u>นโยบายความเป็นส่วนตัว</u></a></label>
			</div>
		</div>
		<div class="text-center p-5">
			<button type="button" class="btn btn-dark btn-next" disabled="disabled">
				<div class="spinner-border text-light" style="display:none" role="status"></div>
				<div>ถัดไป</div>
			</button>
		</div>
		<div class="text-center pb-5">
			<div class="pb-3">หากยังไม่ได้เป็นสมาชิกเดอะวัน</div>
			<a href="https://www.the1.co.th/th/register" target="_blank" class="btn btn-light">สมัครสมาชิก</a>
		</div>
	</div>
</div>

<div id="privacy-policy-modal" class="modal modal-tops fade" data-backdrop="static" tabindex="-1" role="dialog"aria-labelledby="privacy-policy-modal-label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="privacy-policy-modal-label">นโยบายความเป็นส่วนตัว</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4><strong>นโยบายความเป็นส่วนตัว</strong><h4>
				<p>เรา, บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ("บริษัท") อาจดำเนินการเก็บรวบรวม ใช้ เปิดเผย ส่ง และ/หรือโอนข้อมูลส่วนบุคคลของคุณไปยังพันธมิตรทั้งในประเทศ และต่างประเทศ ซึ่งข้อมูลดังกล่าวรวมถึงแต่ไม่จำกัดเพียง เบอร์โทรศัพท์ และข้อมูลส่วนบุคคลอื่น ๆ รวมถึงข้อมูลต่าง ๆ ตามที่ระบุไว้ในนโยบายความเป็นส่วนตัวนี้ ("ข้อมูลส่วนบุคคล") เมื่อคุณเข้าถึงเราผ่าน Tops Application หรือติดต่อกับเราด้วยวิธีการอื่น ๆ ข้อมูลส่วนบุคคลที่เราได้เก็บรวมรวมนั้นอาจถูกนำมาใช้เพื่อวัตถุประสงค์ตามที่ระบุไว้ในนโยบายความเป็นส่วนตัวนี้ และข้อมูลดังกล่าวจะถูกเก็บไว้เป็นความลับ ดังนั้นเพื่อปกป้องข้อมูลส่วนบุคคลของคุณ เราจึงสร้างนโยบายความเป็นส่วนตัวนี้ขึ้นมา ("นโยบาย") โดยสอดคล้องกับกฎหมาย และระเบียบข้อบังคับต่าง ๆ ที่ใช้บังคับอยู่ นโยบายนี้อธิบายวิธีที่เราจะจัดการกับข้อมูลส่วนบุคคลของคุณที่เกี่ยวข้องกับการให้การบริการบนแพลตฟอร์มของเรา ในกรณีที่กฎหมายของประเทศไทยได้กำหนดกฎระเบียบ หรือมาตรฐานขึ้นในการจัดการและการปกป้องข้อมูลส่วนบุคคล เราจะปฏิบัติตามกฎระเบียบ และมาตรฐานนั้น ๆ ("กฎระเบียบ") คุณได้ให้ความยินยอมโดยชัดแจ้งให้เราทำการรวบรวม จัดเก็บ ใช้งาน และเปิดเผยข้อมูลส่วนบุคคลของคุณตามที่ได้ระบุไว้ในนโยบายนี้</p>
				<h5><strong>การเก็บรวบรวมข้อมูลส่วนบุคคล</strong><h5>
				<p>คุณสามารถเรียกดูแพลตฟอร์มของเราได้โดยไม่จำเป็นต้องบอกว่าคุณเป็นใครหรือให้ข้อมูลส่วนบุคคลของคุณ แต่เมื่อคุณได้ลงทะเบียนโดยให้ข้อมูลส่วนบุคคลของคุณกับเราแล้ว เราจะรวบรวมและจัดเก็บข้อมูลหมายเลขโทรศัพท์ของคุณ หากคุณลงทะเบียนเป็นผู้ใช้แพลตฟอร์มของเรา บริษัทสามารถเก็บรวบรวมและจัดการกับข้อมูลส่วนบุคคลของคุณผ่านทางแพลตฟอร์มได้ตามนโยบายนี้และนโยบายอื่น ๆ ของเราในการปกป้องข้อมูลส่วนบุคคล</p>
				<h5><strong>การตลาด</strong></h5>
				<p>เราอาจจะรวมข้อมูลของคุณเข้ากับข้อมูลที่เราจัดเก็บจากบริษัทอื่น และใช้ข้อมูลดังกล่าวเพื่อปรับปรุงและปรับการให้บริการ เนื้อหา และการโฆษณาของเราให้เหมาะสมกับคุณ หรือเปิดเผยให้กับบริษัทในกลุ่มเซ็นทรัล บริษัทในเครือ บริษัทที่เกี่ยวข้อง บริษัทที่เป็นพันธมิตรทางการค้า และหรือบริษัทอื่นใดที่อยู่ภายใต้เงื่อนไขการใช้ข้อมูลด้วยความระมัดระวังเช่นเดียวกับบริษัทเพื่อวัตถุประสงค์ทางการตลาด หากคุณไม่ประสงค์ที่จะรับการสื่อสารทางการตลาดจากเราโปรดแจ้งให้เราทราบ หรือโทรศัพท์หาฝ่ายบริการลูกค้าของเรา</p>
				<h5><strong>การใช้/วัตถุประสงค์</strong></h5>
				<p>วัตถุประสงค์หลักของเราในการจัดเก็บข้อมูลส่วนบุคคลของคุณ คือ เพื่อให้การใช้งานของคุณบนแพลตฟอร์มของเรามีความปลอดภัย ราบรื่น มีประสิทธิภาพ และปรับปรุงการให้บริการได้อย่างเหมาะสมกับคุณ คุณยินยอมที่จะให้เราใช้ข้อมูลส่วนบุคคลของคุณเพื่อวัตถุประสงค์ ดังนี้</p>
				<ol>
				<li>ยืนยันตัวตนของคุณโดยใช้เบอร์โทรศัพท์ ในการรับสิทธิ์ ประโยชน์ และ โปรโมชั่น สำหรับ สมาชิกเดอะวัน</li>
				<li>ประมวลผลในการลงทะเบียนเป็นสมาชิกเดอะวัน และการเปิดใช้งานบัญชีออนไลน์ของคุณ</li>
				<li>วิเคราะห์พฤติกรรมและความสนใจของคุณ เพื่อวัตถุประสงค์เกี่ยวเนื่องกับการส่งเสริมการขาย</li>
				<li>แจ้งให้คุณทราบเกี่ยวกับข้อมูลข่าวสาร รวมทั้งการเสนอขายสินค้าและ/หรือบริการอื่น ๆ ซึ่งคุณอาจให้ความสนใจ</li>
				<li>ปรับปรุง และเพิ่มข้อเสนอของเรา โดยการวิจัยและพัฒนาคุณลักษณะใหม่ ๆ รวมถึงการให้บริการที่เราอาจมีในอนาคต</li>
				<li>พัฒนาธุรกิจของบริษัทของเราและของกลุ่มบริษัท</li>
				<li>พัฒนาสินค้าและบริการในกลุ่มร้านค้าของเราและของกลุ่มบริษัท</li>
				</ol>
				<h5><strong>การปฏิเสธการเก็บข้อมูล</strong></h5>
				<p>คุณสามารถเพิกถอนความยินยอมของคุณที่ให้เราเก็บข้อมูลส่วนบุคคลของคุณได้ทุกเมื่อ โดยแจ้งให้เราทราบเป็นลายลักษณ์อักษรหรือโทรหาฝ่ายบริการลูกค้าของเรา ในกรณีเช่นนั้น เราจะไม่สามารถระบุตัวตนของคุณ และไม่สามารถให้ความปลอดภัย ความราบรื่น ความมีประสิทธิภาพ และการปรับปรุงการให้บริการที่เหมาะสมกับคุณขณะที่คุณใช้แพลตฟอร์มของเราได้ ถึงแม้ว่าคุณสามารถดูแพลตฟอร์มส่วนใหญ่ของเราได้โดยไม่ต้องให้ข้อมูลส่วนบุคคลใด ๆ แก่เรา แต่ในบางกรณี คุณมีความจำเป็นต้องใส่ข้อมูลส่วนบุคคลของคุณเพื่อให้เราสามารถให้บริการตามที่คุณร้องขอได้</p>
				<h5><strong>ความยินยอม</strong></h5>
				<p>การที่คุณใช้แพลตฟอร์มต่อเนื่อง คุณได้ยินยอมให้ดำเนินการกับข้อมูลส่วนบุคคลของคุณตามนโยบายความเป็นส่วนตัว ข้อกำหนดและเงื่อนไขต่าง ๆ ของบริษัทแล้ว อันได้แก่ ข้อกำหนดและเงื่อนไข : สำหรับสมาชิกเดอะวัน และ ข้อกำหนดและเงื่อนไขการใช้แอปพลิเคชั่น เดอะวัน คุณรับทราบว่าคุณมีสิทธิในการเข้าถึงข้อมูลส่วนบุคคลของคุณที่ถูกจัดเก็บโดยบริษัท และคุณอาจร้องขอให้บริษัทเปิดเผยการได้มาซึ่งข้อมูลส่วนบุคคลของคุณโดยปราศจากความยินยอม</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-finish" data-dismiss="modal">ปิด</button>
			</div>
		</div>
	</div>
</div>

<?php $this->load->js('https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js') ?>
<?php $this->load->js('https://cdn.jsdelivr.net/npm/sweetalert2@8.7.0/dist/sweetalert2.all.min.js') ?>
<?php $this->load->start_inline_scripting() ?>
<script type="text/javascript">
$(function(){
	var next = $('button.btn-next');
	var phone = $('#phone-number');
	var formatted = false;
	var accepted = $('#privacy-policy-accepted');
	phone.on('focus',function(){$(this).attr('type','number')});
	phone.on('change', function() {
		var number = $(this).val().replace(/[^\d]/g, '');
		if (number.length === 10) {
			number = number.replace(/(\d{3})(\d{3})(\d{4})/, "($1) $2-$3");
			formatted = true;
		}else{
			formatted = false;
		}
		$(this).attr('type','text').val(number);
	});
	phone.keyup(function(){
		next.prop('disabled', !formatted || !accepted.is(':checked'));
	});
	accepted.click(function(){
		next.prop('disabled', !formatted || !accepted.is(':checked'));
	});
	next.click(function(){
		var endpoint = '<?php echo site_url('api/customer-verify') ?>';
		var next = $(this);
		next.find('.spinner-border').show();
		next.find('div:not(.spinner-border)').hide();
		next.prop('disabled', true);
		$.post(endpoint, {phone: phone.val().replace(/[^\d]/g, '')}, function(respond){
			console.log(respond);
			if (respond.data) {
				window.location = '<?php echo site_url('register/otp') ?>';
			}else{
				if(respond.code == 2001){
					Swal.fire({
						html: 'ไม่พบสมาชิกเดอะวันจากหมายเลขโทรศัพท์มือถือ<br>'+phone.val()+'<br>กรุณาลองใหม่อีกครั้งหรือติดต่อ<br>Call Center 02-660-1000',
						type: null,
						showCancelButton: false,
						confirmButtonColor: 'red',
						confirmButtonText: 'ตกลง'
					});
				}else if(respond.code == 3001){
					Swal.fire({
						html: 'พบหมายเลขสมาชิกเดอะวันมากกว่า 1 หมายเลข<br>ที่ใช้เบอร์โทรศัพท์มือถือ '+phone.val(),
						confirmButtonColor: 'red',
						confirmButtonText: 'ตกลง'
					});
				}else if(respond.code == 4001){
					Swal.fire({
						html: 'มีการลงทะเบียนเชื่อมบัญชีไลน์กับสมาชิกเดอะวันด้วยหมายเลข '+phone.val()+' แล้ว',
						type: null,
						showCancelButton: false,
						confirmButtonColor: 'red',
						confirmButtonText: 'ตกลง'
					});
				}else if(respond.code == 503){
					Swal.fire({
						html: 'ขออภัยในความไม่สะดวก<br>ขณะนี้มีผู้ลงทะเบียนเป็นจำนวนมาก<br>กรุณารอสักครู่และทำรายการอีกครั้ง',
						type: null,
						showCancelButton: false,
						confirmButtonColor: 'red',
						confirmButtonText: 'ตกลง'
					});
				}
				next.find('.spinner-border').hide();
				next.find('div:not(.spinner-border)').show();
				next.prop('disabled', false);
			}
		});
	});
});
</script>
<?php $this->load->end_inline_scripting() ?>