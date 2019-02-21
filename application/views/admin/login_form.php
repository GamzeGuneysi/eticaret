<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMİN PANEL GİRİŞİ</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?=base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='<?=base_url()?>assets/admin/http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <h1 style="font-weight: bold;">Login Form</h1>
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form" method="post" action="<?=base_url()?>admin/login/login_ol">
                                    <hr />
									  
									   <?php if ($this->session->flashdata('mesaj'))
									   {?>
								<div class="panel panel-danger">
                        <div class="panel-heading">
						 
                            hata
                        </div>
                        <div class="panel-body">
                           <p><?=$this->session->flashdata('mesaj')?></p>
                        </div>
                        
                    </div>
					<?php } ?>
                                    <h5>Oturum Açmak İçin Giriş Yapınız</h5>
                                       <br />
									   
				
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="email" required class="form-control" placeholder="Your Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="sifre" required class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Hatırla
                                            </label>
                                            <span class="pull-right">
                                                   <a href="<?=base_url()?>admin/login/sifre_unuttum" >Şifremi unuttum? </a> 
                                            </span>
                                        </div>
                                     
                                     <input type="submit" class="btn btn-primary "value="Şimdi Gir"/>
                                    <hr />
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
