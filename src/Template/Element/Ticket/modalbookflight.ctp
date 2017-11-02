
<!-- Modal -->
<div class="modal fade" id="modalbookflight" role="dialog" style="margin-top: 30px">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" style="text-align: center; color: #FF8521;">Đặt Vé</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 page-fligth-detail" >
						<div class="col-sm-4" style="p border: 1px solid #111">
							<img src="<?= $this->Url->image('slide-06.jpg') ?>" class="img-responsive img-page-flight" >
						</div>
						<div class="col-sm-5 title-page-flight" style="border-right: 1px solid whitesmoke">
							<div class="row name-page-flight">
								<p style="font-size: 16px ;margin:0px;">Cần Thơ - Đà Lạt</p>
								<p style="margin-top: 0px; margin-bottom: 5px;">5/6/2017</p>
							</div>
							<div class="row abstract-page-flight">
								<div class="col-sm-4 icon-flight-start">
									<p>Giờ bay</p>
									<p style="color: #55B5D9">14:12</p>
								</div>
								<div class="col-sm-4 icon-flight-return">
									<p>Giờ đáp</p>
									<p style="color: #55B5D9">18:12</p>
								</div>
								<div class="col-sm-4 icon-flight-time">
									<p>Thời gian</p>
									<p style="color: #55B5D9">4h:0'</p>
								</div>
							</div>
						</div>

						<div class="col-sm-3 price-page-flight">
							<span>
								<?php  for ($j=0; $j < 4; $j++) { ?>
								<i class="fa fa-star star" aria-hidden="true" ></i>
								<?php } ?>
								<i class="fa fa-star-half-o star" aria-hidden="true"></i>
								<p style="margin: 0px;">309 REVIEWS</p>
								<b class="price-flight">1,200 <span style="font-size: 14px">VNĐ</span></b>
								<p></p>
							</span>
						</div>

						<div class="col-sm-12" style="padding-bottom: 10px; padding-top: 10px;">
							<div class="form-group col-sm-3">
								<label>Tên</label>
								<input type="" name="" class="form-control" placeholder="Minh Toàn">
							</div>
							<div class="form-group col-sm-3">
								<label>Họ</label>
								<input type="" name="" class="form-control" placeholder="Nguyễn">
							</div>
							<div class="form-group col-sm-3">
								<label>Số điện thoại</label>
								<input type="" name="" class="form-control" placeholder="01223457762">
							</div>
							<div class="form-group col-sm-3">
								<label>CMND</label>
								<input type="" name="" class="form-control" placeholder="371752272">
							</div>
							<div class="col-sm-12" style="text-align: center;">
								<a href="" class="btn btn-see-all">Đặt ngay</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('#modalbookflight').modal({
		show:false,
		backdrop:'static'
	});
</script>