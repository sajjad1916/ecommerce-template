<?php

namespace App\Http\Controllers;
use App\Models\Admin;   

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
       return view('admin.login');
    }
    public function auth(Request $request)
{
   $email    = $request->post('email');
   $password = $request->post('password');

   $result = Admin::where(['email' => $email, 'password' => $password])->get();
  //checking Validty of the input pass and eamil

   if(isset($result['0']->id)){
    $request->session()->put('ADMIN_LOGIN', true);
    $request->session()->put('ADMIN_ID', $result['0']->id);
    return redirect('admin/dashboard');

   }else{
       $request->session()->flash('error', 'Please Enter Valid Details');
       return redirect('admin');
   }
}
//admin Dashboard
public function dashboard()
{
   return view('admin.dashboard');
}
}



