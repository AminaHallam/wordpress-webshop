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
        <div class="logo">
            <span class="logoHeader"><a href="<?php echo get_template_directory_uri().'/index.html';?>"><img class="logo" src="<?php echo get_template_directory_uri().'/img/logo.png';?>"></a></span>
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
						<div class="mobile-menu-wrap" class="hamburgerMenu">
                            <div class="bar">
                                <i class="fa fa-bars menu-icon"></i>

                            </div>
							
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

                
        