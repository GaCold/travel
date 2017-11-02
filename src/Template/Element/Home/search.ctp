<!-- search -->
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row dodai tabcontrol-seach">
				<ul class="nav nav-tabs">
					<li class="active "><a data-toggle="tab" href="#home">TOUR</a></li>
					<li class="a1"><a data-toggle="tab" href="#khachsan">KHÁCH SẠN</a></li>
					<li class="a2"><a data-toggle="tab" href="#ve">VÉ</a></li>
				</ul>
				<!-- div tab-content -->
				<div class="tab-content" id="thongtin">
					<!-- div home -->
					<div id="home" class="tab-pane fade in active col-sm-12" style="padding-top: 25px;">
						<div class="form-group col-sm-2">
							<label>Quốc gia</label>
							<input type="" name="" class="form-control" placeholder="Việt Nam">
						</div>
						<div class="form-group col-sm-2">
							<label>Thành phố</label>
							<input type="" name="" class="form-control" placeholder="Việt Nam">
						</div>
						<div class="form-group col-sm-2">
							<label>Ngày đi</label>
							<div class="input-group " data-provide="datepicker" style="margin: 0px">
								<input type="text" class="form-control datepickercheckin">
								<div class="input-group-addon">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-2">
							<label>Ngày về</label>
							<div class="input-group" data-provide="datepicker" style="margin: 0px">
								<input type="text" class="form-control datepickercheckout">
								<div class="input-group-addon">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-2">
							<label>Chất lượng</label>
							<select class="form-control">
								<option>----</option>
								<option>5 sao</option>
								<option>4 sao</option>
								<option>3 sao</option>
								<option>2 sao</option>
								<option>khác</option>
							</select>
						</div>
						<div class="form-group col-sm-2">
							<label>Người</label>
							<select class="form-control">
								<option>----</option>
								<option>5</option>
								<option>4</option>
								<option>3</option>
								<option>2</option>
								<option>khác</option>
							</select>
						</div>
						<div class="col-sm-5">
							<a class="btn btn-see-all">SEARCH</a>
						</div>
					</div>	

					<!-- menu 1 -->
					<div id="khachsan" class="tab-pane fade col-sm-12" style="padding-top: 25px;">

						<div class="col-sm-3 form-group">
							<label>Điểm đến/Tên khách sạn</label>
							<input type="text" class="form-control" id="txtcountry" placeholder="Quốc gia">
						</div>

						<!-- đặt phòng -->
						<div class="col-sm-2 form-group">
							<label >Ngày đặt phòng</label>
							<div class="input-group date" data-provide="datepicker">
								<input type="text" class="form-control datepickercheckin">
								<div class="input-group-addon">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</div>
							</div>
						</div>
						<!-- xong đặt phòng -->

						<!-- trả phòng -->
						<div class="col-sm-2 form-group">
							<label>Ngày trả phòng</label>
							<div class="input-group date" data-provide="datepicker">
								<input type="text" class="form-control datepickercheckout">
								<div class="input-group-addon">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</div>
							</div>
						</div>
						<!-- xong trả phòng -->

						<!-- số phòng -->
						<div class="col-sm-2 form-group">
							<label class="">Mã số phòng</label>
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
						<div class="col-sm-2 form-group">
							<label>Số người</label>
							<select class="form-control">
								<option>---</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="col-sm-5">
							<a class="btn btn-see-all">SEARCH</a>
						</div>
					</div>

					<!-- menu 2 -->
					<div id="ve" class="tab-pane fade" style="padding-top: 25px; padding-bottom: 25px ">
						<div class="col-sm-12">
							<!-- điểm xuất phát -->
							<div class="col-sm-2 form-group">
								<label >Điểm xuất phát</label>
								<input type="text" class="form-control" id="txtcountry" placeholder="Quốc gia">
							</div>
							<!-- điểm đến -->
							<div class="col-sm-2 form-group">
								<label>Điểm đến</label>
								<input type="text" class="form-control" id="txtcountry" placeholder="Quốc gia">
							</div>
							<!-- đặt phòng -->
							<div class="col-sm-2 form-group">
								<label class="">Ngày đi</label>
								<div class="input-group" data-provide="datepicker">
									<input type="text" class="form-control datepickercheckin">
									<div class="input-group-addon">
										<i class="fa fa-calendar" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							<!-- xong đặt phòng -->

							<!-- trả phòng -->
							<div class="col-sm-2 form-group">
								<label class="">Ngày về</label>
								<div class="input-group" data-provide="datepicker2">
									<input type="text" class="form-control datepickercheckout">
									<div class="input-group-addon">
										<i class="fa fa-calendar" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							<!-- xong trả phòng -->

							<!-- số phòng -->
							<div class="col-sm-2 form-group">
								<label class="">Mã hàng</label>
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
							<div class="col-sm-2 form-group">
								<label class="">Số người</label>
								<select class="form-control">
									<option>---</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="col-sm-5">
								<a class="btn btn-see-all">SEARCH</a>
							</div>
						</div>
					</div>
					<!-- menu 3 -->
				</div>
			</div>
			<!-- xong tab control -->
		</div>
	</div>

	<!-- end search -->