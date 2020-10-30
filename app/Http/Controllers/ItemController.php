<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Item;

class ItemController extends Controller
{
    public function index(){
        
        return view('item.index');
    }

    public function saveItem(Request $request){

        $this->validate($request, [
            'name' =>  'required',
            'type' =>  'required',
            'qtd' =>  'required',
            'color' => 'required'
        ]);

        $item = new Item();
        $item->name = $request->name;
        $item->type = $request->type;
        $item->qtd = $request->qtd;
        $item->color = $request->color;

        $item->save();

    }
}
