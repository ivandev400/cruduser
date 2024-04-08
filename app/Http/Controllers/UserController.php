<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainUser;
use App\Http\Requests\StoreOrUpdateRequest;
use App\Providers\UserService;

class UserController extends Controller
{
    public function index(UserService $userService){
        $users = $userService->paginate();
        return view('users.index', ['users'=> $users]);
    }
    public function create(){
        return view('users.create');
    }
    public function store(StoreOrUpdateRequest $request, UserService $userService){
        $userService->create($request);

        return redirect(route('user.index'))->with('success','The user has saved successfully');
    }
    public function edit(MainUser $user){
        return view('users.edit', ['user'=> $user]);
    }
    public function update(MainUser $user, StoreOrUpdateRequest $request, UserService $userService){
        $userService->update($request, $user);

        return redirect(route('user.index'))->with('success','The user has updated successfully');
    }
    public function destroy(MainUser $user){
        $user->delete();

        return redirect(route('user.index'))->with('success','The user has deleted successfully');
    }
}
