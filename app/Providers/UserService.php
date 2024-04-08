<?php
namespace App\Providers;
 
use App\Models\MainUser;
use Illuminate\Http\Request;
 
class UserService
{
    public function create(Request $request): MainUser
    {
        $user = MainUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        return $user;
    }
    public function update(Request $request, MainUser $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        return $user;
    }
    public function paginate(){
        return MainUser::paginate(10);
    }
}