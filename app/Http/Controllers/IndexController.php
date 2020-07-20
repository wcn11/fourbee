<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Studio\BaseController
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if(Auth::check()){
            // $data = 'iyua';
            $data = ["scripts" => Arr::add($this->scriptVariables(), "login", "logged")];
        }else{
            // $data = 'kaga';
            $data = ["scripts" => $this->scriptVariables()];
        }
        // return response()->json($data);
        return view("welcome", $data);
    }
}
