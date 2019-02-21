
<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span12">
								<!-- content start  -->



					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Üye Hesap</strong>Bilgileri</span></h4>
						<form method="post" action="<?=base_url()?>uye/uye_guncelle">

							<input type="hidden" name="next" value="/">
							<?php if ($this->session->flashdata("mesaj")) { ?>
						    <div class="callout callout-info">
                                <p> <?=$this->session->flashdata("mesaj")?></p> 
                              </div>
                              <?php }?> 

							<fieldset>
								<div class="control-group">
									<label class="control-label">Ad</label>
									<div class="controls">
										<input type="text" name="adsoy"  value="<?=$uye[0]->adsoy?>" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email</label>
									<div class="controls">
										<input type="email" name="email" value="<?=$uye[0]->email?>" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Şifre</label>
									<div class="controls">
										<input type="password" name="sifre" value="<?=$uye[0]->sifre?>" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="form-group">
                                            <label> Şehir</label>
   											<select class="form-control" value="<?=$uye[0]->sehir?>" name="sehir" type="text">
                                                <option>Ankara</option>
                                                <option>İstanbul</option>
                                                <option>Bursa</option>
                                                <option>Karabük</option>
                                            </select>
                                        </div>
                                        	<div class="form-group">
                                            <label>Telefon</label>
                                            <input class="form-control" value="<?=$uye[0]->tel?>"  name="tel" type="text">
                                    
                                        </div>
										<div class="form-group">
                                            <label>Adres</label>
                                            <input class="form-control" value="<?=$uye[0]->adres?>" name="adres" type="text">
                                     
                                        </div>

								
								
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Güncelle">
																		
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