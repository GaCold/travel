
<!-- div container -->
<div class="container">
	<!-- div row -->
	<div class="row page-hotel">
		<!-- div trái -->
		<div class="col-md-4 page-hotel-search">
			<!-- div input hotel summer -->
			<div class="row page-hotel-keysearch">
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
						<label>Chất lượng (Sao)</label>
						<select class="form-control">
							<option>---</option>
							<option>1 sao</option>
							<option>2 sao</option>
							<option>3 sao</option>
							<option>4 sao</option>
							<option>5 sao</option>
						</select>
					</div>

					<div class="col-sm-6 form-group wow fadeInRight" data-wow-delay=".4s">
						<label>Số lượng</label>
						<select class="form-control page-hotel-user">
							<option>---</option>
							<option>1 người </option>
							<option>2 người</option>
							<option>3 người</option>
							<option>4 người</option>
							<option>5 người</option>
						</select>
					</div>
				</div>
				<div class="row wow fadeInUp" data-wow-delay=".6s" style="text-align: center;">
					<button class="btn btn-page-hotel">SEARCH</button>
				</div>
			</div>
			<!-- end div input hotel summer -->

			<!-- div select day hotel -->
			<div class="row select-page-hotel">
				<h3 class="wow fadeInRight">Thời gian</h3>
				<hr class="wow fadeInLeft" data-wow-delay=".1s">
				<div class="col-sm-6">
					<div class="radio wow fadeInLeft" data-wow-delay=".3s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-day">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							2 - 4 Ngày
						</label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="radio wow fadeInRight" data-wow-delay=".2s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-day" style="border-radius: none;">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							3 - 6 Ngày
						</label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="radio wow fadeInLeft" data-wow-delay=".5s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-day">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							4 - 9 Ngày
						</label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class=" radio wow fadeInRight" data-wow-delay=".6s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-day">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							10+ Ngày
						</label>
					</div>
				</div>
			</div>
			<!-- end div select day hotel  -->

			<!-- div select type hotel -->
			<div class="row select-page-hotel">
				<h3 class="wow fadeInLeft">Loại khách sạn</h3>
				<hr class="wow fadeInRight">
				<div class="col-sm-6">
					<div class="radio wow fadeInLeft" data-wow-delay=".1s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-type">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							Hotel
						</label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="radio wow fadeInRight" data-wow-delay=".1s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-type" style="border-radius: none;">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							Resort
						</label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="radio wow fadeInLeft" data-wow-delay=".3s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-type" style="border-radius: none;">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							Apartment
						</label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="radio wow fadeInRight" data-wow-delay=".2s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-type">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							Villa
						</label>
					</div>
				</div>
			</div>
			<!-- end div select type hotel -->


			<!-- div select continent -->
			<div class="row select-page-hotel" style="margin-bottom: 0px;">
				<h3 class="wow fadeInLeft">Châu lục</h3>
				<hr class="wow fadeInRight">
				<div class="col-sm-6">
					<div class="radio wow fadeInRight" data-wow-delay=".2s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-type">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							Châu Á
						</label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="radio wow fadeInRight" data-wow-delay=".1s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-type" style="border-radius: none;">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							Châu Âu
						</label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="radio wow fadeInLeft" data-wow-delay=".4s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-type" style="border-radius: none;">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							Châu Úc
						</label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="radio wow fadeInRight" data-wow-delay=".3s">
						<label style="font-size: 1em">
							<input type="radio" value="" name="select-type">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							Châu Mỹ
						</label>
					</div>
				</div>
			</div>
			<!-- end div select continent -->
		</div>
		<!-- xong div trái -->
		
		<!-- div phải -->
		<div class="col-md-8">
			<div class="container-hotel">
				<div class="hotel-hot">
					<div class="row content-hotel-hot">
						<!-- <div class="col-sm-10 col-sm-offset-1"> -->
							<?php for ($i=0; $i <9; $i++) { ?>
							<div class="col-md-4 col-sm-6 animate-box wow fadeInUp"  >
								<div  style="border:1px solid whitesmoke;">
									<div href="#">
										<img src="<?= $this->Url->image('ks1.jpg') ?>" alt="Free" class="img-responsive ks-img">
									</div>
									<div class="row detail-hotel">
										<div  style="font-size: 14px;padding: 10px 5px; text-align: center;">
											<p>HOTEL CẦN THƠ</p>
											<hr>
										</div>
										<div class="col-md-6 col-sm-10" style="padding: 0px 15px 10px 15px">
											<p>
												<i class="fa fa-star star" aria-hidden="true" ></i>
												<i class="fa fa-star star" aria-hidden="true" ></i>
												<i class="fa fa-star star" aria-hidden="true" ></i>
												<i class="fa fa-star star" aria-hidden="true" ></i>
												<i class="fa fa-star-half-o star" aria-hidden="true"></i>
											</p>
											<p>
												270 REVIEWS
											</p>
										</div>
										<div class="col-md-6 col-sm-8" style="padding-right: 15px; padding: 0px 15px 10px 10px; text-align: right; font-size: 20px; color:#FF8521">
											<b>2,900 VNĐ</b>
										</div>
										<div class="col-md-12" style="padding-left: 15px; margin-bottom: 25px; text-align:left;">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis.</p>
											<a href="<?= $this->Url->build('/Hotels/hoteldetail/', true) ?>" class="btn" id="btn-chat" style="background:#FF8521; color:white;">ĐẶT NGAY</a>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						<!-- </div> -->
						<!-- phân trang -->
						<div class="col-md-12 text-center wow fadeInUp">
							<nav aria-label="Page navigation">
								<ul class="pagination phantrang">
									<li>
										<a href="" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
										</a>
									</li>
									<li><a href="#" class="active">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">6</a></li>
									<li>
										<a href="" aria-label="Next">
											<span aria-hidden="true">&raquo;</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<!-- xong phân trang -->
					</div>
				</div>
			</div>
		</div>
		<!-- xong div phải -->
	</div>	
	<!-- xong div row -->
</div>
<!-- xong div container -->


<?=  $this->Html->script('check-in-out.js'); ?>