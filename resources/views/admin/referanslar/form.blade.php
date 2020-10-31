@extends('admin.bolum.master')
@section('title', 'Admin Panel')
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Referans {{ @$item->id > 0 ? "Düzenle" : "Ekle" }}</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Ansayfa</a></li>
                                <li class="breadcrumb-item"><a href="#">Referans {{ @$item->id > 0 ? "Düzenle" : "Ekle" }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>Referans {{ @$item->id > 0 ? "Düzenle" : "Ekle" }}</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('admin.referanslar.kaydet', $item->id) }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Referans Başlığı</label>
                                            <input type="text" class="form-control" name="baslik" id="baslik" placeholder="Referans Başlığı" value="{{ $item->baslik }}" require>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">link</label>
                                            <input type="text" class="form-control" name="link" id="link" placeholder="Link" value="{{ $item->link }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Haber Kategori</label>
                                            <select name="kid" class="form-control" id="">
                                                <option value=""> kategori Seçiniz </option>
                                                @foreach($referanskat as $kat)
                                                    <option value="{{ $kat->id }}" {{ $kat->id == $item->kid ? 'selected' : '' }}> {{ $kat->baslik }} </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <button type="submit" class="btn  btn-primary">{{ @$item->id > 0 ? "Güncelle" : "Kaydet" }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
