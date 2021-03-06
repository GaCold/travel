	<!-- slider -->
	<div id="themeSlider" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#themeSlider" data-slide-to="0" class="active"></li>
			<li data-target="#themeSlider" data-slide-to="1"></li>
			<li data-target="#themeSlider" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner">
			<div class="item active">
				<div class="imgOverlay"></div>
				<img src="<?php echo $this->Url->image('slide-05.jpg'); ?>" alt="First slide" class="img-reponsive" style="width: 100%; height: 600px;">
				<div class="carousel-caption">
					<h3>First slide</h3>
					<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				</div>
			</div>
			<div class="item">
				<div class="imgOverlay"></div>
				<img src="<?php echo $this->Url->image('slide-06.jpg'); ?>" alt="Second slide" style="width: 100%; height: 600px;">
				<div class="carousel-caption">
					<h3>Second slide</h3>
					<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				</div>
			</div>
			<div class="item">
				<div class="imgOverlay"></div>
				<img src="<?php echo $this->Url->image('slide-07.jpg'); ?>" alt="Third slide" style="width: 100%; height: 600px;">
				<div class="carousel-caption">
					<h3>Third slide</h3>
					<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				</div>
			</div>
		</div>

		<a class="left carousel-control" href="#themeSlider" data-slide="prev">
			<span class="fa fa-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#themeSlider" data-slide="next">
			<span class="fa fa-chevron-right"></span>
		</a>

	</div>
	<!--end slider -->