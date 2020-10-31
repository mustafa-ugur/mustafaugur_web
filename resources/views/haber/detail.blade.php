@extends('bolum.master')
@section('title', 'Anasayfa')
@section('content')


    <div class="archives post post1 padding-top-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bridcrumb"> <a href="{{ route('index') }}">Anasayfa</a> / @if($item_kategori->ust_id != null) {{ $item_ust_kategori->baslik }} @endif / {{ $item_kategori->baslik }} / {{ $item->baslik }} </div>
                </div>
            </div>
            <div class="space-30"></div>
            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <div class="single_post_heading white">
                        <h1>{{ $item->baslik }}</h1>
                        <div class="space-10"></div>
                        <p>{{ $item->ozet }}</p>
                    </div>
                    <div class="space-40"></div>
                    @if($item->videoResim == null)
                        <img src="/upload/haberler/{{ $item->resim }}" alt="" />
                    @else
                        <img src="{{ $item->videoResim }}" alt="" />
                    @endif
                    <div class="space-20"></div>
                    <p>{!! str_replace('_', ' ', $item->aciklama)  !!}</p>
                    <div class="space-20"></div>
                </div>
                <div class="col-md-6 col-lg-4">

                    <div class="widget_tab">
                        <div class="tab-content">
                            <div id="post1" class="tab-pane fade show in active">
                                <div class="widget tab_widgets mb30">
                                    @foreach($haberler as $it)
                                        @if($it->kid == $item_kategori->id)
                                    <div class="single_post widgets_small">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="{{route('haber.detail', $it->id)}}">
                                                    @if($it->videoResim == null)
                                                        <img src="/upload/haberler/{{ $it->resim }}" alt="" />
                                                    @else
                                                        <img src="{{ $it->videoResim }}" alt="" />
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="{{route('haber.detail', $it->id)}}"> {{ $it->baslik }} </a></h4>
                                        </div>
                                    </div>
                                    <div class="space-15"></div>
                                    <div class="border_white"></div>
                                    <div class="space-15"></div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
