<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Returns the welcome page
     * 
     * @params Request
     */
    public function index(Request $request)
    {
        return view('welcome');
    }

    /**
     * Creates a new novel
     * 
     */
    public function create()
    {

    }

    /**
     * Stores a new novel
     * 
     */
    public function store()
    {

    }

    /**
     * Shows a novel
     * 
     */
    public function show()
    {

    }


    public function edit()
    {

    }
    /**
     * Updates a novel already in the database
     */
    public function update()
    {

    }

    /**
     * Deletes a novel in the database
     */
    public function destroy()
    {

    }
}
