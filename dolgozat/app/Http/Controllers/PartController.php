<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller

{
    public function index(){
        $parts = response()->json(Part::all());
        return $parts;
    }

    public function show($id){
        $parts = response()->json(Part::find($id));
        return $parts;
    }

    public function store(Request $request){
        $Part = new Part();
        $Part->name = $request->name;
       
        $Part->save();
    }

    public function update(Request $request, $id){
        $Part  = Part::find($id);
        $Part  ->name = $request->name;
       
        $Part ->save();
    }
    public function destroy($id)
    {
        //find helyett a paraméter
        Part::find($id)->delete();
    }
}
