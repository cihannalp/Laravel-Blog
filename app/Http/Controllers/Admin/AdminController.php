<?php

namespace App\Http\Controllers\Admin;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        return view('admin.admin');

    }

    
    public function showLogin()
    {

        return view('admin.auth.login');    

    }


    public function logIn()
    {
        $request = Request::all();
        $rules = [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ];

        $validator = Validator::make($request, $rules);

        if ($validator->fails())
        {
            echo 'fail validator';
            return redirect('/admin/login')->withErrors($validator)->withInput(Request::except('password'));

        }
        else
        {   
            
            $admindata = [
                'email' => $request['email'],
                'password' => $request['password']
            ];

            if(Auth::attempt($admindata))
            {
                return redirect('/admin');
            }

            else
            {
                echo 'fail';
                
            }
        }        

    }

    
    public function logOut()
    {

    

    }

}