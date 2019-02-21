
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span12">
								<!-- content start  -->



					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong> Formu</span></h4>
						<form method="post" action="<?=base_url()?>home/login">

							<input type="hidden" name="next" value="/">
							<?php if ($this->session->flashdata("mesaj")) { ?>
						    <div class="callout callout-info">
                                <p> <?=$this->session->flashdata("mesaj")?></p> 
                              </div>
                              <?php }?> 

							<fieldset>
								<div class="control-group">
									<label class="control-label">Email</label>
									<div class="controls">
										<input type="text" name="email"placeholder="Email" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Şifre</label>
									<div class="controls">
										<input type="password" name="sifre"placeholder="Şifre" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Login Ol">
																		
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