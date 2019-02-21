
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<?php foreach ($slider as $rs) { ?>
							<li><a href="<?=base_url()?>urun/detay_urun/<?=$rs->id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" style="height: 300px;" alt="" /></a></li>
				
								
						<?php } ?>
						
			
					</ul>
				</div>			
			</section>