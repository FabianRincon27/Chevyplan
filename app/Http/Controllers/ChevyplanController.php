<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chevyplan;

class ChevyplanController extends Controller
{
    public function getHome(){
        return view('home');
    }

    public function getQuery(Request $request){
        switch ($request->input('type_document')) :
            case '1':
                $data = Chevyplan::all()
                ->where('type_document','=',$request->input('type_document'))
                ->where('number_document','=',$request->input('number_document'));

            break;
            case '2':
                $data = Chevyplan::all()
                ->where('type_document','=',$request->input('type_document'))
                ->where('number_document','=',$request->input('number_document'));
            break;
            case '3':
                $data = Chevyplan::all()
                ->where('type_document','=',$request->input('type_document'))
                ->where('number_document','=',$request->input('number_document'));
            break;
            case '4':
                $data = Chevyplan::all()
                ->where('type_document','=',$request->input('type_document'))
                ->where('number_document','=',$request->input('number_document'));

            break;
        endswitch;

        return $data;
    }
}
