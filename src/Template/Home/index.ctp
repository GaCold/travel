

<div>
	<?= $this->element('/home/slider') ?>
	<?= $this->element('/home/search') ?>
	<div class="container-tour">
		<!-- tour hot -->
		<div class="tour-hot">
			<div class="row title-tour animate-box wrapper-blog wow fadeInDown">
				<h3><strong>HOT TOURS</strong></h3>
				<hr>
				<h4>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseuuntur magni dolores eos qui ratione.</h4>
			</div>
			<div class="row content-tour">
				<div class="col-sm-10 col-sm-offset-1">
					<?php for ($i=0; $i <4; $i++) { ?>
					<div class="col-md-3 col-sm-6 animate-box wrapper-blog wow fadeInUp"  style="margin-bottom: 30px;">
						<div class="wrapper">
							<div class="img-tour">
								<a href=""><img src="<?php echo $this->Url->image('cau.jpg'); ?>" alt="Free" class="img-responsive" width="100%"></a>
							</div>
							<div class="row detail-tour">
								<div class="tour-name">
									<p>TOUR CẦN THƠ</p>
									<p>3/6/2017 - 5/6/2017</p>
									<hr>
								</div>
								<div class="col-md-6 " style="padding: 20px 15px">
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
								<div class="col-md-6 price">
									<b>2,900 VNĐ</b>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="col-md-12 text-center ">
					<p><a class="btn btn-see-all" href="<?= $this->Url->build('/Tourhot/') ?>">XEM NHIỀU HƠN <i class="icon fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
				</div>
			</div>
		</div>
		<!-- end tour hot -->
		<!-- tour summer -->
		<div class="tour-summer">
			<div class="row title-tour animate-box wrapper-blog wow fadeInDown">
				<h3><strong>TOUR MÙA HÈ</strong></h3>
				<hr>
				<h4>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseuuntur magni dolores eos qui ratione.</h4>
			</div>
			<div class="row content-tour">
				<div class="col-sm-10 col-sm-offset-1">
					<?php for ($i=0; $i <4; $i++) { ?>
					<div class="col-md-3 col-sm-6 animate-box wrapper-blog wow fadeInUp"  style="margin-bottom: 30px;">
						<div class="wrapper">
							<div class="img-tour">
								<a href=""><img src="<?php echo $this->Url->image('slide-05.jpg'); ?>" alt="Free" class="img-responsive" width="100%"></a>
							</div>
							<div class="row detail-tour">
								<div class="tour-name">
									<p>TOUR CẦN THƠ</p>
									<p>3/6/2017 - 5/6/2017</p>
									<hr>
								</div>
								<div class="col-md-6" style="padding: 20px 15px">
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
								<div class="col-md-6 price">
									<b>2,900 VNĐ</b>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="col-md-12 text-center ">
					<p><a class="btn btn-see-all" href="<?= $this->Url->build('/Toursummer/') ?>">XEM NHIỀU HƠN <i class="icon fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
				</div>
			</div>
		</div>
		<!-- end tour summer -->

		<!-- tour trong nuoc -->
		<div class="tour-trong-nuoc">
			<div class="row title-tour animate-box wrapper-blog wow fadeInDown">
				<h3><strong>HOT TRONG NƯỚC</strong></h3>
				<hr>
				<h4>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseuuntur magni dolores eos qui ratione.</h4>
			</div>
			<div class="row content-tour">
				<div class="col-sm-10 col-sm-offset-1">
					<?php for ($i=0; $i <4; $i++) { ?>
					<div class="col-md-3 col-sm-6 animate-box wrapper-blog wow fadeInUp"  style="margin-bottom: 30px;">
						<div class="wrapper">
							<div class="img-tour">
								<a href=""><img src="<?php echo $this->Url->image('slide-06.jpg'); ?>" alt="Free" class="img-responsive" width="100%"></a>
							</div>
							<div class="row detail-tour">
								<div class="tour-name">
									<p>TOUR CẦN THƠ</p>
									<p>3/6/2017 - 5/6/2017</p>
									<hr>
								</div>
								<div class="col-md-6 " style="padding: 20px 15px">
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
								<div class="col-md-6 price">
									<b>2,900 VNĐ</b>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="col-md-12 text-center ">
					<p><a class="btn btn-see-all" href="<?= $this->Url->build('/Tourdomestic/') ?>">XEM NHIỀU HƠN <i class="icon fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
				</div>
			</div>
		</div>
		<!-- end tour trong nuoc -->

		<!-- tour nuoc ngoai -->
		<div class="tour-nuocngoai">
			<div class="row title-tour animate-box wow fadeInDown data-wow-offset='15'">
				<h3><strong>TOUR NƯỚC NGOÀI</strong></h3>
				<hr>
				<h4>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseuuntur magni dolores eos qui ratione.</h4>
			</div>
			<div class="row content-tour">
				<div class="col-sm-10  col-sm-offset-1">
					<?php for ($i=0; $i <4; $i++) { ?>
					<div class="col-md-3 col-sm-6 animate-box wow fadeInUp data-wow-offset='10'"  style="margin-bottom: 30px;">
						<div class="wrapper">
							<div class="img-tour">
								<a href=""><img src="<?php echo $this->Url->image('slide-07.jpg'); ?>" alt="Free" class="img-responsive" width="100%"></a>
							</div>
							<div class="row detail-tour">
								<div class="tour-name">
									<p>TOUR CẦN THƠ</p>
									<p>3/6/2017 - 5/6/2017</p>
									<hr>
								</div>
								<div class="col-md-6" style="padding: 20px 15px">
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
								<div class="col-md-6 price">
									<b>2,900 VNĐ</b>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="col-md-12 text-center ">
					<p><a class="btn btn-see-all" href="<?= $this->Url->build('/Tourabroad/') ?>">XEM NHIỀU HƠN <i class="icon fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
				</div>
			</div>
		</div>
		<!-- end tour nuoc ngoai -->
	</div>

	<!-- div hotel -->
	<div class="row hotel-home">
		<img src="<?php echo $this->Url->image('popular.jpg'); ?>" class="img-responsive" style="width: 100%; height: 500px">
	</div>
	<!-- end div hotel -->

	<!-- div helpful -->
	<div class="row blog-home">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row title-blog animate-box wrapper-blog wow fadeInDown ">
				<h3><strong>BÀI VIẾT ĐƯỢC QUAN TÂM</strong></h3>
				<hr>
				<h4>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseuuntur magni dolores eos qui ratione.</h4>
			</div class="row">
			<div class="row">
				<?php for($i=0; $i < 4; $i++){?>
				<div class="col-md-6 col-sm-6 animate-box wrapper-blog wow fadeInUp">
					<div class="col-md-4 col-sm-3 img-blog">
						<img src="<?php echo $this->Url->image('slide-05.jpg'); ?>" class="img-responsive circle  img-circle">
					</div>
					<div class="col-md-8 col-sm-9 content-blog">
						<h4><strong>DU LỊCH TIẾT KIỆM</strong></h4>
						<hr>
						<p>Perspiciatis unde omnis iste natus doxes sit voluptatem accusantium doloremque la dantiumeaque ipsa.</p>
						<p><a class="view-more" href="<?= $this->Url->build('/Blogs/blogdetail/') ?>">Xem chi tiết </a></p>
					</div>
				</div>
				<?php } ?>	
			</div>
			
		</div>
	</div>
	<!-- end div helpful -->
</div>

<?php echo $this->Html->script('check-in-out.js'); ?>
