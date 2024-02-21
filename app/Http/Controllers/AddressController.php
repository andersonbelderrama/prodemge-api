<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($personId)
    {
        return Address::where('person_id', $personId)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $personId)
    {
        $address = $request->all();
        $address['person_id'] = $personId;

        return Address::create($address);
    }

    /**
     * Display the specified resource.
     */
    public function show($addressId, $personId)
    {
        return Address::where('person_id', $personId)->findOrFail($addressId);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $addressId, $personId)
    {
        $address = Address::where('person_id', $personId)->findOrFail($addressId);
        $address->update($request->all());

        return $address;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($addressId, $personId)
    {
        $address = Address::where('person_id', $personId)->findOrFail($addressId);
        $address->delete();

        return 204;
    }
}
