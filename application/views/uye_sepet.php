    <?php
	 $this->load->view('_1header');
	
	?>
<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span12">
								<!-- content start  -->



					<div class="span5">					
						<h4 class="title"><span class="text"><strong>sepetim</strong> </span></h4>
						<form method="post" action="<?=base_url()?>uye/siparislerim">
							  <div class="panel panel-default">
                       
                        <div class="panel-heading">
                        
					
                            <p class="text-green">
                                 <?=$this->session->flashdata("mesaj")?><!--burası uyeler.php de 40.satır-->
                         
                            </p>
                    
                       
                        
                        <div class="panel-body">
						
						
                            <div class="table-responsive">
                                 <table id="table-breakpoint">
					<thead>
					 
						
					<tr>
						
						<th>S.No</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ürün Adı</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fiyat</th>
					    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adet</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tutar</th>
						
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sil</th>
					  </tr>
					</thead>
					
					<tbody>
					<?php
					$sn=0;
					$top=0;
					foreach($veriler as $rs)
					{ $sn++;
					$top+=$rs->tutar;
					?> 
					  <tr>
					   
						<td><?=$sn?></td>
			
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->urunadi?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->fiyat?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->adet?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->tutar?></td>
						 
						<td><a href="<?php echo base_url(); ?>siparisler/sepetsil/<?=$rs->Id?>"  onclick="return confirm(' Silmek istediğinize Emin Misin?')" class="hvr-icon-float-away col-24" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sil</a></td>
					
					  </tr>
					  <?php } ?>
					 
					</tbody>
				  </table>   
				  </div><br>
				    <h5>Toplam Tutar: ₺<?=$top?> </h5><br>
                        </div>
                    </div>

            </div>
			
			
			
			
			
			<!-- form -->
				  <div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Kişisel Bilgiler
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body panel_text">
					 <!-- form -->
					  <form action="<?=base_url();?>home/siparis_tamamla/" method="post"/>
								<H3>ADRES BİLGİLERİ</H3>
								<hr>
								Alıcı adı soyadı:<input type="text" name="adsoy" value="<?=$uye[0]->adsoy?>"/><br>
								Adresi:<input type="text" name="adres" value="<?=$uye[0]->adres?>"/><br>
								Telefonu:<input type="text" name="tel" value="<?=$uye[0]->tel?>"/><br></br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Şehir:<input type="text" name="sehir" value="<?=$uye[0]->sehir?>"/><br>
								Toplam Tutar:<input type="text" name="tutar" readonly value="<?=$top ?>"/><br>
								</hr>
								<br>
								<H3>ÖDEME BİLGİLERİ</H3><br>
								Kredi kartı no:<input type="text" name="karno"/><br>
								Skt Ay:<input type="text" name="ay"/><br>
								Skt yıl:<input type="text" name="yıl"/><br></br>
								Güvenlik kodu:<input type="text" name="gkodu"/>
								<br></br>
								<fieldset>
								
									<input type="submit" name="submit" value="Alışverişi Tamamla" class="btn btn-primary" />
									
								</fieldset>
							</form>
				 
					  <!-- form -->
				  </div>
				</div>
				<br>
				
			
					
					  <!-- form -->
				
				
			  </div>
			  
			  
			</div>
					

								
						<!-- content stop -->
							</div>
						</div>
					</div>				
				</div>
			</section>