<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get()->filter(function ($user){
            return $user->hasAnyRole(['customer']);
        });
        return view('admin.pages.customers.customers')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $order)
    {
        //
    }
}
