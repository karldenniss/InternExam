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
            'users' => User::latest()->get()
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
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

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
    public function edit() {}

    //Update an existing user in the database.
    public function update() {}
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
