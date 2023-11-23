<?php

namespace App\Http\Controllers;

use App\Models\bussinessModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class bussinessController extends Controller
{
    public function allBussinesss() : View{
        $bussiness  = bussinessModel::all();
        return view('allBussinesses' ,['bussiness' => $bussiness ]) ;
    }

    // public function index(): View {
        // $students  = bussinessModel::all();
        // return view('allBussinesses')->with('students',$students) ;
// }

    public function create() : View{

        return  view('addBussiness') ;
    }

    public function store(Request $req){
        $input  = $req->all() ;
        // print_r( $input );die;
         bussinessModel::create($input);
        return redirect('/')->with('flash_message','Student Added');
 }
}