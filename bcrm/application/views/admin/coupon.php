<div class="container-fluid">
	<header class="pt-3">
		<button type="button" class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#coupon-modal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Coupon</button>
		<h1>Coupons</h1>
	</header>

	<table class="table table-sm table-striped table-hover">
		<thead>
			<tr>
				<th width="5%">ID</th>
				<th width="10%">Code</th>
				<th>Title</th>
				<th width="20%">Start - End</th>
				<th width="8%">Expire</th>
				<th width="8%" class="text-center">Viewed</th>
				<th width="8%" class="text-center">Used/Limited</th>
				<th width="8%" class="text-center">Active</th>
				<th width="10%" class="text-center"></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($coupons as $key => $coupon) : ?>
			<tr>
				<td class="text-center">#<?php echo $coupon->id ?></td>
				<td><?php echo $coupon->code ?></td>
				<td><a href="<?php echo $coupon->image_url ?>"><?php echo $coupon->title ?></a></td>
				<td><?php echo $coupon->start ?><br><?php echo $coupon->end ?></td>
				<td>In 30 Min.</td>
				<td class="text-center"><?php echo 0 ?></td>
				<td class="text-center"><?php echo 0 ?>/<?php echo $coupon->limit ?></td>
				<td class="text-center"><?php echo $coupon->actived ?></td>
				<td class="text-center">
					<button type="button" class="btn btn-sm btn-outline-dark"><i class="fa fa-picture-o" aria-hidden="true"></i></button>
					<button type="button" class="btn btn-sm btn-outline-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					<button type="button" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

<!-- Modal -->
<form id="coupon-form">
<div class="modal fade" id="coupon-modal" tabindex="-1" role="dialog" aria-labelledby="coupon-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="coupon-modal-label">Coupon</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-6">
						<img src="" />
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control">
						</div>
						<div class="form-group">
							<label>Upload Image</label>
							<input type="file" name="image" class="form-control-file" />
						</div>
						<div class="form-row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Start Date</label>
									<input type="text" name="start" class="form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>End Date</label>
									<input type="text" name="end" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Limit</label>
									<input type="text" name="limit" class="form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Active</label>
									<div class="form-control">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="actived" id="active-yes" value="yes" checked="checked">
											<label class="form-check-label" for="active-yes">Yes</label>
											</div>
											<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="actived" id="active-no" value="no">
											<label class="form-check-label" for="active-no">No</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary">Add Coupon</button>
				<button type="submit" class="btn btn-primary">Update Coupon</button>
			</div>
		</div>
	</div>
</div>
</form>

<?php $this->load->start_inline_styling(); ?>
<style type="text/css"></style>
<?php $this->load->end_inline_styling(); ?>

<?php $this->load->start_inline_scripting() ?>
<script type="text/javascript">
$(document).ready(function(){
	$('#coupon-form').submit(function(e){
		e.preventDefault(); 
		$.ajax({
			url:'<?php echo site_url('admin/coupons/add_ajax') ?>',
			type:"post",
			data: new FormData(this),
			processData:false,
			contentType:false,
			cache:false,
			async:false,
			success: function(data){
				window.location.reload();
			}
		});
	});
});
</script>
<?php $this->load->end_inline_scripting() ?>