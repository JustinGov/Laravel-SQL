<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'idForm' => 'required|size:6|unique:form',
            'Nama' => 'required|string|max:30',
            'Email' => 'required|email|max:50',
        ]);

        // Create a new form entry
        $form = new Form;
        $form->idForm = $validatedData['idForm'];
        $form->Nama = $validatedData['Nama'];
        $form->Email = $validatedData['Email'];

        // Save the entry to the database
        $form->save();

        // Redirect back to the form page with a success message
        return redirect()->route('form.create')->with('success', 'Form data saved successfully!');
    }
}
