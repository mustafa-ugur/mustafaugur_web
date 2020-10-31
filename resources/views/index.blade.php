@extends('bolum.master')
@section('title', 'Anasayfa')
@section('content')
    <div class="post_gallary_area primay_bg dark-v mb40">
        <div class="space-60"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="slider_demo2">
                            @foreach($haberler_slayt as $s_haber)
                                <div class="single_post post_type6 xs-mb30">
                                    <div class="post_img gradient1">
                                        @if($s_haber->videoResim == null)
                                            <img src="/upload/haberler/{{ $s_haber->resim }}" style="width: 100%; min-height: 500px; max-height: 500px; overflow: hidden;" />
                                        @else
                                            <img src="{{ $s_haber->videoResim }}" alt="" />
                                        @endif
                                    </div>
                                    <div class="single_post_text">
                                        <div class="meta meta_separator1">
                                            @foreach($kategoriler as $kategori)
                                                @if($kategori->id == $s_haber->kid)
                                                    <a href="{{ route('haberKategori.kategori', $kategori->id) }}">{{ $kategori->baslik }}</a>
                                                @endif
                                            @endforeach
                                            <a href="{{ route('haber.detail', $s_haber->id) }}">{{ $s_haber->tarih }}</a>
                                        </div>
                                        <h4><a href="{{ route('haber.detail', $s_haber->id) }}">{{ $s_haber->baslik }}</a></h4>
                                        <div class="space-10"></div>
                                        <p class="post-p">{{ $s_haber->ozet }}</p>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                            <div class="slider_demo1">
                                @foreach($haberler_slayt as $s_haber)
                                <div class="single_gallary_item" style="margin: 0px 10px;">
                                    @if($s_haber->videoResim == null)
                                        <img src="/upload/haberler/{{ $s_haber->resim }}" style="width: 100%; min-height: 50px; max-height: 50px; overflow: hidden;" />
                                    @else
                                        <img src="{{ $s_haber->videoResim }}" alt="images" />
                                    @endif
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="widget_tab md-mt-30">
                                {{--<ul class="nav nav-tabs">
                                    <li><a class="active" data-toggle="tab" href="#post1">RELATED</a></li>
                                    <li><a data-toggle="tab" href="#post2">RELATED</a></li>
                                    <li><a data-toggle="tab" href="#post3">POPULAR</a></li>
                                </ul>--}}
                                <div class="tab-content">
                                    <div id="post1" class="tab-pane fade show in active">
                                        <div class="widget tab_widgets mb30">
                                            @foreach($haberler as $haber)
                                            <div class="single_post widgets_small">
                                                <div class="post_img">
                                                    <div class="img_wrap">
                                                        <a href="{{ route('haber.detail', $haber->id) }}">
                                                            @if($haber->videoResim == null)
                                                                <img src="/upload/haberler/{{ $haber->resim }}" alt="images" />
                                                            @else
                                                                <img src="{{ $haber->videoResim }}" alt="images" />
                                                            @endif
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="single_post_text">
                                                    <div class="meta2 meta_separator1">
                                                        @foreach($kategoriler as $kategori)
                                                            @if($kategori->id == $haber->kid)
                                                                <a href="{{ route('haberKategori.kategori', $kategori->id) }}">{{ $kategori->baslik }}</a>
                                                            @endif
                                                        @endforeach
                                                        <a href="{{ route('haber.detail', $haber->id) }}">{{ $haber->tarih }}</a>
                                                    </div>
                                                    <h4><a href="{{ route('haber.detail', $haber->id) }}" style="height: 40px; overflow: hidden;">{{ $haber->baslik }}</a></h4>
                                                </div>
                                            </div>
                                                <div class="space-15"></div>
                                                <div class="border_white"></div>
                                                <br>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="feature_carousel_area mb40 dark-v" style="background: #233340;padding: 40px 20px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="widget-title">Kategoriler</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="nav_style1">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="single_post post_type6 post_type7">
                                <div class="post_img gradient1">
                                    <a href="{{ route('sayfa.detail', 1) }}">
                                        <img src="/assets_front/img/hakkimda.png" style="min-height: 200px;" />
                                    </a>
                                </div>
                                <div class="single_post_text">
                                    <h4>
                                        <a href="{{ route('sayfa.detail', 1) }}">Hakkımda</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="single_post post_type6 post_type7">
                                <div class="post_img gradient1">
                                    <a href="{{ route('referans.index') }}">
                                        <img src="/assets_front/img/referanslar.gif" style="min-height: 200px;" />
                                    </a>
                                </div>
                                <div class="single_post_text">
                                    <h4>
                                        <a href="{{ route('referans.index') }}">Referanslar</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single_post post_type6 post_type7">
                                <div class="post_img gradient1">
                                    <a href="{{ route('yetenek.index') }}">
                                        <img src="/assets_front/img/yetenek.jpg" style="min-height: 200px;" />
                                    </a>
                                </div>
                                <div class="single_post_text">
                                    <h4>
                                        <a href="{{ route('yetenek.index') }}">Yeteneklerim</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single_post post_type6 post_type7">
                                <div class="post_img gradient1">
                                    <a href="mailto:mustafa@cmdmedya.com">
                                        <img src="/assets_front/img/iletisim.jpg" style="min-height: 200px;" />
                                    </a>
                                </div>
                                <div class="single_post_text">
                                    <h4>
                                        <a href="mailto:mustafa@cmdmedya.com">Bana Ulaşın</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>


                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="entertrainments dark-v">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="businerss_news">
                                <div class="row">
                                    <div class="col-6 align-self-center">
                                        <h2 class="widget-title">Yazılarım</h2>
                                    </div>
                                    <div class="col-6 text-right align-self-center"><a href="#" class="see_all mb20">Tümünü Gör</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        @foreach($haberler as $haber)
                                        <div class="single_post post_type3 post_type12 mb30">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="{{ route('haber.detail', $haber->id) }}">
                                                        @if($haber->videoResim == null)
                                                            <img src="/upload/haberler/{{ $haber->resim }}" alt="" />
                                                        @else
                                                            <img src="{{ $haber->videoResim }}" alt="" />
                                                            @endif
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="single_post_text">
                                                <div class="meta3">
                                                    @foreach($kategoriler as $kategori)
                                                        @if($kategori->id == $haber->kid)
                                                            <a href="{{ route('haberKategori.kategori', $kategori->id) }}">{{ $kategori->baslik }}</a>
                                                        @endif
                                                    @endforeach
                                                    <a href="{{ route('haber.detail', $haber->id) }}">{{ $haber->tarih }}</a>
                                                </div>
                                                <h4><a href="{{ route('haber.detail', $haber->id) }}">{{ $haber->baslik }}</a></h4>
                                                <div class="space-10"></div>
                                                <p class="post-p">{{ $haber->ozet }}</p>
                                                <div class="space-20"></div>
                                                <a href="{{ route('haber.detail', $haber->id) }}" class="readmore">Devamını Oku</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6 col-lg-12">
                            <div class="widget mb30">
                                <h2 class="widget-title">Süper Lig Puan Durumu</h2>
                                <style>
                                    table {
                                        color: #ffffff !important;
                                        background-color: #233340 !important;
                                    }
                                </style>
                                <iframe src="https://www.alperozmen.kim/projeler/superlig/embed/" width="100%" height="1040px" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-70"></div>
@endsection
