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
                <br>
                <hr style="width:70%;margin: auto;"> 
                <br>
            </div>
        </div>
        
    </section>
    
<?php } ?>
    <nav class="navigation">
            
        <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
    </nav>

</main> 

<?php get_footer(); ?> 
