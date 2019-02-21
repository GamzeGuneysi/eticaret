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
						
						<th>Adı Soyadı</th>
						<td><?=$veri[0]->adsoy?></td>
					  </tr>
					    <tr>
						<th>Email</th>
						<td><?=$veri[0]->email?></td>
						  </tr>
						    <tr>
						<th>Telefon</th>
						<td><?=$veri[0]->tel?></td>
						  </tr>
						    <tr>
						<th>Mesaj</th>
						<td><?=$veri[0]->mesaj?></td>
						  </tr>
						  <tr>
						<th>Durum</th>
						<td><?=$veri[0]->durum?></td>
						  </tr>
						    <tr>
						<th>Tarih</th>
						<td><?=$veri[0]->tarih?></td>
						  </tr>
						<th>Notunuz</th>
						<td><form method="post" action="<?php echo base_url(); ?>/admin/mesaj/guncelle/<?=$veri[0]->Id?>" >
							  <textarea name="adminnotu" id="adminnotu" cols="100">
                               <?=$veri[0]->adminnotu?> 
                              </textarea>
							
							
							 
							
						<th> <button type="submit" class="btn btn-danger">KAYDET</button></th>
                           
                                    </form>
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