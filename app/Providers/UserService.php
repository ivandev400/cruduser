<?php
namespace App\Providers;
 
use App\Models\MainUser;
use Illuminate\Http\Request;
 
class UserService
{
    public function createUser(Request $request): MainUser
    {
        $user = MainUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        return $user;
    }
    public function updateUser(Request $request, MainUser $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        return $user;
    }
    public function paginateUsers(){
        return MainUser::paginate(10);
    }
}