<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShareController extends Controller
{
    
    public function index(){

    }

    public function create(){
        return view('shares.create');
    }

    public function store(Request $request){

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
