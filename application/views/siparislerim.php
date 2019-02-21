 
<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span12">
								<!-- content start  -->



					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Siparişler</strong> </span></h4>
						<form method="post" action="<?=base_url()?>uye/siparislerim">
							  <div class="panel panel-default">
                       
                        <div class="panel-heading">
                          Siparis Listesi
					
                            <p class="text-green">
                                 <?=$this->session->flashdata("mesaj")?><!--burası uyeler.php de 40.satır-->
                         
                            </p>
                    
                       
                        
                        <div class="panel-body">
						
					
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Numara No</th>
											 <th>adi</th>
                                            <th>musteri ıd</th>
                                            <th>tarih</th>
                                            <th>tutar</th>
											<th>Ödeme şekli</th>
                                            
											<th>Detay</th>
											
                                        </tr>
                                    </thead>
									<?php
									$rn=0;
									foreach($veriler as $rs)
									{ $rn++;
										?>
									<tr>
                                            <td><?=$rn?></td><!-- buradaki sıra yukarı ile doğru orantılı olacak -->
                                            <td><?=$rs->adi?></td>
										   <td><?=$rs->musteri_id?></td>
                                            <td><?=$rs->tarih?></td>
											<td><?=$rs->tutar?></td>
                                            <td><?=$rs->odeme_sekli?></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            
											
                                            <td><a href="<?php echo base_url(); ?>uye/siparis_detay/<?=$rs->Id?>">detay</a></td>
											
											
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>

            </div>
					

								<!-- content stop -->
							</div>
						</div>
					</div>				
				</div>
			</section>