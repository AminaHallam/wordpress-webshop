<?php
get_header(); ?> 

<main> 

<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">

								<ul role="navigation">
									<li class="pagenav">

										<?php 
										/* Hämtar lämplig widget  */
										dynamic_sidebar('widget-sidmenu');
										?>
									</li>
								</ul>

							</div>
</aside>

<?php while(have_posts()) {
    the_post(); ?> 

    <section>

        <div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                       
                        
                        <?php the_post_thumbnail(); ?> 
                        
                        <div class="text">
                            <h1>
                                <?php the_title(); ?> 
                            </h1> 
                            
                            <p><?php the_content(); ?></p>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>

    <?php } ?>

</main> 

<?php get_footer(); ?> 
