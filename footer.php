<footer class="footer">
			<div class="container">
				<div class="row justify-content-center">
					<!-- /.col-md -->
					<div class="col-lg col-4">
						<?php wp_nav_menu( array(
								'menu'					=>		 'footer_menu',
								'container'		 		=>		 'ul',
								'container_class' 		=>		 'footer_menu',
								'menu_class'	 		=>		 'footer_menu',
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
						
					</div>
					<!-- /.col-md -->
					<div class="col-lg col-4">
						<div class="emblem">
							<?php if ( !function_exists('sidebar') || !sidebar() ) : endif; ?>
						</div>
					</div>
					<!-- /.col-md -->
					<div class="col-lg col-4">
						<div class="footer-contacts">
							<p class="footer-contacts_phone"><?php the_field('phone_number', 22)?></p>
							<p class="footer-contacts_adress"><?php the_field('adress', 22)?></p>
							<p class="footer-contacts_email"><? the_field('email', 22)?></p>
							<p class="footer-contacts_email"><? the_field('email_2', 22)?></p>
						</div>
						<div class="footer-social-links">
							
						</div>
					</div>
					<!-- /.col-md -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</footer>
		
		<?php wp_footer();?>
	</body>
</html>