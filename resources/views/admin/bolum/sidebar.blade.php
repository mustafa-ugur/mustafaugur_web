<nav class="pcoded-navbar menu-light">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div">
            <div class="">
                <div class="main-menu-header">
                    <i class="fa fa-user" style="font-size: 50px; padding: 10px 0px"></i>
                    <div class="user-details">
                        <div id="more-details" style="color: #bbbcbb;">CMD MEDYA <i class="fa fa-caret-down"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
                    </ul>
                </div>
            </div>
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Menü</label>
                </li>
                <li class="nav-item"><a href="{{ route('admin.index') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-aperture"></i></span><span class="pcoded-mtext">Anasayfa</span></a></li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Haber Kısmı</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link"><span class="pcoded-micon"><i class="fa fa-newspaper"></i></span><span class="pcoded-mtext">Haberler</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('admin.haberler.index') }}">Haber Listesi</a></li>
                        <li><a href="{{ route('admin.haberler.ekle') }}">Haber Ekle</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link"><span class="pcoded-micon"><i class="fa fa-certificate"></i></span><span class="pcoded-mtext">Haber Kategori</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('admin.haber_kategori.index') }}">Kategori Listesi</a></li>
                        <li><a href="{{ route('admin.haber_kategori.ekle') }}">Kategori Ekle</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link"><span class="pcoded-micon"><i class="fa fa-comment"></i></span><span class="pcoded-mtext">Yorumlar</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('admin.yorumlar.index') }}">Yorum Listesi</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>İçerikler</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link"><span class="pcoded-micon"><i class="fa fa-file-alt"></i></span><span class="pcoded-mtext">Sayfalar</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('admin.sayfa.index') }}">Sayfa Listesi</a></li>
                        <li><a href="{{ route('admin.sayfa.ekle') }}">Sayfa Ekle</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link"><span class="pcoded-micon"><i class="fab fa-react"></i></span><span class="pcoded-mtext">Referanslar</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('admin.referanslar.index') }}">Referanslar Listesi</a></li>
                        <li><a href="{{ route('admin.referanslar.ekle') }}">Referanslar Ekle</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Site Ayarları</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fa fa-cogs"></i></span><span class="pcoded-mtext">Genel Ayarlar</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="#">İletişim Bilgileri</a></li>
                        <li><a href="#">Sosyal Medya</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('admin.cikis') }}" class="nav-link "><span class="pcoded-micon"><i class="fa fa-power-off"></i></span><span class="pcoded-mtext">Çıkış Yap</span></a></li>
            </ul>
        </div>
    </div>
</nav>
