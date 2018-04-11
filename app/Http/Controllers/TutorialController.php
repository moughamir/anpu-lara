<?php

namespace Anpu\Http\Controllers;

use Illuminate\Http\Request;
use Anpu\Tutorial;
use Anpu\Http\Resources\Tutorial as TutorialResource;

class TutorialController extends Controller
{
    // get single tutorial
    public function show($id)
    {
        return new TutorialResource(Tutorial::findOrFail($id));
    }
    // get all tutorials
    public function getAll()
    {
        return new TutorialResource(Tutorial::all());
    }
}

