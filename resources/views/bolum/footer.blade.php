<div class="footer footer_area1 dark-2">
    <div class="container">
        <div class="border_white"></div>
        <div class="space-40"></div>
        <div class="row justify-content-center">
            <div class="col-lg-4 cta">
                <div class="footer_logo logo text-center">
                    <a href="{{ route('index') }}">
                        <h2 style="font-family: cursive; font-size: 29px;"><i>MUSTAFA UĞUR</i></h2>
                        <span style="color: #738290">Backend developer</span>
                    </a>
                </div>
                <div class="social2">
                    <ul class="inline">
                        <li><a target="_blank" href="https://instagram.com/ugur.java"><i class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100010451976638"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/channel/UCNCA0lFpmgGvMGYTSf7m6hQ?view_as=subscriber"><i class="fab fa-youtube"></i></a></li>
                        <li><a target="_blank" href="https://linkedin.com/in/mustafa-uğur-70704bb4 "><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-4">
                <div class="single_footer_nav border_white_right">
                    <h3 class="widget-title2">Kategoriler</h3>
                    <ul>
                        @foreach(get_kategori() as $kat)
                            <li><a href="{{ route('haberKategori.kategori', $kat->id) }}">{{ $kat->baslik }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single_footer_nav border_white_right">
                    <h3 class="widget-title2">Linkler</h3>
                    <ul>
                        <li><a href="{{ route('sayfa.detail', 1) }}">Hakkımda</a></li>
                        <li><a href="#">Referanslarım</a></li>
                        <li><a href="#">Yeteneklerim</a></li>
                        <li><a href="#">İletişim</a></li>
                    </ul>
                </div>
            </div>
    </div>
</div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>&copy; Copyright @php echo date('Y') @endphp , Tüm Hakları Saklıdır</p>
                </div>
            </div>
        </div>
    </div>
</div>
