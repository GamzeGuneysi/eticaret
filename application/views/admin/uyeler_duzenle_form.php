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
                          Üye Düzenleme Menüsü
                        </div>
                        
                        <div class="panel-body">
						
			<div class="col-md-8 col-sm-8 col-xs-26">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           Üye Bilgilerini Giriniz
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?=base_url()?>admin/uyeler/guncelle/<?=$veri[0]->id?>">
                                        <div class="form-group">
                                            <label> Adı Soyadı</label>
                                            <input class="form-control" value="<?=$veri[0]->adsoy?>" name="adsoy" type="text">
                                    
                                        </div>
                                 <div class="form-group">
                                            <label> Email</label>
                                            <input class="form-control" value="<?=$veri[0]->email?>" name="email" type="text">
                                    
                                        </div>
                                            <div class="form-group">
                                            <label>Şifre </label>
                                            <input class="form-control" value="<?=$veri[0]->sifre?>" type="password" name="sifre">
                                    
                                        </div>
                                
										<div class="form-group">
                                            <label>Telefon</label>
                                            <input class="form-control" value="<?=$veri[0]->tel?>"  name="tel" type="text">
                                    
                                        </div>
										<div class="form-group">
                                            <label>Adres</label>
                                            <input class="form-control" value="<?=$veri[0]->adres?>" name="adres" type="text">
                                     
                                        </div>
										
										<div class="form-group">
                                            <label> Şehir</label>
   											<select class="form-control" value="<?=$veri[0]->sehir?>" name="sehir" type="text">
                                                <option>Ankara</option>
                                                <option>İstanbul</option>
                                                <option>Bursa</option>
                                                <option>Karabük</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Yetki</label>
                                            <select class="form-control" value="<?=$veri[0]->yetki?>" name="yetki" type="text">
                                                <option>Uye</option>
                                                <option>Satıcı</option>
                                                <option>Yorumcu</option>
                                                <option>Yazar</option>
                                            </select>

                                        </div>
										<div class="form-group">
                                            <label>Durum</label>
                                           <select class="form-control" value="<?=$veri[0]->durum?>" name="durum" type="text">
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