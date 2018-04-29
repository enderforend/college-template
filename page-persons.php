<?php 
/* 
Template Name: Rahbariyat
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
							<div class="persons">
                                <?php
                                    // параметры по умолчанию
                                    $args = array(
                                        'numberposts' => 0,
                                        'orderby'     => 'date',
                                        'order'       => 'ASC',
                                        'include'     => array(),
                                        'exclude'     => array(),
                                        'meta_key'    => '',
                                        'meta_value'  =>'',
                                        'post_type'   => 'personal',
                                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                    );

                                    $posts = get_posts( $args );

                                    foreach($posts as $post){ setup_postdata($post);
                                        ?> 
                                        <div class="person">
                                            <div class="person_image">
                                                <img src="<?php the_field('photo'); ?>" alt="person">
                                            </div>
                                            <div class="person_description">
                                                <h3><?php the_field('name')?></h3>
                                                <span class="information">
                                                    <div class="information_title">Lavozmi:</div> <div class="information_title_description"><?php the_field('post')?></div></span>
                                                <span class="information">
                                                    <div class="information_title">Telefon:</div> <div class="information_title_description"><?php the_field('phone')?></div></span>
                                                <span class="information">
                                                    <div class="information_title">Qabul Kunlari:</div> <div class="information_title_description"><?php the_field('admission')?></div></span>
                                                <span class="information">
                                                    <div class="information_title">Elektron Pochta:</div> <div class="information_title_description"><?php the_field('email_adress')?></div></span>
                                            </div>
                                        </div>
                                            
                                        <?php 
                                        }
                                        
                                    ?>
                                    <?php wp_reset_postdata(); // сброс ?>
                                
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