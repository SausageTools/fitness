<?php

namespace App\Http\Controllers;

use App\Http\Resources\ExerciseResource;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia()->render('Exercises/Index', [
            'exercises' => ExerciseResource::collection(Exercise::orderBy('name', 'asc')->paginate(5))
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia()->render('Exercises/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|unique:exercises',
            'description' => 'required'
        ]);

        Exercise::create($validated);

        return redirect()->route('exercises.index')->with('message', 'Exercise added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercise $exercise)
    {
        return inertia()->render('Exercises/Show', [
            'exercise' => $exercise
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exercise $exercise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exercise $exercise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercise $exercise)
    {
        $exercise->delete();

        return redirect()->route('exercises.index');
    }
}
