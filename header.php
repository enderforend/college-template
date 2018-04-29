<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="#">

		<title>PQXKHK | <?php the_title()?></title>


		<!--Fonts Google-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <?php wp_head();?>
	</head>

	<body>
		<div class="container">
			<div class="background-img">
				<div class="top-nav">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-auto">
							<div class="logo">
								<?php the_custom_logo(); ?>
							</div>
						</div>
						<div class="col-lg-auto">
						<button class="top-nav_btn">
							<i class="icon-menu"></i>
						</button>
						<?php wp_nav_menu( array(
							'menu'					=>		 'top_menu',
							'container'		 		=>		 'ul',
							'container_class' 		=>		 'top-nav_menu',
							'menu_class'	 		=>		 'top-nav_menu',
							'menu_id'		 		=>		 '',
							'echo'	 				=>		 true,
							'fallback_cb'			=>		 'wp_page_menu',
							'before'	 			=>		 '',
							'after'	 				=>		 '',
							'link_before'			=>		 '',
							'link_after'			=>		 '',
							'items_wrap'	 		=>		 '<ul id= "%1$s" class= "%2$s">%3$s</ul>',
							'depth'	 				=>		 0,
							'walker'	 			=>		 '',
						));
						
						?>
						<!-- <ul class="top-nav_menu">
							<li><a href="#">BOSH SAHIFA</a></li>
							<li><a href="#">KOLLEJ HAQIDA</a>
								<ul class="top-nav_menu_sub">
									<li><a href="#">Rahbariyat</a></li>
									<li><a href="#">Kollej Nizomi</a></li>
									<li><a href="#">Ustaxona</a></li>
								</ul>
							</li>
							<li><a href="#">QABUL KUNLARI</a></li>
							<li><a href="#">FOYDALI MALUMOTLAR</a></li>
							<li><a href="#">FOTOGALEREYA</a></li>
							<li><a href="#">BO'GLANISH</a></li>
						</ul> -->
						</div>
					</div>
				</div>