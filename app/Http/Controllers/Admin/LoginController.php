<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index(){
        return view('admin.login');
    }

    public function submit(Request $request){
//        $this->validate(request parameter, rules, messages);

        $this->validate($request, ['username' => 'required',
            'password' => 'required']);


//        to generate hashed password
        // dd(bcrypt('123456'));



        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
            'is_active' => '1'
        ])){
            //succces code

            return redirect()->route('admin.dashboard');
        }else{
            session()->flash('message', 'Username or password is incorrect');
            return redirect()-> back(); // route('admin.dashboard');


        }


    }

}
