 <?php
 $this->load->view('admin/header');
		$this->load->view('admin/sidebar');?>
 
 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">BLANK PAGE</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                          Ürün Düzenleme Menüsü
                        </div>
                        
                        <div class="panel-body">
						
			<div class="col-md-8 col-sm-8 col-xs-26">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           Ürün Bilgilerini Giriniz
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->id?>">
                                         <div class="form-group">
                                            <label> Adı </label>
                                            <input class="form-control"  value="<?=$veri[0]->adi?>" name="adi" type="text">
                                    
                                        </div>
										
								           <div class="form-group">
                                            <label>Satış Fiyatı </label>
                                            <input class="form-control"  value="<?=$veri[0]->sfiyat?>" name="sfiyat" type="text">
                                    
                                        </div>
										
										
										
										
										
										
										<div class="form-group">
                                            <label>Açıklama</label>
											<script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script><!--ckeditor oluşturmasatır38-46 !-->
											<textarea name="aciklama" rows=10 cols=70><?=$veri[0]->aciklama?></textarea>
											<script>
												// Replace the <textarea id="editor1"> with a CKEditor
												// instance, using default configuration.
												CKEDITOR.replace( 'aciklama' );
											</script>
                                        </div>
                                        
										
											<div class="form-group">
                                            <label> Kategori</label>
   											<select class="form-control"  name="kategori">
											<option value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadi?></option>
                                              <?php foreach($veriler as $rs) { ?>
								<option value="<?=$rs->Id?>"><?=$rs->adi?></option>
							<?php  } ?>
									
                                            </select>
                                        </div>
                                           
										
										
                                      <div class="form-group">
                                            <label>Durum</label>
                                           <select class="form-control"  value="<?=$veri[0]->durum?>" name="durum" type="text">
                                                <option>Aktif</option>
                                                <option>Pasif</option>
                                              
                                            </select>
                                     
                                        </div>
										
										
																			
																
									                                       
                                         <button type="submit" class="btn btn-danger">GÜNCELLE</button>
                               

                                    </form>
                            </div>
                        </div>
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
		
		