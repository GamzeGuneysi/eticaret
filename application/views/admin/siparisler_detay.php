 <?php
 $this->load->view('admin/header');
		$this->load->view('admin/sidebar');?>
 
 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">BLANK PAGE</h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
                <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                      
					
                            <p class="text-green">
                                 <?=$this->session->flashdata("mesaj")?><!--burası uyeler.php de 40.satır-->
                         
                            </p>
                    
                       
                        
                        <div class="panel-body">
						
						<div>
                          
                        </div>
                            <div class="table-responsive">
							 <form action="<?php echo base_url(); ?>/admin/siparisler/guncelle/<?=$siparis[0]->Id?>" method="post">
                                <table class="table">
                                    <thead>
									
                                       <tr>
						
						<th>Adı Soyadı</th>
						<td><?=$siparis[0]->adi?></td>
					  </tr>
					    <tr>
						<th>Email</th>
						<td><?=$siparis[0]->email?></td>
						  </tr>
						    <tr>
						<th>Telefon</th>
						<td><?=$siparis[0]->tel?></td>
						  </tr>
						    <tr>
						<th>adres</th>
						<td><?=$siparis[0]->adres?></td>
						  </tr>
						  <tr>
						      <tr>
						<th>sehir</th>
						<td><?=$siparis[0]->sehir?></td>
						  </tr>
						
						    <tr>
						<th>kargo firma</th>
						<td><?=$siparis[0]->kargofirma?></td>
						  </tr>
						      <tr>
						<th>kargo no</th>
						<td><?=$siparis[0]->kargono?></td>
						  </tr>
						
						  <th>Notunuz</th>
						<td><textarea name="not" id="not" cols="100">
                               <?=$siparis[0]->not?>
                              </textarea>
				              </td>
						  <tr>
						<th></th>
						<td><input type="submit" class="login" value="Giris Yap"></td>
						  </tr>
						
                                </table>
                            </div>
                        </div>
                    </div>

            </div>
            <!-- /. PAGE INNER  -->
			  <!-- /. PAGE WRAPPER  -->
		 <div class="panel panel-default">
                       
                        <div class="panel-heading">
                      
					
                            <p class="text-green">
                                 <?=$this->session->flashdata("mesaj")?><!--burası uyeler.php de 40.satır-->
                         
                            </p>
                    
                       
                        
                        <div class="panel-body">
						
						<div>
                          
                        </div>
                            <div class="table-responsive">
							 
                                <table class="table">
                                    <thead>
									
                                      <tr>
						
						<th>S.No </th>
						<th>Adı </th>
						<th>Tarih</th>
						<th>Tutar</th>
						
						<th>Durum</th>
						
						
						
					
						
					  </tr>
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
			              <td><?=$rs->adi?></td>
						<td><?=$rs->tarih?></td>
						<td><?=$rs->tutar?></td>
						
						<td><?=$rs->durum?></td>
						
						
						
					
					  </tr>
					  <?php } ?>
					 
					</tbody>
				  </table>
   
                            </div>
                        </div>
                    </div>

            </div>
	 <!-- /. PAGE WRAPPER  -->
        </div>
   
    </div>
	   
	<?php $this->load->view('admin/footer');
		?>