<?php
/**
 * Created by PhpStorm.
 * User: georgesuditu
 * Date: 11/14/2018
 * Time: 3:34 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Util\SpeciiAnimaleUtil;

class ApiController extends Controller
{
    public function speciiAnimale(Request $request)
    {
        $sQuery = $request->query('q');
        $oSpeciiAnimale = new SpeciiAnimaleUtil();
        $oSpeciiAnimale = $oSpeciiAnimale->getSpeciiAnimaleApi($sQuery);
        if($oSpeciiAnimale){
            $oSpeciiAnimale = $oSpeciiAnimale->toArray();
        }
        return response()->json($oSpeciiAnimale);
    }
}