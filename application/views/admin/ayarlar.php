<?php
$this->load->view('admin/header');
$this->load->view('admin/sidebar');
?>
<script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">BLANK PAGE</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
            </div>
        </div>
        <div class="panel panel-default">                      
            <div class="panel-body">
                <div class="col-md-8 col-sm-8 col-xs-26">
                    <div class="panel panel-danger">
                        <div class="col-md-18">
                            <div class="card">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#genel" aria-controls="genel" role="tab" data-toggle="tab" aria-expanded="true">Genel</a></li>
                                    <li role="presentation"><a href="#email" aria-controls="email" role="tab" data-toggle="tab">Email</a></li>
                                    <li role="presentation"><a href="#sosyal" aria-controls="sosyal" role="tab" data-toggle="tab">Sosyal</a></li>
                                    <li role="presentation"><a href="#hakkimizda" aria-controls="hakkimizda" role="tab" data-toggle="tab">Hakkımızda</a></li>
                                    <li role="presentation"><a href="#iletisim" aria-controls="iletisim" role="tab" data-toggle="tab">İletişim</a></li>
                                </ul>
                                <form role="form" method="post" action="<?=base_url()?>admin/home/ayarlar_guncelle/<?=$veri[0]->Id?>">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="genel">
                                            <h4><b>Genel Ayarlar</b></h4>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label> Adı </label>
                                                    <input class="form-control"  value="<?=$veri[0]->ad?>" name="ad" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label> Description</label>
                                                    <input class="form-control"  value="<?=$veri[0]->description?>" name="description" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label> Keywords</label>
                                                    <input class="form-control"  value="<?=$veri[0]->keywords?>" name="keywords" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>Adres</label>
                                                    <input class="form-control"  value="<?=$veri[0]->adres?>" name="adres" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>Telefon</label>
                                                    <input class="form-control"  value="<?=$veri[0]->tel?>" name="tel" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>Şehir</label>
                                                    <input class="form-control"  value="<?=$veri[0]->sehir?>" name="sehir" type="text">
                                                </div>
                                            </div>
                                        </div>   
                                        <div role="tabpanel" class="tab-pane" id="email">
                                            <h4><b>Email Ayarlar</b></h4>
                                            <div class="form-group">
                                                <label>Smtp Server</label>
                                                <input class="form-control"  value="<?=$veri[0]->smtpserver?>" name="smtpserver" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Email</label>
                                                <input class="form-control"  value="<?=$veri[0]->smtpemail?>" name="smtpemail" type="text">
                                            </div>
											<div class="form-group">
                                                <label>password</label>
                                                <input class="form-control"  value="<?=$veri[0]->password?>" name="password" type="text">
                                            </div>  
                                            <div class="form-group">
                                                <label>Port</label>
                                                <input class="form-control"  value="<?=$veri[0]->smtpport?>" name="port" type="text">
                                            </div>   
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="sosyal">
                                            <h3>Sosyal Medya Ayarları</h3><br>
                                            <center><label><i class="fa fa-facebook-square fa-3x"></i></label></center>
                                            <input class="form-control" type="text"  name="facebook" value="<?=$veri[0]->facebook?>">
                                            <center><label><i class="fa fa-twitter-square fa-3x"></i></label></center>
                                            <input class="form-control" type="text" name="twitter" value="<?=$veri[0]->twitter?>">
                                            <center><label><i class="fa fa-instagram-square fa-3x">instagram</i></label></center>
                                            <input class="form-control" type="text" name="instagram" value="<?=$veri[0]->instagram?>">
                                            <input type="hidden" name="id" value="<?=$veri[0]->Id?>">
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="hakkimizda">
                                            <label style="color: green; font-family: Verdana;">Hakkımızda</label><br>
                                            <textarea class="form-control" name="hakkimizda" id="editor1" rows="10" ><?=$veri[0]->hakkimizda?></textarea>
                                            <script>CKEDITOR.replace( 'editor1' );</script>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="iletisim">
                                            <label style="color: blue; font-family: roboto;">İletişim</label><br>
                                            <textarea class="form-control" name="iletisim" id="editor2" rows="10" ><?=$veri[0]->iletisim?></textarea>
                                            <script>CKEDITOR.replace( 'editor2' );</script>
                                        </div><br>
                                        <button type="submit" class="btn btn-danger form-control">GÜNCELLE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





</div><!-- header da  -->

<?php $this->load->view('admin/footer');
?>

