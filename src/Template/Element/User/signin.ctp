

<!-- Modal  -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <!-- Modal-header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2>Đăng nhập với email</h2>
            </div>
            <!-- Modal-header -->

            <!-- modal-body -->
            <div class="modal-body">
                <!-- phan dang nhap -->
                <div class="container login">

                    <form action="" >
                        <div class="form-group">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i><label for="email">Email:</label>
                            <input type="email" class="form-control" id="email"  placeholder="Nhập email của bạn" name="email">
                        </div>

                        <div class="form-group">
                            <i class="fa fa-key" aria-hidden="true"></i><label for="pwd">Mật khẩu:</label>
                            <input type="password" class="form-control" id="pwd"  placeholder="Nhập mật khẩu của bạn" name="pwd">
                        </div>

                        <div class="checkbox">
                            <label ><input type="checkbox"  name="remember" >Nhớ mật khẩu</label>
                        </div>
                        <div class="btn-sub"> <button type="submit" class="btn btn-default btnsignin">Đăng nhập</button>
                            <a class="forgot-pass" data-toggle="modal" data-target="#myModalforget">Quên mật khẩu</a>
                        </div>



                        <div class="btn-icon">
                            <h4>Đăng nhập với tài khoản mạng xã hội</h4>
                            <div class="twi"><button type="submit" class="twitterlogin"  ><a class="social" href="http://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></button>

                                <button type="submit" class="googlelogin" ><a class="social" href="https://plus.google.com" ><i class="fa fa-google-plus" aria-hidden="true"></i></a></button>

                                <button type="submit" class="facebooklogin" ><a class="social"  href="https://facebook.com" ><i class="fa fa-facebook" aria-hidden="true"></i> </a></button>

                                <div class="centered-footer"><p class="copy-body">Bạn đã có tài khoản chưa? <a class="
                                    sign-up" href="<?=  $this->Url->build('/Signup/', true) ?>" >Tạo tài khoản</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end phan dang nhap -->
            </div>
            <!-- end Modal-body -->

            <!-- Modal-footer-->
            <div class="modal-footer">
                <h4>Chào mừng bạn đến với website của chúng tôi</h4>
            </div>
            <!-- end Modal-footer -->
        </div>
        <!-- end Modal-content -->
    </div>
    <!-- end Modal -->
</div>
<script type="text/javascript">
    $('.forgot-pass').click(function(){
        $('#myModal').fadeOut();
    });

    $('.btnclose').click(function(){
        $('#myModal').fadeIn('slow');
    });

    $("#myModal").modal({
        show: false,
        backdrop: 'static'
    });
</script>