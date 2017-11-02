
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 

    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?= $this->url->build(['controller'=>'Statistics', 'action'=>'index']) ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active"><a href="<?= $this->url->build(['action'=>'index']) ?>">Quản lý quyền truy cập</a></li>
        </ol>
    </div><!--end row menu --> 

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">QUẢN LÝ QUYỀN TRUY CẬP</div>
                <div class="panel-body">                        
                    <div class="columns btn-group pull-right" style="margin-bottom: 10px;">
                        <!-- delete button -->
                        
                        <?=
                        $this->Html->Link('<i class="glyphicon glyphicon-trash"></i>',[], ['escape'=>false, 'class'=>'btn btn-default', 'type'=>'button', 'name'=>'toggle',  'title'=>'Delete', 'data-toggle'=>'modal', 'data-target'=>'#deleterole']) 
                        ?>

                        <!-- add Tours -->
                        <?=  $this->Html->link('<i class="glyphicon glyphicon-plus"></i>', ['action'=>'add'], ['escape'=>false, 'class'=>'btn btn-default'])
                        ?>
                    </div>
                    <!-- search button -->
                    <?= $this->Form->create('Roles', ['class'=>'pull-right search']) ?>
                    <?php
                    echo $this->Form->control('keysearch', ['label'=>false, 'placeholder'=>'từ khóa tìm kiếm', 'class'=>'form-control col-md-3']);
                    ?>
                    <?= $this->Form->end() ?>
                    

                    <!-- data table -->

                    <table class="table table-striped" id="data-table">
                        <thead>
                            <tr>
                                <th><a id="checkall">Check all</a></th>
                                <th ><?= $this->Paginator->sort('role_id') ?></th>
                                <th ><?= $this->Paginator->sort('name') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                            <?php foreach ($roles as $key => $role): ?>
                                <tr style="background-color: rgb(253, 253, 253);">
                                    <td><input type="checkbox" name="role_id" value="<?= h($role->role_id)?>"></td>
                                    <td><?= h($role->role_id)?></td>
                                    <td><?= h($role->name) ?></td>
                                    <td  class="actions">
                                        <?= $this->Html->link("<i class='glyphicon glyphicon-pencil'></i>", ['action' => 'edit', $role->role_id],  ['escape' => false, 'title' => 'Edit'] ); 
                                        ?>
                                        <?= $this->Form->postLink("<i class='glyphicon glyphicon-trash'></i>", ['action' => 'delete', $role->role_id],  ['escape' => false, 'title' => 'Delete', 'confirm' => 'Bạn có chắc muốn xóa'] ); 
                                        ?>            
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                    </table>

                </div>
                <!-- xong panel-body -->
            </div>
        </div>
    </div><!--/.row-->  
</div><!--/.main-->

<?php echo $this->element('role/modaldelete'); ?>

