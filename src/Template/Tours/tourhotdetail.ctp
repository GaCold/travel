<div class="container" style="padding-top: 0;">
	<!-- div row -->
	<div class="row">
		<!-- div breadcrumb -->
		<div class="col-md-12" style="padding-top: 0">
			<!-- breadcrumb -->
			<ol class="breadcrumb breadcrumb-font menu-hoteldetail">
				<li><a href="">Trang Chủ</a></li>
				<li><a href="">Tour</a></li>
				<li>Cần Thơ</li>
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
							<img data-u="image" src="<?= $this->Url->image('bnk3.jpg') ?>"/>
						</div>
						<div>
							<img data-u="image" src="<?= $this->Url->image('cdb.jpg') ?>" />
						</div>
						<div>
							<img data-u="image" src="<?= $this->Url->image('cct.jpg') ?>" />
						</div>
						<div>
							<img data-u="image" src="<?= $this->Url->image('float.jpg') ?>" />
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
				<h4 class="h4-header">Cần Thơ</h4>
				<h5>VIỆT NAM, CHÂU Á</h5>
				<?php 
				for($i = 1; $i <= 5; $i++){
					echo "<span class='glyphicon glyphicon-star' style='color:#FF8521'></span>";
				}
				?>
				<hr/>
				<p class="p-descripe">The city is an independent municipality at the same level as provinces of Vietnam. It was created in the beginning of 2004 by a split of the former Cần Thơ Province into two new administrative units: Cần Thơ City and Hậu Giang Province.</p>
				<hr/>
				<div align="center" style="margin-top: -10px">
					<button type="button" class="btn btna">ĐẶT TOUR NGAY</button>
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
		<div class="col-md-8 slider">
			<div class="col-md-12 dodai">
				<ul class="nav nav-tabs">
					<li class="active "><a data-toggle="tab" href="#home">THÔNG TIN</a></li>
					<li class="a1"><a data-toggle="tab" href="#menu1">LỊCH TRÌNH</a></li>
					<li class="a3"><a data-toggle="tab" href="#menu3">ĐÁNH GIÁ</a></li>
				</ul>
				<!-- div tab-content -->
				<div class="tab-content" id="thongtin">
					<!-- div home -->
					<div id="home" class="tab-pane fade in active col-md-12">
						<p class="p-descripe p-hotel">The city is nicknamed the "western capital" (Tây Đô), and is located 169 kilometres (105 miles) from Ho Chi Minh City. Cần Thơ's climate is tropical and monsoonal with two seasons: rainy, from May to November; and dry, from December to April. Average annual humidity is 83%, rainfall 1,635 mm (64 in) and temperature 27 °C (81 °F).</p>
						<p class="p-descripe p-hotel" style="padding-top:0px">It is noted for its floating market, rice paper-making village, and picturesque rural canals. It had a population of 1.2 million as of 2011, and is located on the south bank of the Hau River, a distributary of the Mekong river. In 2007, about 50 people died when the Cần Thơ Bridge collapsed, causing Vietnam's worst engineering disaster. In 2011, Can Tho International Airport opened.</p>
					</div>
					<!-- xong div home -->

					<!-- div menu 1 -->
					<div id="menu1" class="tab-pane fade">
						<div class="col-md-12" style="padding:25px;text-align:justify;">
							<p>Hành trình khám phá di sản thiên nhiên thế giới tại Quảng Bình, bạn sẽ có cơ hội khám phá các hang động hùng vĩ, tham gia trải nghiệm cảm giác mạnh với trò chơi zipline, chèo thuyền Kayak trên sông chày, tự mình khám phá Hang Tối. Tất cả chỉ với 2.650.000đ.</p>
							<p class="lichtrinh">Đồng Hới – Vườn quốc gia Phong Nha – Kẻ Bàng – Động Phong Nha – Động Thiên Đường – Chày lập Homestay (Ăn trưa, tối)</p>
							<img src="<?= $this->Url->image('cct.jpg') ?>" class="img-responsive img-lichtrinh">
							<p><b>Sáng 8h00:</b> Xe và HDV đón quý khách tại ga/khách sạn/bến xe xuất phát đi VQG Phong Nha – Kẻ Bàng – Di sản Thiên nhiên Thế giới. Đây là VQG lớn nhất tại Việt Nam.</p>
							<img src="<?= $this->Url->image('bnk3.jpg') ?>" class="img-responsive img-lichtrinh">
							<p><b>9h00:</b> Du khách sẽ được tham quan Động Phong Nha hang động tiêu biểu nhất về vẽ đẹp tại Di sản Phong Nha-Kẻ Bàng với 7 tiêu chí nổi bật toàn cầu do Hội hang động Hoàng gia Anh bình chọn.</p>
							<img src="<?= $this->Url->image('float.jpg') ?>" class="img-responsive img-lichtrinh">
							<p><b>11h30:</b> Đoàn ăn trưa tại nhà hàng.</p>
							<img src="<?= $this->Url->image('mk.jpg') ?>" class="img-responsive img-lichtrinh">
							<p><b>Chiều 13h00:</b> Đoàn tiếp tục đi theo con đường chiến lược trong cuộc chiến tranh chính nghĩa tại Việt Nam để tham quan các điểm nổi bật như dốc Đồng Tiền, ngả tư Trạ Ang, tham quan rừng nguyên sinh bạt ngàn. Ngoài ra, du khách sẽ được hiểu thêm về giá trị lịch sử từ những địa danh nổi tiếng như Hang 8 Cô, đường 20 Quyết Thắng.<br/></p>
							<img src="<?= $this->Url->image('ncbt.jpg') ?>" class="img-responsive img-lichtrinh">
							<p><b>14h00:</b> Tham quan Động Thiên Đường – Hang động khô dài nhất Đông Nam Á với chiều dài đã được khảo sát 31,4km. Với hệ thống thạch nhũ tráng lệ, Du khách sẽ được chiêm ngưỡng một Thiên đường chốn trần gian. Lịch trình tham quan của du khách là 1km trong hang động.</p>
							<img src="<?= $this->Url->image('cdb.jpg') ?>" class="img-responsive img-lichtrinh">
							<p><b>16h30:</b> Đoàn về nghỉ tại Homestay Chày Lập, làng Chày Lập.<br/>
							Tối: Ăn tối. Sau đó quý khách cùng tham gia các hoạt động với người dân địa phương như đi bắt cá, ếch đồng. Tự do nghỉ ngơi.</p>
						</div>
					</div>
					<!-- xong div menu 1 -->

					<!-- tab control đánh giá chất lượng -->
					<div id="menu3" class="tab-pane fade">
						<div class="col-md-12">
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
									<img src="<?= $this->Url->image('naeun.jpg') ?>" width="100px" height="100px" class="img-circle">
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
									<img src="<?= $this->Url->image('naeun.jpg') ?>" width="100px" height="100px" class="img-circle">
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
									<img src="<?= $this->Url->image('naeun.jpg') ?>" width="100px" height="100px" class="img-circle">
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
							<div class="col-md-12">
								<textarea class="form-control" rows="6" placeholder="Comment"></textarea>
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
			<?= $this->element('/tour/goiytour') ?>
		</div>

	</div>
	<!-- xong div row -->
</div>
<!-- xong div container -->
