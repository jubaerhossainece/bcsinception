<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.users.index');
        
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.users.create');
        $roles = Role::all();
        return view('backend.users.form', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email|max:200',
            'password' => 'required|min:8|string|confirmed|min:6',
            'role' => 'integer|nullable',
            'image' => 'nullable|image'
        ]);

        $user = User::create([
            'name' => $request->name,
            'role_id' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $request->filled('status')
        ]);

        return redirect()->route('app.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        Gate::authorize('app.users.edit');
        $roles = Role::all();
        return view('backend.users.form', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        Gate::authorize('app.users.edit');

        $request->validate([
            'name' => 'required|string',
            'email' => [
        'required','email',
        Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|min:8|string|confirmed|sometimes',
            'role' => 'integer|nullable',
            'image' => 'nullable|image'
        ]);

        $user->update([
            'name' => $request->name,
            'role_id' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $request->filled('status')
        ]);

        return redirect()->route('app.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
