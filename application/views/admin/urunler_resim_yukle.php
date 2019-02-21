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
                          Ürün Resim  Ekleme Menüsü
                        </div>
                        
                        <div class="panel-body">
						
			<div class="col-md-8 col-sm-8 col-xs-26">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                          Eklenecek Resmi Seçiniz
                        </div>
                        <div class="panel-body">
						*Yüklenecek resim dosyası türleri (gif|jpg|png) max boyutlar: 1024x1024, boyut:1000kb
						<?php if ($this->session->flashdata("mesaj")) { ?>
						    <div class="alert alert-danger alert-dismissable">
                                <h4>Hata</h4>
                              <p> <?=$this->session->flashdata("mesaj")?></p> 
                           
						   </div>
						<?php } ?>
                           
						   <form role="form" method="post"  enctype="multipart/form-data" action="<?=base_url()?>admin/urunler/resim_kaydet/<?=$id?>">
                                        <div class="form-group">
                                           
                                            <input class="form-control" name="resim" type="file"></input></br>
                                    
                                    
                                            <button type="submit" class="btn btn-info pull-right">RESMİ YÜKLE</button>

                           </form>
						    <img  src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" height="200">
									
									
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