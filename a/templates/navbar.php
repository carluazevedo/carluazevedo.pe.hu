<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><?php echo Config::$sitename; ?></a>
			</div><!-- .navbar-header -->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<!-- Insira aqui os links de menu -->
				</ul>
<?php if ($sessionData['user_login_status'] == true) : ?>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    	<a id="user-name" href="<?php echo Config::$basedir . 'a/index.php?act=edit-usr&user=' . $sessionData['user_name']; ?>">
                    		<?php echo $sessionData['user_first_name'] . ' ' . $sessionData['user_last_name']; ?>
                    	</a>
                    </li>
                    <li class="active"><a href="<?php echo Config::$basedir; ?>logout.php">Sair</a></li>
                </ul>
<?php endif; ?>
			</div><!-- .collapse -->
		</div>
	</nav>
</header>