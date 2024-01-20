<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('roles.index',compact('roles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.form',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request = $this->validate([
            'name' => 'required|string|max:255',
            'guard_name' => 'required|string|max:255'
        ]);
        Product::create($request->all());
    
        return redirect()->route('roles.index')
                        ->with('success','Role created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('roles.form',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request = $this->validate([
            'name' => 'required|string|max:255',
            'guard_name' => 'required|string|max:255'
        ]);
        $role->update($request->all());
    
        return redirect()->route('roles.index')
                        ->with('success','Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role = $role->delete();
        return redirect()->route('roles.index')->with('success','Role deleted successfully.');
    }
}
