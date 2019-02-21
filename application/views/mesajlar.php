
<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span12">
								<!-- content start  -->



					<div class="span5">					
						<h4 class="title"><span class="text"><strong>mesaj</strong>Bilgileri</span></h4>
							<div   class="agileinfo-grap" style="width:100%;"  >  

  
				  <table id="table-breakpoint">
					<thead>
					  <tr>
						
						<th>Adı Soyadı</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telefon</th>
					
						
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Durum</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tarih</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Detay</th>
						
							<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sil</th>
					
					  </tr>
					</thead>
					
					<tbody>
					<?php
					foreach($veriler as $rs)
					{
					?> 
					  <tr>
					   
						<td><?=$rs->adsoy?></td>
			
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->email?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->tel?></td>
						
						
						<td><?=$rs->durum?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs->tarih?></td>
						
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>mesaj/detay/<?=$rs->Id?>"  class="hvr-icon-float-away col-24" >Detay</a></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>mesaj/sil/<?=$rs->Id?>"  onclick="return confirm(' Silmek istediğinize Emin Misin?')" class="hvr-icon-float-away col-24" >Sil</a></td>
					  </tr>
					  <?php } ?>
					 
					</tbody>
				  </table>
   
</div>



						
					</div>
					

								<!-- content stop -->
							</div>
						</div>
					</div>				
				</div>
			</section>