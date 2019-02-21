 <?php
 $this->load->view('admin/header');
		$this->load->view('admin/sidebar');?>
 
 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
                <!-- /. ROW  -->
                <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        
                        
                        <div class="panel-body">
						
			<div class="col-md-8 col-sm-8 col-xs-26">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           Kategoriler Bilgilerini Giriniz
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?=base_url()?>admin/kategoriler">
										<div class="form-group">
                                            <label> Adı</label>
                                            <input class="form-control" name="adi" type="text">
                                    
                                        </div>
											<div class="form-group">
                                            <label> Kategori</label>
   											<select class="form-control" name="parent_id" type="text">
                                                <option value="0" selected>Ana Kategori</option>
                                                <?php foreach ($veriler as $rs){ ?>
                                                    <option value="<?=$rs->Id?>"><?=$rs->adi?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
										
										 </div>

                                        </div>
                                        <button type="submit" class="btn btn-danger">KAYDET</button>

                                    </form>
                                    <br>
                                    <div class="panel-body">
                                    <table class="panel-body">
                                        <tr><th>-ID - </th><th> ParentID - </th><th> Kategori</th></tr>
                                        <?php foreach ($veriler2 as $rs2){ ?>
                                            <tr><td><?=$rs2->Id?></td><td><center><?=$rs2->parent_id?></center></td><td><?=$rs2->adi?></td></tr>
                                        <?php } ?>
                                    </table></div>
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