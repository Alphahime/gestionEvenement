<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\Role;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::with('permissions')->get();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {$roles=Role::all();
    $permissions=Permission::all();
        return view('roles.ajouter_role',compact('roles','permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = Role::find($request->role);
        $permission = Permission::find($request->permission);
    
        $role->givePermissionTo($permission);
    
        return redirect()->route('role.create')->with('success', 'Permission assignée au rôle avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        $permission = Permission::all();
        return view('roles.edit',compact('role','permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $role_id = $request->input('role_id'); // Assurez-vous que 'role_id' est le nom correct du champ dans votre formulaire
        // $permission_id = $request->input('permission_id'); // Assurez-vous que 'permission_id' est le nom correct du champ dans votre formulaire
    
        
    
    // Trouver le rôle et la permission correspondants dans la base de données
        $role = Role::findOrFail($id);
        $role->update($request->all());
        // $permission = Permission::findOrFail($id);
    
        

    // Assigner la permission au rôle (ou toute autre logique de mise à jour nécessaire)
        // $role->permissions()->syncWithoutDetaching($permission);
    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->back();
    }
}
