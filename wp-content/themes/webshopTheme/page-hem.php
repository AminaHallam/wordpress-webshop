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
                        <div class="text">
						<img src="<?php the_post_thumbnail_url()?>" />
                            <h1>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?> 
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

<?php
get_footer(); ?> 




    