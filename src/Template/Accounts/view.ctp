
<?= $this->element('profile/report') ?>
<div>
 <!-- menu left -->
 <div class="col-sm-3">
    <nav class="navbar navbar-inverse sidebar bg-navbar" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="<?= $this->url->image('about-01.jpg') ?>" class="navbar-band img-responsive img-circle" style="width :70px; height:70px; text-align: center; margin-left: 60px;">
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav" >
                    <li data-toggle="modal" data-target="#report" >
                        <a>Thông báo mới<span class="pull-right hidden-xs showopacity glyphicon glyphicon-bell"></span></a>
                    </li>
                    <li>
                        <a href="#">Cập nhật hồ sơ<span class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                    </li>
                    <li>
                        <a href="#">Đổi mật khẩu<span  class="pull-right hidden-xs showopacity fa fa-lock" aria-hidden="true"></span></a>
                    </li>
                    <li>
                        <a href="#">Bài viết của bạn<span class="pull-right hidden-xs showopacity fa fa-book" aria-hidden="true"></span></a>
                    </li>
                    <li>
                        <a href="#">Xóa bài viết<span class="pull-right hidden-xs showopacity glyphicon glyphicon-trash"></span></a>
                    </li>
                    
                    <li>
                        <a href="#">Tour đã tạo<span  class="pull-right hidden-xs showopacity glyphicon glyphicon-briefcase"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- end menu left -->

<!-- div content -->
<div class="col-sm-9 main">

    <!-- div edit profile -->
    <div class="col-sm-12 edit editprofile">
        <h3>Cập nhật thông tin tài khoản</h3>
        <hr>
        <form method="POST">
            <div class="row" style="margin-bottom: 10px">
                <div class="form-group" style="display: none">
                    <div class="col-sm-3">
                        <p>Id <span style="color: red">*</span></p>
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control" id="id" name="id" value="<?= h($account->account_id) ?>" ></input>
                    </div>
                </div>
                <div class="form-group" >
                    <div class="col-sm-3">
                        <p>Họ <span style="color: red">*</span></p>
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control" id="firstname" name="firstname" value="<?= h($account->firstname) ?>"></input>
                    </div>
                </div>
            </div>
            <div class="row"  style="margin-bottom: 10px">
                <div class="form-group" >
                    <div class="col-sm-3">
                        <p>Tên <span style="color: red">*</span></p>
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control" name="lastname" value="<?= h($account->lastname) ?>" id="lastname"></input>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 10px">
                <div class="form-group" >
                    <div class="col-sm-3">
                        <p>Email <span style="color: red">*</span></p>
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control" id="email" name="email" value="<?= h($account->email) ?>" disabled="true"></input>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 10px">
                <div class="form-group" >
                    <div class="col-sm-3">
                        <p>Số điện thoại </p>
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control" id="phone" name="phone" value="<?= h($account->phone) ?>"></input>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 10px">
                <div class="form-group" >
                    <div class="col-sm-3">
                        <p>CMND </p>
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control" id="card" name="card" value="<?= h($account->card) ?>"></input>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 10px">
                <div class="form-group">
                    <div class="col-sm-3">
                        <p>Ngày sinh </p>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <select class="form-control" id="account_date">
                            <?php  for ($i=1; $i <= 31; $i++): 
                            if($i == $account->birthday->day)
                                echo "<option selected='selected' value".$i.">".$i."</option>";
                            else
                                echo "<option value".$i.">".$i."</option>";

                            endfor;?>
                        </select>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <select class="form-control col-md-2" name="account_month" id="account_month">
                            <?php  for ($i=1; $i <= 12; $i++): 
                            if($i == $account->birthday->month)
                                echo "<option selected='selected' value".$i.">".$i."</option>";
                            else
                                echo "<option value".$i.">".$i."</option>";

                            endfor;?>
                        </select>
                    </div>
                    <div class="col-sm-3 col-md-2 input date">
                        <select class="form-control col-md-2" name='account_year' id="account_year">
                            <?php
                            $now = getdate();
                            for ($i = 1965; $i < $now['year']; $i++): 
                                if($i == $account->birthday->year)
                                    echo "<option selected='selected' value".$i.">".$i."</option>";
                                else
                                    echo "<option value".$i.">".$i."</option>";

                            endfor; ?>
                        </select>
                    </div>
                </div>        
            </div>
            <div class="row" style="margin-bottom: 10px">
                <div class="form-group" >
                    <div class="col-sm-3">
                        <p>Giới tính </p>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <select class="form-control" name="sex" id="sex">
                            <?php 
                                for ($i=0; $i < 3; $i++):
                                    if($i == $account->sex)
                                        echo "<option selected='selected' value=".$i.">".$gender[$i]."</option>";
                                    else
                                        echo "<option value=".$i.">".$gender[$i]."</option>";
                                endfor;
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 10px">
                <div class="form-group" >
                    <div class="col-sm-3">
                        <p>Địa chỉ </p>
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control" id="address" name="address" value="<?= $account->address ?>"></input>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 10px">
                <div class="form-group" >
                    <div class="col-sm-3">
                        <p>Quyền truy cập <span style="color:red">*</span></p>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <input class="form-control" disabled="true" placeholder="<?= $account->role->name ?>" ></input>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 10px">
                <div class="form-group" >
                    <div class="col-sm-3">
                        <p>Cập nhật ảnh </p>
                    </div>
                    <div class="col-sm-9">
                        <div class="input-group"> 
                            <span class="input-group-addon"><i class="glyphicon glyphicon-upload"></i></span>
                            <input type="file" name="imgname" class="form-control upload" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-md-2 col-sm-offset-3">
                    <button class="btn btn-see-all-blog" type="submit" id="editprofile">LƯU</button>
                </div>
            </div>
        </form>
    </div>
    <!-- end div edit profile -->

    <!-- div edit password -->
    <div class="col-sm-12 edit edit-password">
        <h3>Cập nhật lại mật khẩu</h3>
        <hr>
        <div class="row">
            <div class="form-group" style="height: 30px">
                <div class="col-sm-4 col-md-3" style="line-height: 30px">
                    <p>Mật khẩu hiện tại <span style="color: red">*</span></p>
                </div>
                <div class="col-sm-8 col-md-9">
                    <input class="form-control" type="password" name="password">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group" style="height: 30px">
                <div class="col-sm-4 col-md-3" style="line-height: 30px">
                    <p>Mật khẩu mới <span style="color: red">*</span></p>
                </div>
                <div class="col-sm-8 col-md-9">
                    <input class="form-control" type="password" name="newpassword">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group" style="height: 30px">
                <div class="col-sm-4 col-md-3" style="line-height: 30px">
                    <p>Nhập lại mật khẩu mới <span style="color: red">*</span></p>
                </div>
                <div class="col-sm-8 col-md-9">
                    <input class="form-control" type="password" name="configpassword">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-md-5 col-md-offset-3 col-sm-offset-4">
                <span class="btn btn-see-all-blog">LƯU</span>
                <span class="btn btn-see-all-blog">QUÊN</span>
            </div>
        </div>
    </div>
    <!-- end div edit pasword -->

    <!-- div edit user blog -->
    <div class="edit-userblog">
        <!-- div user blog new-->
        <div class="col-sm-12 edit" >
            <h3>Bài viết của User</h3>
            <hr>
            <div class=" container-blog" style="padding-top: 50px; padding-bottom: 50px;">
                <div class="row">
                    <?php  for ($i=0; $i < 6 ; $i++) { ?>
                    <div class="col-sm-6 col-md-4 animate-box wow fadeInUp"  style="margin-bottom: 30px;">
                        <div class="wrapper" style="background: white;">
                            <div class="img-tour">
                                <a href=""><img src="<?= $this->Url->image('masonry.jpg') ?>" alt="Free" class="img-responsive" width="100%"></a>
                            </div>
                            <div class="row detail-tour" style=" padding: 15px;">
                                <p><strong>GALLERY POST FORMAT</strong></p>
                                <p>Doloremque laudantium, totam rem. Aperiam, eaque ipsa quae ab illo inventore veritatis .....</p>
                                <p>     
                                    <a href= "<?= $this->Url->build('/Blogs/blogdetail', true); ?>" class="view-more" >Xem thêm
                                    </a>
                                    <a href= "<?= $this->Url->build('/Blogs/blogdetail', true); ?>" class="view-more">Xóa</a>
                                    <a href= "<?= $this->Url->build('/Blogs/blogdetail', true); ?>" class="view-more">Xóa nhiều</a>
                                </p>

                                <p>04 March, 2013 / 2 Comments</p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row blog-loadmore wow fadeInUp">
                    <a class="btn btn-see-all-blog" href="">XEM NHIỀU HƠN <i class="icon fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    <a class="btn btn-see-all-blog" href="">XEM TẤT CẢ <i class="icon fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- end div user blog new -->

        <!-- div user blog waiting -->
        <div class="col-sm-12 edit" >
            <h3>Bài viết của User</h3>
            <hr>
            <div class=" container-blog" style="padding-top: 50px; padding-bottom: 50px;">
                <div class="row">
                    <?php  for ($i=0; $i < 6 ; $i++) { ?>
                    <div class="col-sm-6 col-md-4 animate-box wow fadeInUp"  style="margin-bottom: 30px;">
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
                    <a class="btn btn-see-all-blog" href="">XEM TẤT CẢ <i class="icon fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- end div user blog waiting -->
    </div>
    <!-- end div user blog -->

    <!-- div user tour -->
    <div class="container-tour edit-usertour">

        <div class="col-sm-12 tour-hot edit">
            <h3>Tour đã tạo</h3>
            <hr>
            <div class="row content-tour">
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

        <div class="col-sm-12 tour-hot edit">
            <h3>Tour đang chờ duyệt</h3>
            <hr>
            <div class="row content-tour">
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
    <!-- end user tour -->

</div>
<!-- end div content -->
</div>

<script type="text/javascript">
    $('#editprofile').click(function(){
        
        $.ajax({
            type:"POST",
            url:"<?php echo $this->url->build(['action'=>'edit',$account->account_id]) ?>",
            dataType: "JSON",
            data: {id:$('#firstname').val()},
            success : function(result){

            }

        });

    });
</script>