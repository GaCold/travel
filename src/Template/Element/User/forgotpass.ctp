
<!-- Modal -->
<div class="modal fade" id="myModalforget" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<!-- Modal-header -->
			<div class="modal-header">
				<button type="button" class="close btnclose"  data-dismiss="modal">&times;</button>
				<h2 >Forgot your Password</h2>
			</div>
			<!-- Modal-header  -->

			<!-- modal-body -->
			<div class="modal-body">
				<!-- phan forgot pass -->
				<div class="container login">

					<form action="/action_page.php" >
						<p class="copy-body">Enter your email address and we will send you the instructions to reset your password.</p>
						<div class="form-group">
							<i class="fa fa-envelope-o" aria-hidden="true"></i><label for="email">Email:</label>
							<input type="email" class="form-control" id="email"  placeholder="Enter your email" name="email">
						</div>              

						<div class="btn-sub"> <button type="submit" class="btn btn-default btnsignin" >Send</button>          
						</div>                             
					</form>

					<!-- end phan forgot pass -->

				</div>
				<!-- end Modal-body -->

				<!-- Modal-footer-->

				<div class="modal-footer">
					<h4>Welcome to our Website</h4>
				</div>
				<!-- end Modal-footer -->
			</div>
			<!-- end Modal-content -->
		</div>
	</div>
	<!-- end Modal -->
</div>
<script type="text/javascript">
	// $('#myModalforget').dialog();
	$('.btnclose').click(function(){
		$('#myModal').fadeIn();
	});

	$("#myModalforget").modal({
        show: false,
        backdrop: 'static'
    });
</script>