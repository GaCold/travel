
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="addrolemodal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">THÊM QUYỀN TRUY CẬP</h4>
                </div>
                <div class="modal-body">                       
                    <!-- data table -->
                    <form method="post" action="<?= $this->url->build(['action'=>'add']) ?>">
                        <fieldset>
                            <div class="form-group">
                                <label>Role ID</label>
                                <input class="form-control" type="text" name="role_id" disabled="true" value="<?= h($rolevalue) ?>">
                                <label>Role Name</label>
                                <input class="form-control" type="text" id="role_name" name="role_name"></input>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-save addrole">Lưu lại</button>
                    </form>  
                </div>

            </div>  
        </div>
    </div>
</div>

