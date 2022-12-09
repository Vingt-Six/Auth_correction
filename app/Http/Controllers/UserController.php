<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id) {
        $show = User::find($id);
        return view('show', compact('show'));
    }

    public function destroy($id) {
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function user() {
        $users = User::all()->where('role_id', '!=', 1);
        $roles = Role::all();
        return view('user', compact('users', 'roles'));
    }

    public function update(Request $request, $id) {
        $update = User::find($id);
        $update -> role_id = $request -> role_id;
        $update -> save();
        return redirect()->back();
    }
}
