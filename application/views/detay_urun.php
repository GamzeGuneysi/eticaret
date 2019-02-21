<section class="main-content">
	<div class="row"><br></div>				
	<div class="row">						
		<div class="span12">
			<div class="row">
				<div class="span4">
					<img alt="" src="<?=base_url()?>uploads/<?=$urun[0]->resim?>">	<!--urunumun ana fotosu  -->										
					<ul class="thumbnails small">
						<?php foreach ($galeri as $rs) { ?> <!--urun detaydaki galeri için  -->						
							<li class="span1">
								<a href="<?=base_url()?>uploads/<?=$rs->resim?>" target="_blank" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""></a>
							</li>
						<?php } ?>								
					</ul>
				</div>
				<div class="span5">
					<address>
						<strong>Adı:</strong> <span><?=$urun[0]->adi?></span><br>
						<strong>Kategorisi:</strong> <span><?=$urun[0]->katadi?></span><br>
						<strong>Stok:</strong> <span><?=$urun[0]->stok?></span><br>
						<strong>Durum:</strong> <span><?=$urun[0]->durum?></span><br>								
					</address>									
					<h4><strong>Fiyat: ₺<?=$urun[0]->sfiyat?></strong></h4>
				</div>
				<div class="span5">
					<form action="<?=base_url()?>siparisler/sepete_ekle2/<?=$urun[0]->id?>/<?php if($this->session->userdata('uye_session')){echo($this->session->uye_session['id']);} ?>/<?=$urun[0]->sfiyat?>" method="post" class="form-inline">
						<label>Adet:</label>
						<input type="number" class="span1" name="adet" min="1" value="1">
						<button class="btn btn-inverse" type="submit">Sepete Ekle</button>
					</form>
				</div>							
			</div>
			<div class="row">
				<div class="span9">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#home">Açıklama</a></li>
					</ul>							 
					<div class="tab-content">
						<div class="tab-pane active" id="home">
							<p><?=$urun[0]->description?></p>
							<p><?=$urun[0]->aciklama?></p>
						</div>
					</div>							
				</div>
			</div>
		</div>
	</div>
</section>	