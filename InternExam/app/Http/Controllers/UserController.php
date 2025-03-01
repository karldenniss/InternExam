<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Display a list of all users.
    public function index()
    {
        return view('users.index', [
            'heading' => 'List of all users',
            'users' => User::latest()->simplePaginate(5)
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    //Display a form to create a new user.
    public function create()
    {
        return view('users.create');
    }
    //Store a new user in the database.
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
            ]
        );

        //create the new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'active' => 1,
        ]);

        return redirect('/');
    }
    //Display a form to edit an existing user.
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    //Update an existing user in the database.
    public function update(Request $request, User $user)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => ['required', 'email'],
                'password' => 'required',
            ]
        );

        //create the new user
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'active' => $request->has('active') ? 1 : 0,
        ]);

        return back()->with('message', 'User Updated Successfully');
    }
    // Update an existing user in the database.
    public function destroy() {}
    //Display a list of all active users.
    public function activeUsers()
    {
        $users = User::where('active', true)->get();
        return view('users.isActive', [
            'heading' => 'Active Users',
            'users' => $users,
        ]);
    }
}
