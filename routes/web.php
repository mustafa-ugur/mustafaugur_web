<?php

use App\Models\Kategoriler;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::redirect('/', '/admin/giris');
    Route::match(['get', 'post'], '/giris', 'KullaniciController@giris')->name('admin.giris');
    Route::get('/cikis', 'KullaniciController@cikis')->name('admin.cikis');
    Route::group(['middleware' => 'admin'], function () {
       Route::get('/index', 'IndexController@index')->name('admin.index');

       Route::group(['prefix' => 'haberler'], function() {
           Route::match(['get', 'post'], '/', 'HaberlerController@index')->name('admin.haberler.index');
           Route::get('/ekle', 'HaberlerController@form')->name('admin.haberler.ekle');
           Route::get('/duzenle{id}', 'HaberlerController@form')->name('admin.haberler.duzenle');
           Route::post('/duzenle{id?}', 'HaberlerController@kaydet')->name('admin.haberler.kaydet');
           Route::get('/sil{id}', 'HaberlerController@sil')->name('admin.haberler.sil');
           Route::get('/aktif{id}', 'HaberlerController@aktif')->name('admin.haberler.aktif');
           Route::get('/pasif{id}', 'HaberlerController@pasif')->name('admin.haberler.pasif');
           Route::get('/slayt_aktif{id}', 'HaberlerController@slayt_aktif')->name('admin.haberler.slayt_aktif');
           Route::get('/slayt_pasif{id}', 'HaberlerController@slayt_pasif')->name('admin.haberler.slayt_pasif');
           Route::get('/kayan_pasif{id}', 'HaberlerController@kayan_pasif')->name('admin.haberler.kayan_pasif');
           Route::get('/kayan_aktif{id}', 'HaberlerController@kayan_aktif')->name('admin.haberler.kayan_aktif');
       });

       Route::group(['prefix' => 'haber_kategori'], function() {
            Route::match(['get', 'post'], '/', 'HaberKategoriController@index')->name('admin.haber_kategori.index');
            Route::get('/ekle', 'HaberKategoriController@form')->name('admin.haber_kategori.ekle');
            Route::get('/duzenle{id}', 'HaberKategoriController@form')->name('admin.haber_kategori.duzenle');
            Route::post('/duzenle{id?}', 'HaberKategoriController@kaydet')->name('admin.haber_kategori.kaydet');
            Route::get('/sil{id}', 'HaberKategoriController@sil')->name('admin.haber_kategori.sil');
            Route::get('/aktif/{id}', 'HaberKategoriController@aktif')->name('admin.haber_kategori.aktif');
            Route::get('/pasif/{id}', 'HaberKategoriController@pasif')->name('admin.haber_kategori.pasif');
        });

       Route::group(['prefix' => 'yorumlar'], function() {
            Route::match(['get', 'post'], '/', 'YorumlarController@index')->name('admin.yorumlar.index');
            Route::get('/sil{id}', 'YorumlarController@sil')->name('admin.yorumlar.sil');
            Route::get('/aktif{id}', 'YorumlarController@aktif')->name('admin.yorumlar.aktif');
            Route::get('/pasif{id}', 'YorumlarController@pasif')->name('admin.yorumlar.pasif');
        });

       Route::group(['prefix' => 'referanslar'], function() {
            Route::match(['get', 'post'], '/', 'ReferanslarController@index')->name('admin.referanslar.index');
            Route::get('/ekle', 'ReferanslarController@form')->name('admin.referanslar.ekle');
            Route::get('/duzenle{id}', 'ReferanslarController@form')->name('admin.referanslar.duzenle');
            Route::post('/duzenle{id?}', 'ReferanslarController@kaydet')->name('admin.referanslar.kaydet');
            Route::get('/sil{id}', 'ReferanslarController@sil')->name('admin.referanslar.sil');
            Route::get('/aktif{id}', 'ReferanslarController@aktif')->name('admin.referanslar.aktif');
            Route::get('/pasif{id}', 'ReferanslarController@pasif')->name('admin.referanslar.pasif');
        });

       Route::group(['prefix' => 'sayfa'], function() {
            Route::match(['get', 'post'], '/', 'SayfaController@index')->name('admin.sayfa.index');
            Route::get('/ekle', 'SayfaController@form')->name('admin.sayfa.ekle');
            Route::get('/duzenle{id}', 'SayfaController@form')->name('admin.sayfa.duzenle');
            Route::post('/duzenle{id?}', 'SayfaController@kaydet')->name('admin.sayfa.kaydet');
            Route::get('/sil{id}', 'SayfaController@sil')->name('admin.sayfa.sil');
            Route::get('/aktif{id}', 'SayfaController@aktif')->name('admin.sayfa.aktif');
            Route::get('/pasif{id}', 'SayfaController@pasif')->name('admin.sayfa.pasif');
        });
    });
});

Route::get('/', 'IndexController@index')->name('index');

Route::group(['prefix' => 'yetenek'], function () {
    Route::get('/', 'yetenekController@index')->name('yetenek.index');
});

Route::group(['prefix' => 'referanslar'], function () {
   Route::get('/', 'ReferansController@index')->name('referans.index');
});

Route::group(['prefix' => 'haber'], function() {
    //Route::match(['get', 'post'], '/', 'HaberlerController@index')->name('admin.sayfa.index');
    Route::get('/detail/{id}', 'HaberlerController@detail')->name('haber.detail');
});

Route::group(['prefix' => 'sayfa'], function() {
    //Route::match(['get', 'post'], '/', 'HaberlerController@index')->name('admin.sayfa.index');
    Route::get('/detail/{id}', 'SayfaController@detail')->name('sayfa.detail');
});

Route::group(['prefix' => 'haberKategori'], function() {
    //Route::match(['get', 'post'], '/', 'HaberlerController@index')->name('admin.sayfa.index');
    Route::get('/kategori/{id}', 'HaberlerController@kategori')->name('haberKategori.kategori');
});
