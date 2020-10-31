@extends('bolum.master')
@section('title', 'Referanslar')
@section('content')

    <style>
        th {
            color: #ddd;
        }
        td {
            color: #ddd;
        }
    </style>
    <div class="archives post post1 padding-top-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bridcrumb"> <a href="{{ route('index') }}">Anasayfa</a> / Referanslar </div>
                </div>
            </div>
            <div class="widget_tab md-mt-30">
                <ul class="nav nav-tabs">
                    @foreach($refKategori as $kat)
                    <li><a data-toggle="tab" class=" @if($kat->id == 1) active @else @endif " href="#post{{ $kat->id }}">{{ $kat->baslik }}</a></li>
                    @endforeach
                </ul>
                <div class="tab-content">
                @foreach($refKategori as $kat)
                    <div id="post{{ $kat->id }}" class="tab-pane fade @if($kat->id == 1) show in active @else @endif">
                            <table class="table table-striped">
                                <thead>
                                    <th>#</th>
                                    <th>Referans Adı</th>
                                    <th>Referans Linki</th>
                                </thead>
                                <tbody>
                                @foreach($referanslar as $ref)
                                    @if($kat->id == $ref->kid)
                                    <tr>
                                        <td>{{ $ref->id }}</td>
                                        <td>{{ $ref->baslik }}</td>
                                        <td><a href="{{ $ref->link }}" target="_blank">{{ $ref->link }}</a> </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>

                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
