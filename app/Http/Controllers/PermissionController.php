<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $users = User::all();
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('users', 'permissions'));
    }

    public function assign(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'permissions' => 'array',
        ]);

        $user = User::find($request->user_id);
        $user->syncPermissions($request->permissions ?? []);

        return redirect()->back()->with('success', 'Permissions updated successfully');
    }
}
