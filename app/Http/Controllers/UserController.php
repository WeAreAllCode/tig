<?php

namespace App\Http\Controllers;

use User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	// Authentication Check
	public function __construct()
    {
        $this->middleware('auth');
    }

    // All Users
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Create User Form
    public function create()
    {
        //
    }

    // Store New User
    public function store(Request $request)
    {
        //
    }

    // Show User
    public function show($id)
    {
        //
    }

    // Edit User Form
    public function edit($id)
    {
        //
    }

    // Update Existing User
    public function update(Request $request, $id)
    {
        //
    }

    // Delete User
    public function destroy($id)
    {
        //
    }
}
