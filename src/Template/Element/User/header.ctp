<!-- div menu header -->
<nav class="navbar navbar-inverse nav-menu">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="<?= $this->Url->build('/Home/', true) ?>">TravelForYou</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-left">
				<li class=""><a href="<?= $this->Url->build('/Home/', true) ?>">HOME</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">TOUR<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?= $this->Url->build('/Tours/tourhot', true) ?>">TOUR HOT</a></li>
						<li><a href="<?= $this->Url->build('/Tours/toursummer', true) ?>">TOUR MÙA HÈ</a></li>
						<li><a href="<?= $this->Url->build('/Tours/tourdomestic', true) ?>">TOUR TRONG NƯỚC</a></li>
						<li><a href="<?= $this->Url->build('/Tours/tourabroad', true) ?>">TOUR NƯỚC NGOÀI</a></li>
					</ul>
				</li>
				<li><a href="<?= $this->Url->build('/Tickets/', true) ?>">VÉ</a></li>
				<li><a href="<?= $this->Url->build('/Hotels/', true) ?>">KHÁCH SẠN</a></li>
				<li><a href="<?= $this->Url->build('/Createtours/', true) ?>">TẠO TOUR</a></li>
				<li><a href="<?= $this->Url->build('/Blogs/', true) ?>">BÀI VIẾT</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">GIỚI THIỆU<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?= $this->Url->build('/Contactus/', true) ?>">LIÊN HỆ</a></li>
						<li><a href="<?= $this->Url->build('/Products/', true)?>">GIỚI THIỆU</a></li>
					</ul>
				</li>

			</ul>
			<form class="navbar-form navbar-right">
				<div class="input-group">
				<input type="text" class="form-control" placeholder="Bạn muốn đi đâu?">
					<div class="input-group-btn">
						<button class="btn btn-default-1" type="submit">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</nav>
<!-- end div menu header -->