<!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><span>TTQ</span>Admin</a>
			<ul class="user-menu">
				<li class="dropdown pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
						<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
						<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav> -->


<!-- update header -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>TravelForYou<color style="color: white">Admin</color></span></a>
            <!-- ul -->
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
                        <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
                        <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                    </ul>
                </li>
            </ul>
            <!-- xong ul -->
        </div>
    </div><!-- /.container-fluid -->
</nav>

<!-- menu left -->
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li>
            <a href="<?= $this->url->build('') ?>"><svg class="glyph stroked table "><use xlink:href="#stroked-table"></use></svg> Thống kê</a>
        </li>
        <li>
            <a href="<?= $this->url->build('') ?>"><svg class="glyph stroked table "><use xlink:href="#stroked-table"></use></svg> Quản lý tài khoản</a>
        </li>
        <li>
            <a href="<?= $this->url->build('') ?>"><svg class="glyph stroked table "><use xlink:href="#stroked-table"></use></svg> Quản lý tour</a>
        </li>
        <li>
            <a href="<?= $this->url->build('') ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Quản lý nhà hàng</a>
        </li>
        <li>
            <a href="<?= $this->url->build('') ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Quản lý khách sạn</a>
        </li>
        <li>
            <a href="<?= $this->url->build('') ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Quản lý máy bay</a>
        </li>
        <li class="active">
            <a href="<?= $this->url->build('') ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Quản lý bài viết</a>
        </li>
        <li role="presentation" class="divider"></li>
        
    </ul>
    <div class="attribution">TTQ &copy; 2017</div>
</div><!--/.sidebar-->
<!-- done menu lef id="menuli"t -->