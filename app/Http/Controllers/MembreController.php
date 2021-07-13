<?php

namespace App\Http\Controllers;

use App\Models\membre;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class MembreController extends Controller
{
    public function index(){
        $membres = membre::all();
        return view('membres',compact('membres'));
    }
    public function create(){
        return view('pages.createmembre');
    }
    public function store(Request $request){
        $store = new membre;
        $store->age = $request->age;
        $store->nom = $request->nom;
        $store->genre = $request->genre;
        $store->save();
        return redirect('/createmembre');
    }
    public function destroy($id){
        $destroy =membre::find($id);
        $destroy->delete();
        return redirect('/');
        // Route::getCurrentRoute()->getPath();
    }

}
