<?php

namespace App\Http\Controllers\ArticleController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardArticle extends Controller
{
    //
    public function draftArticle()
    {
        return view('moduls.dashboard.berbinar-artikel.draftartikel');
    }

    public function postinganArticle()
    {
        return view('moduls.dashboard.berbinar-artikel.postinganartikel');
    }
}
