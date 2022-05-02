<?php
get_header(); ?> 

<main> 

<?php while(have_posts()) {
    the_post(); ?> 

    <section>

        <div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <h1>
                            <a id="titlePost" href="<?php the_permalink_rss(); ?>">
                            
                            <?php 
                            
                            the_title(); 
                            
                            ?> 
                            </a>

                        </h1> 
                        <div class="searchDiv">
                        <img class="searchImg"  src="
								<?php 
								the_post_thumbnail_url(); 
								?>">

                        </div>

                        <div class="text">
                            
                            <p><?php the_excerpt(); ?></p>

                        </div>

                    </div>

                </div>
                <hr style="width:70%;margin: auto;"> 
            </div>
        </div>

    </section>

    <?php } ?>

</main> 

<?php get_footer(); ?> 
