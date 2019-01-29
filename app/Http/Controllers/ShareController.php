<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShareController extends Controller
{
    
    public function index(){
        $shares = Share::all();
        return view('shares.index', compact('shares'));

    }

    public function create(){
        return view('shares.create');
    }

    public function store(Request $request){
        $request->validate([
            'share_name'=>'required',
            'share_price'=>'required|integer',
            'share_qty' => 'required|integer'
        ]);

        $share = new Share([
            'share_name'=>$request->get('share_name'),
            'share_price'=>$request->get('share_price'),
            'share_qty'=>$request->get('share_qty')
        ]);
        $share->save();
        return redirect('/shares')->with('success', 'stocks has been added');
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
