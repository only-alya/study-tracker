<?php

namespace App\Http\Controllers;

use App\Models\StudyTask;
use Illuminate\Http\Request;

class StudyTaskController extends Controller
{
    public function index()
    {
        $tasks = StudyTask::latest()->get();

        return view('study_tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('study_tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'title' => 'required',
            'deadline' => 'required|date',
            'priority' => 'required',
            'status' => 'required',
        ]);

        StudyTask::create($request->all());

        return redirect()->route('study-tasks.index')
            ->with('success', 'Tugas berhasil ditambahkan.');
    }

    public function show(StudyTask $studyTask)
    {
        return view('study_tasks.show', compact('studyTask'));
    }

    public function edit(StudyTask $studyTask)
    {
        return view('study_tasks.edit', compact('studyTask'));
    }

    public function update(Request $request, StudyTask $studyTask)
    {
        $request->validate([
            'subject' => 'required',
            'title' => 'required',
            'deadline' => 'required|date',
            'priority' => 'required',
            'status' => 'required',
        ]);

        $studyTask->update($request->all());

        return redirect()->route('study-tasks.index')
            ->with('success', 'Tugas berhasil diperbarui.');
    }

    public function destroy(StudyTask $studyTask)
    {
        $studyTask->delete();

        return redirect()->route('study-tasks.index')
            ->with('success', 'Tugas berhasil dihapus.');
    }
}
