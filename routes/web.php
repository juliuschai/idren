<?php

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
    return view('welcome-new');
});

Route::get('about', function () {
        return view('info.about');
})->name('about');
/*
Route::get('test', function () {
        return redirect('/profile')->with('new', 'true');
});
*/
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('profile/view', 'ProfileController@indexProfile')->name('profile.view');
Route::get('profile', 'ProfileController@indexChangeProfile')->name('profile.change');
Route::post('profile', 'ProfileController@saveChangeProfile');

Route::get('video/upload', 'VideoDosenController@indexUpload')->name('video.upload');
Route::post('video/upload', 'VideoDosenController@saveUpload');
Route::get('video/edit', 'VideoDosenController@indexEdit')->name('video.edit');
Route::post('video/edit', 'VideoDosenController@saveEdit');
Route::post('video/delete', 'VideoDosenController@delete')->name('video.delete');

Route::get('video/view', 'VideoController@getVideo')->name('video.view');
Route::get('video/search', 'VideoController@searchVideo')->name('video.search');
Route::post('video/comment', 'VideoController@commentVideo')->name('video.comment');
Route::post('video/comment/delete', 'VideoController@deleteComment')->name('video.comment.delete');

Route::get('playlist/add', 'PlaylistController@indexAddPlaylist')->name('playlist.add');
Route::post('playlist/add', 'PlaylistController@saveAddPlaylist');
Route::post('playlist/delete', 'PlaylistController@deletePlaylist')->name('playlist.delete');

Route::get('playlist/view', 'PlaylistVideoController@viewPlaylist')->name('playlist.view');
Route::get('playlist/edit', 'PlaylistVideoController@editPlaylist')->name('playlist.edit');
Route::post('playlist/video/add', 'PlaylistVideoController@addVideo')->name('playlist.video.add');
Route::post('playlist/video/delete', 'PlaylistVideoController@deleteVideo')->name('playlist.video.delete');

Route::get('research', 'ResearchController@index')->name('research');
Route::get('research/new', 'ResearchController@new')->name('research.new');
Route::post('research/new', 'ResearchController@saveNew');
Route::get('research/view/{id}', 'ResearchController@view')->name('research.view');

Route::get('koneksi/admin', 'KoneksiAdminController@admin')->name('koneksi.admin');
Route::get('koneksi/admin/{id}', 'KoneksiAdminController@viewKoneksi')->name('koneksi.view');
Route::post('koneksi/admin/download', 'KoneksiAdminController@download')->name('koneksi.download');
Route::post('koneksi/admin/accept', 'KoneksiAdminController@acceptKoneksi')->name('koneksi.accept');
Route::post('koneksi/admin/delete', 'KoneksiAdminController@deleteKoneksi')->name('koneksi.delete');

Route::get('koneksi/status', 'KoneksiController@status');
Route::get('koneksi/permintaan', 'KoneksiController@index')->name('koneksi');
Route::post('koneksi/permintaan', 'KoneksiController@submit');
