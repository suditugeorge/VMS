<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class MainAdminController extends Controller
{
    public function home()
    {
//        Auth::logout();
        die('cacat');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('admin.login', ['show_navigation' => false]);
        }

        if($request->isMethod('post')){
            try{
                $sEmail = $request['email'];
                $sPassword = $request['password'];
                $bRemember = $request['remember'];
                $oUser = User::where('email', '=', $sEmail)->first();

                if ($oUser === null) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Aceast utilizator nu există.',
                    ]);
                }elseif(Auth::attempt(['email' => $sEmail, 'password' => $sPassword], $bRemember)){
                    $oUser = Auth::user();
                    return response()->json([
                        'success' => true,
                    ]);
                }else{
                    return response()->json([
                        'success' => false,
                        'message' => 'Parola este greșită',
                    ]);
                }
            }catch(\Exception $e){
                dd($e);
                return response()->json([
                    'success' => false,
                    'message' => 'A intervenit o problemă! Vă rugăm să ne contactați telefonic.',
                ]);
            }
        }
    }
}
