<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;
use App\Http\Util\AdminUtil;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Util\BlogCategoriesUtil;
use App\Http\Util\BlogPostsUtil;


class BlogPostsController extends Controller
{
    public function postariBlog(Request $request)
    {
        $oPostariBlog = BlogPosts::with('blog_categorie:id,bcategory_name')->with('autor:id,nume,prenume')->get()->toArray();
        $oGeneral_data = new AdminUtil();
        $aGeneral_data = $oGeneral_data->getGeneralData();
        return view('admin.pages.blog.postari', [
            'show_nagigation' => true,
            'general_data' => $aGeneral_data,
            'postari_blog' => $oPostariBlog
        ]);
    }

    public function editeazaPostareBlog(Request $request, $code = null)
    {
        $oGeneral_data = new AdminUtil();
        $aGeneral_data = $oGeneral_data->getGeneralData();
        $oBlogPostsUtil = new BlogPostsUtil($aGeneral_data);
        $oBlogCategoriesUtil = new BlogCategoriesUtil();
        $aCategoriiBlog = $oBlogCategoriesUtil->getCategoriiBlog(false, true);

        $sUrlFormular = url('/vms-admin/postare-blog');
        $aResult['aErrors'] = [];
        $aPostareDeEditat = null;

        if($request->isMethod('get')){
            if($code){
                if(!$oBlogPostsUtil->existaPostare($code)){
                    return abort(404);
                }
                $sUrlFormular = url('/vms-admin/postare-blog/'.$code);
                $aPostareDeEditat = $oBlogPostsUtil->getPostare($code, true);
            }
        }

        if($request->isMethod('post')){
            if($code){
                $aResult = $oBlogPostsUtil->salveazaPostare($request, false, $code);
            }else{
                $aResult = $oBlogPostsUtil->salveazaPostare($request, true);
            }
            if($aResult['success']){
                return redirect('/vms-admin/blog-posts');
            }
        }

        return view('admin.pages.blog.postare_noua', [
            'show_nagigation' => true,
            'general_data' => $aGeneral_data,
            'categorii_blog' => $aCategoriiBlog,
            'errors' => $aResult['aErrors'],
            'url_formular' => $sUrlFormular,
            'aPostareDeEditat' => $aPostareDeEditat,
        ]);
    }

    public function stergePostare(Request $request, $code)
    {
        $oGeneral_data = new AdminUtil();
        $aGeneral_data = $oGeneral_data->getGeneralData();
        $oBlogPostsUtil = new BlogPostsUtil($aGeneral_data);

        if(!$oBlogPostsUtil->existaPostare($code)){
            return abort(404);
        }

        $aPostareDeEditat = $oBlogPostsUtil->getPostare($code, false, false);
        $aPostareDeEditat->delete();
        return redirect('/vms-admin/blog-posts');
    }
}
