 <?php
 $this->load->view('admin/header');
		$this->load->view('admin/sidebar');?>
 
 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Kategori</h1>
                       
                    </div>
                </div>
                <!-- /. ROW  -->
                <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                          Kategori Listesi
					
                            <p class="text-green">
                                 <?=$this->session->flashdata("mesaj")?><!--burası uyeler.php de 40.satır-->
                         
                            </p>
                    
                       
                        
                        <div class="panel-body">
						
						<div>
                          <a href="<?=base_url()?>admin/kategoriler/ekle" class="btn btn-lg btn-primary"><i class="fa fa-desktop "></i>  Kategori ekle</a>
                        </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Numara No</th>
                                            <th>ParentId</th>
                                            <th>Adı</th>
                                            <th>Durum</th>
											<th>Description</th>
                                            <th>Resim</th>
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
                                            <td><?=$rs->parent_id?></td>
                                            <td><?=$rs->adi?></td>
											<td><?=$rs->durum?></td>
                                            <td><?=$rs->description?></td>
                                            <td>
											<?php if ($rs->resim) {?>
											
											<a href="<?=base_url()?>admin/kategoriler/resim_yukle/<?=$rs->Id?>" ><img  src="<?=base_url()?>uploads/<?=$rs->resim?>" height="30"></a>
											<?php }else { ?>
											
						     			    <a href="<?=base_url()?>admin/kategoriler/resim_yukle/<?=$rs->Id?>"  class="btn btn-block  btn-success btn-xs">Resim Yükle</a>
                                           <?php } ?>
											</td>
										   

										  
                                            <td><a href="<?=base_url()?>admin/kategoriler/duzenle/<?=$rs->Id?>">Düzenle</a></td>
											<td><a href="<?=base_url()?>admin/kategoriler/sil/<?=$rs->Id?>" onclick="return confirm ('silinecek emin misin?')">Sil</a></td>
											
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