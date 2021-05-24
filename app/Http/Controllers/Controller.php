<?php

namespace App\Http\Controllers;

use App\Character;
use App\Encounter;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        // Display list of 'encounters' on home page of Play

        $encounters = Encounter::sortable()->paginate(5);


        return view('play.index', compact('encounters'));
    }

    public function show(Encounter $encounter)
    {
        // Displays displays an 'encounter' and the characters assigned to it



        return view('play.show', compact('encounter'));
    }

}
