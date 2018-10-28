<?php
/**
 * Created by PhpStorm.
 * User: sudit
 * Date: 10/26/2018
 * Time: 11:48 AM
 */
namespace App\Http\Util;
use App\BlogCategories;

class BlogCategoriesUtil
{
    public function __construct()
    {
    }

    public function getCategoriiBlog($bCuParinte = false, $bCuCategorieImplicita = false)
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
