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


    <section>
        <?php while(have_posts()) {
            the_post(); ?> 

            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">

                            <h1>
                                <?php the_title(); ?> 
                            </h1> 

                            <?php the_post_thumbnail(); ?> 

                            <div class="text">
                                
                                <p><?php the_content(); ?></p>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            
        <?php } ?>
    </section>

</main> 

<?php get_footer(); ?> 
