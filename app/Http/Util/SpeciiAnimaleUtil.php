<?php
/**
 * Created by PhpStorm.
 * User: sudit
 * Date: 11/5/2018
 * Time: 1:49 PM
 */
namespace App\Http\Util;

use App\SpeciiAnimale;
use App\Http\Util\StringUtil;
use Illuminate\Http\Request;

class SpeciiAnimaleUtil
{
    public function __construct()
    {

    }

    public function getSpeciiAnimale()
    {
        $oSpeciiAnimale = SpeciiAnimale::all();
        return $oSpeciiAnimale;
    }

    public function getSpeciiAnimaleApi($sQuery)
    {
        if($sQuery){
            $sCode = StringUtil::formatUrl($sQuery);
            $oSpeciiAnimale = SpeciiAnimale::where('code', 'like', '%'.$sCode.'%');
        }else{
            $oSpeciiAnimale = SpeciiAnimale::whereRAW(' 1 = 1 ');
        }
        $oSpeciiAnimale = $oSpeciiAnimale->paginate(config('constants.ITEME_PER_PAGINA'));
        return $oSpeciiAnimale;
    }

    public function getSpecieAnimal($sCode)
    {
        $sCode = StringUtil::formatUrl($sCode);
        $oSpecieAnimal = SpeciiAnimale::where('code', '=', $sCode)->first();
        if(!$oSpecieAnimal){
            return null;
        }
        return $oSpecieAnimal;
    }

    public function exists($sCode = null, $sNume = null)
    {
        $oSpecieAnimal = null;
        if (isset($sCode)) {
            $sCode = StringUtil::formatUrl($sCode);
            $oSpecieAnimal = SpeciiAnimale::where('code', '=', $sCode)->first();
        }

        if (is_null($oSpecieAnimal) && isset($sNume)) {
            $sCode = StringUtil::formatUrl($sNume);
            $oSpecieAnimal = SpeciiAnimale::where('code', '=', $sCode)->first();
        }
        return $oSpecieAnimal;
    }

    public function count($sNume)
    {
        $sCode = StringUtil::formatUrl($sNume);
        return SpeciiAnimale::where('code', '=', $sCode)->count();
    }

    public function salveazaSpecie(Request $request, $sCode = null)
    {
        $aResult = ['success' => true, 'message' => ''];

        //Specia este noua
        if(is_null($sCode)){
            //Verificam ca nu mai exista o cerere care are codul cu cel ce ar trebui sa fie salvat
            if(self::count($request['nume']) > 0){
                $aResult = ['success' => false, 'message' => 'Mai exista o specie cu acelasi nume'];
                return $aResult;
            }
        }else{
            //Specia trebuie editata
            //Daca schimba numele trebuie verificat ca numele nou sa nu mai existe
            $sTmpCode = StringUtil::formatUrl($request['nume']);
            if($sTmpCode != $sCode && self::count($sTmpCode) > 0){
                $aResult = ['success' => false, 'message' => 'Mai exista o specie cu acelasi nume'];
                return $aResult;
            }
        }

        if(is_null($sCode)){
            $oSpecieAnimal = new SpeciiAnimale();
        }else{
            $oSpecieAnimal = SpeciiAnimale::where('code', '=', StringUtil::formatUrl($sCode))->first();
        }

        $oSpecieAnimal->name = $request['nume'];
        $oSpecieAnimal->code = StringUtil::formatUrl($oSpecieAnimal->name);
        $oSpecieAnimal->active = filter_var($request['active'], FILTER_VALIDATE_BOOLEAN);
        $oSpecieAnimal->save();
        if(!$oSpecieAnimal->id){
            $aResult['success'] = false;
            $aResult['message'] = 'A intervenit o problema. Va rog sa ne contactati telefonic';
        }
        return $aResult;
    }
}
