<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contacts::all();

        return view('backend.contact.index', compact('contacts'));
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
        Contacts::create($request->all());

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacts $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacts $contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacts $contacts)
    {
        //
    }
}
