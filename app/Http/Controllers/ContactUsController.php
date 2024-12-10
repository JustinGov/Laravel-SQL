<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'Nama' => 'required|string|max:30',
            'Email' => 'required|email|max:50',
        ]);

        // Generate the next idForm
        $lastEntry = Form::orderBy('idForm', 'desc')->first();
        $nextId = $lastEntry ? intval($lastEntry->idForm) + 1 : 1;
        $idForm = str_pad($nextId, 6, '0', STR_PAD_LEFT);

        // Create a new form entry
        $form = new Form;
        $form->idForm = $idForm;
        $form->Nama = $validatedData['Nama'];
        $form->Email = $validatedData['Email'];

        // Save the entry to the database
        $form->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thanks for the information, we will contact you for further updates.');
    }
}
