<?php
get_header();
/* hamta header */
?>
		<section>
			<div class="container">
				<div class="pagination">
                    
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1 class="blogRubrik">Bloggsida</h1>
                            <?php
							
                            while( have_posts()){
								
                                the_post();
                            ?>
							<article class="blogDiv">
								<img src="
								<?php 
								/* img url */
								the_post_thumbnail_url(); 
								?>" alt="">
								<br>
								<h2>
									<a id="titlePost" href="
									<?php  
									
									the_permalink_rss(); 
									?>">
									<?php 
									
									the_title(); 
									
									?> 
									</a>
									
								</h2>
								<br>
								<?php
								
								 the_excerpt();  
								 ?>
							</article>
                            <?php
                            }
                            ?>
		
						</div>

					</div>
					<nav class="navigation">
							
						<?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
					</nav>

				</div>
			</div>
		</section>
		<?php
		
		get_footer();
		?>