<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;
use Illuminate\Support\Facades\Auth;
use App\Http\Util\BlogPostsUtil;

class MainController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function despreNoi()
    {
        return view('client.pages.despre_noi');
    }

    public function tarife()
    {
        return view('client.pages.tarife');
    }

    public function contact()
    {
        return view('client.pages.contact');
    }

    public function blogPosts()
    {
        $oPostariBlog = BlogPosts::with('blog_categorie:id,bcategory_name')->with('autor:id,nume,prenume')->get();
        return view('client.pages.postari_blog', ['oPostariBlog' => $oPostariBlog]);
    }

    public function blogPostare(Request $request, $sCode)
    {
        $oBlogPost = new BlogPostsUtil();
        $oBlogPost = $oBlogPost->getPostare($sCode, true, false);

        //Adminii au voie sa vada postarea chiar daca nu e activa
        $oUser = Auth::user();
        if(!$oBlogPost->active && (!$oUser || $oUser->role_id != 1)){
            return abort(404);
        }
        return view('client.pages.postare_blog', ['oPostareBlog' => $oBlogPost]);

    }
}
