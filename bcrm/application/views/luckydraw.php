<?php $this->load->css('assets/css/custom.css') ?>
<?php $this->load->start_inline_styling() ?>
<style type="text/css">
.wrapper { margin-bottom: 6rem }
#luckydraw { position: relative }
#luckydraw > .luckydraw-registered-stamp {
	color: #fff;
	text-align: center;
	font-weight: bold;
	background-color: red;
	padding: 10px;
	margin: 0;
}
.round-title {
	background-color: red;
	color: #fff;
	padding: 10px;
}
.round-winner-list {
	padding: 10px 10px 0 10px;
}
.round-winner-list > .row {
	margin-bottom: 10px;
}
.winner {
	overflow: hidden;
	position: relative;
}
.winner > .winner-picture {
	width: 25px;
	height: 25px;
	float: left;
}
.winner > .winner-picture > img {
	width: 100%;
}
.winner > .winner-display-name {
	float: left;
	padding-left: 10px;
	padding-top: 2px;
}
#winner-accordion .card-header {
	padding: 0;
}
</style>
<?php $this->load->end_inline_styling() ?>
<div class="wrapper">
	<header id="luckydraw">
		<h5 class="luckydraw-registered-stamp<?php echo $registered ? NULL : ' d-none' ?>">คุณได้รับสิทธิ์ลุ้นประจำสัปดาห์แล้ว</h5>
		<div class="luckydraw-container">
			<img class="img-fluid" src="<?php echo base_url('assets/luckydraw/banner1.png') ?>">
		</div>
		<!-- <svg class="luckydraw-registered-stamp<?php echo $registered ? NULL : ' d-none' ?>" preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200">
			<path id="curve" d="M0,100a100,100 0 1,0 200,0a100,100 0 1,0 -200,0" />
			<text>
				<textPath xlink:href="#curve">Registered Registered Registered Registered Registered</textPath>
			</text>
		</svg> -->
	</header>
	<div class="container">
		<div class="luckydraw-condition mt-3">
			<h5><strong>ลุ้นรับฟรีบัตรของขวัญ 1,000 บาท ด้วย 3 ขั้นตอนง่ายๆ</strong></h5>
			<ol>
				<li>เพิ่มเพื่อน Line "TopsThailand" </li>
				<li>กดปุ่ม "รับสิทธิ์" เพื่อลงทะเบียนร่วมกิจกรรม</li>
				<li>พิมพ์บอก 1 เหตุผล "ทำไมคุณถึงชอบมาช็อปที่เซ็นทรัล ฟู้ด ฮอลล์ และท็อปส์"</li>
			</ol>
			<p class="text-center text-danger"><strong>เพียง 20 เหตุผลที่ถูกใจคณะกรรมการมากที่สุด จะได้รับของรางวัลบัตรของขวัญมูลค่า 1,000 บาท</strong></p>
			<h5><strong>เงื่อนไขการร่วมกิจกรรม</strong></h3>
			<ul>
				<li>สัปดาห์ที่ 1 ระยะเวลาร่วมกิจกรรม 20 เมษายน – 25 เมษายน 2562</li>
				<li>ประกาศรายชื่อผู้โชคดีผ่านทางไลน์ TopsThailand วันที่ 29 เมษายน 2562</li>
				<li>ของรางวัลบัตรของขวัญมูลค่า 1,000 บาทจะจัดส่งให้ผู้โชคดี 20 ท่านผ่านทางไลน์ TopsThailand ในวันที่ 1 พฤษภาคม 2562</li>
				<li>1 Line ID มีสิทธิ์ลุ้นรับของรางวัล 1 ครั้งต่อ 1 สัปดาห์</li>
				<li><span class="text-danger">*เงื่อนไขเป็นไปตามที่บริษัทกำหนด</span></li>
			</ul>
		</div>
		<div class="accordion" id="winner-accordion">
			<?php $show = TRUE ?>
			<?php foreach ($rounds as $round) : ?>
			<div class="card">
				<div class="card-header round-winners" id="round-<?php echo $round->id ?>">
					<div class="row round-title" data-toggle="collapse" data-target="#collapse-round-<?php echo $round->id ?>" aria-expanded="<?php echo $show ? 'true' : 'false' ?>" aria-controls="collapse-round-<?php echo $round->id ?>">
						<div class="col-4 text-left">ประกาศผู้โชคดี</div>
						<div class="col-8 text-right">รอบวันที่ <?php echo to_thai_between_date_format($round->start, $round->end) ?></div>
					</div>
				</div>
				<div id="collapse-round-<?php echo $round->id ?>" class="collapse<?php echo $show ? ' show' : NULL ?>" aria-labelledby="round-<?php echo $round->id ?>" data-parent="#winner-accordion">
					<div class="card-body round-winner-list">
						<div class="row">
							<?php foreach ($round->winners as $winner) : ?>
							<div class="col-6">
								<div class="winner">
									<div class="winner-picture">
										<img src="<?php echo $winner->picture_url ?>" class="rounded" alt="<?php echo $winner->display_name ?>">
									</div>
									<div class="winner-display-name"><?php echo $winner->display_name ?></div>
								</div>
							</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
			<?php $show = FALSE ?>
			<?php endforeach ?>
		</div>
		<!-- <?php foreach ($rounds as $round) : ?>
		<div class="round-winners">
			<div class="row round-title">
				<div class="col-4 text-left">ประกาศผู้โชคดี</div>
				<div class="col-8 text-right">รอบวันที่ <?php echo to_thai_between_date_format($round->start, $round->end) ?></div>
			</div>
			<div class="round-winner-list">
				<div class="row">
					<?php foreach ($round->winners as $winner) : ?>
					<div class="col-6">
						<div class="winner">
							<div class="winner-picture">
								<img src="<?php echo $winner->picture_url ?>" class="rounded" alt="<?php echo $winner->display_name ?>">
							</div>
							<div class="winner-display-name"><?php echo $winner->display_name ?></div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
		<?php endforeach ?> -->
		<!-- <pre><?php //print_r($rounds) ?></pre> -->
	</div>
</div>

<div id="question-modal" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="question-modal-label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="modal-body" class="modal-body">
				<div class="question-modal-th mt-3">
					<h5 class="text-center font-weight-bold mb-3">ร่วมสนุกกับกิจกรรมตอบคำถาม 1 เหตุผลที่คุณชื่นชอบสินค้า/บริการ<br>จากเซ็นทรัล ฟู้ด ฮอลล์ และท็อปส์</h5>
					<input id="anwser" type="text" class="form-control form-control-lg text-center" placeholder="พิมพ์คำตอบที่นี่" maxlength="255">
					<div class="text-center mt-3">เพียง 20 คำตอบจากผู้ร่วมกิจกรรม<br>จะได้รับการคัดเลือกจากคณะกรรมการ<br>เพื่อรับรางวัลประจำสัปดาห์</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-cancel" data-dismiss="modal">ยกเลิก</button>
				<button type="button" class="btn btn-primary btn-confirm">ส่งคำตอบ</button>
			</div>
		</div>
	</div>
</div>

<?php $this->load->start_inline_scripting() ?>
<script type="text/javascript">
var question = $('#question-modal');
var anwser = $('#anwser');
$(function(){
	$('#luckydraw').click(function(){
		if($('#luckydraw > .luckydraw-registered-stamp').hasClass('d-none')){
			question.modal('show');
			question.find('.btn-confirm').unbind();
			question.find('.btn-confirm').click(function(){
				if(anwser.val()){
					question.modal('hide');
					var endpoint = '<?php echo site_url('api/luckydraw-registered') ?>';
					$.post(endpoint, {anwser: anwser.val()}, function(respond){
						console.log(respond);
					});
					$('#luckydraw > .luckydraw-registered-stamp').removeClass('d-none');
				}else{
					anwser.focus();
				}
			});
		}
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
	'<?php echo base_url('assets/luckydraw/banner.png') ?>'
)
</script>
<?php $this->load->end_inline_scripting() ?>