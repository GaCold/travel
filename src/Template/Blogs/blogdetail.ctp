
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<div class="row detail-blog">
			<div class="col-sm-8" style=" padding-bottom: 50px; padding-top: 50px;">
				<div class="row blog-name" style="padding:20px;">
					<h4 style="float: left; margin:0px"><b>STANDARD BLOG FORMAT</b></h4>
					<p style="float: right;">GaCold 7/6/2017</p>
				</div>
				<div class="row">
					<img src="<?= $this->Url->image('slide-07.jpg') ?>" class="img-responsive" width="100%" style="margin-bottom: 15px;">
				</div>
				<div class="row">
					<p>
						Doloremque laudantium, totam rem. Aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta. sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
						Doloremque laudantium, totam rem. Aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta. sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
						Doloremque laudantium, totam rem. Aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta. sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
					</p>
					<p>
						Doloremque laudantium, totam rem. Aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta. sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
					</p>
					<p>
						Accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
					</p>
				</div>
				<div class="comment-blog">
					<!-- khách đánh giá -->
					<h4 style="padding-left: 30px;">4 Bình luận</h4>
					<?php  for ($i=0; $i < 4; $i++) { ?> 
					<!-- khách 1 -->
					<div class="col-md-12">
						<div class="col-md-2">
							<img src="<?= $this->Url->image('slide-07.jpg') ?>" width="80px" height="80px" class="img-circle">
						</div>
						<div class="col-md-7">
							<label>NaEun</label><br/>
							<font>
								Posted at 17:33h, 06 December
								<a class="view-more" id="reply"><span>   Trả lời</span></a>
							</font>
							<p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
							<div class="col-sm-10 col-sm-offset-1 content-comment-reply">
								<p>aaaaaaa</p>
							</div>
							<div class="col-md-12">
								<input class="form-control " id="reply-comment" rows="1" placeholder="Comment">
							</div>	
						</div>
						<div class="col-md-3">
							<i class="fa fa-star star" aria-hidden="true" ></i>
							<i class="fa fa-star star" aria-hidden="true" ></i>
							<i class="fa fa-star star" aria-hidden="true" ></i>
							<i class="fa fa-star star" aria-hidden="true" ></i>
							<i class="fa fa-star star" aria-hidden="true" ></i>
							<label>4.0/5.0</label><br/>
							<font>Tốt</font>
						</div>
					</div>	
					<!-- xong khách 1 -->
					<hr width="0%"/>
					<?php } ?>
					<div class="col-md-10 col-md-offset-1">
						<textarea class="form-control" rows="1" placeholder="Comment"></textarea>
						<a href="" class="btn btn-see-all-blog" style="margin-top:10px">Bình luận</a>
					</div>						
				</div>
			</div>
			<!-- cot ben phai chua phan goi y -->
			<div class="col-sm-4 wapper-goiy">
				<div class="col-sm-12">
					<div class="row">
						<div class="titlegoiy">
							<h4>Bài viết liên quan <a href="<?= $this->Url->build('/Blogs/uiblog/', true)?> "><i class="fa fa-plus insertblog" aria-hidden="true" ></i></a></h4>
						</div>
					</div>
					<?php  for ($i=0; $i < 4; $i++) {  ?>
					<div class="row boder-blog-goiy" >
						<div class="col-sm-6" style="padding-left:0px ">
							<img src="<?= $this->Url->image('slide-06.jpg') ?>" class="img-responsive">
							<p style="text-align: center; padding: 10px">posted: 07/07/2017</p>
						</div>
						<div class="col-sm-6 abstract-goiy">
							<p><b>Tên bài viết</b></p>
							<p>A help laudantium totam rem aperiam, eaque ipsa quae ab illo inventore....</p>
							<p style="text-align: center; padding: 10px">tác giả: GaCold</p>
						</div>
						<hr>
					</div>

					<?php } ?>
					<div class="row" style="text-align: center;">
					 <a href= "<?= $this->Url->build('/Blogs/uiblog/', true)?>" class="btn-see-all-blog">Đăng bài viết mới</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('#reply').click(function(){
		$('#reply-comment').fadeToggle('slow');
	});
</script>