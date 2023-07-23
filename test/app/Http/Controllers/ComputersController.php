<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputersController extends Controller
{

    private static function getdata(){
        return[
            ['id' => 1 , 'name' => 'LG' , 'origin' => 'Koria'],
            ['id' => 2 , 'name' => 'HP' , 'origin' => 'Usa'],
            ['id' => 3 , 'name' => 'Siemens' , 'origin' => 'Germany'],
            ['id' => 3 , 'name' => 'Lenovo' , 'origin' => 'France']
        ];
    }

//___________________________________________________________________
    public function index()
    {
        return view('computers.index' , [
            'computers' => self::getdata()
        ]);
    }

//___________________________________________________________________
    public function create()
    {
        //
    }

//___________________________________________________________________
    public function store(Request $request){    }


//____________________________________________________________________
    public function show($id){
        $computers = self::getdata();
        $index = array_search($id , array_column($computers , 'id'));

        if($index === false){
            abort(404);
        }
        return view('computers.show' , [
            'computer' => $computers[$index]
        ]);
    }



//____________________________________________________________________
    public function edit($id){}



//____________________________________________________________________
    public function update(Request $request, $id){}



//____________________________________________________________________
    public function destroy($id){}


}
