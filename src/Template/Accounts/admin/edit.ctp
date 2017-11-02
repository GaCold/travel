<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" > 
    <div class="row" >
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">CẬP NHẬT THÔNG TIN TÀI KHOẢN</div>
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
                    <form method="post" accept="<?= $this->view ?>"></form>
                    <table class="table table-striped" id="data-table" style="border:1px solid whitesmoke">
                        <tr>
                            <th scope="row">Id</th>
                            <td><input class="form-control" value="<?= $this->Number->format($account->account_id) ?>" name="account_id" disabled></input></td>
                        </tr>
                        <tr>
                            <th scope="row">Họ</th>
                            <td><input class="form-control" type="text" name="firstname" value="<?= h($account->firstname) ?>"></td>
                        </tr>
                        <tr>
                            <th scope="row">Tên</th>
                            <td><input class="form-control" type="text" name="Lastname" value="<?= h($account->lastname) ?>"></td>
                        </tr>
            <!--++++++++++++++++++++++++++++++++++++++++++++++-->
            <!--+++++++++++++++ Account roles ++++++++++++++++-->
            <!--++++++++++++++++++++++++++++++++++++++++++++++-->
                        <tr>
                            <th scope="row"><?= __('Role') ?></th>
                            <td>
                                <div class="col-sm-3 col-md-3" style="padding: 0px;">
                                    <select class="form-control">
                                        <?php  
                                        foreach ($role_count as $_role):
                                            if($account->role_id == $_role['role_id'])
                                                echo "<option selected='selected' value=".$_role['role_id'].">".$_role['name']."</option>";
                                            else
                                                echo "<option value=".$_role['role_id'].">".$_role['name']."</option>";
                                        endforeach;
                                        ?>
                                    </select>  
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><input class="form-control" type="text" name="email" value="<?= h($account->email) ?>" disabled="true"></input></td>
                        </tr>
                        <tr>
                            <th scope="row">CMND</th>
                            <td><input class="form-control" type="text" name="Card" value="<?= h($account->card) ?>"></td>
                        </tr>
                        <tr>
                            <th scope="row">Số điện thoại</th>
                            <td><input class="form-control" type="text" name="phone" value="<?= h($account->phone) ?>"></input></td>
                        </tr>
                        <tr>
                            <th scope="row">Mật khẩu</th>
                            <td><input class="form-control" name="password" type="text" value="<?= h($account->password) ?>"></input></td>
                        </tr>
                        <tr>
                            <th scope="row">Địa chỉ</th>
                            <td><input class="form-control" name="address" type="text" value="<?= h($account->address) ?>"></input></td>
                        </tr>
            <!--++++++++++++++++++++++++++++++++++++++++++++++-->
            <!--+++++++++++++++ Account sex ++++++++++++++++++-->
            <!--++++++++++++++++++++++++++++++++++++++++++++++-->
                        <tr>
                            <th scope="row">Giới tính</th>
                            <td>
                                <div class="col-sm-3 col-md-3" style="padding: 0px;">
                                    <select class="form-control" name="sex" id="sex">
                                        <?php 
                                        for ($i=0; $i < 3; $i++):
                                            if($i == $account->account_sex)
                                                echo "<option selected='selected' value".$i.">".($gender[$i])."</option>";
                                            else
                                            echo "<option value".$i.">".($gender[$i])."</option>";
                                        endfor;
                                        ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
            <!--++++++++++++++++++++++++++++++++++++++++++++++-->
            <!--+++++++++++++++ Account birthday +++++++++++++-->
            <!--++++++++++++++++++++++++++++++++++++++++++++++-->
                        <tr>
                            <th scope="row">Ngày sinh</th>
                            <td>
                                <div class="row">
                                    <div class="col-sm-3">
                                    <span>ngày</span>
                                        <select class="form-control">
                                            <?php
                                                for ($i=1; $i <= 31; $i++) { 
                                                    if($account->birthday->day == $i)
                                                        echo "<option selected='selected' value=".$i.">".$i."</option>";
                                                    else
                                                        echo "<option value=".$i.">".$i."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>tháng</span>
                                        <select class="form-control">
                                            <?php
                                                for ($i=1; $i <= 12; $i++) { 
                                                    if($account->birthday->month == $i)
                                                        echo "<option selected='selected' value=".$i.">".$i."</option>";
                                                    else
                                                        echo "<option value=".$i.">".$i."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                    <span>năm</span>
                                        <select class="form-control">
                                            <?php
                                                $now =  getdate();
                                                for ($i= $now['year'] - 80; $i <= $now['year'] -15; $i++) { 
                                                    if($account->birthday->year == $i)
                                                        echo "<option selected='selected' value=".$i.">".$i."</option>";
                                                    else
                                                        echo "<option value=".$i.">".$i."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
            <!--++++++++++++++++++++++++++++++++++++++++++++++-->
            <!--+++++++++++++++ Account status +++++++++++++++-->
            <!--++++++++++++++++++++++++++++++++++++++++++++++-->
                        <tr>
                            <th scope="row">Trạng thái</th>
                            <td>
                                <div class="col-sm-3 col-md-3"  style="padding: 0px">
                                    <select class="form-control">
                                        <?php 
                                        for ($i=0; $i < 2; $i++):
                                            if($i == 0 && $account->account_status)
                                                echo "<option selected='selected' value='1'>".__('Hoạt động')."</option>";
                                            elseif ($i == 0 && $account->account_status == false)
                                                echo "<option selected='selected' value='0'>".__('Ngừng hoạt động')."</option>";
                                            if($i == 1 && $account->account_status)
                                                echo "<option  value='0'>".__('Ngừng hoạt động')."</option>";
                                            elseif ($i == 1 && $account->account_status == false)
                                                echo "<option value='1'>".__('Hoạt động')."</option>";
                                        endfor;
                                        ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <button type="submit" class="btn btn-save addaccount" style="float: right;">Thêm</button>
                </div>
                <!-- xong panel-body -->
            </div>
        </div>
    </div>
</div>

