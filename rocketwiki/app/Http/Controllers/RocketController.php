<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Rocket;
use Illuminate\Http\Request;

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
}
