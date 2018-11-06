<?php
/**
 * Created by PhpStorm.
 * User: sudit
 * Date: 10/28/2018
 * Time: 6:16 PM
 */

namespace App\Http\Util;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\BlogPosts;
use App\Http\Util\StringUtil;

class BlogPostsUtil
{
    private $aGeneralData;

    public function __construct($aGeneralData = null)
    {
        $this->aGeneralData = $aGeneralData;
    }

    public function salveazaPostare($request, $code = null)
    {
        $aResult = ['success' => true, 'aErrors' => []];

        $oValidator = Validator::make($request->all(), [
            'poza_profil' => "mimes:jpeg,jpg,jpe,bmp,png",
            "postare_nume" => 'required',
            "continut_blog" => 'required',
            "categorie_parinte" => 'required',
        ]);

        if ($oValidator->fails()) {
            $oErrors = $oValidator->errors();
            if (count($oErrors->get('poza_profil')) > 0) {
                $aResult['aErrors'][] = "Poza de profil trebuie sa fie de tip: jpeg, jpg, jpe, bmp, png";
            }
            if (count($oErrors->get('postare_nume')) > 0) {
                $aResult['aErrors'][] = "Postarea trebuie sa aibe un titlu.";
            }
            if (count($oErrors->get('continut_blog')) > 0) {
                $aResult['aErrors'][] = "Postarea trebuie sa aibe continut";
            }
            if (count($oErrors->get('categorie_parinte')) > 0) {
                $aResult['aErrors'][] = "Postarea trebuie sa apartina unei categorii";
            }
        }
        if (count($aResult['aErrors']) > 0) {
            $aResult['success'] = false;
            return $aResult;
        }


        //Postarea este noua
        if(is_null($code)){
            //Verificam ca nu mai exista o postare care are codul cu cel ce ar trebui sa fie salvat
            if(self::count($request['postare_nume']) > 0){
                $aResult['success'] = false;
                $aResult['aErrors'][] = "Mai exista o categorie cu acelasi nume";
                return $aResult;
            }
        }else{
            //Postarea trebuie editata
            //Daca schimba numele trebuie verificat ca numele nou sa nu mai existe
            $sTmpCode = StringUtil::formatUrl($request['postare_nume']);
            if($sTmpCode != $code && self::count($sTmpCode) > 0){
                $aResult['success'] = false;
                $aResult['aErrors'][] = "Mai exista o categorie cu acelasi nume";
                return $aResult;
            }
        }

        if($code){
            $oNewBlogPost = BlogPosts::where('code','=', $code)->first();
        }else{
            $oNewBlogPost = new BlogPosts();
        }

        $oNewBlogPost->titlu = trim($request->get('postare_nume'));
        $oStringUtil = new StringUtil();
        $oNewBlogPost->code = $oStringUtil->formatUrl($oNewBlogPost->titlu);
        $oNewBlogPost->are_imagine = true;
        $oNewBlogPost->continut = $request->get('continut_blog');
        $oNewBlogPost->bcategory_id = $request->get('categorie_parinte');
        $oNewBlogPost->author_id = $this->aGeneralData['auth_user']['id'];
        $sActiveBlog = $request->get('post_active');
        if($sActiveBlog == 'on'){
            $oNewBlogPost->active = true;
        }else{
            $oNewBlogPost->active = false;
        }
        $oNewBlogPost->save();

        if(!$code || ($code && $request->poza_profil != null)){
            if (Storage::disk('blog_images')->exists($oNewBlogPost->code . '.jpg')) {
                Storage::disk('blog_images')->delete($oNewBlogPost->code . '.jpg');
            }
            $request->poza_profil->storeAs('', $oNewBlogPost->code . '.jpg', 'blog_images');
        }

        return $aResult;
    }

    public function existaPostare($sTitlu)
    {
        $oStringUtil = new StringUtil();
        $sCode = $oStringUtil->formatUrl(trim($sTitlu));
        $oBlogPost = BlogPosts::where('code','=',$sCode)->first();
        if(!$oBlogPost){
            return false;
        }
        return true;
    }

    public function getPostare($sCode, $bCuCategorie = false, $bNeedArray = true)
    {
        $aBlogPost = BlogPosts::where('code','=',$sCode);
        if($bCuCategorie){
            $aBlogPost->with('blog_categorie:id,bcategory_name');
        }

        $aBlogPost = $aBlogPost->first();

        if(!$aBlogPost){
            return null;
        }

        if($bNeedArray){
            $aBlogPost = $aBlogPost->toArray();
            $aBlogPost['blog_imagine'] = asset('/storage/blog_profile_images/'.$aBlogPost['code'].'.jpg');
        }
        return $aBlogPost;
    }

    public function count($sNume)
    {
        $sCode = StringUtil::formatUrl($sNume);
        return BlogPosts::where('code', '=', $sCode)->count();
    }

}
