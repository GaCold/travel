
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">QUẢN LÝ TÀI KHOẢN</div>
                <div class="panel-body">                        
                    <div class="columns btn-group pull-right" style="margin-bottom: 10px;">
                        <!-- delete button -->
                        <?= $this->Html->link('<i class="glyphicon glyphicon-trash"></i>',[], ['escape'=>false, 'class'=>'btn btn-default', 'type'=>'button', 'name'=>'toggle', 'title'=>'delete', 'data-toggle'=>'modal', 'data-target'=>'#deleteaccount']) ?>
                        <!-- add accounts -->
                        <?= $this->Html->link('<i class="glyphicon glyphicon-plus"></i>', ['action'=>'adminadd'], ['escape'=>false, 'class'=>'btn btn-default', 'title'=>'thêm người dùng']) ?>
                    </div>
                    <!-- search button -->
                    <?= $this->Form->create('admin', ['class'=>'pull-right search']) ?>
                    <?php
                    echo $this->Form->control('keysearch', ['label'=>false, 'placeholder'=>'từ khóa tìm kiếm', 'class'=>'form-control']);
                    ?>
                    <?= $this->Form->end() ?>
                    <!-- data table -->
                    <table class="table table-striped" id="data-table">
                        <thead>
                            <tr>
                                <th scope="col"><a id="checkall">Check all</a></th>
                                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('sex') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <?php foreach ($accounts as $account): ?>
                            <tr>
                                <td><input type="checkbox" value="<?= h($account->account_id) ?>"></td>
                                <td><?= h($account->fullname) ?></td>
                                <td><?= h($gender[$this->Number->format($account->sex)]) ?></td>
                                
                                
                                <td><?= h($account->role->name) ?></td>
                                
                              
                               
                                <td><?= h($account->email) ?></td>
                                <td><?= h($account->address) ?></td>
                                <td class="actions">
                                    <a href="<?= $this->Url->build(['action' => 'adminview', $account->account_id]) ?>" target="_blank" title="Edit">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </a>
                                    <a href="<?= $this->Url->build(['action' => 'adminedit', $account->account_id]) ?>" target="_blank" title="Edit">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <a href="<?= $this->Url->build(['action' => 'admindelete', $account->account_id]) ?>" target="_blank" title="Block">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </a>
                                    <a href="<?= $this->Url->build(['action' => 'admindelete', $account->account_id]) ?>" target="_blank" title="Unblock">
                                        <i class="glyphicon glyphicon-lock" ></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <!-- xong panel-body -->
            </div>
        </div>
    </div>
</div>