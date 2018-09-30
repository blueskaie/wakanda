<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users = User::where('id','>',1)->orderBy('created_at','desc')->take(500)->get();
        // $users = User::all();
        return view('admin/usersboard/index', ['users' => $users]);
    }

    public function delete($id)
    {
        return $result = User::destroy($id);
    }
}
