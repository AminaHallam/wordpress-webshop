
<?php
get_header(); ?> 

<main> 

    
    
    <section>
        
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        
                        <h1> Våra fysiska butiker </h1>
                        
                        <div class="firstPageShop">
                            <?php 
                            if(have_posts()) {

                                while(have_posts()) {
                                    the_post(); ?> 
                                
                                    <a href="<?php the_permalink(); ?>"> <h2><?php the_title(); ?></h2> </a>


                                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
                                
                                        
                            <?php } 
                                
                            }?>
                                

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </section>


</main>

<?php get_footer(); ?> 
