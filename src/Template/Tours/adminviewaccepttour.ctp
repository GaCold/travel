<?= $this->element('deletemodal') ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span>TTQ</span>Admin</a>
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
            <!-- refresh button -->
            <button class="btn btn-default" type="button" name="refresh" title="Refresh">
              <i class="glyphicon glyphicon-refresh icon-refresh"></i>
            </button>
            <!-- delete button -->
            <button class="btn btn-default" type="button" name="toggle" title="Delete">
              <i class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#deleteModal"></i>
            </button>
          </div>
          <!-- search button -->
          <div class="pull-right search"><input class="form-control" type="text" placeholder="Search"></div>
          <!-- data table -->
          <table class="table table-striped" id="data-table">
            <!-- header -->
            <tr>
              <th width="200px">ID</th>
              <td class="no-edit">1</td>
            </tr>
            <!-- dòng 1 -->
            <tr>
             <th>Tên Tour</th>                
             <td class="no-edit">Cần Thơ</td>
           </tr>
           <tr>
            <th>Điểm Đến</th>
            <td class="no-edit">
             <table class="table table-bordered" id="data-table">
              <tr>
                <td>ID</td>
                <td>Điểm Đến</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Bến Ninh Kiều</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Nhà cổ Bình Thủy</td>
              </tr>
            </table>
          </td>
        </td>
      </tr>
      <tr>
        <th>Giá</th>
        <td class="no-edit">900.000</td>
      </tr>
      <tr>
        <th>Mô Tả</th>
        <td class="no-edit">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis.</td>
      </tr>
      <tr>
       <th>Người Tạo</th>
       <td class="no-edit">Tam Nguyen</td>
     </tr>
     <tr>
       <th>Ngày Tạo</th>
       <td class="no-edit">7/6/2017</td>
     </tr>
     <tr>
       <th>Ngày Cập Nhật</th>
       <td class="no-edit">17/6/2017</td>
     </tr>
     <tr>
      <th>Người Cập Nhập</th>
      <td class="no-edit">Admin</td>
    </tr>
  </table>

</div>
<!-- xong panel-body -->
</div>
<!-- xong div panel -->
</div>
<!-- xong div col-md-12 -->
</div>
<!--/.row--> 
</div>

</div><!--/.main-->