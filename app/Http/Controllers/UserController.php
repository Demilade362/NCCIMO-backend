<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'number' => 'required|max:14|min:11',
            'state' => 'required|string',
            'stateCode' => 'required',
            'zone' => 'required',
            'subzone' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        User::create($request->all());

        return redirect()->route('user.index')->with('msg', 'User Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $user->update([
            'name' => $request->name,
        ]);
        return redirect()->route('user.index')->with('msg', 'User Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function search(Request $request) {
        $name = $request->name;
        $users = User::where('name', 'like', "%$name%")->get();
    
        return view('users.index', compact('users'));
    }
}
