<?php get_header(); ?>
				<div class="row">
					<div class="col-lg-4">
						<?php get_sidebar(); ?>
					</div>
					<!-- /.col-md-4 -->
					<div class="col-lg-8">
						<div class="content">
							<div class="title-area">
								<h2><?php the_title(); ?></h2>
                            </div>
                            <div class="post_status">
                                <div class="post_status_list">
                                    <li><i class="icon-user-circle-o"></i><?php the_author();	?></li>
                                    <li><i class="icon-calendar"></i><?php the_time('d.m.Y'); ?> <?php the_time();?></li>
                                    <li><i class="icon-comment"></i><?php $category = get_the_category(); 
                                                                    echo $category[0]->cat_name;?></li>
                                    </div>
                                </div>
							<div class="post_full">
                                <?php the_content()?>
                            </div>
                            <div class="category">
                                Kategoriya: <div class="category_name"><a href="<?php echo $category_link; ?>"><?php $category = get_the_category(); 
                                                                    echo $category[0]->cat_name;?></a></div>
                            </div>
                            
                                  <div class="comments_form">
                                    <form action="">
                                            <?php comments_template();
                                            
                                            $args = array(
                                                'walker'            => null,
                                                'max_depth'         => '',
                                                'style'             => 'ul',
                                                'callback'          => null,
                                                'end-callback'      => null,
                                                'type'              => 'all',
                                                'reply_text'        => 'Reply',
                                                'page'              => '',
                                                'per_page'          => '0   ',
                                                'avatar_size'       => 64,
                                                'reverse_top_level' => null,
                                                'reverse_children'  => '',
                                                'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
                                                'short_ping'        => false,    // С версии 3.6,
                                                'echo'              => true,     // true или false
                                            );
                                            
                                           
                                            ?>
                                       </form>
                                </div>
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