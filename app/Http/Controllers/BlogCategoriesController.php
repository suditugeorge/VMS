<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Util\AdminUtil;
use App\BlogCategories;

class BlogCategoriesController extends Controller
{
    public function categoriiBlog(Request $request)
    {
        $oGeneral_data = new AdminUtil();
        $aGeneral_data = $oGeneral_data->getGeneralData();
        $aCategoriiBlog = $this->getCategoriiBlog(true);
        return view('admin.pages.blog.categories',[
            'show_nagigation' => true,
            'general_data' => $aGeneral_data,
            'categorii_blog' => $aCategoriiBlog
        ]);
    }

    public function adaugaCategorie(Request $request)
    {
        if ($request->isMethod('get')) {
            $oGeneral_data = new AdminUtil();
            $aGeneral_data = $oGeneral_data->getGeneralData();
            $aCategoriiBlog = $this->getCategoriiBlog(false, true);
            return view('admin.pages.blog.categorie_noua', [
                'show_nagigation' => true,
                'general_data' => $aGeneral_data,
                'categorii_blog' => $aCategoriiBlog,
                'pagina_text' => $this->getCategorieBlogTemplateText()
            ]);
        }elseif ($request->isMethod('post')){
            try {
                $sNumeCategorie = $request['categorie_nume'];
                $sParinteCategorie = $request['categorie_parinte'];

                $oBlogCategorie = BlogCategories::where('bcategory_name', '=', $sNumeCategorie)->first();
                if($oBlogCategorie){
                    return response()->json([
                        'success' => false,
                        'message' => 'Mai exista o categorie cu acelasi nume',
                    ]);
                }

                $oBlogCategorie = new BlogCategories();
                $oBlogCategorie->bcategory_name = $sNumeCategorie;
                $oBlogCategorie->bcategory_parent_id = $sParinteCategorie;
                $oBlogCategorie->save();

                return response()->json([
                    'success' => true,
                ]);

            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'A intervenit o problemă! Vă rugăm să ne contactați telefonic.',
                ]);
            }
        }
    }

    public function editeazaCategorie(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            $aCategorieBlog = BlogCategories::with('parinte:id,bcategory_name')->where('id', '=', $id)->first();
            if(!$aCategorieBlog){
                return abort(404);
            }
            $aCategorieBlog = $aCategorieBlog->toArray();

            $oGeneral_data = new AdminUtil();
            $aGeneral_data = $oGeneral_data->getGeneralData();
            $aCategoriiBlog = $this->getCategoriiBlog(false, true);

            return view('admin.pages.blog.categorie_noua', [
                'show_nagigation' => true,
                'general_data' => $aGeneral_data,
                'categorii_blog' => $aCategoriiBlog,
                'pagina_text' => $this->getCategorieBlogTemplateText($aCategorieBlog),
                'categorie_de_editat' => $aCategorieBlog,
            ]);
        }elseif ($request->isMethod('post')){
            try {
                $sNumeCategorie = $request['categorie_nume'];
                $sParinteCategorie = $request['categorie_parinte'];

                $oBlogCategorie = BlogCategories::where('id', '=', $request['categorie_id'])->first();
                if(!$oBlogCategorie){
                    return response()->json([
                        'success' => false,
                        'message' => 'Aceasta categorie nu exista',
                    ]);
                }

                $oBlogCategorie->bcategory_name = $sNumeCategorie;
                $oBlogCategorie->bcategory_parent_id = $sParinteCategorie;
                $oBlogCategorie->save();

                return response()->json([
                    'success' => true,
                ]);

            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'A intervenit o problemă! Vă rugăm să ne contactați telefonic.',
                ]);
            }
        }
        return response()->json([
            'success' => false,
            'message' => 'A intervenit o problemă! Vă rugăm să ne contactați telefonic.',
        ]);
    }

    public function stergeCategorie(Request $request, $id)
    {
        $oBlogCategorie = BlogCategories::where('id', '=', $id);
        if(!$oBlogCategorie){
            abort(404);
        }
        $oBlogCategorie->delete();
        return redirect('/vms-admin/blog-categories');
    }

    private function getCategorieBlogTemplateText($oCategorie = null)
    {
        $aData = [];
        if(!$oCategorie){
            $aData['titlu'] = 'Noua';
            $aData['buton_formular_text'] = 'Creeaza';
            $aData['buton_formular_id'] = 'creeaza-categorie';
        }else{
            $aData['titlu'] = $oCategorie['bcategory_name'];
            $aData['buton_formular_text'] = 'Editeaza';
            $aData['buton_formular_id'] = 'editeaza-categorie';
        }
        return $aData;
    }

    private function getCategoriiBlog($bCuParinte = false, $bCuCategorieImplicita = false)
    {
        if(!$bCuParinte){
            $aCategoriiBlog = BlogCategories::all()->toArray();
        }else{
            $aCategoriiBlog = BlogCategories::with('parinte:id,bcategory_name');
            if(!$bCuCategorieImplicita){
                $aCategoriiBlog->where('id', '<>', 1);
            }
            $aCategoriiBlog = $aCategoriiBlog->get()->toArray();
        }
        return $aCategoriiBlog;
    }
}
