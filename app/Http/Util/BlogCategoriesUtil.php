<?php
/**
 * Created by PhpStorm.
 * User: sudit
 * Date: 10/26/2018
 * Time: 11:48 AM
 */

namespace App\Http\Util;

use App\BlogCategories;
use App\Http\Util\StringUtil;
use Illuminate\Http\Request;

class BlogCategoriesUtil
{
    public function __construct()
    {
    }

    public function getCategoriiBlog($bCuParinte = false, $bCuCategorieImplicita = false)
    {
        if (!$bCuParinte) {
            $aCategoriiBlog = BlogCategories::all()->toArray();
        } else {
            $aCategoriiBlog = BlogCategories::with('parinte:id,bcategory_name');
            if (!$bCuCategorieImplicita) {
                $aCategoriiBlog->where('id', '<>', 1);
            }
            $aCategoriiBlog = $aCategoriiBlog->get()->toArray();
        }
        return $aCategoriiBlog;
    }

    public function exists($sCode = null, $sNume = null)
    {
        $oBlogCategorie = null;
        if (isset($sCode)) {
            $sCode = StringUtil::formatUrl($sCode);
            $oBlogCategorie = BlogCategories::with('parinte:id,bcategory_name')->where('code', '=', $sCode)->first();
        }

        if (is_null($oBlogCategorie) && isset($sNume)) {
            $sCode = StringUtil::formatUrl($sNume);
            $oBlogCategorie = BlogCategories::with('parinte:id,bcategory_name')->where('code', '=', $sCode)->first();
        }

        return $oBlogCategorie;
    }

    public function salveazaCategorie(Request $request, $sCode = null)
    {
        $aResult = ['success' => true, 'message' => ''];

        //Categoria este noua
        if(is_null($sCode)){
            //Verificam ca nu mai exista o cerere care are codul cu cel ce ar trebui sa fie salvat
            if(self::count($request['categorie_nume']) > 0){
                $aResult = ['success' => false, 'message' => 'Mai exista o categorie cu acelasi nume'];
                return $aResult;
            }
        }else{
            //Categoria trebuie editata
            //Daca schimba numele trebuie verificat ca numele nou sa nu mai existe
            $sTmpCode = StringUtil::formatUrl($request['categorie_nume']);
            if($sTmpCode != $sCode && self::count($sTmpCode) > 0){
                $aResult = ['success' => false, 'message' => 'Mai exista o categorie cu acelasi nume'];
                return $aResult;
            }
        }

        if(is_null($sCode)){
            $oBlogCategorie = new BlogCategories();
        }else{
            $oBlogCategorie = BlogCategories::where('code', '=', StringUtil::formatUrl($sCode))->first();
        }

        $oBlogCategorie->bcategory_name = $request['categorie_nume'];
        $oBlogCategorie->code = StringUtil::formatUrl($oBlogCategorie->bcategory_name);
        $oBlogCategorie->bcategory_parent_id = $request['categorie_parinte'];
        $oBlogCategorie->save();
        if(!$oBlogCategorie->id){
            $aResult['success'] = false;
            $aResult['message'] = 'A intervenit o problema. Va rog sa ne contactati telefonic';
        }
        return $aResult;
    }

    public function count($sNume)
    {
        $sCode = StringUtil::formatUrl($sNume);
        return BlogCategories::where('code', '=', $sCode)->count();
    }
}
