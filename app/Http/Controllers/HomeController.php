<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\instrakulikuler;
use App\Models\esksrakulikuler;
use App\Models\Eskul;
use App\Models\Galeri;
use App\Models\Pengumuman;
use App\Models\Prestasi;
use App\Models\Kegiatan;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $galeri = Galeri::count();// <- nu di pake..
        $prestasi = Prestasi::count();
        $eskul = Eskul::count();
        $berita = Berita::count();
        $instrakulikuler = instrakulikuler::count();
        $ekstrakulikuler = esksrakulikuler::count();
        $agenda = Agenda::count();
        $pengumuman = Pengumuman::count();
        return view('home', compact('galeri','pengumuman', 'prestasi','eskul','berita','instrakulikuler','ekstrakulikuler','agenda'));
    }
   
}