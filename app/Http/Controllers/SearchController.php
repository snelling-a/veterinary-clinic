<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
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
}
