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
                          Kategoriler Düzenleme Menüsü
                        </div>
                        
                        <div class="panel-body">
						
			<div class="col-md-8 col-sm-8 col-xs-26">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           Kategoriler Bilgilerini Giriniz
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?=base_url()?>admin/kategoriler/guncelle/<?=$veri[0]->Id?>">
                                         <div class="form-group">
                                            <label> Adı </label>
                                            <input class="form-control"  value="<?=$veri[0]->adi?>" name="adi" type="text">
                                    
                                        </div>
										<div class="form-group">
                                            <label> Parent id </label>
                                            <input class="form-control"  value="<?=$veri[0]->parent_id?>" name="parent_id" type="text">
                                    
                                        </div>
										<div class="form-group">
                                            <label> description </label>
                                            <input class="form-control"  value="<?=$veri[0]->description?>" name="description" type="text">
                                    
                                        </div>
										<div class="form-group">
                                            <label> tarih </label>
                                            <input class="form-control"  value="<?=$veri[0]->tarih?>" name="tarih" type="text">
                                    
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
		
		