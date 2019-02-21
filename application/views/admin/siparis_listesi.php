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
                          Sipariş Listesi
					
                            <p class="text-green">
                                 <?=$this->session->flashdata("mesaj")?><!--burası uyeler.php de 40.satır-->
                         
                            </p>
                    
                       
<div class="panel-body">
						
						<div>
                         
                        </div>
                        <?php $say=0; foreach ($urunler as $rs) {$say++;} ?>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Sıra No</th>
                                            <th>Adı Soyadı</th>
                                            <th>Tel</th>
                                            <th>Ürün Adı</th>
                                            <th>Ürün Fiyatı</th>
											<th>Adet</th>
											 <th>Durum</th>
                                            <th>Detay</th>
                                            <th>Onay</th>
                                        </tr>
                                    </thead>
									<tbody>
                                        <?php for($i=0;$i<$say;$i++) { ?>
									<tr>
                                            <td><?=$i+1?></td>
                                            <td><?=$musteriler[$i]->adsoy?></td>
											<td><?=$musteriler[$i]->telefon?></td>
                                            <td><?=$urunler[$i]->urunadi?></td>
											<td><?=$urunler[$i]->fiyat?></td>
                                            <td><?=$urunler[$i]->adet?></td>
											  <td><?=$urunler[$i]->durum?></td>
                                          
                                            <td><a href="<?=base_url()?>admin/siparisler/siparis_detay/<?=$urunler[$i]->Id?>">Detay</a></td>
                                            <td><a href="<?=base_url()?>admin/siparisler/onay/<?=$urunler[$i]->Id?>">Onay</a></td>
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