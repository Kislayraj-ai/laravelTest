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

    public function index(): View {
        $bussiness  = bussinessModel::all();
        return view('allBussinesses' ,['bussiness' => $bussiness ]) ;
}

    public function create() : View{

        return  view('addBussiness') ;
    }

    public function store(Request $req){
        $input  = $req->all() ;
        $req->validate([
            'Name ' => "required" ,
            "address" => "required" ,
            'email' => 'required  | email' ,
            "website" => "required" ,
            'contact_person' => 'required' ,
            'phone_no' => 'required | numeric',
    ]
    ) ;
         bussinessModel::create($input);
        return redirect('/')->with('flash_message','Student Added');
 }
}