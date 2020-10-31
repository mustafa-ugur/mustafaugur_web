@extends('admin.bolum.master')
@section('title', 'Admin Panel')
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Haber Listesi</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
                                <li class="breadcrumb-item"><a href="#">Haber Listesi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 style="margin-top: 10px;">haberler Listesi</h5>
                            <a href="{{ route('admin.haberler.ekle') }}" class="btn btn-primary float-right"> haberler Ekle </a>
                        </div>
                        <div class="card-body">
                            <div class="dt-responsive table-responsive">
                                <table id="autofill" class="table table-striped table-bordered nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Resim</th>
                                        <th>Haber Başlığı</th>
                                        <th>Eklenme Tarihi</th>
                                        <th>Slayt</th>
                                        <th>Kayan Yazı</th>
                                        <th>Site</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($haberler as $haber)
                                        <tr>
                                            <td>{{ $haber->id }}</td>
                                            <td style="width: 5%;">
                                                @if($haber->videoResim == null)
                                                    <img src="/upload/haberler/{{ $haber->resim }}" alt="images" class="wid-70 align-top m-r-15" />
                                                @else
                                                    <img src="{{ $haber->videoResim }}" alt="images" class="wid-70 align-top m-r-15" />
                                                @endif
                                            </td>
                                            <td>{{ $haber->baslik }}</td>
                                            <td>{{ $haber->created_at }}</td>
                                            <td style="width: 2%;">
                                                @if ($haber->slayt == 1)
                                                    <a class="btn aktif" href="{{ route('admin.haberler.slayt_pasif', $haber->id) }}">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                @else
                                                    <a class="btn pasif" href="{{ route('admin.haberler.slayt_aktif', $haber->id) }}">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                @endif
                                            </td>

                                            <td style="width: 2%; text-align: center">
                                                @if ($haber->kayan_yazi == 1)
                                                    <a class="btn aktif" href="{{ route('admin.haberler.kayan_pasif', $haber->id) }}">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                @else
                                                    <a class="btn pasif" href="{{ route('admin.haberler.kayan_aktif', $haber->id) }}">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                @endif
                                            </td>

                                            <td style="width: 2%;">
                                                @if ($haber->aktif == 1)
                                                    <a class="btn aktif" href="{{ route('admin.haberler.pasif', $haber->id) }}">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                @else
                                                    <a class="btn pasif" href="{{ route('admin.haberler.aktif', $haber->id) }}">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                @endif
                                            </td>
                                            <td class="table-action" style="width: 10%;">
                                                <a href="{{ route('admin.haberler.duzenle', $haber->id) }}" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                                <a href="{{ route('admin.haberler.sil', $haber->id) }}" onclick="return confirmDel();" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
