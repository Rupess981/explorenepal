<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

        return view('admin.dashboard');
    }
    public function logout(){
        //Auth:expire()
        session()->flush();
        session()->flash('message','successfully loggrd out.');
        return redirect()->route('admin.login');
    }

}
