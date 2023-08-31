<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles=Role::get();//Esto trae todos los menus
        return view('roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Role::create(['name'=>$request->roles]);
        return redirect('roles');
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
        $role=Role::find($id);
        return view('roles.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role=Role::find($id); 
        $role->update(['name'=>$request->roles]);
        return redirect('roles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $role=Role::find($id);
        $role->delete();
        return redirect ()->route('roles.index');
    }

    public function asignar($id){
        $role=Role::find($id);
        $permisos=Permission::get();
        $asignados=$role->permissions;
        
        return view('roles.asignar',compact('role','permisos'));
    }

    public function asignarStore(Request $request,$id){
        $role=Role::find($id);
        $IDs=$request->permiso;
        $permisos=Permission::whereIn('id',$IDs)->select('name')->get();
        $permisos=$permisos->pluck('name')->all();
        $role->givePermissionTo($permisos);

        return redirect ()->route('roles.index');
    }



}
