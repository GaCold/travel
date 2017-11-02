<?= $this->start('title') ?>
HotelDetail
<?= $this->end() ?>
<!-- div container -->
<div class="container" style="padding-top: 0;">
	<!-- div row -->
	<div class="row">
		<!-- div breadcrumb -->
		<div class="col-md-12" style="padding-top: 0; margin-top: 20px;">
			<!-- breadcrumb -->
			<ol class="breadcrumb breadcrumb-font">
				<li><a href="">Trang Chủ</a></li>
				<li><a href="">Khách Sạn</a></li>
				<li>Mường Thanh</li>
			</ol>
		</div>
		<!-- xong div breadcrumb -->

		<!-- slider -->
		<div class="col-md-8 slider">
			<div class="col-md-12">
				<div id="jssor_1" style="position:relative;width:850px;height:480px;">
					<!-- Source image -->
					<div data-u="slides" style="width:850px;height:480px;">
						<div>
							<img data-u="image" src="<?= $this->Url->image('muongthanh.png') ?>"/>
						</div>
						<div>
							<img data-u="image" src="<?= $this->Url->image('muongthanh4.jpg') ?>" />
						</div>
						<div>
							<img data-u="image" src="<?= $this->Url->image('muongthanh2.jpg') ?>" />
						</div>
					</div>
					<!-- Bullet Navigator -->
					<div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
						<!-- bullet navigator item prototype -->
						<div data-u="prototype" style="width:16px;height:16px;"></div>
					</div>
					<!-- Arrow Navigator -->
					<span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
					<span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
				</div>
				<script type="text/javascript">slide();</script>
				<!-- #endregion Jssor Slider End -->
			</div>		
		</div> <!-- xong slider -->		

		<!-- thông tin khách sạn -->
		<div class="col-md-4 padd">
			<div class="col-md-12 goiy">
				<h4 class="h4-header">Khách sạn Mường Thanh</h4>
				<h5>CẦN THƠ, VIỆT NAM</h5>
				<?php 
				for($i = 1; $i <= 5; $i++){
					echo "<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>";
				}
				?>
				<hr/>
				<p class="p-descripe">Khách sạn tọa lạc tại vị trí cách Sân bay Quốc tế Cần Thơ 10km, cách TPHCM 169 km với giao thông thủy bộ thuận lợi đi đến các vùng Nam Bộ và nối liền với Campuchia.</p>
				<hr/>
				<div align="center" style="margin-top: -10px">
					<button type="button" class="btn btna">ĐẶT PHÒNG</button>
					<a href="#thongtin"><button type="button" class="btn btna" style="margin-left:8px;">XEM THÊM</button></a>
				</div>			
			</div>
			<div class="col-md-12 help">
				<h4 class="h4-header">Cần trợ giúp?</h4>
				<h5>Chúng tôi rất sẵn lòng</h5>
				<span class="glyphicon glyphicon-phone-alt" style="color:#FF8521"> <font class="contact">07103.123456</font></span><br/>
				<span class="glyphicon glyphicon-envelope" style="color:#FF8521"> <font class="contact">support@gmail.com</font></span>
			</div>
		</div>
		<!-- xong thông tin khách sạn -->

		<!-- div tab control -->
		<div class="col-md-8 slider" id="thongtin">
			<div class="dodai">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">THÔNG TIN</a></li>
					<li class="a1"><a data-toggle="tab" href="#menu1">ĐẶT PHÒNG</a></li>
					<li class="a3"><a data-toggle="tab" href="#menu3">ĐÁNH GIÁ</a></li>
				</ul>
				<!-- div tab-content -->
				<div class="tab-content">
					<!-- div home -->
					<div id="home" class="tab-pane fade in active col-md-12 menutab">
						<p class="p-descripe p-hotel">Được xây dựng vào năm 2015, Mường Thanh Luxury Cần Thơ là khách sạn đầu tiên của chuỗi khách sạn Mường Thanh ở Đồng bằng sông Cửu Long – đồng thời cũng là khách sạn sang trọng đầu tiên và duy nhất tại đây. Nằm tại vị trí đắc địa trước vòng xoay Cồn Cái Khế và là tòa nhà cao nhất thành phố Cần Thơ với 27 tầng, từ cửa sổ khách sạn, du khách có thể ngắm ánh nắng mặt trời trong buổi sớm mai trên sông Hậu hay phóng tầm mắt ngắm nhìn cây cầu Cần Thơ hùng vĩ.</p>
						<hr width="50%" />
						<h4 class="title">Bao gồm các dịch vụ đặc biệt:</h4>
						<div class="col-md-4"><span class="glyphicon glyphicon-signal"></span><label>Internet tốc độ cao</label></div>
						<div class="col-md-4"><span class="glyphicon glyphicon-briefcase"></span><label>Phòng hội nghị</label></div>
						<div class="col-md-4"><span class="glyphicon glyphicon-leaf"></span><label>Khu vui chơi</label></div>
						<div class="col-md-4"><span class="glyphicon glyphicon-cutlery"></span><label>Nhà hàng</label></div>
						<div class="col-md-4"><span class="glyphicon glyphicon-glass"></span><label>Cafe sân thượng</label></div>
						<div class="col-md-4"><span class="glyphicon glyphicon-tint"></span><label>Khu bơi lội</label></div>
						<div class="col-md-4"><span class="glyphicon glyphicon-star"></span><label>Chất lượng 5 sao</label></div>
						<div class="col-md-4"><span class="glyphicon glyphicon-road"></span><label>Bãi đậu xe miễn phí</label></div>
						<div class="col-md-4"><span class="glyphicon glyphicon-heart"></span><label>Dịch vụ spa</label></div>
					</div>
					<!-- xong div home -->

					<!-- div menu 1 -->
					<div id="menu1" class="tab-pane fade">
						<div class="col-md-12 menutab">
							<form class="form-group">
								<!-- đặt phòng -->
								<div class="col-md-3 colpadd">
									<label class="lb2">NGÀY ĐẶT PHÒNG</label>
									<div class="input-group date" data-provide="datepicker">
										<input type="text" class="form-control datepickercheckin">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</div>
									</div>
								</div>
								<!-- xong đặt phòng -->

								<!-- trả phòng -->
								<div class="col-md-3 colpadd">
									<label class="lb2">NGÀY TRẢ PHÒNG</label>
									<div class="input-group date" data-provide="datepicker2">
										<input type="text" class="form-control datepickercheckout">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</div>
									</div>
								</div>
								<!-- xong trả phòng -->

								<!-- số phòng -->
								<div class="col-md-2 colpadd">
									<label class="lb2">MÃ SỐ PHÒNG</label>
									<select class="form-control">
										<option>---</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>

								<!-- số lượng người lớn -->
								<div class="col-md-2 colpadd">
									<label class="lb2">SỐ NGƯỜI</label>
									<select class="form-control">
										<option>---</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>

								<!-- icon search -->
								<div class="col-md-1 colpadd ac">
									<a href="#"><span class="glyphicon glyphicon-search"></span></a>
								</div>		
							</form>
						</div>
					</div>
					<!-- xong div menu 1 -->

					<!-- tab control đánh giá chất lượng -->
					<div id="menu3" class="tab-pane fade">
						<div class="col-md-12 menutab">
							<!-- đánh giá điểm -->
							<div class="col-md-4">
								<h1>4.9/5.0</h1>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star-empty' style='color:#FF8521'></span>
							</div>
							<!-- thanh tiến trình đánh giá -->
							<div class="col-md-8">
								<div class="progress" id="maunen">
									<div class="progress-bar progress-bar-success" id="review" role="progressbar" aria-valuenow="40"
										aria-valuemin="0" aria-valuemax="100" style="width:90%;">
										4.9/5.0 sao
									</div>
								</div>
								<div class="progress" id="maunen">
									<div class="progress-bar progress-bar-success" id="review" role="progressbar" aria-valuenow="40"
										aria-valuemin="0" aria-valuemax="100" style="width:95%;">
										Chất lượng dịch vụ đạt 95%
									</div>
								</div>	
							</div>
							<!-- lằn kẻ -->
							<hr width="100%"/>
							<!-- cơ sở vật chất -->
							<h3 class="title">Cơ sở vật chất</h3>
							<div class="col-md-4 margin-review">
								<label>Vệ sinh </label>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
							</div>
							<div class="col-md-4 margin-review">
								<label>Dịch vụ </label>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
							</div>
							<div class="col-md-4 margin-review">
								<label>Giá </label>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star-empty' style='color:#FF8521'></span>
							</div>
							<div class="col-md-4 margin-review">
								<label>Sự thoải mái </label>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
							</div>
							<div class="col-md-4 margin-review">
								<label>Vị trí </label>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
							</div>
							<div class="col-md-4 margin-review" style="margin-bottom: 20px;">
								<label>Sự chu đáo </label>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
								<span class='glyphicon glyphicon-star-empty' style='color:#FF8521'></span>
							</div>
							<hr width="100%"/>
							<!-- xong cơ sở vật chất -->

							<!-- khách đánh giá -->
							<h4 style="padding-left: 30px;">Guest Reviews</h4>
							<!-- khách 1 -->
							<div class="col-md-12">
								<div class="col-md-2">
									<img src="<?= $this->Url->image('naeun2.jpg')?>" width="100px" height="100px" class="img-circle">
								</div>
								<div class="col-md-7">
									<label>NaEun</label><br/>
									<font>from Korea</font>
									<p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt.</p>
								</div>
								<div class="col-md-3">
									<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
									<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
									<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
									<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
									<span class='glyphicon glyphicon-star-empty' style='color:#FF8521'></span>
									<label>4.0/5.0</label><br/>
									<font>Tốt</font>
								</div>
							</div>	
							<!-- xong khách 1 -->
							<hr width="70%"/>	

							<!-- khách 2 -->
							<div class="col-md-12">
								<div class="col-md-2">
									<img src="<?= $this->Url->image('naeun2.jpg')?>" width="100px" height="100px" class="img-circle">
								</div>
								<div class="col-md-7">
									<label>NaEun</label><br/>
									<font>from Vietnam</font>
									<p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt.</p>
								</div>
								<div class="col-md-3">
									<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
									<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
									<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
									<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
									<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
									<label>5.0/5.0</label><br/>
									<font>Rất Tốt</font>
								</div>
							</div>	
							<!-- xong khách 2 -->
							<hr width="70%"/>	

							<!-- khách 3 -->
							<div class="col-md-12">
								<div class="col-md-2">
									<img src="<?= $this->Url->image('naeun2.jpg')?>" width="100px" height="100px" class="img-circle">
								</div>
								<div class="col-md-7">
									<label>NaEun</label><br/>
									<font>from England</font>
									<p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt.</p>
								</div>
								<div class="col-md-3">
									<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
									<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
									<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>
									<span class='glyphicon glyphicon-star-empty' style='color:#FF8521'></span>
									<span class='glyphicon glyphicon-star-empty' style='color:#FF8521'></span>
									<label>3.0/5.0</label><br/>
									<font>Được</font>
								</div>
							</div>
							<hr width="70%"/>
							<div class="col-sm-10 col-md-offset-1" >
								<textarea class="form-control" rows="2" placeholder="Comment"></textarea>
								<button type="button" class="btn btn-warning" style="margin-top:10px">Bình luận</button>
							</div>										
						</div>
					</div>
					<!-- xong tab control chất lượng -->
				</div>
			</div>
		</div>
		<!-- xong tab control -->

		<!-- hệ thống gợi ý -->
		<div class="col-md-4" style="padding-right:0;">
			<!-- <?php //echo $this->hotels('goiy'); ?> --> 
		</div>

	</div>
	<!-- xong div row -->
</div>
<!-- xong div container -->

<?= $this->Html->script('check-in-out.js') ?>