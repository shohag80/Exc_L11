<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $page = $request->input('page', 1); // current page or load more page number
        $perPage = 20; // number of records per page
        
        $data = User::orderBy('created_at', 'desc')
                    ->paginate($perPage, ['*'], 'page', $page);

        // If the request is AJAX, return partial data for loading more
        if ($request->ajax()) {
            return view('partials.data-list', compact('data'))->render();
        }

        // For regular non-AJAX requests, return the full view
        return view('pages.onscroll_load_view', compact('data'));
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
