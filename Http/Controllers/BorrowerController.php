<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use Illuminate\Http\Request;

class BorrowerController extends Controller
{
    public function index()
    {
        $borrowers = Borrower::all();
        return view('borrowers.index', compact('borrowers'));
    }

    public function create()
    {
        return view('borrowers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'id_number' => 'required|unique:borrowers',
            'section' => 'required',
        ]);

        Borrower::create($request->all());

        return redirect()->route('borrowers.index')->with('success', 'Borrower added successfully.');
    }

    public function edit(Borrower $borrower)
    {
        return view('borrowers.edit', compact('borrower'));
    }

    public function update(Request $request, Borrower $borrower)
    {
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'id_number' => 'required|unique:borrowers,id_number,' . $borrower->id,
            'section' => 'required',
        ]);

        $borrower->update($request->all());

        return redirect()->route('borrowers.index')->with('success', 'Borrower updated successfully.');
    }

    public function destroy(Borrower $borrower)
    {
        $borrower->delete();
        return redirect()->route('borrowers.index')->with('success', 'Borrower deleted successfully.');
    }
}
