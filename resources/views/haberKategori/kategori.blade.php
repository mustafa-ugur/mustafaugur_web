@extends('bolum.master')
@section('title', 'Anasayfa')
@section('content')
    <div class="archives post post1 padding-top-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bridcrumb"> <a href="{{ route('index') }}">Anasayfa</a> / {{ $kategoriler->ust_kategori->baslik }} / {{ $item->baslik }} </div>
                </div>
            </div>
            <div class="space-30"></div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="categories_title">
                                <h5>Kategori : <a href="entertainment.html#">{{ $item->baslik }}</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="entertrainment_carousel mb30">
                        <div class="entertrainment_item">
                            <div class="row justify-content-center">
                                @foreach($haberler as $haber)
                                <div class="col-lg-4">
                                    <div class="single_post post_type3 mb30">
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
                                                <a href="{{ route('haber.detail', $haber->id) }}">{{ $item->baslik }}</a>
                                                <a href="{{ route('haber.detail', $haber->id) }}">{{ $haber->tarih }}</a>
                                            </div>
                                            <h4><a href="{{ route('haber.detail', $haber->id) }}">{{ $haber->baslik }}</a></h4>
                                            <div class="space-10"></div>
                                            <p class="post-p">{{ $haber->ozet }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
