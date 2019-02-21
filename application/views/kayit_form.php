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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <h1 style="font-weight: bold;">Kayıt Form</h1>
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form" method="post" action="<?=base_url()?>home/kayit">
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
                                    <h5>Kayıt Olmak İçin Bilgileri Giriniz</h5>
                                       <br />
									   
				                        
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="adsoy" required class="form-control" placeholder="Adınız Soyadınız " />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="email" name="email" required class="form-control"  placeholder="Email Giriniz" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="sehir" required class="form-control" placeholder="Şehir " />
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="text" name="tel" required class="form-control"  placeholder="Telefon" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="password" name="sifre" required class="form-control" placeholder="Şifre Giriniz " />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="text" name="adres" required class="form-control"  placeholder="Adres Giriniz" />
                                        </div>
                                   
                                     
                                     <input type="submit" class="btn btn-primary" value="Kayıt Ol"/>
                                    <hr />
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
