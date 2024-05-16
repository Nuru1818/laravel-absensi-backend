<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //index
    public function index(){
        //searh by name, pagination 10

        $users = User::where('name', 'like', '%' . request('name') . '%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('pages.users.index', compact('users'));
    }

    //create
    public function create(){
        return view('pages.users.create');
    }

    //store
    public function store(Request $request){
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:6',
        ]);

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'role'      => $request->role,
            'password'  => Hash::make($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'User Created successfully');

    }
}
