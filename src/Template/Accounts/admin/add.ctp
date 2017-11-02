<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" > 
    <div class="row" >
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">THÊM NGƯỜI DÙNG</div>
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
                    <form method="post" acction="<?= $this->url->build(['action'=>'adminadd'])?>">
                    <?= $this->Form->create('Accounts') ?>
                    <table class="table table-striped" id="data-table" style="border:1px solid whitesmoke">
                        <tr>
                            <th scope="row">Id</th>
                            <td><input class="form-control" value="<?= h($max_account_id) ?>" name="account_id" disabled></input></td>
                        </tr>
                        <tr>
                            <th scope="row">Họ</th>
                            <td><input class="form-control" type="text" name="firstname" ></td>
                        </tr>
                        <tr>
                            <th scope="row">Tên</th>
                            <td><input class="form-control" type="text" name="lastname" ></td>
                        </tr>
                        <!--++++++++++++++++++++++++++++++++++++++++++++++-->
                        <!--+++++++++++++++ Account roles ++++++++++++++++-->
                        <!--++++++++++++++++++++++++++++++++++++++++++++++-->
                        <tr>
                            <th scope="row"><?= __('Role') ?></th>
                            <td>
                                <div class="col-sm-3 col-md-3" style="padding: 0px;">
                                    <select class="form-control" name="role_id">
                                        <?php  
                                        foreach ($role_count as $_role):
                                            echo "<option value=".$_role['role_id'].">".$_role['name']."</option>";
                                        endforeach;
                                        ?>
                                    </select>  
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>
                                <input class="form-control" type="email" name="email" placeholder="thonyanderosonan@gmail.com"></input>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">CMND</th>
                            <td>
                                <input class="form-control" type="text" name="card" placeholder="371752271">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Số điện thoại</th>
                            <td>
                                <input class="form-control" type="text" name="phone" placeholder="01234567890"></input>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Mật khẩu</th>
                            <td><input class="form-control" name="password" type="password"></input></td>
                        </tr>
                        <tr>
                            <th scope="row">Địa chỉ</th>
                            <td><input class="form-control" name="address" type="text"></input></td>
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
                                            echo "<option value=".$i.">".($gender[$i])."</option>";
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
                                        <select class="form-control" name="birthday[day]">
                                            <?php
                                            for ($i=1; $i <= 31; $i++) {
                                                echo "<option value=".$i.">".$i."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>tháng</span>
                                        <select class="form-control" name="birthday[month]">
                                            <?php
                                            for ($i=1; $i <= 12; $i++) { 
                                                echo "<option value=".$i.">".$i."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <span>năm</span>
                                        <select class="form-control" name="birthday[year]">
                                            <?php
                                            $now =  getdate();
                                            for ($i= $now['year'] - 80; $i <= $now['year'] -15; $i++) {
                                                echo "<option value=".$i.">".$i."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        
                    </table>
                    <?= $this->Form->button('Luu lai', ['class'=>'btn-save']) ?>
                <?= $this->Form->end() ?>
                </div>
                <!-- xong pane-body -->
            </div>
        </div>
    </div>
</div>

