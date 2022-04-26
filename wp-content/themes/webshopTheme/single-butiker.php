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
                                

                                    
                                    <br>

                                    <div>
                                        <h2> 
                                        <?php $butik_value = get_field( 'titel'); 
                                            if($butik_value ): 
                                                
                                            echo $butik_value; 
                                            

                                            endif; ?>
                                        </h2>

                                    </div>

                                    <div>

                                    <?php 
                                    $butiksbild = get_field( 'butiksbild'); 
                                    
                                    if($butiksbild ): 
                                        echo $butiksbild;
                        

                                    endif; ?> 

                                    </div>
                                    <br>
                                    <div>

                                    <?php 
                                    $adress = get_field( 'adress'); 
                                    if($adress ): ?> 
                                        
                                    <h4>Adress: <?php echo $adress; ?></h4>
                                    
                                    <?php 
                                    endif; ?> 

                                    </div>
                                
                                    <br>
                                    <div>
                                        

                                    <?php 
                                    $telefonnummer = get_field( 'telefonnummer'); 
                                    if($telefonnummer ): ?> 
                                     
                                    <h4>Telefonnummer: <?php echo $telefonnummer; ?></h4>
                                      
                                    
                                    <?php 
                                    endif; ?> 

                                    </div>
                                    <br>
                                    <div>
                                    
                                    <?php 
                                        $ePost = get_field( 'e-post'); 
                                        if($ePost ): ?> 
                                        
                                        <h4>E-post:<a href=" <?php echo $ePost; ?> "> <?php echo $ePost; ?> </a></h4> 
                                        
                                        
                                        <?php 
                                        endif;
                                    
                                        ?> 
                                    </div>

                                    <div>
                                        <br>
                                        <h3>Öppettider: </h3><br>

                                    <?php 
                                    $oppettider = get_field( 'oppettider'); 
                                    if($oppettider ): 
                                        
                                    echo nl2br($oppettider); 
                                    

                                    endif; ?> 

                                    </div>
                                    

                                    <div>
                                        <br>
                                        <h3>Hitta hit: </h3><br>
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