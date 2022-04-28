
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
                                
                                    <div class="firstPageCpt">   

                                        <a href="<?php the_permalink(); ?>"> <h2><?php the_title(); ?></h2> </a>
                                    
                                        <div>
                                        <?php 
                                        $butiksbild = get_field( 'butiksbild'); 
                                        
                                        if($butiksbild ): ?> 
                                        <div>
                                        <a href="<?php the_permalink(); ?>">  <img class="cptImg" src=" <?php echo $butiksbild; ?> " alt="Butikens bild"></a>

                                        </div>
                            
                                        <?php

                                        endif; ?> 

                                        </div>

                                    </div>

                                    
                                
                                        
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
