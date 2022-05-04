<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php wp_title(' '); ?></title>
	
    <?php wp_head(); ?>
</head>
<body>

	<div class="topnav">

		<header id="header">
        <div class="logoDiv">
            <span class="logoContainer">
                <a href="<?php echo site_url('');?>"><img id="logoImg" src="<?php echo get_template_directory_uri().'/img/logo-1.png';?>"></a>
            </span>
            <div class="col-sm-6 hidden-xs">
						<?php 
                            get_search_form(); 
                        ?> 

					</div>
        
        
        </div>
			<div class="divContainer">
				<div class="row">
					<div class="col-xs-8 col-sm-6">


                    </div>
					

                </div>
            </div>
        </header>  

        <hr style="width:70%;margin: auto;">      
            
                    <div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							
						</div>
					</div>

                    <nav id="nav">
                        <div class="container">
                                <div>

                                    <div class="col-xs-12">
    
                                        <?php wp_nav_menu(array(
                                            'theme_location' => 
                                            'huvudmeny'
                                        ));
                                        ?>
                                        
                                    </div>
                                </div>
                        </div>
                    </nav>
                    <hr style="width:70%;margin: auto;">

                
        