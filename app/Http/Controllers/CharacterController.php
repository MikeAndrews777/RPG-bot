<?php

namespace App\Http\Controllers;

use App\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{

    public function index()
    {
        // Displays list of characters in a sortable format

        $characters = Character::sortable()->paginate(5);

        return view('Characters.list', compact('characters'));
    }


    public function create()
    {
        // Create a new character

        return view('Characters.create');
    }


    public function store(Request $request)
    {
        // Saves data into a new 'encounter' object

        request()->validate([
            'name' => 'required'
        ]);

        $character = new Character();

        $character->name = request('name');
        $character->description = request('description') ?? 'Description';
        $character->hit_points = request('hit_points') ?? '1';
        $character->initiative = request('initiative') ?? '0';

        $character->save();

        return redirect('/characters');
    }


    public function show($id)
    {
        // Displays contents of the 'character' called by its id number

        $character = Character::find($id);

        return view('Characters.show', compact('character'));

    }


    public function edit($id)
    {
        // Passes information through to update to be saved

        $character = Character::find($id);

        return view('Characters.edit', ['character'=>$character]);
    }


    public function update($id)
    {
        // Updates and stores the edited values of a 'character'

        request()->validate([
            'name' => 'required'
        ]);

        $character = Character::find($id);

        $character->name = request('name');
        $character->description = request('description') ?? 'Description';
        $character->hit_points = request('hit_points') ?? '1';
        $character->initiative = request('initiative') ?? '0';

        $character->save();

        return redirect('/characters/list/' . $character->id);
    }


    public function destroy($id)
    {
        // Deletes a 'character' from the database

        $character = Character::findorfail($id);
        $character->delete();


        return redirect('/characters/list')->with([
            'flash_message' => 'Deleted',
            'flash_message_important'=>false
        ]);
    }
}
