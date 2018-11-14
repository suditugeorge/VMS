<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Util\AdminUtil;
use App\BlogCategories;
use App\Http\Util\BlogCategoriesUtil;

class BlogCategoriesController extends Controller
{
    public function categoriiBlog(Request $request)
    {
        $oGeneral_data = new AdminUtil();
        $aGeneral_data = $oGeneral_data->getGeneralData();
        $oBlogCategoriesUtil = new BlogCategoriesUtil();
        $aCategoriiBlog = $oBlogCategoriesUtil->getCategoriiBlog(true);
        return view('admin.pages.blog.categories',[
            'show_nagigation' => true,
            'general_data' => $aGeneral_data,
            'categorii_blog' => $aCategoriiBlog
        ]);
    }

    public function editeazaCategorie(Request $request, $code = null)
    {
        $oBlogCategoriesUtil = new BlogCategoriesUtil();
        if ($request->isMethod('get')) {

            $oGeneral_data = new AdminUtil();
            $aGeneral_data = $oGeneral_data->getGeneralData();
            $aCategoriiBlog = $oBlogCategoriesUtil->getCategoriiBlog(false, true);

            $aCategorieBlog = null;
            if(isset($code)){
                $aCategorieBlog = BlogCategories::with('parinte:id,bcategory_name')->where('code', '=', $code)->first();
                if(!$aCategorieBlog){
                    return abort(404);
                }
            }

            return view('admin.pages.blog.categorie_blog', [
                'show_nagigation' => true,
                'general_data' => $aGeneral_data,
                'categorii_blog' => $aCategoriiBlog,
                'pagina_text' => $this->getCategorieBlogTemplateText($aCategorieBlog),
                'categorie_de_editat' => $aCategorieBlog,
            ]);
        }elseif ($request->isMethod('post')){
            return response()->json($oBlogCategoriesUtil->salveazaCategorie($request, $code));
            //Categoria este noua
        }
        return abort(404);
    }

    public function stergeCategorie(Request $request, $code)
    {
        $oBlogCategorie = BlogCategories::where('code', '=', $code);
        if(!$oBlogCategorie){
            abort(404);
        }
        $oBlogCategorie->delete();
        return redirect('/vms-admin/blog-categories');
    }

    private function getCategorieBlogTemplateText($oCategorie = null)
    {
        $aData = [];
        $aData['buton_formular_text'] = 'Salveaza';
        $aData['buton_formular_id'] = 'categorie-blog';
        $aData['titlu'] = 'Noua';

        if($oCategorie){
            $aData['titlu'] = $oCategorie['bcategory_name'];
        }

        return $aData;
    }
}
