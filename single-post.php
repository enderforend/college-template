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
                                    <li><i class="icon-calendar"></i><?php the_time('j F Y');?> <?php the_time();?></li>
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
                            <div class="comments-pub">
                                <h3>Rasul</h3>
                                <div class="comments-pub_msg">
                                    <p>Lorem ipsum, dolor sit amet consectetur
                                     adipisicing elit. Veniam alias nulla 
                                     tempore ullam repellat consequatur
                                     nobis. Officiis vel quaerat dolores.</p>
                                </div>
                            </div>
                            <div class="comments">
                                <h2>Izoh qo'shish</h2>
                                <div class="comments_form">
                                    <form action="">
                                        <label for="input">Ism</label><input type="text" placeholder="Ismingiz">
                                        <label for="">Xabar</label><textarea name="" id="" cols="30" rows="10"></textarea>
                                        <div class="form-button">
                                            <button class="form-button_btn"><a href="#">Jo'natish</a></button>
                                        </div>
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