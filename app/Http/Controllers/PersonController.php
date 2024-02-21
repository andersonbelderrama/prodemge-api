<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Person::query()->with('addresses');

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->has('cpf')) {
            $query->where('cpf', 'like', '%' . $request->input('cpf') . '%');
        }

        if ($request->has('id')) {
            $query->where('id', '=', $request->input('id'));
        }

        return $query->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Person::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        return Person::findOrFail($person->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        $person = Person::findOrFail($person->id);
        $person->update($request->all());

        return $person;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person = Person::findOrFail($person->id);
        $person->delete();

        return 204;
    }
}
