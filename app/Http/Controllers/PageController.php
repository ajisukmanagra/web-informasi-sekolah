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
class PageController extends Controller
{
    public function pesanPost(Request $req)
    {
        $id = $req->get('id');
        if($id)
        {
            $pesan = Pesan::find($id);
        }else
        {
            $pesan = new Pesan;
        }
        $pesan->nama = $req->nama;
        $pesan->email = $req->email;
        $pesan->isi = $req->isi;
        $pesan->save();
        return redirect()->back()->with('success', 'Data Berhasil Di Simpan');
    }

    public function prestasi()
    {
        $prestasi = Prestasi::paginate(10);
        return view('page.prestasi', ['prestasi' => $prestasi]);
    }

    public function berita()
    {
        $berita = Berita::all();
        return view('page.berita', ['berita' => $berita]);
    }

    public function galeri()
    {
        $galeri = Galeri::all();
        return view('page.galeri', ['galeri' => $galeri]);
    }

    public function eskul()
    {
        $eskul = Eskul::all();
        return view('page.eskul', ['eskul' => $eskul]);
    }

    public function lihatBerita($id)
    {
        $berita = Berita::find($id);
        return view('page.detail.lihat-berita', ['berita' => $berita]);
    }

    public function profileSekolah()
    {
        return view('profile-sekolah');
    }

    public function sejarah()
    {
        return view('page.sejarah-sekolah');
    }

    public function akreditasi()
    {
        return view('page.akreditasi');
    }

    public function visiMisi()
    {
        return view('page.visi-misi');
    }

    public function strukturOrganisasi()
    {
        $strukturs = StrukturOrganisasi::latest()->get();
        return view('page.struktur-organisasi', compact('strukturs'));
    }

    public function nilaiOnline()
    {
        $nilais = Siswa::latest()->get();
        return view('page.nilai-online', compact('nilais'));
    }

    public function nilaiOnlineSet($nis)
    {
        $nilai = Nilai::where('nis', $nis)->get();
        return view('page.nilai-online-set', compact('nilai'));
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::orderBy('created_at', 'asc')->get();
        return view('page.pengumuman', compact('pengumuman'));
    }

    public function intrakulikuler()
    {
        $intrakulikuler = instrakulikuler::where('status', 'intrakulikuler')->get();
        return view('page.intrakulikuler', compact('intrakulikuler'));
    }

    public function ekstrakulikuler()
    {
        $ekstrakulikuler = esksrakulikuler::where('status', 'ekstrakulikuler')->get();
        return view('page.ekstrakulikuler', compact('ekstrakulikuler'));
    }
}
