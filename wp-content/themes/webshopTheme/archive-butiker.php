
<?php
get_header(); ?> 

<main> 

    <?php 
    
    if(have_posts()) {
    while(have_posts()) {
        the_post(); ?> 

        <section>

            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="text">
                                

                                    <h1> <?php the_title(); ?>  </h1>
                                    <br>

                                    <div>
                                        <h3>Adress: </h3>
                                        <?php $butik_value = get_field( 'titel'); 
                                            if($butik_value ): 
                                                
                                            echo $butik_value; 
                                            

                                            endif; ?>


                                    </div>
                                

                                    <div>
                                        <h3>Telefonnummer: </h3>

                                    <?php 
                                    $telefonnummer = get_field( 'telefonnummer'); 
                                    if($telefonnummer ): 
                                        
                                    echo $telefonnummer; 
                                    

                                    endif; ?> 

                                    </div>

                                    <div>
                                    
                                        <h3>E-post: </h3>
                                    
                                    <?php 
                                        $ePost = get_field( 'e-post'); 
                                        if($ePost ): 
                                            
                                        echo $ePost; 
                                        
                                    
                                        endif;
                                    
                                        ?> 
                                    </div>
                                    

                                    <div>
                                        <h3>Karta: </h3>
                                    <?php 
                                        $karta = get_field( 'address'); 
                                        if($karta ): 
                                            
                                        echo $karta; 
                                        
    
                                        endif;
    
                                        ?> 

                                    </div>


                                
                                

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </section>

    <?php } 
    
     }?>

</main>

<?php get_footer(); ?> 
