<?php

require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if(isset($user) && $user->isLoggedIn()){
	if (hasPerm([2,3],$user->data()->id)){
		header("Location: users/admin.php");
	} else {
		header("Location: app/home.php");
	}
}
?>
<div id="page-wrapper">
	<div class="container">
		<div class="jumbotron">
			<h1 align="center"><?php echo $settings->site_name;?></h1>
			<p align="center" class="text-muted">Alpha</p>
			<p align="center">
				<?php
				if($user->isLoggedIn()){?>
					<a class="btn btn-primary" href="users/account.php" role="button"><?=lang("ACCT_HOME");?> &raquo;</a>
				<?php }else{?>
					<a class="btn btn-warning" href="users/login.php" role="button"><?=lang("SIGNIN_TEXT");?> &raquo;</a>
					<a class="btn btn-info" href="users/join.php" role="button"><?=lang("SIGNUP_TEXT");?> &raquo;</a>
				<?php }?>
			</p>
			<br>
			<p align="center">This is a private site.</p>
			<p align="center">2</p>
		</div>
<?php languageSwitcher();?>
	</div>
</div>

<!-- Place any per-page javascript here -->


<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>
