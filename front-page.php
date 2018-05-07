<?php 
/* 
Template Name: Bosh Sahifa
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
							<div class="posts">
								<?php
									// параметры по умолчанию
									$args = array(
										'numberposts' => 0,
										'orderby'     => 'date',
										'order'       => 'DESC',
										'include'     => array(),
										'exclude'     => array(),
										'meta_key'    => '',
										'meta_value'  =>'',
										'post_type'   => 'post',
										'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
									);

									$posts = get_posts( $args );

									foreach($posts as $post){ setup_postdata($post);
										?> 
										<div class="post">
											<h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
											<div class="post-preview"></div>
												<div class="post_status">
													<ul class="post_status_list">
														<li><i class="icon-user-circle-o"></i><?php the_author();?></li>
														<li><i class="icon-calendar"></i><?php the_time('d.m.Y'); ?> <?php the_time();?></li>
														<li><i class="icon-comment"></i><?php $category = get_the_category();
																						echo $category[0]->cat_name;?></li>
														<li><i class="icon-eye"></i><?php echo get_post_meta ($post->ID,'views',true); ?></li>
													</ul>
												</div>
												<div class="post_description">
													<p>
														<?php the_excerpt();?>
													</p>
												</div>
										</div>
											
										<?php 
										}
										
									?>
									<?php wp_reset_postdata(); // сброс ?>
							</div>
								
							
						</div>
						<!--content-->
					</div>
					<!-- /.col-md-8 -->
				</div>
				<!-- /.row -->
			</div>
		</div>
		<?php get_footer();?>