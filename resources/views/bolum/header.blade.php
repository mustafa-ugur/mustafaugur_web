<div class="searching">
    <div class="container">
        <div class="row">
            <div class="col-8 text-center m-auto">
                <div class="v1search_form">
                    <form action="#">
                        <input type="search" placeholder="Ara." />
                        <button type="submit" class="cbtn1">Ara</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="close_btn"><i class="fal fa-times"></i></div>
</div>

<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-8 align-self-center">
                <div class="trancarousel_area white">
                    <p class="trand">Trend</p>
                    <div class="trancarousel owl-carousel nav_style1">
                        @foreach(kayan_haber() as $k_haber)
                        <div class="trancarousel_item">
                            <p><a href="{{ route('haber.detail', $k_haber->id) }}"> {{ $k_haber->baslik }} </a></p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 align-self-center">
                <div class="top_date_social text-right">
                    <div class="paper_date white">
                        <p> @php echo date('d/m/Y') @endphp </p>
                    </div>
                    <div class="social1 white">
                        <ul class="inline">
                            <li><a target="_blank" href="https://instagram.com/ugur.java"><i class="fab fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100010451976638"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/channel/UCNCA0lFpmgGvMGYTSf7m6hQ?view_as=subscriber"><i class="fab fa-youtube"></i></a></li>
                            <li><a target="_blank" href="https://linkedin.com/in/mustafa-uğur-70704bb4 "><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="border_white"></div>

<div class="main-menu dark-2">
    <div class="main-nav clearfix is-ts-sticky" style="padding: 20px 0px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 align-self-center">
                    <div class="logo text-center">
                        <a href="{{ route('index') }}">
                            <h2 style="font-family: cursive; font-size: 29px;"><i>MUSTAFA UĞUR</i></h2>
                            <span style="color: #738290">Backend developer</span>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-8">
                    <div class="newsprk_nav stellarnav">
                        <ul id="newsprk_menu">
                            <li><a href="{{ route('index') }}">Anasayfa</a></li>
                            <li><a href=""> Yazılarım <i class="fal fa-angle-down"></i> </a>
                                <ul>
                                    @foreach(get_kategori() as $kat)
                                        <li>
                                            <a href="{{route('haberKategori.kategori', $kat->id)}}"> {{ $kat->baslik }} <i class="fal fa-angle-down"></i></a>
                                            <ul>
                                                @foreach($kat->alt_kategoriler as $kate)
                                                    <li><a href="{{route('haberKategori.kategori', $kate->id)}}">{{ $kate->baslik  }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ route('sayfa.detail', 1) }}"> Hakkımda </a> </li>
                            <li><a href="{{ route('referans.index') }}"> Referanslar </a> </li>
                            <li><a href="{{ route('yetenek.index') }}"> Yeteneklerim </a> </li>
                            <li><a href="mailto:mustafa@cmdmedya.com"> Bana Ulaşın </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
