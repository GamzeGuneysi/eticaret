 <?php
 $this->load->view('admin/header');
		$this->load->view('admin/sidebar');?>
 
 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Ürünler</h1>
                       
                    </div>
                </div>
                <!-- /. ROW  -->
                <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                          Ürünler Listesi
					
                            <p class="text-green">
                                 <?=$this->session->flashdata("mesaj")?><!--burası uyeler.php de 40.satır-->
                         
                            </p>
                    
                       
                        
                        <div class="panel-body">
						
						<div>
                          <a href="<?=base_url()?>admin/urunler/ekle" class="btn btn-lg btn-primary"><i class="fa fa-desktop "></i>  Ürün ekle</a>
                        </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Numara No</th>
                                            <th>Adı</th>
                                            <th>Kategori</th>
                                            <th>A. Fiyatı</th>
											<th>S. Fiyatı</th>
                                            <th>Resim</th>
                                            <th>Galeri</th>
                                            <th>Durum</th>
											<th>Düzelt</th>
											<th>Sil</th>
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
                                            <td><?=$rs->katadi?></td>
											<td><?=$rs->afiyat?></td>
                                            <td><?=$rs->sfiyat?></td>
                                            <td>
											<?php if ($rs->resim) {?>
											
											<a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->id?>" ><img  src="<?=base_url()?>uploads/<?=$rs->resim?>" height="30"></a>
											<?php }else { ?>
											
						     			    <a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->id?>"  class="btn btn-block  btn-success btn-xs">Resim Yükle</a>
                                           <?php } ?>
											</td>
										   

										   <td>  
												<a href="<?=base_url()?>admin/urunler/galeri_yukle/<?=$rs->id?>"  class="btn btn-block  btn-success btn-xs">Resim Yükle</a>
										   </td><!--galeri için bunu yazınca resim yükle butonu eklendi-->
											 <td><?=$rs->durum?></td>
                                            <td><a href="<?=base_url()?>admin/urunler/duzenle/<?=$rs->id?>">Düzenle</a></td>
											<td><a href="<?=base_url()?>admin/urunler/sil/<?=$rs->id?>" onclick="return confirm ('silinecek emin misin?')">Sil</a></td>
											
                                        </tr>
                                    <?php } ?>
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