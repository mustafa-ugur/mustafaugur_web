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
                                <h5 class="m-b-10">yorum Listesi</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
                                <li class="breadcrumb-item"><a href="#">yorum Listesi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 style="margin-top: 10px;">yorumlar Listesi</h5>
                        </div>
                        <div class="card-body">
                            <div class="dt-responsive table-responsive">
                                <table id="autofill" class="table table-striped table-bordered nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Yorum Yazan</th>
                                        <th>Haber Başlığı</th>
                                        <th>Eklenme Tarihi</th>
                                        <th>Onay Durumu</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($yorumlar as $yorum)
                                        <tr>
                                            <td>{{ $yorum->id }}</td>
                                            <td>{{ $yorum->kullanici->adsoyad }}</td>
                                            <td>{{ $yorum->yorumlar->baslik }}</td>
                                            <td>{{ $yorum->created_at }}</td>
                                            <td style="width: 2%;">
                                                @if ($yorum->aktif == 1)
                                                    <a class="btn aktif" href="{{ route('admin.yorumlar.pasif', $yorum->id) }}">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                @else
                                                    <a class="btn pasif" href="{{ route('admin.yorumlar.aktif', $yorum->id) }}">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                @endif
                                            </td>
                                            <td class="table-action" style="width: 10%;">
                                                <a href="{{ route('admin.yorumlar.sil', $yorum->id) }}" onclick="return confirmDel();" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Resim</th>
                                        <th>yorumlar Başlığı</th>
                                        <th>Eklenme Tarihi</th>
                                        <th>Site</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
