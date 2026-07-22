@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-7">

        <div class="table-card p-4">

            <h2 class="mb-4">
                ✏️ Edit Study Task
            </h2>

            <form action="{{ route('study-tasks.update',$studyTask->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Mata Kuliah</label>
                    <input type="text"
                           name="subject"
                           class="form-control"
                           value="{{ $studyTask->subject }}"
                           required>
                </div>

                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text"
                           name="title"
                           class="form-control"
                           value="{{ $studyTask->title }}"
                           required>
                </div>

                <div class="mb-3">
                    <label>Deadline</label>
                    <input type="date"
                           name="deadline"
                           class="form-control"
                           value="{{ $studyTask->deadline }}">
                </div>

                <div class="mb-3">
                    <label>Prioritas</label>

                    <select name="priority" class="form-select">

                        <option value="Low"
                        {{ $studyTask->priority=='Low'?'selected':'' }}>
                        Low
                        </option>

                        <option value="Medium"
                        {{ $studyTask->priority=='Medium'?'selected':'' }}>
                        Medium
                        </option>

                        <option value="High"
                        {{ $studyTask->priority=='High'?'selected':'' }}>
                        High
                        </option>

                    </select>

                </div>

                <div class="mb-4">

                    <label>Status</label>

                    <select name="status" class="form-select">

                        <option value="Pending"
                        {{ $studyTask->status=='Pending'?'selected':'' }}>
                        Pending
                        </option>

                        <option value="Progress"
                        {{ $studyTask->status=='Progress'?'selected':'' }}>
                        Progress
                        </option>

                        <option value="Done"
                        {{ $studyTask->status=='Done'?'selected':'' }}>
                        Done
                        </option>

                    </select>

                </div>

                <button class="btn btn-purple">
                    💾 Update
                </button>

                <a href="{{ route('study-tasks.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection
