<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Studio\BaseController as Base;
// use Request;

class LoginController extends Base
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = "/";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function doLogin(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $this->sendLoginResponse($request);
            $response = [
                'success' => true,
            ];
            // $response =  $this->authenticated($request, auth()->user());
            
        return response()->json($response);
        }else{
            $response = [
                'success' => false,
                'message' => 'Email atau password salah!'
            ];
        return response()->json($response);
        }

    }
}
