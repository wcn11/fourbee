<?php

namespace App\Http\Controllers;

use App\Customer as CS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomersController extends Controller
{
    protected $cs;

    public function __construct(CS $cs){
        $this->cs = $cs;
    }

    public function index(){

        if($this->isAuthenticated()){

            return response()->json($this->cs->paginate(10));

        }
        return $this->isNotAuthenticated();

    }

    protected function isAuthenticated(){
        return Auth::check();
    }

    protected function isNotAuthenticated(){
        return response()->json([
            'success' => false,
            "message" => "You are not allowed!"
        ], 403);
    }
}
