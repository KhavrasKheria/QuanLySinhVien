<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
        return view('subjects.create');
    }

    public function store(Request $request)
    {
        Subject::create($request->all());
        return redirect()->route('subjects.index');
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subjects.edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        Subject::findOrFail($id)->update($request->all());
        return redirect()->route('subjects.index');
    }

    public function destroy($id)
    {
        Subject::destroy($id);
        return redirect()->route('subjects.index');
    }
}
