<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Company;

class FlowerController extends Controller
{
    public function searchflower(Request $request){

        return view('search');
    }

    public function populate(Request $request){

      return back()->with('success','flower added succesfully');
    }

    public function login(Request $request){
      $user = DB::table('companies')->select('*')->where('company_email',$request->email)->where('password',Hash::make($request->password))->first();

      return redirect('dashboard');
    }

    public function register(Request $request){
      Company::create([
          'company_name' => $request['company_name'],
          'company_email' => $request['company_email'],
          'company_address' => $request['company_address'],
          'company_contact' => $request['company_contact'],
          'company_owner' => $request['company_owner'],
          'password' => Hash::make($request['password']),
      ]);


      return redirect('login')->with('msg','You have been registered on the system. You can login with your email and password');

    }

    public function editflower($id){

    }


}
