 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-head-line">Admin Detail</h3>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info"><center>
                         <table style="text-align: center;">
                             <tr><th style="text-align: right;">Profil Resmi: &nbsp;</th><td style="text-align: left;"><a href="<?=base_url()?>/uploads/<?=$veri[0]->resim?>" target="_blank"><img src="<?=base_url()?>/uploads/<?=$veri[0]->resim?>" height="50px"></a></td></tr>
                             <tr><th style="text-align: right;">Adı Soyadı: &nbsp;</th><td style="text-align: left;"><?=$veri[0]->adsoy?></td></tr>
                             <tr><th style="text-align: right;">E-mail: &nbsp;</th><td style="text-align: left;"><?=$veri[0]->email?></td></tr>
                             <tr><th style="text-align: right;">Yetki: &nbsp;</th><td style="text-align: left;"><?=$veri[0]->yetki?></td></tr>
                             <tr><th style="text-align: right;">Durum: &nbsp;</th><td style="text-align: left;"><?=$veri[0]->durum?></td></tr>
                         </table></center>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>