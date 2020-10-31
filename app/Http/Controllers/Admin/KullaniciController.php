<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kullanici;
use Illuminate\Support\Facades\Auth;
class KullaniciController extends Controller
{
    /*public function index() {
        return view('admin.giris');
    }*/
    public function giris() {
        if (request()->isMethod('post')) {
            $this->validate(request(), [
               'email' => 'required|email',
               'sifre' => 'required'
            ]);
            $credentials = [
            'email' => request()->get('email'),
            'password' => request()->get('sifre'),
            'yonetici' => 1
            ];
            if (Auth::guard('admin')->attempt($credentials)) {
                return redirect()->route('admin.index');
            }
            else {
                return back()->withInput();
            }
        }
        return view('admin.giris');
    }

    public function cikis() {
        Auth::guard('admin')->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('admin.giris');
    }
}
