<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">     
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?= $this->url->build(['controller'=>'Statistics', 'action'=>'index']) ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active"><a href="<?= $this->url->build(['action'=>'index']) ?>">Quản lý quyền truy cập</a></li>
        </ol>
    </div><!--/.row-->  


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">SỬA QUYỀN TRUY CẬP</div>
                <div class="panel-body">                        
                    <!-- data table -->
                    <form method="post" action="<?= $this->url->build(['action'=>'edit', $role->role_id]) ?>">
                        <fieldset>
                        <div class="form-group">
                            <label>Role ID</label>
                            <input class="form-control" disabled="true" type="text" name="role_id" value="<?= h($role->role_id) ?>">
                            <label>Role Name</label>
                            <input class="form-control" type="text" name="name" value="<?= h($role->name) ?>"></input>
                        </div>
                        </fieldset>
                        <button type="submit" class="btn btn-save">Lưu lại</button>
                    </form>  
                </div> 
                <!-- xong panel-body -->
            </div>
        </div>
    </div><!--/.row-->  

    
</div><!--/.main-->
