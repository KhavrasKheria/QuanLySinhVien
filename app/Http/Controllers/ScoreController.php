<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Student;
use App\Models\Subject;

class ScoreController extends Controller
{
    public function index()
    {
        $scores = Score::with(['student', 'subject'])->get();
        return view('scores.index', compact('scores'));
    }

    public function create()
    {
        $students = Student::all();
        $subjects = Subject::all();
        return view('scores.create', compact('students', 'subjects'));
    }

    public function store(Request $request)
    {
        Score::create($request->all());
        return redirect()->route('scores.index');
    }

    public function edit($id)
    {
        $score = Score::findOrFail($id);
        $students = Student::all();
        $subjects = Subject::all();

        return view('scores.edit', compact('score', 'students', 'subjects'));
    }

    public function update(Request $request, $id)
    {
        Score::findOrFail($id)->update($request->all());
        return redirect()->route('scores.index');
    }

    public function destroy($id)
    {
        Score::destroy($id);
        return redirect()->route('scores.index');
    }
    public function show($id)
    {
        $score = Score::findOrFail($id);
        return view('scores.show', compact('score'));
    }

    public function filter(Request $request)
    {
        $students = Student::all();
        $subjects = Subject::all();

        $scores = Score::query();

        if ($request->student_id) {
            $scores->where('student_id', $request->student_id);
        }

        if ($request->subject_id) {
            $scores->where('subject_id', $request->subject_id);
        }

        $scores = $scores->get();

        return view('scores.filter', compact('students', 'subjects', 'scores'));
    }
}
