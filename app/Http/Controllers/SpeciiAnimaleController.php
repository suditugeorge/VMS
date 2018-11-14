<?php
/**
 * Created by PhpStorm.
 * User: sudit
 * Date: 11/5/2018
 * Time: 1:47 PM
 */

namespace App\Http\Controllers;

use App\Http\Util\SpeciiAnimaleUtil;
use Illuminate\Http\Request;
use App\Http\Util\AdminUtil;

class SpeciiAnimaleController extends Controller
{
    public function speciiAnimale()
    {
        $oGeneral_data = new AdminUtil();
        $aGeneral_data = $oGeneral_data->getGeneralData();
        $oSpeciiAnimale = new SpeciiAnimaleUtil();
        $oSpeciiAnimale = $oSpeciiAnimale->getSpeciiAnimale();
        return view('admin.pages.animale.specii_animale',[
            'show_nagigation' => true,
            'general_data' => $aGeneral_data,
            'specii_animale' => $oSpeciiAnimale
        ]);
    }

    public function editeazaSpecieAnimal(Request $request, $code = null)
    {
        $oSpecieAnimalUtil = new SpeciiAnimaleUtil();
        if ($request->isMethod('get')) {
            $oGeneral_data = new AdminUtil();
            $aGeneral_data = $oGeneral_data->getGeneralData();

            $oSpecieAnimal = null;
            if(isset($code)){
                $oSpecieAnimal = $oSpecieAnimalUtil->getSpecieAnimal($code);
                if(!$oSpecieAnimal){
                    return abort(404);
                }
            }

            return view('admin.pages.animale.specie_animale_editeaza', [
                'show_nagigation' => true,
                'general_data' => $aGeneral_data,
                'specie_de_editat' => $oSpecieAnimal,
            ]);
        }elseif ($request->isMethod('post')){
            return response()->json($oSpecieAnimalUtil->salveazaSpecie($request, $code));
        }
    }

    public function stergeSpecie(Request $request, $code)
    {
        $oSpecieUtil = new SpeciiAnimaleUtil();
        $oSpecieAnimale = $oSpecieUtil->getSpecieAnimal($code);

        if(is_null($oSpecieAnimale)){
            return abort(404);
        }

        $oSpecieAnimale->delete();
        return redirect('/vms-admin/animale-specii');
    }
}
