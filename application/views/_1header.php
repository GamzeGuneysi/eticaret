<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=$sayfa?> <?=$veri[0]->ad?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?=base_url()?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="<?=base_url()?>/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="<?=base_url()?>/assets/themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="<?=base_url()?>/assets/themes/css/flexslider.css" rel="stylesheet"/>
		<link href="<?=base_url()?>/assets/themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="<?=base_url()?>/assets/themes/js/jquery-1.7.2.min.js"></script>
		<script src="<?=base_url()?>/assets/bootstrap/js/bootstrap.min.js"></script>				
		<script src="<?=base_url()?>/assets/themes/js/superfish.js"></script>
		<link href="<?=base_url()?>/assets/icons/css/font-awesome.css" rel="stylesheet" />	
		
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<a href="<?=base_url()?>" class="logo pull-left"><img src="<?=base_url()?>/assets/themes/images/logo.png" class="site_logo" alt=""></a>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
						<?php
						$anasayfa="null";
						$hakkimizda="null";
						$iletisim="null";
						$Bize_Yazin="null";
						$login="null";
						if($menu=="anasayfa")
							$anasayfa="active";
						if($menu=="hakkimizda")
							$anasayfa="active";
						if($menu=="iletisim")
							$anasayfa="active";
						if($menu=="Bize_Yazin")
							$anasayfa="active";
						if($menu=="login")
							$anasayfa="active";
						?>			
							<li class="<?=$anasayfa?>"><a href="<?=base_url()?>">Ana Sayfa</a></li>
							<li  class="<?=$hakkimizda?>"><a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a></li>
							<li  class="<?=$iletisim?>"><a href="<?=base_url()?>home/iletisim">İletişim</a></li>
							<li  class="<?=$Bize_Yazin?>"><a href="<?=base_url()?>home/Bize_Yazin">Bize Yazın</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		

		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">	
					<nav id="menu" class="pull-right">
					<ul>
					<?php foreach ($kategoriler as $rs){
					 if ($rs->parent_id==0) { ?>
						<li><a href="<?=base_url()?>urun/detay_kat/<?=$rs->Id?>"><?=$rs->adi?></a>
							<ul>
								<?php $p_id=$rs->Id;
								foreach ($kategoriler as $rs1){
								if ($rs1->parent_id==$p_id) { ?>
									<li><a href="<?=base_url()?>urun/detay_kat/<?=$rs1->Id?>"><?=$rs1->adi?></a></li>
								<?php } } ?>
							</ul>
						</li>
					<?php } }  ?>
						<li><?php if (!($this->session->userdata("uye_session"))) { ?>
							<a href="<?=base_url()?>home/login_ol">Login</a></li>
							<li><a href="<?=base_url()?>home/kayit_ol">Kayıt Ol</a></li>
						<?php } else { ?>
							<a href="#"><?=$this->session->uye_session["adsoy"]?></a>
							<ul>
							    <li><a href="<?=base_url()?>uye/hesabim">Hesabım</a></li>
								<li><a href="<?=base_url()?>mesaj/mesaj">Mesajlarım</a></li>
								<li><a href="<?=base_url()?>uye/siparislerim">Siparişlerim</a></li>
								<li><a href="<?=base_url()?>urun/sepetim/">Sepetim</a></li>
								<li><a href="<?=base_url()?>uye/cikis">Çıkış</a></li>
							</ul>
						</li>
						<?php } ?>
					</ul>	
					</nav>	
				</div>


			 </section>
			 
