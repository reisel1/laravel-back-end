<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User as User;

class UserController extends Controller
{
    //
    public function register(Request $request) 
    { 
        //echo "hello";
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
            'role_id'=>'required',
            'permission_id'=>'required',
        ]);
        if ($validator->fails()) { 
            //echo "error";
            return response()->json(['error'=>$validator->errors()], 401);            
        }
         $input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        $success['name'] =  $user->name;
        return response()->json(['success'=>$success], $this-> successStatus); 
    }

    public function login(Request $request){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }


    /*public function getById($id){
        $user=User::find($id);
        return responce()->json(['user'=>$user]);
    }*/


    public function getAll(){
       //	Show	our	users	
         $users = User::all();   
         //	Store	the	users	in	an	array	of	data
        $data = array('users' => $users);
        //	Load	the	view	and	pass	it	our	data	array
       //return view('users', $data);
        return response()->$data;
    }



    public function tmp(Request $request) //Request $request
    {
        $email=$request->input('email');
        //echo $tmp
        return response()->json([
            'email' => $email,
            'state' => 'CA'
        ]);
    }
    
}
