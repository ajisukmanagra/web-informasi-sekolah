<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    public function index()
    {
        return view('/profil/sejarah');
        //  return view('/profil/profil-sekolah', compact('/profil/profil-sekolah'));
}
public function visi()
{
    return view('/profil/visi-misi-sekolah');
}
public function sarana()
{
    return view('/profil/sarana-prasarana');
}
public function struktur()
{
    return view('/profil/struktur-organisasi');
}
public function pemberi()
{
    return view('/profil/pembaritahuan');
}
public function guru()
{
    return view('/profil/guru-smp-pgri');
}
public function kontak()
{
    return view('/profil/kontak-sekolah');
}
}