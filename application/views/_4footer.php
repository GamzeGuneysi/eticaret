			<section id="footer-bar">
				<div class="row">
					
					
					<div class="span5">
						<h4>Social Media</h4>
						<p>
							<a class="fa fa-facebook-square" href="#"> Facebook</a><br>
							<a class="fa fa-twitter-square" href="#"> Twitter</a><br>
							<a class="fa fa-youtube-square" href="#"> Youtube</a><br>
							<a class="fa fa-vimeo-square" href="#"> Vimeo</a><br>
						</p>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="<?=base_url()?>/assets/themes/js/common.js"></script>
		<script src="<?=base_url()?>/assets/themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>