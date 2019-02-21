
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span12">
								<!-- content start  -->

<div class="span7">
	<i><p>Bize İletmek İstediklerinizi Giriniz</p></i>
						<form method="post" action="<?=base_url()?>home/mesaj_kaydet">
							<?php if ($this->session->flashdata("mesaj")) { ?>
						    <div class="callout callout-info">
                                <p> <?=$this->session->flashdata("mesaj")?></p> 
                              </div>
                              <?php }?>  
							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Adınız Soyadınız</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="adsoy" type="text" value="" class="input-xlarge" placeholder="Adınız Soyadınız">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="email"><span>Email</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="email" value="" class="input-xlarge" placeholder="Email ">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="message"><span>Mesajınız</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="mesaj" rows="7" placeholder="Mesajınız"></textarea>
									</div>
								</div>
								
								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-inverse">GÖNDER</button>
								</div>
							</fieldset>
						</form>
					</div>				


								<!-- content stop -->
							</div>
						</div>
					</div>				
				</div>
			</section>