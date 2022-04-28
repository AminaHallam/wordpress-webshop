<?php
get_header();
/* hamta header */
?>
		<section>
				<div class="container">
                    
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							
                            <?php
							
                            while( have_posts()){
								
                                the_post();
                            ?>
							<article class="blogDiv">
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
								<img src="
								<?php 
								
								the_post_thumbnail_url(); 
								?>" alt="">
								<br>
								<?php
								
								 the_content();  
								 ?>
							</article>
                            <?php
                            }
                            ?>
		
						</div>
					</div>
				</div>
			</section>
            <?php
			/* get footer */
            get_footer();
            ?>