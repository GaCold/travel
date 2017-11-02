<?= $this->element('deletemodal') ?>

<!-- menu left -->
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<form role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Tìm kiếm">
		</div>
	</form>
	<ul class="nav menu">
		<li>
			<a href="<?= $this->url->build('Admin/index') ?>"><svg class="glyph stroked table "><use xlink:href="#stroked-table"></use></svg> Thống kê</a>
		</li>
		<li>
			<a href="<?= $this->url->build('AdminAccount/index') ?>"><svg class="glyph stroked table "><use xlink:href="#stroked-table"></use></svg> Quản lý tài khoản</a>
		</li>
		<li>
			<a href="<?= $this->url->build('AdminTour/index') ?>"><svg class="glyph stroked table "><use xlink:href="#stroked-table"></use></svg> Quản lý tour</a>
		</li>
		<li>
			<a href="<?= $this->url->build('AdminRestaurant/index') ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Quản lý nhà hàng</a>
		</li>
		<li>
			<a href="<?= $this->url->build('AdminHotel/index') ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Quản lý khách sạn</a>
		</li>
		<li>
			<a href="<?= $this->url->build('AdminPlane/index') ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Quản lý máy bay</a>
		</li>
		<li>
			<a href="<?= $this->url->build('AdminPost/index') ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Quản lý bài viết</a>
		</li>
		<li class="active">
			<a href="<?= $this->url->build('AdminAcceptTour/index') ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Quản lý phê duyệt tour</a>
		</li>
		<li role="presentation" class="divider"></li>
		
	</ul>
	<div class="attribution">TTQ &copy; 2017</div>
</div><!--/.sidebar-->
<!-- done menu lef id="menuli"t -->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">     
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Admin</li>
		</ol>
	</div><!--/.row-->    


	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">QUẢN LÝ PHÊ DUYỆT TOUR</div>
				<div class="panel-body">						
					<div class="columns btn-group pull-right" style="margin-bottom: 10px;">
						<!-- accept tour -->
						<button class="btn btn-default" type="button" name="toggle" title="duyệt nhiều tour" data-toggle="" data-target=""><i class="glyphicon glyphicon-ok"></i></button>
						<!-- delete button -->
						<button class="btn btn-default" type="button" name="toggle" title="Delete" data-toggle="modal" data-target="#deleteModal">
							<i class="glyphicon glyphicon-trash"></i>
						</button>
						
					</div>
					<!-- search button -->
					<div class="pull-right search"><input class="form-control" type="text" placeholder="Search"></div>
					<!-- data table -->
					<table class="table table-striped" id="data-table">
						<!-- header -->
						<tr>
							<th>Check</th>
							<th>Tên Tour</th>
							<th>Lịch Trình</th>	
							<th>Ngày Đi</th>						
							<th>Ngày Về</th>
							<th>Giá Tour</th>
							<th>Action</th>
						</tr>
						<!-- ḍng 1 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Tour Name</td>
							<td>tour sẽ đi A,B,C</td>
							<td>7/6/2017</td>
							<td>9/6/2017</td>
							<td>1.000.000</td>

							<td>
								<a href="<?= $this->Url->build('AdminPost/view', true) ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a target="_blank" title="accept"><span class="glyphicon glyphicon-ok"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
						<!-- ḍng 2 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Tour Name</td>
							<td>tour sẽ đi A,B,C</td>
							<td>7/6/2017</td>
							<td>9/6/2017</td>
							<td>1.000.000</td>

							<td>
								<a href="<?= $this->Url->build('AdminPost/view', true) ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a target="_blank" title="accept"><span class="glyphicon glyphicon-ok"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
						<!-- ḍng 3 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Tour Name</td>
							<td>tour sẽ đi A,B,C</td>
							<td>7/6/2017</td>
							<td>9/6/2017</td>
							<td>1.000.000</td>
							<td>
								<a href="<?= $this->Url->build('AdminPost/view', true) ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a target="_blank" title="accept"><span class="glyphicon glyphicon-ok"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
						<!-- ḍng 4 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Tour Name</td>
							<td>tour sẽ đi A,B,C</td>
							<td>7/6/2017</td>
							<td>9/6/2017</td>
							<td>1.000.000</td>

							<td>
								<a href="<?= $this->Url->build('AdminPost/view', true) ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a target="_blank" title="accept"><span class="glyphicon glyphicon-ok"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
						<!-- ḍng 5 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Tour Name</td>
							<td>tour sẽ đi A,B,C</td>
							<td>7/6/2017</td>
							<td>9/6/2017</td>
							<td>1.000.000</td>

							<td>
								<a href="<?= $this->Url->build('AdminPost/view', true) ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a target="_blank" title="accept"><span class="glyphicon glyphicon-ok"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
						<!-- ḍng 6 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Tour Name</td>
							<td>tour sẽ đi A,B,C</td>
							<td>7/6/2017</td>
							<td>9/6/2017</td>
							<td>1.000.000</td>
							<td>
								<a href="<?= $this->Url->build('AdminPost/view', true) ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a target="_blank" title="accept"><span class="glyphicon glyphicon-ok"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
						<!-- ḍng 7 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Tour Name</td>
							<td>tour sẽ đi A,B,C</td>
							<td>7/6/2017</td>
							<td>9/6/2017</td>
							<td>1.000.000</td>
							<td>
								<a href="<?= $this->Url->build('AdminPost/view', true) ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a target="_blank" title="accept"><span class="glyphicon glyphicon-ok"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
					</table>
				</div>
				<!-- xong panel-body -->
			</div>
		</div>
	</div><!--/.row-->	

	
</div><!--/.main-->

