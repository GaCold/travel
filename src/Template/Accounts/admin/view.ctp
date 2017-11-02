<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">QUẢN LÝ TÀI KHOẢN</div>
                <div class="panel-body">                        
                    <div class="columns btn-group pull-right" style="margin-bottom: 10px;">
                        <!-- delete button -->
                        <button class="btn btn-default" type="button" name="toggle" title="Delete" data-toggle="modal" data-target="#deleteModal">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                        <!-- add Tours -->
                        <button class="btn btn-default" type="button" name="toggle" title="Thêm Quyền mới" ><i class="glyphicon glyphicon-plus"></i>
                        </button>
                    </div>
                    <!-- search button -->
                    <div class="pull-right search">
                        <input class="form-control" type="text" placeholder="Search">
                    </div>
                    <table class="table table-striped" id="data-table">
                        <tr>
                            <th scope="row">Họ</th>
                            <td><?= h($account->firstname) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tên</th>
                            <td><?= h($account->lastname) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Quyền truy cập</th>
                            <td><?= h($account->role->name) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><?= h($account->email) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">CMND</th>
                            <td><?= h($account->card) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Số điện thoại</th>
                            <td><?= h($account->phone) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Mật khẩu</th>
                            <td><?= h($account->password) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Địa chỉ</th>
                            <td><?= h($account->address) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Giới tính</th>
                            <td><?= $gender[$account->sex] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Ngày sinh</th>
                            <td><?= h($account->birthday) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Trạng thái</th>
                            <td><?= $account->account_status ? __('Đang hoạt động') : __('Ngừng hoạt động'); ?></td>
                        </tr>
                    </table>

                </div>
                <!-- xong panel-body -->
            </div>
        </div>
    </div>
</div>