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
						<h4 class="title"><span class="text"><strong>Siparişler</strong> </span></h4>
						<form method="post" action="<?=base_url()?>uye/siparislerim">
							  <div class="panel panel-default">
                       
                        <div class="panel-heading">
                         sipariş detay
					
                            <p class="text-green">
                                 <?=$this->session->flashdata("mesaj")?><!--burası uyeler.php de 40.satır-->
                         
                            </p>
                    
                       
                        
                        <div class="panel-body">
						
						
                            <div class="table-responsive">
                                 <table id="table-breakpoint">
					<thead>
					 
						
						 
					 <tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adı:</th>
						<td><?=$siparis[0]->adi?></td>
					</tr>
						 <tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adres:</th>
						<td><?=$siparis[0]->adres?></td>
					</tr>
					<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Durum:</th>
						<td><?=$siparis[0]->durum?></td>
					</tr>
					 <tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tutar:</th>
						<td><?=$siparis[0]->tutar?></td>
					</tr>
					 <tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehir:</th>
						<td><?=$siparis[0]->sehir?></td>
					</tr>
					 <tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kargo Firma:</th>
						<td><?=$siparis[0]->kargofirma?></td>
					</tr>
					 <tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kargo no:</th>
						<td><?=$siparis[0]->kargono?></td>
					</tr>
						  
						
						
						
					 
				
					 
					
				  </table>
                            </div>
                        </div>
                    </div>

            </div>
					

								<!-- content stop -->
								 <div class="panel-body">
						
						
                            <div class="table-responsive">
                                 <table id="table-breakpoint">
					<thead>
					 	<br>	<br>	<br>
						
					<tr>
						
						
					</thead>
					
					<tbody>
					<?php
					$sn=0;
					$top=0;
					foreach($urunler as $rs)
					{ $sn++;
					$tutar=0;
					$top+=$rs->tutar;
					
					?> 
					  <tr>
					   
						<td><?=$sn?></td>
			
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->adi?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->adres?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->birim?></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->tutar?></td>
						
						
					
					  </tr>
					  <?php } ?>
					 
					</tbody>
				  </table>
                            </div>
                        </div>
						<!-- content stop -->
							</div>
						</div>
					</div>				
				</div>
			</section>