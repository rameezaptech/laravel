<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stdmodel;

class studentcontroller extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function registration(){
        return view('registration');
    }
    public function create(Request $request){
        // print_r($request->all());
        // return view('registration');
        $request->validate([

            'name' => 'required ',
            'email' => 'required | email',
            'password' => 'required',
            'gender' => 'required'
        ]);
        $std_data = new stdmodel();
        $std_data->name = $request['name'];
        $std_data->email = $request['email'];
        $std_data->password = $request['password'];
        $std_data->gender = $request['gender'];
$std_data->save();
return redirect('/registration');
//return view ('register');
    }
    public function std_view(){
        $data = stdmodel::all();
        $std_Data = compact('data');
        return view('std-view')->with($std_Data);
        }


        public function Delete($id){
        $user_data = stdmodel::find($id);
        //dd($user_data);
        if(!is_null($user_data)) {
        $user_data->delete();
        return redirect('std/view');
        }else{
             return redirect('std/view');
        }
    }
    public function Edit($id){
        $user_data = stdmodel::find($id);
//dd($user_data);
return view('update')->with(['user_data' => $user_data]);

    }
    public function update($id,Request $request){
        $user = stdmodel::find($id);
//dd($user_data);
$user->name = $request ['name'];
$user->email = $request ['email'];
$user->password = $request ['password'];
$user->gender = $request ['gender'];
$user->save();

return redirect('std/view');

    }
}