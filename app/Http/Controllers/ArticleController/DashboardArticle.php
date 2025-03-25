<?php

namespace App\Http\Controllers\ArticleController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardArticle extends Controller
{
    //

    public function dashboardArticle()
    {
        return view('moduls.dashboard.arteri.dashboard');
    }

    public function addArticle()
    {
        return view('moduls.dashboard.arteri.form-add');

        // kasih logic apa gitu pada saat upload artikel sukses, bakal ngarah ke  arteri.postingan 
        // return redirect()->route('artikel.postingan')->with('success', 'Artikel telah berhasil di Posting!!');
    }
    public function updateArticle()
    {
        return view('moduls.dashboard.arteri.form-edit');

        // kasih logic apa gitu pada saat update artikel sukses, bakal ngarah ke  arteri.postingan 
        // return redirect()->route('artikel.postingan')->with('success', 'Artikel telah berhasil di Update!!');
    }
    public function kategoriArticle()
    {
        return view('moduls.dashboard.arteri.kategori');
    }

    public function postinganArticle()
    {
        return view('moduls.dashboard.arteri.postingan');
    }

    public function penulisArticle()
    {
        return view('moduls.dashboard.arteri.penulis');
    }
}
