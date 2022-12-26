<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Rocket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RocketController extends Controller
{
    function getAllRockets() {
        return Rocket::all();
    }

    function getRocketById($id) {
        return Rocket::all()->find($id);
    }

    function getRocketsByActivity($active) {
        $status = $active === 'true'? true: false;        ; 
        return Rocket::all()->where('active', '==', $status);
    }

    public function getRocketsBetweenSuccessRates($min, $max)
    {
        return Rocket::all()
        ->where('success_rate_pct', '>=', $min)
        ->where('success_rate_pct', '<=', $max);
    }

    public function getRocketsByManufacturerId($id)
    {
        return Rocket::all()->where('manufacturer_id', '==', $id);
    }

    public function getRocketsByManufacturerName($name)
    {
        $id = Manufacturer::all()->where('name', '==', $name)
            ->first()
            ->id;
        return Rocket::all()->where('manufacturer_id', '==', $id);
    }

    public function getManufacturerById($id)
    {
        return Manufacturer::all()->find($id);
    }

    public function getManufacturerByName($name)
    {
        return Manufacturer::all()->where('name', '==', $name);
    }

    public function addRocket(Request $request) 
    {
        $new_rocket = [
            'name' =>  $request->name,
            'active' => $request->active,
            'cost_per_launch' => $request->cost_per_launch,
            'success_rate_pct' => $request->success_rate_pct,
            'first_flight' => $request->first_flight,
            'description' => $request->description,
            'image' => $request->image,
            'manufacturer_id' => $request->manufacturer_id
        ];

        DB::table('rockets')->insert($new_rocket);        
        
        return [ "Success" => $new_rocket ];
    }

    public function removeRocket($id)
    {
        DB::table('rockets')->delete($id);

        return ["Removed" => ["id" => $id]];

    }
}
