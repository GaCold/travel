<div>
	<img src="<?= $this->Url->image('createtour.jpg') ?>" width="100%" style="max-height:350px">
</div>
<!-- div container -->
<div class="container hdv-header">
	<div class="row">

		<div class="col-md-10">
			<h3 style="padding-top: 50px; padding-bottom: 50px; text-align: center; color: #FF8521">TẠO TOUR</h3>
			<div class="row">
				<div class="form-group" style="margin: 10px;">
					<div class="col-sm-2">
						<p>Tên</p>
					</div>
					<div class="col-sm-4">
						<input class="form-control" placeholder="Tâm lùn"></input>
					</div>
				</div>
				<div class="form-group" style="margin: 10px;">
					<div class="col-sm-2">
						<p>Họ</p>
					</div>
					<div class="col-sm-4">
						<input class="form-control" placeholder="Nguyễn"></input>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group" style="margin: 10px;">
					<div class="col-sm-2">
						<p>Số điện thoại</p>
					</div>
					<div class="col-sm-4">
						<input class="form-control" placeholder="01223456789"></input>
					</div>
				</div>
				<div class="form-group" style="margin: 10px;">
					<div class="col-sm-2">
						<p>Số CMND</p>
					</div>
					<div class="col-sm-4">
						<input class="form-control"  placeholder="371752271"></input>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group" style="margin: 10px;">
					<div class="col-sm-2">
						<p>Số ngày đi tour</p>
					</div>
					<div class="col-sm-4">
						<select class="form-control">
							<option>----1 ngày---</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="form-group" style="margin: 10px;">
					<div class="col-sm-2">
						<p>Số lượng</p>
					</div>
					<div class="col-sm-4">
						<select class="form-control">
							<option>----1 người---</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group" style="margin: 10px;">
					<div class="col-sm-2">
						<p>Điểm đến</p>
					</div>
					<div class="col-sm-4">
						<select class="form-control">
							<option>Cần Thơ</option>
							<option>Cà Mau</option>
							<option>Bến Tre</option>
							<option>Vĩnh Long</option>
							<option>Bạc Liêu</option>
							<option>Kiên Giang</option>
						</select>
					</div>
				</div>
				<div class="form-group" style="margin: 10px;">
					<div class="col-sm-2">
						<p>Giá tiền</p>
					</div>
					<div class="col-sm-4">
						<select class="form-control">
							<option>Triệu VNĐ</option>
							<option>1-2</option>
							<option>2-3</option>
							<option>3-4</option>
							<option>4-5</option>
							<option>5-6</option>
							<option>7-8</option>
						</select>
					</div>
				</div>
			</div>

			
			<div class="col-sm-12 goiy-hanhtrinh" style="border: 1px solid whitesmoke; border-radius: 4px; margin-top: 20px; margin-bottom: 20px; padding-top: 10px; padding-bottom: 20px;">

				<div class="row" style="padding-top: 20px;padding-bottom: 20px;">
					<p style="text-align: center; color: #FF8521">HÀNH TRÌNH BẠN CÓ THỂ ĐI</p>
					<?php for ($i=0; $i < 5; $i++) { ?>
					<input type="checkbox" name="" class="checkbox-tour" style="margin-left: 15px">Chợ nổi
					<?php } ?>
				</div>
				<div class="row" >
					<p style="text-align: center; color: #FF8521">KHÁCH SẠN BẠN CÓ THỂ QUAN TÂM</p>
					<?php for ($i=0; $i < 4; $i++) { ?>
					<div class="col-sm-3" style=" margin-top: 15px">
						<div class="col-sm-6"  style="margin:0px; padding: 0px; ">
							<img src="<?= $this->Url->image('slide-06.jpg') ?>" class="img-responsive" width="100px" height="100px">
						</div>
						<div class="col-sm-6 " style=" text-align: left; padding: 5px; font-size: 10px;">
							<p style="margin: 0px;">Khách sạn Cần Thơ</p>
							<p style="font-size: 12px; color: #FF8521; margin: 0px;">500 VNĐ</p>
							<p style="margin:0px"><a href="hoteldetail.php" >Xem thêm</a></p>
						</div>
					</div>
					<?php } ?>
				</div>

				<div class="row diadiemvuichoi" style="padding-top: 20px; padding-bottom: 20px">
					<p style="text-align: center; color: #FF8521">MỘT SỐ ĐỊA ĐIỂM VUI CHƠI BẠN CÓ THỂ THÍCH</p>
					<?php for ($i=0; $i < 4; $i++) { ?>
					<div class="col-sm-3" style=" margin-top: 15px; ">
						<!-- sldier  -->
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
								<img src="<?= $this->Url->image('slide-05.jpg') ?>" alt="Los Angeles" style="width:100%;">
									<div class="carousel-caption">
									</div>
								</div>
								<div class="item">
									<img src="<?= $this->Url->image('slide-05.jpg') ?>" alt="Chicago" style="width:100%;">
									<div class="carousel-caption">
									</div>
								</div>
								<div class="item">
									<img src="<?= $this->Url->image('slide-05.jpg') ?>" alt="New York" style="width:100%;">
									<div class="carousel-caption">
									</div>
								</div>
							</div>							
						</div>
						<!-- end slider -->
						<p style="font-size: 10px; margin: 5px"><a href="">Công viên nước</a></p>
						<!-- </div> -->
					</div>
					<?php } ?>
				</div>

				<div style="text-align: center;">
					<a href="" class="btn-see-all-blog">Hoàn tất</a>
				</div>

			</div>	
		</div>
	</div>
</div>