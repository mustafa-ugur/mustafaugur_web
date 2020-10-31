@extends('bolum.master')
@section('title', 'Hakkımda')
@section('content')


    <div class="archives post post1 padding-top-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bridcrumb"> <a href="{{ route('index') }}">Anasayfa</a> / {{ $item->baslik }} </div>
                </div>
            </div>
            <div class="space-30"></div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="single_post_heading white">
                        <h1>{{ $item->baslik }}</h1>
                    </div>
                    <div class="space-40"></div>
                    <img src="/upload/sayfa/{{ $item->resim }}" style="width: 50%; float: left; padding-right: 20px; " />
                    <div class="space-20"></div>
                    <p>{!! str_replace('_', ' ', $item->aciklama)  !!}</p>
                    <div class="space-20"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
