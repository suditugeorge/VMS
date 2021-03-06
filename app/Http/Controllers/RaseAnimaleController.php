<?php
/**
 * Created by PhpStorm.
 * User: sudit
 * Date: 11/6/2018
 * Time: 2:31 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Util\AdminUtil;
use App\Http\Util\RaseAnimaleUtil;

class RaseAnimaleController extends Controller
{
    public function raseAnimale()
    {
        $oGeneral_data = new AdminUtil();
        $aGeneral_data = $oGeneral_data->getGeneralData();
        $oRaseAnimale = new RaseAnimaleUtil();
        $oRaseAnimale = $oRaseAnimale->getRaseAnimale();
        return view('admin.pages.animale.rase_animale',[
            'show_nagigation' => true,
            'general_data' => $aGeneral_data,
            'rase_animale' => $oRaseAnimale,
        ]);
    }

    public function editeazaRaseAnimal(Request $request, $code = null)
    {
        $oRaseAnimalUtil = new RaseAnimaleUtil();
        if ($request->isMethod('get')) {
            $oGeneral_data = new AdminUtil();
            $aGeneral_data = $oGeneral_data->getGeneralData();

            $oRaseAnimal = null;
            if(isset($code)){
                $oRaseAnimal = $oRaseAnimalUtil->getRasaAnimal($code);
                if(!$oRaseAnimal){
                    return abort(404);
                }
            }

            return view('admin.pages.animale.rase_animale_editeaza', [
                'show_nagigation' => true,
                'general_data' => $aGeneral_data,
                'rase_de_editat' => $oRaseAnimal,
                'api_url' => route('api_specii_animale'),
            ]);
        }elseif ($request->isMethod('post')){
            return response()->json($oRaseAnimalUtil->salveazaRasa($request, $code));
        }
    }

    public function stergeRasa(Request $request, $code)
    {
        $oRasaUtil = new RaseAnimaleUtil();
        $oRasaAnimal = $oRasaUtil->getRasaAnimal($code);

        if(is_null($oRasaAnimal)){
            return abort(404);
        }

        $oRasaAnimal->delete();
        return redirect('/vms-admin/animale-rase');
    }
}
