   <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="<?=base_url()?>uploads/<?=$this->session->admin_session['resim']?>" class="img-thumbnail" />
                            <div class="inner-text">
                                <?=$this->session->admin_session["adsoy"]?>
                                <!--böyle yazarak admin_session diye oluşturulan dizideki veritabanında adoyda yazan geldi.-->
                            <br />
                            </div>
                        </div>
                    </li>
                    <li><a  href="<?=base_url()?>admin"><i class="fa fa-dashboard "></i>Anasayfa</a></li>
                    <li><a href="<?=base_url()?>admin/uyeler"><i class="fa fa-desktop "></i>Üyeler</a></li>
                    <li><a href="<?=base_url()?>admin/urunler"><i class="fa fa-yelp "></i>Ürünler</a></li>
                   
					
                    <li>
                        <a href="<?=base_url()?>admin/siparisler"><i class="fa fa-desktop "></i>Sipariş  <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>admin/siparisler"><i class="fa fa-toggle-on"></i>Yeni</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/siparisler/siparisler_onayli"><i class="fa fa-bell "></i>Onaylandı</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url(); ?>admin/siparisler/kargodakiler"><i class="fa fa-circle-o "></i>Kargoda</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/siparisler/tamamlananlar"><i class="fa fa-bars "></i>Tamamlanan</a>
                            </li>
                             
                            </li>
                        
                        </ul>
					
                    <li><a href="<?=base_url()?>admin/kategoriler"><i class="fa fa-bicycle "></i>Kategoriler</a></li>
                    <li><a href="<?=base_url()?>/admin/home/ayarlar"><i class="fa fa-cog "></i>Ayarlar</a></li>
                    <li>
                        <a href="<?=base_url()?>/admin/mesaj"><i class="fa fa-sitemap "></i>Mesajlar </a>
                        
                    </li>
                </ul>
            </div>
        </nav>
        <!-- SIDEBAR END -->