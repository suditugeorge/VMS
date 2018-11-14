<?php
/**
 * Created by PhpStorm.
 * User: sudit
 * Date: 11/6/2018
 * Time: 3:04 PM
 */

namespace App\Http\Util;

use App\Http\Util\StringUtil;
use App\SpeciiAnimale;
use Illuminate\Http\Request;
use App\RaseAnimale;

class RaseAnimaleUtil
{
    public function __construct()
    {
    }

    public function getRaseAnimale()
    {
        $oRaseAnimale = RaseAnimale::with('specie:id,name')->paginate(config('constants.ITEME_PER_PAGINA'));
        $oRaseAnimale->withPath('/vms-admin/animale-rase');
        return $oRaseAnimale;
    }

    public function getRasaAnimal($sCode)
    {
        $sCode = StringUtil::formatUrl($sCode);
        $oSpecieAnimal = RaseAnimale::with('specie:id,name,code')->where('code', '=', $sCode)->first();
        if(!$oSpecieAnimal){
            return null;
        }
        return $oSpecieAnimal;
    }

    public function count($sNume)
    {
        $sCode = StringUtil::formatUrl($sNume);
        return RaseAnimale::where('code', '=', $sCode)->count();
    }

    public function salveazaRasa(Request $request, $sCode = null)
    {
        $aResult = ['success' => true, 'message' => ''];

        //Rasa este noua
        if(is_null($sCode)){
            //Verificam ca nu mai exista o cerere care are codul cu cel ce ar trebui sa fie salvat
            if(self::count($request['nume']) > 0){
                $aResult = ['success' => false, 'message' => 'Mai exista o rasa cu acelasi nume'];
                return $aResult;
            }
        }else{
            //Rasa trebuie editata
            //Daca schimba numele trebuie verificat ca numele nou sa nu mai existe
            $sTmpCode = StringUtil::formatUrl($request['nume']);
            if($sTmpCode != $sCode && self::count($sTmpCode) > 0){
                $aResult = ['success' => false, 'message' => 'Mai exista o rasa cu acelasi nume'];
                return $aResult;
            }
        }

        if(is_null($sCode)){
            $oRaseAnimal = new RaseAnimale();
        }else{
            $oRaseAnimal = RaseAnimale::where('code', '=', StringUtil::formatUrl($sCode))->first();
        }

        $oRaseAnimal->name = $request['nume'];
        $oRaseAnimal->code = StringUtil::formatUrl($oRaseAnimal->name);
        $oRaseAnimal->active = filter_var($request['active'], FILTER_VALIDATE_BOOLEAN);
        $oRaseAnimal->animal_species_id = SpeciiAnimale::where('code','=',$request['specie'])->first()->id;
        $oRaseAnimal->description = $request['descirere'];
        $oRaseAnimal->save();
        if(!$oRaseAnimal->id){
            $aResult['success'] = false;
            $aResult['message'] = 'A intervenit o problema. Va rog sa ne contactati telefonic';
        }
        return $aResult;
    }
}
