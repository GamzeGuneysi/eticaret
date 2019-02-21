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
                          Üye Listesi
					
                            <p class="text-green">
                                 <?=$this->session->flashdata("mesaj")?><!--burası uyeler.php de 40.satır-->
                         
                            </p>
                    
                       
                        
                        <div class="panel-body">
						
						<div>
                          <a href="<?=base_url()?>admin/uyeler/ekle" class="btn btn-lg btn-primary"><i class="fa fa-desktop "></i>  Üye ekle</a>
                        </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Sıra No</th>
                                            <th>Adı Soyadı</th>
                                            <th>Email</th>
                                            <th>Telefon</th>
											<th>Şehir</th>
                                            <th>Yetki</th>
                                            <th>Durum</th>
                                            <th>Düzenle</th>
											<th>Sil</th>
                                        </tr>
                                    </thead>
									<?php
									$sırano=0;
									foreach($veriler as $rs)
									{ $sırano++;
										?>
									<tr>
                                            <td><?=$sırano?></td>
                                            <td><?=$rs->adsoy?></td>
                                            <td><?=$rs->email?></td>
                                            <td><?=$rs->tel?></td>
											<td><?=$rs->sehir?></td>
                                            <td><?=$rs->yetki?></td>
                                            <td><?=$rs->durum?></td>
                                            <td><a href="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->id?>">Düzenle</a></td>
											<td><a href="<?=base_url()?>admin/uyeler/sil/<?=$rs->id?>" onclick="return confirm ('silinecek emin misin?')">Sil</a></td>
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