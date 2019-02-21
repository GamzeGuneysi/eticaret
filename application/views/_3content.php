<section class="main-content">
	<div class="row"><br></div>
	<div class="row">
		<div class="span9">
			<ul class="thumbnails listing-products">
				<?php foreach ($urunler as $rs) { ?>
					<li class="span3">
						<div class="product-box">
							<span class="sale_tag"></span>												
							<a href="<?=base_url()?>urun/detay_urun/<?=$rs->id?>"><img alt="" src="<?=base_url()?>uploads/<?=$rs->resim?>" width="200px" ></a><br/>
							<a href="<?=base_url()?>urun/detay_urun/<?=$rs->id?>" class="title"><?=$rs->adi?></a><br/>
							<p class="category" style="color: #bcb1bc;"><?=$rs->katadi?></p>
							<p class="price">₺<?=$rs->sfiyat?></p>
							<a href="<?=base_url()?>siparisler/sepete_ekle/<?=$rs->id?>/<?php if($this->session->userdata('uye_session')){echo($this->session->uye_session['id']);} ?>/1/<?=$rs->sfiyat?>" class="btn btn-inverse">Sepete Ekle</a>
						</div>
					</li>
				<?php } ?>
			</ul>  
		</div>				
	</div>
</section>
<!--detay_kategori sayfasının aynısı-->