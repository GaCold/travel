<div class="row container-blog" style="padding-top: 50px; padding-bottom: 50px;">
	<div class="col-sm-10 col-sm-offset-1">
		<div class="row">
		<?php  for ($i=0; $i < 9 ; $i++) { ?>
		<div class="col-sm-4 animate-box wow fadeInUp"  style="margin-bottom: 30px;">
			<div class="wrapper" style="background: white;">
				<div class="img-tour">
					<a href=""><img src="<?= $this->Url->image('masonry.jpg') ?>" alt="Free" class="img-responsive" width="100%"></a>
				</div>
				<div class="row detail-tour" style=" padding: 15px;">
					<p><strong>GALLERY POST FORMAT</strong></p>
					<p>Doloremque laudantium, totam rem. Aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta. sunt explicabo..... <a href= "<?= $this->Url->build('/Blogs/blogdetail', true); ?>" class="view-more">Xem thêm</a></p>
					<p>04 March, 2013 / 2 Comments</p>
				</div>
			</div>
		</div>
		<?php } ?>
		</div>
		<div class="row blog-loadmore wow fadeInUp">
			<a class="btn btn-see-all-blog" href="">XEM NHIỀU HƠN <i class="icon fa fa-long-arrow-right" aria-hidden="true"></i></a>
		</div>
	</div>
</div>