<!-- div footer -->
<div class="row">
<footer>
	<div class="row footer">
		<div class="col-sm-8 col-sm-offset-2 iconfooter">
			<ul>
				<li class="facefooter"><a><i class="fa fa-facebook " aria-hidden="true" ></i></a></li>
				<li class="googlefooter"><a><i class="fa fa-google " aria-hidden="true" ></i></a></li>
				<li class="twitterfooter"><a><i class="fa fa-twitter" aria-hidden="true" ></i></a></li>
				<li class="youtubefooter"><a><i class="fa fa-youtube " aria-hidden="true" ></i></a></li>
			</ul>
		</div>
		<div class="col-sm-8 col-sm-offset-2 byfooter">
			<strong>Copyright © Travel Name 2017 Terms</strong>
		</div>
		<div id="mySidenav" class="sidenav" data-toggle="modal" data-target="#myModal">
			<a id="login">Login<i class="fa fa-sign-in"  aria-hidden="true" style="margin-left: 15px;"></i></a>
		</div>
		<a title="Go to top" class="btn-top"><i class="fa fa-angle-double-up"></i></a>
	</div>
</footer>
</div>
<!-- end div footer -->

<?= $this->element('User/signin') ?>
<?= $this->element('User/forgotpass') ?>
<?= $this->Html->script('btnlogin.js') ?>
<?= $this->Html->script('startwow.js') ?>