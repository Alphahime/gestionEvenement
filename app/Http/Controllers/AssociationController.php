<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateAssociationRequest;


use App\Models\Association;
use Illuminate\Foundation\Auth\User as Authenticatable;



use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $associations=Association::all();
        return view('admins.liste_association',compact('associations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
   
            return view('associations.inscription_assos');
            
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateAssociationRequest $request)
    {   
    // hachage du mot de pass
     $request->merge(['password'=>Hash::make($request->password)]);
        Association::create($request->all());
        return redirect()->back();
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
        $association = Association::findOrFail($id);
        return view('associations.edit', compact('association'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateAssociationRequest $request, string $id)
    {
       $association=Association::find($id);
       $association->update($request->all());
       return redirect('association');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $association=Association::find($id);
        $association->delete();
        return redirect('association');
    }

    // route pour deasctiviter le compte de l'association

   
}
