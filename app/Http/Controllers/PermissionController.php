<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Permission;
use App\User;
use Auth;

class PermissionController extends Controller
{
   
    public function createPermission()
    {
        $user = Auth::user();
        $a = $user->hasRole('admin');
        if($a){
            echo 'true';
        }
        else{
            echo 'false';
        }
    }

}
