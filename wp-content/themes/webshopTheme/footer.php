
<hr style="width:90%;margin: auto;">
<footer id="footer">
			<div class="container">
				<div class="row top">
                <div class="col-xs-12 col-sm-6 col-md-4">

                        <?php 
								
							dynamic_sidebar('widget-footer');
						?>

                </div>

					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
							<?php 
								
								dynamic_sidebar('widget-footer2');
							?>
					</div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-1">
					<ul class="social">
						<li>
                        <?php 
								dynamic_sidebar('widget-socialmedia');
							?>

						</li>
					</ul>

                </div>
                <br>
                
                
            </div>
            <hr style="width:90%;margin: auto;">
               
                
                <div class="col-xs-12">

						<div>
						<img id="paymentLogo" src="<?php echo get_template_directory_uri().'/img/save-payment.png';?>">
						</div>
                        <div class="copyright">
						<p>Copyright &copy; BioBar, 2022</p>
					</div>
				</div>
			</div>
    </footer>

    <?php wp_footer(); ?>
    
</body>
</html>