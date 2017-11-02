<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 container-signup">
            <h1 class="entry-title"><span>Đăng ký tài khoản</span> </h1>
            <hr>
            <!-- form Sign Up -->
            <form class="form-hor" method="post" name="signup" id="signup" enctype="multipart/form-data" > 
                <!-- div-user-email-pass-fullname -->  
                <!-- ten hien thi trong he thong -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Tên đăng nhập <span class="text-danger">*</span> </label>
                    <div class="col-md-8 col-sm-9">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="Username" id="Username" value="" placeholder="Tên đăng nhập của bạn">

                        </div>  
                    </div>
                </div> 
                <!-- end ten hien thi trong he thong -->
                <!-- email -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Email <span class="text-danger">*</span></label>
                    <div class="col-md-8 col-sm-9">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i>
                            </span>
                            <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Nhập địa chỉ email của bạn" value="">
                        </div>
                        <small> Your Email Id is being used for ensuring the security of your account, authorization and access recovery. </small> </div>
                    </div>
                    <!-- end email -->
                    <!-- Set Pass -->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Mật khẩu <span class="text-danger">*</span></label>
                        <div class="col-md-8 col-sm-9">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" class="form-control" name="password" id="password"s value="">
                            </div>   
                        </div>
                    </div>
                    <!-- end Set Pass -->
                    <!-- Confirm Pass -->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Nhập lại mật khẩu <span class="text-danger">*</span></label>
                        <div class="col-md-8 col-sm-9">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" class="form-control" name="cpassword" id="cpassword"  value="">
                            </div>  
                        </div>
                    </div>
                    <!-- end Confirm Pass -->

                    <!-- full name -->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Tên <span class="text-danger">*</span></label>
                        <div class="col-md-8 col-sm-9">
                            <input type="text" class="form-control" name="mem_name" id="mem_name"  value="">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-sm-3">Họ </label>
                        <div class="col-md-8 col-sm-9">
                            <input type="text" class="form-control" name="mem_name" id="mem_name"  value="">
                        </div>
                    </div>
                    <!-- end full name -->

                    <!-- end div-user-email-pass-fullname -->

                    <!-- Gender -->
                    <div class="form-group">
                     <label class="control-label col-sm-3">Giới tính <span class="text-danger">*</span></label>
                     <div class="col-md-8 col-sm-9">
                         <label>
                            <input name="gender" type="radio" value="Male" checked>
                            Male 
                        </label>                         
                        <label>
                            <input name="gender" type="radio" value="Female" >
                            Female 
                        </label>
                    </div>
                </div>
                <!-- end Gender -->
                <!-- Date of Birth -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Ngày sinh <span class="text-danger">*</span></label>
                    <div class="col-md-5 col-sm-8">
                        <!-- ngay thang nam -->
                        <div class="form-group">
                            <label>
                                <select name="dd" class="form-control">
                                    <option value="">Ngày</option>
                                    <?php for ($i=0; $i < 31; $i++) { ?>
                                    <option value="<?= $i+1 ?>"><?=  $i+1; ?></option>
                                    <?php  } ?>
                                </select>
                            </label>
                            <label>
                                <select name="mm" class="form-control">
                                    <option value="">Tháng</option>
                                    <?php for($i=0; $i < 12; $i++) { ?>
                                    <option value="<?= $i+1 ?>"><?= $i+1; ?></option>
                                    <?php } ?>               
                                </select>
                            </label>
                            <label>
                                <select name="yyyy" class="form-control">
                                    <option value="0">Năm</option>
                                    <?php 
                                        $now = getdate();
                                        for($i=1960; $i < $now['year']-10; $i++) {  ?>
                                        <option value=""><?= $i; ?></option>
                                    <?php } ?>            
                                </select>
                            </label>
                        </div>
                        <!-- ngay thang nam -->
                    </div>
                </div>
                <!--end div Date of Birth -->

                <!-- Level -->
                <div class="form-group">

                    <!--end Level  -->

                    <!-- Phone Number -->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Số điện thoại <span class="text-danger">*</span> </label>
                        <div class="col-md-8 col-sm-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="+084...." value="">
                            </div>  
                        </div>
                    </div>  
                    <!-- end Phone Number -->
                    <!-- hinh anh -->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Ảnh đại diện</label>
                            <div class="col-md-8 col-sm-8">
                                <div class="input-group"> <span class="input-group-addon" id="file_upload"><i class="glyphicon glyphicon-upload"></i></span>
                                 <input type="file" name="file_nm" id="file_nm" class="form-control upload" placeholder="" aria-describedby="file_upload">
                             </div>
                         </div>
                     </div>
                     <!-- end hinh anh -->
                     <!-- nut Sign Up va Reset -->
                     <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-10">
                            <p><a href="" class="btn btn-see-all-blog">Đăng ký</a> <a href="" class="btn btn-see-all-blog">Reset</a></p>
                        </div>
                    </div>
                    <!-- end nut Sign Up va Reset -->
                </form>
                <!-- end form Sign Up -->
            </div>
        </div>
    </div>
