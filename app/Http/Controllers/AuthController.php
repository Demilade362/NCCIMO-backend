<?php

namespace App\Http\Controllers;

use App\Events\WelcomeEmail;
use App\Mail\Welcome;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            abort(404, 'User Not Found');
        }

        return response([
            'user' => $user,
            'token' => $user->createToken($user->email)->plainTextToken
        ]);
    }

    public function logout(Request $request)
    {
        return $request->user()->currentAccessToken()->delete();
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'number' => 'required',
            'zone' => 'required|string',
            'subzone' => 'required|string',
            'state' => 'required',
            'stateCode' => 'required'
        ]);

        $user = User::create($request->all());

        WelcomeEmail::dispatch($user);

        // Mail::to($user->email)->send(new Welcome($user));

        return response([
            'user' => $user,
            'token' => $user->createToken($user->email)->plainTextToken
        ]);
    }
}
