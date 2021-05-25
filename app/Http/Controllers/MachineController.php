<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Machine;
use DB;

class MachineController extends Controller
{
    //
    public function index() {

        $machines = Machine::all();
        $brand = DB::select('SELECT DISTINCT brand FROM machines');
        $categories = DB::select('SELECT DISTINCT category FROM machines');
        $popular = DB::select('SELECT * FROM machines WHERE tag = "popular"');

        // dd($brand);

        return view('/welcome')->with(['machines' => $machines, 'popular' => $popular, 'brand' => $brand, 'categories' => $categories]);
    }

    public function searching(Request $request) {


        $category = $request->category;
        $search = $request->searchtext;
        
   // dd($search);
        if(!$category and !$search){
            $machines = Machine::all();
            $brand = DB::select('SELECT DISTINCT brand FROM machines');
            $categories = DB::select('SELECT DISTINCT category FROM machines');
            $popular = DB::select('SELECT * FROM machines WHERE tag = "popular"');

            // dd($popular);

            return view('/welcome')->with(['machines' => $machines, 'popular' => $popular, 'brand' => $brand, 'categories' => $categories]);
        }
        elseif(!$category) {
            $results = Machine::query()
                ->Where('name', 'LIKE', "%{$search}%")  
                ->get();

        return view('/search')->with(['machines' => $results]);
        }

        elseif (!$search) {
            # code...
            $results = Machine::query()
                ->Where('category', '=', "$category") 
                ->get();

        return view('/search')->with(['machines' => $results, 'category' => $category]);
        }
        
       else {
           # code...
           
        $results = Machine::query()
        ->Where('category', '=', "$category")
        ->orWhere('name', 'LIKE', "%{$search}%")  
        ->get();

return view('/search')->with(['machines' => $results, 'category' => $category]);
       }
       
       

    }

    public function param($param) {

        $param = strtolower($param);
        $brand = DB::select('SELECT DISTINCT brand FROM machines');
        $categories = DB::select('SELECT DISTINCT category FROM machines');

        $machines = DB::select('SELECT * FROM machines WHERE category = "$param" or brand = "$param"');
        $number = DB::select('SELECT COUNT(*) FROM machines WHERE category = "$param" or brand = "$param"');
        $number =(float)$number;

        $machines = Machine::query()
        ->Where('category', '=', "$param")
        ->orWhere('brand', '=', "$param")  
        ->get();

        //  dd($number);

        return view('/search')->with(['machines' => $machines, 'number' => $number, 'brand' => $brand, 'categories' => $categories, 'param' => $param]);
    }

    public function admin() {

        $machines = Machine::all();

        return view('/admin', compact('machines'));
    }
}
