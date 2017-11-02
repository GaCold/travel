<div class="row">
	<div class="col-sm-10 col-sm-offset-1 content-uiblog">
		<div class="col-sm-12 col-md-12 wrapper-uiblog">
			<div class="row title-uiblog">
				<h3>THÊM BÀI VIẾT CỦA BẠN</h3>
			</div>
			<div class="col-md-12" style="">
				<div class="col-sm-3" >
					<h4>Tiêu đề bài viết</h4>
				</div>
				<div class="col-sm-9">
					<input type="" name="" class="form-control">
				</div>
			</div>

			<div class="col-md-12 img-uiblog" >
				<div class="col-sm-3" >
					<h4>Hình ảnh cho bài viết</h4>
				</div>
				<div class="col-sm-9">
					<input type="file" name="pic" accept="image/*" class=" form-control" >
				</div>
			</div>
			
			<div class="col-md-12 content-ui">
				<div class="col-sm-3" >
					<h4>Nội dung bài viết</h4>
				</div>
				<div class="col-sm-9">
					<textarea rows="18" class="form-control" id="editorblog" style="top:70px"></textarea>
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="col-sm-4 col-sm-offset-3 submit-uiblog" style="padding-left: 15px;">
					<a href="" class="btn btn-see-all-blog">Đăng bài</a>
				</div>
			</div>
			<img src="../../../ckfinder/userfiles/images/hinh-nen-may-tinh-girl-xinh-full-hd-dep-nhat-1-1024x640.jpg">

		</div>
	</div>
</div>

<script type="text/javascript">
	CKEDITOR.replace("editorblog",{
		filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
		filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&currentFolder=/archive/',
		filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&currentFolder=/cars/'
	});
</script>