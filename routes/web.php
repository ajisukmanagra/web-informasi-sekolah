<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
  $galeri =  App\Models\Galeri::paginate(3);
  $prestasi = App\Models\Prestasi::paginate(5);
  $berita = App\Models\Berita::paginate(3);
  $eskul = App\Models\Eskul::paginate(3);
  $agenda = App\Models\Agenda::paginate(3);
  $ekstrakulikuler = App\Models\esksrakulikuler::paginate(4);
  $instrakulikuler = App\Models\instrakulikuler::paginate(4);
  $pengumuman = App\Models\Pengumuman::all();
  return view('welcome', ['galeri' => $galeri, 'prestasi' => $prestasi, 'instrakulikuler' => $instrakulikuler, 'ekstrakulikuler' =>   $ekstrakulikuler,  'berita' => $berita, 'eskul' => $eskul, 'agenda' => $agenda, 'pengumuman' => $pengumuman]);
});
// Route::get('/', function () {
//   return view('welcome');
// });

Auth::routes();

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::get('/profile-sekolah', function () {
  return view('profile-sekolah');
})->name('profile-sekolah');


//halaman welcome

Route::get('/intrakulikuler', [App\Http\Controllers\PageController::class, 'intrakulikuler'])->name('intrakulikuler');
Route::get('/ekstrakulikuler', [App\Http\Controllers\PageController::class, 'ekstrakulikuler'])->name('ekstrakulikuler');
Route::get('/agenda', [App\Http\Controllers\PageController::class, 'agenda'])->name('agenda');
Route::get('/pengumuman', [App\Http\Controllers\PageController::class,'pengumuman'])->name('pengumuman');
Route::get('/prestasi',  [App\Http\Controllers\PageController::class, 'prestasi'])->name('prestasi');
Route::get('/baca-berita',  [App\Http\Controllers\PageController::class,'berita'])->name('berita');
Route::get('/baca-berita/{id}', [App\Http\Controllers\PageController::class,'lihatBerita'])->name('baca-berita');
Route::get('/eskul',  [App\Http\Controllers\PageController::class,'eskul'])->name('eskul');
Route::get('/galeri',  [App\Http\Controllers\PageController::class,'galeri'])->name('galeri');
Route::get('/sejarah-sekolah', [App\Http\Controllers\PageController::class,'sejarah'])->name('sejarah');
Route::get('/akreditasi',  [App\Http\Controllers\PageController::class,'akreditasi'])->name('akreditasi');
Route::get('/visi-misi',  [App\Http\Controllers\PageController::class,'visiMisi'])->name('visi-misi');
Route::get('/struktur-organisasi',  [App\Http\Controllers\PageController::class,'strukturOrganisasi'])->name('struktur-organisasi');
Route::get('/nilai-online',  [App\Http\Controllers\PageController::class,'nilaiOnline'])->name('nilai-online');
Route::get('/nilai-online/{nis}', [App\Http\Controllers\PageController::class,'nilaiOnlineSet'])->name('nilai-online-set');


 // Website Sekolah
 //berita

 Route::get('/admin/berita',[App\Http\Controllers\AdminController::class,'beritaGet'])->name('admin.berita.index');
 Route::get('/admin/berita/create', [App\Http\Controllers\AdminController::class,'beritaCreate'])->name('admin/berita/create');
 Route::post('/admin/berita-post',[App\Http\Controllers\AdminController::class,'beritaPost'])->name('admin.berita.post');
 Route::get('/admin/berita/edit/{id}',[App\Http\Controllers\AdminController::class,'beritaEdit'])->name('admin.berita.edit');
 Route::get('/admin/berita/index/delete/{id}', [App\Http\Controllers\AdminController::class,'beritaDel']);
 Route::get('/admin/berita/detail/{id}', [App\Http\Controllers\AdminController::class,'beritaDetail'])->name('admin.berita.detail');

 //agenda
 Route::get('/admin/agenda', [App\Http\Controllers\AdminController::class,'agendaGet'])->name('admin.agenda.index');
 Route::get('/admin/agenda/create', [App\Http\Controllers\AdminController::class,'agendaCreate'])->name('admin/agenda/create');
 Route::post('/admin/agenda-post', [App\Http\Controllers\AdminController::class,'agendaPost'])->name('admin.agenda.post');
 Route::get('/admin/agenda/edit/{id}', [App\Http\Controllers\AdminController::class,'agendaEdit'])->name('admin.agenda.edit');
 Route::get('/admin/agenda/index/delete/{id}',[App\Http\Controllers\AdminController::class,'agendaDel']);
 
 //eskul
 Route::get('/admin/eskul',[App\Http\Controllers\AdminController::class,'eskulGet'])->name('admin.eskul.index');
 Route::get('/admin/eskul/create', [App\Http\Controllers\AdminController::class,'eskulCreate'])->name('admin/eskul/create');
 Route::post('/admin/eskul-post',[App\Http\Controllers\AdminController::class,'eskulPost'])->name('admin.eskul.post');
 Route::get('/eskul/edit/{id}', [App\Http\Controllers\AdminController::class,'eskulEdit'])->name('admin.eskul.edit');
 Route::get('/admin/eskul/detail/{id}', [App\Http\Controllers\AdminController::class,'eskulDetail'])->name('admin.eskul.detail');
 Route::get('/admin/eskul/index/delete/{id}',[App\Http\Controllers\AdminController::class,'eskulDel']);

 //galeri
 Route::get('/admin/galeri', [App\Http\Controllers\AdminController::class,'galeriGet'])->name('admin.galeri.index');
 Route::get('/admin/galeri/create', [App\Http\Controllers\AdminController::class,'galeriCreate'])->name('admin/galeri/create');
 Route::get('/admin/galeri/edit/{id}', [App\Http\Controllers\AdminController::class,'galeriEdit'])->name('admin.galeri.edit');
 Route::post('/admin/galeri-post',[App\Http\Controllers\AdminController::class,'galeriPost'])->name('admin.galeri.post');
 Route::get('/admin/galeri/index/delete/{id}',[App\Http\Controllers\AdminController::class,'galeriDel']);

 //prestasi
 Route::get('/admin/prestasi', [App\Http\Controllers\AdminController::class,'prestasiGet'])->name('admin.prestasi.index');
 Route::get('/admin/prestasi/create', [App\Http\Controllers\AdminController::class,'prestasiCreate'])->name('admin/prestasi/create');
 Route::get('/admin/prestasi/edit/{id}',[App\Http\Controllers\AdminController::class,'prestasiEdit'])->name('admin.prestasi.edit');
 Route::post('/admin/prestasi-post', [App\Http\Controllers\AdminController::class,'prestasiPost'])->name('admin.prestasi.post');
 Route::get('/admin/prestasi/index/delete/{id}',[App\Http\Controllers\AdminController::class,'prestasiDel']);
 
 //pengumuman
 Route::get('/admin/pengumuman',[App\Http\Controllers\AdminController::class,'pengumumanGet'])->name('admin.pengumuman.index');
 Route::get('/admin/pengumuman/create',[App\Http\Controllers\AdminController::class,'pengumumanCreate'])->name('admin/pengumuman/create');
 Route::get('/admin/pengumuman/edit/{id}', [App\Http\Controllers\AdminController::class,'pengumumanEdit'])->name('admin.pengumuman.edit');
 Route::post('/admin/pengumuman-post',[App\Http\Controllers\AdminController::class,'pengumumanPost'])->name('admin.pengumuman.post');
 Route::get('/admin/pengumuman/index/delete/{id}',[App\Http\Controllers\AdminController::class,'pengumumanDel']);


   // Intrakulikuler
 Route::get('/admin/intrakulikuler',[App\Http\Controllers\AdminController::class,'intrakulikuler'])->name('admin.intrakulikuler.index');
 Route::get('/admin/intrakulikuler/add' ,[App\Http\Controllers\AdminController::class,'intrakulikulerAdd'])->name('admin.intrakulikuler.add');
 Route::get('/admin/intrakulikuler/{intrakulikuler}'  ,[App\Http\Controllers\AdminController::class,'intrakulikulerEdit'])->name('admin.intrakulikuler.edit');
 Route::post('/admin/intrakulikuler/post',[App\Http\Controllers\AdminController::class,'intrakulikulerPost'])->name('admin.intrakulikuler.post');
 Route::get('/admin/intrakulikuler/index/delete/{id}',[App\Http\Controllers\AdminController::class,'intrakulikulerDelete']);
   // Ekstrakulikuler
 Route::get('/admin/ekstrakulikuler',  [App\Http\Controllers\AdminController::class,'ekstrakulikuler'])->name('admin.ekstrakulikuler.index');
 Route::get('/admin/ekstrakulikuler/add', [App\Http\Controllers\AdminController::class,'ekstrakulikulerAdd'])->name('admin/ekstrakulikuler/add');
 Route::get('/admin/ekstrakulikuler/{ekstrakulikuler}',  [App\Http\Controllers\AdminController::class,'ekstrakulikulerEdit'])->name('admin.ekstrakulikuler.edit');
 Route::post('/admin/ekstrakulikuler/post',  [App\Http\Controllers\AdminController::class,'ekstrakulikulerPost'])->name('admin.ekstrakulikuler.post');
 Route::get('/admin/ekstrakulikuler/index/delete/{id}',[App\Http\Controllers\AdminController::class,'ekstrakulikulerDelete']);


