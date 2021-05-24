<?php

namespace App\Http\Controllers;

use App\Character;
use App\Encounter;
use Illuminate\Http\Request;

class EncounterController extends Controller
{

    public function index()
    {
        // Displays index of 'encounters' and serves as home page of all encounters

       $encounters = Encounter::sortable()->paginate(5);

        return view('encounters.index', compact('encounters'));
    }


    public function create()
    {
        // Create a new encounter

        $characters = Character::all();  // Adds characters reference


        return view('encounters.create',  compact('characters'));
    }


    public function store(Request $request)
    {
        // Saves data into a new 'encounter' object

        request()->validate([
            'name' => 'required'
        ]);

        $encounter = new encounter();

        $encounter->name = request('name');
        $encounter->description = request('description') ?? 'Description';

        $encounter->save();

        $encounter->characters()->attach(request('characters'));

        return redirect('/encounters');
    }


    public function show(Encounter $encounter)
    {
        // Displays contents of the 'encounter' called by its id number

        $characters = Character::all();  // Adds characters reference

        return view('encounters.show', compact('encounter', 'characters'));
    }


    public function edit(Encounter $encounter)
    {
        // Passes information through to update to be saved

        $characters = Character::all();  // Adds characters reference

        return view('encounters.edit', ['encounter'=>$encounter],  compact('characters'));
    }


    public function update(Request $request, Encounter $encounter)
    {
        // Updates and stores the edited values of an 'encounter'

        request()->validate([
            'name' => 'required'
        ]);


        $encounter->name = request('name');
        $encounter->description = request('description') ?? 'Description';

        $encounter->save();

        $encounter->characters()->sync(request('characters'));


        return redirect('/encounters/' . $encounter->id);

    }


    public function destroy(Encounter $encounter)
    {
        // Deletes an 'encounter' from the database

        $encounter->delete();


        return redirect('/encounters')->with([
            'flash_message' => 'Deleted',
            'flash_message_important'=>false
        ]);
    }
}
