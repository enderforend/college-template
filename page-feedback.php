<?php 
/* 
Template Name: Bog'lanish
*/
?>

<?php get_header(); ?>
				<div class="row">
					<div class="col-lg-4">
						<?php get_sidebar(); ?>
					</div>
					<!-- /.col-md-4 -->
					<div class="col-lg-8">
						<div class="content">
							<div class="feedback">
                                <form action="">
									<?php echo do_shortcode( '[contact-form-7 id="63" title="Contact form"]' )?> 
								</form>
                            </div>
							
						</div>
						<!--content-->
					</div>
					<!-- /.col-md-8 -->
				</div>
				<!-- /.row -->
			</div>
		</div>
		<?php get_footer(); ?>