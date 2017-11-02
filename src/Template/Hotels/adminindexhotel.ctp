<?= $this->element('deletemodal') ?>
<?= $this->element('Hotel/addModal') ?>

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
		<li class="active">
			<a href="<?= $this->url->build('AdminHotel/index') ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Quản lý khách sạn</a>
		</li>
		<li>
			<a href="<?= $this->url->build('AdminPlane/index') ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Quản lý máy bay</a>
		</li>
		<li>
			<a href="<?= $this->url->build('AdminPost/index') ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Quản lý bài viết</a>
		</li>
		<li>
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
				<div class="panel-heading">QUẢN LÝ KHÁCH SẠN</div>
				<div class="panel-body">						
					<div class="columns btn-group pull-right" style="margin-bottom: 10px;">
						<!-- delete button -->
						<button class="btn btn-default" type="button" name="toggle" title="Delete" data-toggle="modal" data-target="#deleteModal">
							<i class="glyphicon glyphicon-trash"></i>
						</button>
						<!-- import button -->
						<button class="btn btn-default" type="button" title="Import file"><i class="glyphicon glyphicon-import"></i></button>
						<!-- export -->
						<button class="btn btn-default" type="button" name="toggle" title="Export file"><i class="glyphicon glyphicon-export"></i></button>
						<!-- add tour -->
						<button class="btn btn-default" type="button" name="toggle" title="Thêm tour mới" data-toggle="modal" data-target="#hotelModal"><i class="glyphicon glyphicon-pencil"></i></button>
					</div>
					<!-- search button -->
					<div class="pull-right search"><input class="form-control" type="text" placeholder="Search"></div>
					<!-- data table -->
					<table class="table table-striped" id="data-table">
						<!-- header -->
						<tr class="no-edit">
							<th>Check</th>
							<th>Tên Khách Sạn</th>
							<th>Người Tạo</th>
							<th>Ngày Tạo</th>
							<th>Ngày Cập Nhật</th>
							<th>Người Cập Nhập</th>
							<th>Thao Tác</th>
						</tr>
						<!-- dòng 1 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Mường Thanh</td>
							<td>Tam Nguyen</td>
							<td>7/6/2017</td>
							<td></td>
							<td></td>
							<td>
								<a href="<?= $this->url->build('AdminHotel/view') ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a href="<?= $this->url->build('AdminHotel/edit') ?>" target="_blank" title="edit"><span class="glyphicon glyphicon-pencil"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
						<!-- dòng 2 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Mường Thanh</td>
							<td>Tam Nguyen</td>
							<td>7/6/2017</td>
							<td></td>
							<td></td>
							<td>
								<a href="<?= $this->url->build('AdminHotel/view') ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a href="<?= $this->url->build('AdminHotel/edit') ?>" target="_blank" title="edit"><span class="glyphicon glyphicon-pencil"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
						<!-- dòng 3 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Mường Thanh</td>
							<td>Tam Nguyen</td>
							<td>7/6/2017</td>
							<td>10/6/2017</td>
							<td>Tam Nguyen</td>
							<td>
								<a href="<?= $this->url->build('AdminHotel/view') ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a href="<?= $this->url->build('AdminHotel/edit') ?>" target="_blank" title="edit"><span class="glyphicon glyphicon-pencil"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
						<!-- dòng 4 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Mường Thanh</td>
							<td>Tam Nguyen</td>
							<td>7/6/2017</td>
							<td></td>
							<td></td>
							<td>
								<a href="<?= $this->url->build('AdminHotel/view') ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a href="<?= $this->url->build('AdminHotel/edit') ?>" target="_blank" title="edit"><span class="glyphicon glyphicon-pencil"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
						<!-- dòng 5 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Mường Thanh</td>
							<td>Tam Nguyen</td>
							<td>7/6/2017</td>
							<td></td>
							<td></td>
							<td>
								<a href="<?= $this->url->build('AdminHotel/view') ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a href="<?= $this->url->build('AdminHotel/edit') ?>" target="_blank" title="edit"><span class="glyphicon glyphicon-pencil"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
						<!-- dòng 6 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Mường Thanh</td>
							<td>Tam Nguyen</td>
							<td>7/6/2017</td>
							<td></td>
							<td></td>
							<td>
								<a href="<?= $this->url->build('AdminHotel/view') ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a href="<?= $this->url->build('AdminHotel/edit') ?>" target="_blank" title="edit"><span class="glyphicon glyphicon-pencil"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
						<!-- dòng 7 -->
						<tr>
							<td><input type="checkbox"></td>
							<td>Mường Thanh</td>
							<td>Tam Nguyen</td>
							<td>7/6/2017</td>
							<td></td>
							<td></td>
							<td>
								<a href="<?= $this->url->build('AdminHotel/view') ?>" target="_blank" title="view"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a href="<?= $this->url->build('AdminHotel/edit') ?>" target="_blank" title="edit"><span class="glyphicon glyphicon-pencil"></span></a>
								<a title="delete"><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></span></a>
							</td>
						</tr>
					</table>
				</div>
				<!-- xong panel-body -->
			</div>
		</div>
	</div><!--/.row-->	

	<div class="row" align="right" style="margin-right: 5px;">
		<nav aria-label="Page navigation">
			<ul class="pagination phantrang">
				<li>
					<a href="" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				<li><a href="#" class="active">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">6</a></li>
				<li>
					<a href="" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div><!--/.main-->