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
                            
                            <div class="cptText">
                                

                                    
                                    <br>

                                    <div>
                                        <h1> 
                                        <?php $butik_value = get_field( 'titel'); 
                                            if($butik_value ): 
                                                
                                            echo $butik_value; 
                                            

                                            endif; ?>
                                        </h1>

                                    </div>

                                    <div>
                                        <?php 

                                            the_content(); 

                                        ?> 
                                    </div>

                                    <br>

                                    <div class="cptImgDiv">

                                    <?php 
                                    $butiksbild = get_field( 'butiksbild'); 
                                    
                                    if($butiksbild ): ?> 
                                    <div>
                                        <img class="cptImg" src=" <?php echo $butiksbild; ?> " alt="Butikens bild">

                                    </div>
                        
                                    <?php

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
                                    <br>

                                    <div class="oppettiderDiv">
                                        <br>
                                        <h3>Öppettider </h3><br>

                                    <?php 
                                    $oppettider = get_field( 'oppettider'); 
                                    if($oppettider ): 
                                        
                                    echo nl2br($oppettider); 
                                    

                                    endif; ?> 

                                    </div>
                                    <br>
                                    <br>


                                
                                

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