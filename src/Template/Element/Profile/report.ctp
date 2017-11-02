<div class="container">
    <div class="modal fade" id="report" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thông báo</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="<?= $this->Url->image('masonry.jpg') ?>" class="img-responsive " style="width: 70px; height: 70px">
                        </div>
                        <div class="col-md-10">
                            <h4 style="margin: 0px;color: #ff8521;">Bài viết của bạn đã được duyệt</h4>
                            <p>Doloremque laudantium, totam rem. Aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta. sunt explicabo.....</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="<?= $this->Url->image('masonry.jpg') ?>" class="img-responsive " style="width: 70px; height: 70px">
                        </div>
                        <div class="col-md-10">
                            <h4 style="margin: 0px;color: #ff8521;">Bài viết của bạn có bình luận mới</h4>
                            <p>Doloremque laudantium, totam rem. Aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta. sunt explicabo.....</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="<?= $this->Url->image('masonry.jpg') ?>" class="img-responsive " style="width: 70px; height: 70px">
                        </div>
                        <div class="col-md-10">
                            <h4 style="margin: 0px;color: #ff8521;">Tour bạn tạo đã được phê duyệt</h4>
                            <p>Doloremque laudantium, totam rem. Aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta. sunt explicabo.....</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#report').modal({
        show:false,
        backdrop:'static'
    })
</script>