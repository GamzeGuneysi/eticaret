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
                          Ürün Ekleme
                        </div>
                        
                        <div class="panel-body">
						
			<div class="col-md-8 col-sm-8 col-xs-26">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           Ürün Bilgilerini Giriniz
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?=base_url()?>admin/urunler/ekle_kaydet">
                                        <div class="form-group">
                                            <label> Adı </label>
                                            <input class="form-control" name="adi" type="text">
                                    
                                        </div>
										<div class="form-group">
                                            <label> Kodu</label>
                                            <input class="form-control" name="kodu" type="text">
                                    
                                        </div>
										<div class="form-group">
                                            <label> Türü</label>
   											<select class="form-control" name="turu" type="text">
                                              
                                                <option>İstanbul</option>
                                                <option>Bursa</option>
                                                <option>Karabük</option>
                                            </select>
                                        </div>
											<div class="form-group">
                                            <label> Kategori</label>
   											<select class="form-control" name="kategori" type="text">
                                                <option>Ankara</option>
                                                <option>İstanbul</option>
                                                <option>Bursa</option>
                                                <option>Karabük</option>
                                            </select>
                                        </div>
                                            <div class="form-group">
                                            <label>Alış  Fiyatı </label>
                                            <input class="form-control" type="number" step="0.01" name="afiyat">
                                    
                                        </div>
                                
										<div class="form-group">
                                            <label>Satış Fiyatı</label>
                                            <input class="form-control" name="sfiyat" type="number" step="0.01">
                                    
                                        </div>
										<div class="form-group">
                                            <label> Stok</label>
   											<input type="number" name="stok" min="0" class="form-control">
                                        </div>
											<div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" name="description" type="text">
                                     
                                        </div>
											<div class="form-group">
                                            <label>Keywords</label>
                                            <input class="form-control" name="keywords" type="text">
                                     
                                        </div>
										
										
										
											<div class="form-group">
                                            <label>Açıklama</label>
                                            <input class="form-control" name="aciklama" type="text">
                                     
                                        </div>
										
                                      <div class="form-group">
                                            <label>Durum</label>
                                            <label class="form-control"><input type="radio" name="durum" value="Aktif"> Aktif</label>
                                            <label class="form-control"><input type="radio" name="durum" value="Pasif"> Pasif</label>
                                           
                                        </div>
										 </div>

                                        </div>
										
                                 
                                        <button type="reset" class="btn btn-warning">RESET</button>
                                        <button type="submit" class="btn btn-danger">KAYDET</button>

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