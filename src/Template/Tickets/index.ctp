

<div class="row page-tour">
	<div class="col-sm-10 col-sm-offset-1">
		<div class="col-sm-4 page-tour-search">
			<!-- div input tour  -->
			<div class="row page-tour-keysearch">
				<div class="row">
					<div class="col-sm-6 form-group wow fadeInLeft" data-wow-delay=".1s">
						<label>Nơi đi</label>
						<input type="text" name="noi-di" class="form-control" placeholder="Cần Thơ">
					</div>
					<div class="col-sm-6 form-group wow fadeInRight">
						<label>Nơi đến</label>
						<input type="text" name="noi-den" class="form-control" placeholder="Phú Quốc">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 form-group wow fadeInLeft" data-wow-delay=".3s">
						<label>Ngày đi</label>
						<input type="text" class="form-control datepickercheckin" data-role="date" value="12-02-2012">
					</div>
					<div class="col-sm-6 form-group wow fadeInRight" data-wow-delay=".2s">
						<label>Ngày về</label>
						<input type="text" class="form-control datepickercheckout" data-role="date" value="13-02-2012">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 form-group wow fadeInLeft" data-wow-delay=".5s">
						<label>Giá tiền (Triệu)</label>
						<select class="form-control">
							<option>1 - 2</option>
							<option>2 - 3</option>
							<option>3 - 4</option>
							<option>5 - 7</option>
							<option>> 10</option>
						</select>
					</div>

					<div class="col-sm-6 form-group wow fadeInRight" data-wow-delay=".4s">
						<label>Số lượng</label>
						<select class="form-control page-tour-user">
							<option>1 người </option>
							<option>2 người</option>
							<option>3 người</option>
							<option>4 người</option>
							<option>5 người</option>
						</select>
					</div>
				</div>
				<div class="row wow fadeInUp" style="text-align: center;">
					<button class="btn btn-page-tour">SEARCH</button>
				</div>
			</div>
			<!-- end div input tour -->


			<!-- div select type tour -->
			<div class="row select-page-tour">
				<h3 class="wow fadeInRight">Hãng máy bay</h3>
				<hr class="wow fadeInLeft" data-wow-delay=".1s">
				<div class="col-sm-6 col-md-6">
					<div class="radio wow fadeInLeft" data-wow-delay=".3s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-type">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							Vietnam Airlines‎
						</label>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="radio wow fadeInRight" data-wow-delay=".2s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-type" style="border-radius: none;">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							VietjetAir
						</label>
					</div>
				</div>
				
			</div>
			<!-- end div select type tour -->


			<!-- div select continent -->
			<div class="row select-page-tour" style="margin-bottom: 0px;">
				<h3 class="wow fadeInLeft">Loại vé</h3>
				<hr class="wow fadeInRight" data-wow-delay=".1s">
				<div class="col-sm-6">
					<div class="radio wow fadeInLeft" data-wow-delay=".3s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							Vé một chiều
						</label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="radio wow fadeInRight" data-wow-delay=".2s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select" style="border-radius: none;">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							Vé khứ hồi
						</label>
					</div>
				</div>
				
			</div>
			<!-- end div select continent -->
		</div>

		<!-- hien thi chi tiet tour -->
		<div class="col-sm-8 ">
			<?php for ($i=0; $i < 4; $i++) {  ?>
			<div class="row page-fligth-detail wow fadeInRight" >
				<div class="col-sm-4" style="p border: 1px solid #111">
					<img src="<?= $this->Url->image('slide-06.jpg') ?>" class="img-responsive img-page-flight" >
				</div>
				<div class="col-sm-5 title-page-flight">
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
						<p><a href="" class="btn btn-page-fligth" data-toggle="modal" data-target="#modalbookflight">Mua ngay</a></p>
					</span>
				</div>
				<div></div>
			</div>
			<?php } ?>
			<div class="pagination-page-tour wow fadeInUp">
				<nav aria-label="Page navigation">
					<ul class="pagination">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">«</span>
							</a>
						</li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
								<span aria-hidden="true">»</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
</div>

<?= $this->Html->script('check-in-out.js') ?>
<?= $this->element('ticket/modalbookflight') ?>