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
							<div class="title-area">
								<h2><?php the_title()?></h2>
							</div>
							<div class="feedback">
                                <form action="">
                                    <label for="input">Ismingiz</label><input type="text" placeholder="Yakubov Yakub Yakubovich">
                                    <label for="input">Elektron pochtangiz</label><input type="text" placeholder="user@email.com">
                                    <label for="input">Xabar mavzusi</label><input type="text" placeholder="Malumot">
                                    <label for="input">Xabar</label><textarea name="..." id="" cols="30" rows="10"></textarea>
                                    <div class="form-button">
                                        <button class="form-button_btn"><a href="#">Jo'natish</a></button>
                                    </div>
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