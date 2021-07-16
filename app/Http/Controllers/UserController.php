<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\SendResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use SendResponse;
    public function register(Request $request)
    {
        $request = $request->json()->all();
        $request['password'] = bcrypt($request['password']);
        $user = User::create($request);
        $token = $user->createToken('ecommerce')->accessToken;
        return $this->send_response(200, 'user  created successfuly', null, $user, $token);
    }
    public function login(Request $request)
    {
        $request = $request->json()->all();

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            // $user = Auth::user();
            $token = Auth::user()->createToken('ecommerce')->accessToken;
            return $this->send_response(200, 'login   has been successfuly', [], User::find(Auth::id()), $token);
        } else {
            return $this->send_response(401, 'Unauthorized', null, null, null);
        }
    }
}