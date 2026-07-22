@extends('layouts.app')

@section('content')

<div class="hero">
    <h1><i class="bi bi-journal-check"></i> Study Tracker</h1>
    <p>Kelola tugas kuliah dengan lebih rapi, terorganisir, dan tepat waktu.</p>
</div>

@php
$total = $tasks->count();
$pending = $tasks->where('status','Pending')->count();
$progress = $tasks->where('status','Progress')->count();
$done = $tasks->where('status','Done')->count();
@endphp

<div class="row mt-4">

    <div class="col-md-3 mb-3">
        <div class="card card-stat p-4 text-center">
            <div class="card-number">{{ $total }}</div>
            <div>Total Tugas</div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card card-stat p-4 text-center">
            <div class="card-number">{{ $pending }}</div>
            <div>Pending</div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card card-stat p-4 text-center">
            <div class="card-number">{{ $progress }}</div>
            <div>Progress</div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card card-stat p-4 text-center">
            <div class="card-number">{{ $done }}</div>
            <div>Done</div>
        </div>
    </div>

</div>

<div class="d-flex justify-content-between align-items-center mt-4 mb-3">

    <h3>Daftar Tugas</h3>

    <a href="{{ route('study-tasks.create') }}" class="btn btn-purple">
        <i class="bi bi-plus-circle"></i>
        Tambah Tugas
    </a>

</div>

@if(session('success'))

<div class="alert alert-success">

{{ session('success') }}

</div>

@endif

<div class="table-card">

<table class="table table-hover align-middle mb-0">

<thead>

<tr>

<th>Mata Kuliah</th>
<th>Judul</th>
<th>Deadline</th>
<th>Prioritas</th>
<th>Status</th>
<th width="170">Aksi</th>

</tr>

</thead>

<tbody>

@forelse($tasks as $task)

<tr>

<td>{{ $task->subject }}</td>

<td>{{ $task->title }}</td>

<td>{{ $task->deadline }}</td>

<td>

@if($task->priority=='High')

<span class="badge badge-high">High</span>

@elseif($task->priority=='Medium')

<span class="badge badge-medium">Medium</span>

@else

<span class="badge badge-low">Low</span>

@endif

</td>

<td>

@if($task->status=='Pending')

<span class="badge badge-pending">Pending</span>

@elseif($task->status=='Progress')

<span class="badge badge-progress">Progress</span>

@else

<span class="badge badge-done">Done</span>

@endif

</td>

<td>

<a href="{{ route('study-tasks.edit',$task->id) }}" class="btn btn-warning btn-sm">
<i class="bi bi-pencil"></i>
</a>

<form action="{{ route('study-tasks.destroy',$task->id) }}"
method="POST"
class="d-inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm"
onclick="return confirm('Hapus tugas ini?')">

<i class="bi bi-trash"></i>

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="6" class="text-center py-5">

Belum ada tugas.

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

@endsection
