<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $yearLevel = null)
    {
        if ($yearLevel) {
            $books = Books::where('year_level', $yearLevel)->get();
        } else {
            $books = Books::all();
        }

        $booksGroupedByCategory = $books->groupBy('category');

        if ($request->ajax()) {
            // If the request is via AJAX, return JSON data
            return response()->json($booksGroupedByCategory);
        } else {
            // Otherwise, return the view
            return view('Users.student.pages.index', compact('booksGroupedByCategory'));
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

    /**
     * Display the specified resource.
     */
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
