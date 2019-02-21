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
                          Sipariş Listesi Onaylı
					
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
						
						
						<th>adı</th>
						<th>tarih</th>
						<th>Tutar</th>
						
						<th>Durum</th>
						<th>Detay</th>
						<th>Kargola</th>
						
						
					
						
					  </tr>  
                                    </thead><tbody>
						<?php
					$sn=0;
					$top=0;
					foreach($veriler as $rs)
					{ $sn++;
					$tutar=0;
					
					?>
					  <tr>
					   
						<td><?=$sn?></td>
				<td><?=$rs->adsoy?></td>
						<td><?=$rs->tarih?></td>
						<td><?=$rs->tutar?></td>
						
						<td><?=$rs->durum?></td>
						
						  <td><a href="<?=base_url()?>admin/siparisler/siparis_detay/<?=$veriler[0]->Id?>">Detay</a></td>
						<td><a href="<?php echo base_url(); ?>admin/siparisler/kargola/<?=$rs->Id?>"   class="hvr-icon-float-away col-24" >Kargola</a></td>
					
					  </tr>
					  <?php } ?>
					 
					</tbody>
				  </table>
   
                            </div>
                        </div>
                    </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
	
	<?php $this->load->view('admin/footer');
		?>