<?php
get_header(); ?> 

<main>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">

                <div class="blogDiv">

                    <?php
                    while( have_posts()){
                        the_post();           
                    ?>
                        
                        <?php
                        the_content();
                        ?>
                    <?php
                    }
                    ?>

                </div>
			</div>
		</div>
	</div>
</section>
</main> 

<?php get_footer(); ?> 