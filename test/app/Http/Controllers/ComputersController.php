<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer ;

class ComputersController extends Controller
{

    // private static function getdata(){
    //     return[
    //         ['id' => 1 , 'name' => 'LG' , 'origin' => 'Koria'],
    //         ['id' => 2 , 'name' => 'HP' , 'origin' => 'Usa'],
    //         ['id' => 3 , 'name' => 'Siemens' , 'origin' => 'Germany'],
    //         ['id' => 3 , 'name' => 'Lenovo' , 'origin' => 'France']
    //     ];
    // }

//___________________________________________________________________
    public function index()
    {
        return view('computers.index' , [
            'computers' => Computer::all()
        ]);
    }

//___________________________________________________________________
    public function create()
    {
        return view('computers.create');
    }



//___________________________________________________________________
    public function store(Request $request){

        $request->validate([
            'computer-name'=>'required' ,
            'computer-origin'=>'required' ,
            'computer-price'=>'required|integer'
        ]);

        $computer = new Computer();
        $computer->name = strip_tags($request->input('computer-name'));
        $computer->origin = strip_tags($request->input('computer-origin')) ;
        $computer->price = strip_tags($request->input('computer-price')) ;

        $computer->save();


        return redirect()->route('computers.index') ;
    }







//____________________________________________________________________
    public function show($computer){
        $index = Computer::findOrFail($computer);



        return view('computers.show' , [
            'computer' => $index
        ]);
    }







//____________________________________________________________________
    public function edit($computer){

        return view('computers.edit' ,[
            'computer' => Computer::findOrFail($computer)
        ]);

    }





//____________________________________________________________________
    public function update(Request $request, $computer){
        $request -> validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required | integer'
        ]);

        $update =Computer::findOrFail($computer);
        $update->name = strip_tags($request -> input('computer-name'));
        $update ->origin = strip_tags($request->input('computer-origin'));
        $update -> price = strip_tags($request->input('computer-price'));
        $update->save();


        return redirect()->route('computers.show' , $computer) ;

    }






//____________________________________________________________________
    public function destroy($computer){

        $delet = Computer::findOrFail($computer);
        $delet->delete();
        return redirect()->route('computers.index');
    }





}
