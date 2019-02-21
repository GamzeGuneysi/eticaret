   <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?=$this->session->admin_session["adsoy"]?><!--böyle yazarak admin_session diye oluşturulan dizideki veritabanında adoyda yazan geldi.-->
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a  href="<?=base_url()?>admin"><i class="fa fa-dashboard "></i>Anasayfa</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/uyeler"><i class="fa fa-desktop "></i>Üyeler<span class="fa arrow"></span></a>
                         
                    </li>
                     <li>
                        <a href="<?=base_url()?>admin/urunler"><i class="fa fa-yelp "></i>Ürünler<span class="fa arrow"></span></a>
                        
                            
                           
                       
                    </li>
                    <li>
                        <a href="table.html"><i class="fa fa-flash "></i>Sipariş </a>
                        
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Kategoriler<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="form.html"><i class="fa fa-desktop "></i>Türler </a>
                            </li>
                             <li>
                                <a href="form-advance.html"><i class="fa fa-code "></i></a>
                            </li>
                             
                           
                        </ul>
                    </li>
                     <li>
                        <a href="gallery.html"><i class="fa fa-anchor "></i>Galeri ve Video</a>
                    </li>
                     <li>
                        <a href="<?=base_url()?>/admin/home/ayarlar"><i class="fa fa-cog "></i>Ayarlar</a>
                    </li>
                    <li>
                        <a href="login.html"><i class="fa fa-sign-in "></i>Login Page</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Mesajlar <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-bicycle "></i>İstek ve Şikayetler</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a class="active-menu" href="blank.html"><i class="fa fa-square-o "></i>Blank Page</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- SIDEBAR END -->