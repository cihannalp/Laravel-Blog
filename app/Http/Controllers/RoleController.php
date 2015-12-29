<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Permission;
use App\User;

class RoleController extends Controller
{

    public function createRole()
    {
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Administrator';
        $admin->description  = 'User is allowed to manage and edit other users and articles';
        $admin->save();

        $user = User::where('email', '=', 'cihan@example.com')->first();

        // role attach alias
        $user->attachRole($admin); 

        $createPost = new Permission();
        $createPost->name         = 'create-post';
        $createPost->display_name = 'Create Posts'; 
        // Allow a user to...
        $createPost->description  = 'create new blog posts'; 
        $createPost->save();

        $admin->attachPermission($createPost);
    
    }
}
