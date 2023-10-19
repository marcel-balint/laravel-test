<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Prepare empty object
        $movie = new Movie();
        return view('movies.CRUD.form', compact('movie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $this->validateInput($request);

        // Data from the form 
        $movie = new Movie();
        $movie->name = $request->input('name');
        $movie->year = $request->input('year');
        $movie->save();
        session()->flash('success_message', 'Successfully Created!');

        return redirect()->route('movies.edit', $movie->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        // Display form with values to edit

        $movie = Movie::findOrFail($id);
        // dd($movie);
        return view('movies.CRUD.form', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation
        $this->validateInput($request);

        $movie = Movie::findOrFail($id); // Find the movie first to update it
        $movie->name = $request->input('name');
        $movie->year = $request->input('year');
        $movie->update();
        session()->flash('success_message', 'Successfully Updated!');
        return redirect()->route('movies.edit', $movie->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete a movie
        $movie = Movie::findOrFail($id);
        $movie->delete();
        session()->flash('success_message', 'Successfully Deleted!');

        return redirect('/');
    }
    private function validateInput($request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|min:2',
                'year' => 'required|numeric',

            ],
            [
                'name.required' => 'Please be so kind and fill-in the name of the movie :)'

            ]
        );
    }
}
