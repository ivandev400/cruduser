<?php

namespace App\Http\Controllers;

use App\Models\Main_user as ModelsMain_user;
use Illuminate\Http\Request;
use App\Models\Main_user;

class UserController extends Controller
{
    public function index(){
        $users = Main_user::all();
        return view('users.index', ['users'=> $users]);
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        $data= $request->validate([
            'name'=> 'required',
            'email'=> 'email:rfc,dns',
            'phone'=> 'required|string|min:8|max:11'
        ]);
        $newUser = Main_user::create($data);

        return redirect(route('user.index'))->with('success','The user has saved successfully');
    }
    public function edit(Main_user $user){
        return view('users.edit', ['user'=> $user]);
    }
    public function update(Main_user $user, Request $request){
        $data= $request->validate([
            'name'=> 'required',
            'email'=> 'email:rfc,dns',
            'phone'=> 'required|string|min:8|max:11'
        ]);
        $user->update($data);
        return redirect(route('user.index'))->with('success','The user has updated successfully');
    }
    public function destroy(Main_user $user){
        $user->delete();

        return redirect(route('user.index'))->with('success','The user has deleted successfully');
    }
}
