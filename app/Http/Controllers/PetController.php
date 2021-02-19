<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $name_frag = $request->name;
        if ($name_frag) {
            $owners = Owner::with("pets")
                ->select("owners.*")
                ->distinct()
                ->leftJoin("pets", "owners.id", "pets.owner_id")
                ->where("first_name", "like", "%$name_frag%")
                ->orWhere("surname", "like", "%$name_frag%")
                ->orWhere("pets.name", "like", "%$name_frag%")
                ->orderBy("surname", "asc")
                ->get();
            // ->toSql();
            // dd($owners);
        } else {
            $owners = [];
        }
        $request->flash();
        return view("search", compact(["owners"]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "created";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pet = Pet::with("owner")->findOrFail($id);
        return view("pets.show", compact(["pet"]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pet = Pet::findOrFail($id);

        return view("pets.create-edit", compact(["pet"]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $edited_pet = Pet::findOrFail($id);
        $edited_pet->name = $request->input("name");
        $edited_pet->breed = $request->input("breed");
        $edited_pet->weight = $request->input("weight");
        $edited_pet->age = $request->input("age");
        // $edited_pet->owner_id = $request->input("owner_id");
        $edited_pet->save();

        return redirect(action("PetController@show", $edited_pet->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
