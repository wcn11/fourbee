<?php

namespace App\Http\Controllers;

use App\Customer as CS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomersController extends Controller
{
    protected $cs;

    protected $request;

    public function __construct(CS $cs, Request $request){
        $this->cs = $cs;
        $this->request = $request;
    }

    public function index(){

        if($this->isAuthenticated()){

            return response()->json($this->cs->paginate(10));

        }
        return $this->isNotAuthenticated();

    }

    public function store(){
        if($this->isAuthenticated()){

        $r = $this->request;
        $customer = $this->cs->create([
            'nama' => $r->nama,
            'no_telp' => $r->no_telp,
            'alamat' => $r->alamat
        ]);

        return response()->json([
            'success' => true,
            'data' => $customer
            ]);
        }
        return $this->isNotAuthenticated();
        
    }

    public function update(){
        if($this->isAuthenticated()){

            $r = $this->request;

            $cs = $this->cs->find($r->id);

            $customer = $cs->update([
                'nama' => $r->nama,
                'no_telp' => $r->no_telp,
                'alamat' => $r->alamat
            ]);

            return response()->json([
                'success' => true,
                'data' => $customer
            ]);
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
