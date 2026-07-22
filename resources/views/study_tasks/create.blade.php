@extends('layouts.app')

@section('content')

<div class="hero text-center">
    <h1><i class="bi bi-plus-circle-fill"></i> Tambah Tugas</h1>
    <p class="mb-0">
        Tambahkan tugas kuliah agar lebih mudah dipantau dan tidak ada yang terlewat.
    </p>
</div>

<div class="row justify-content-center mt-4">
    <div class="col-lg-8">

        <div class="table-card p-4">

            <form action="{{ route('study-tasks.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        <i class="bi bi-book"></i> Mata Kuliah
                    </label>
                    <input
                        type="text"
                        name="subject"
                        class="form-control"
                        placeholder="Contoh: Cloud Computing"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        <i class="bi bi-pencil-square"></i> Judul Tugas
                    </label>
                    <input
                        type="text"
                        name="title"
                        class="form-control"
                        placeholder="Masukkan judul tugas"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        <i class="bi bi-calendar-event"></i> Deadline
                    </label>
                    <input
                        type="date"
                        name="deadline"
                        class="form-control"
                        required>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-flag-fill"></i> Prioritas
                            </label>

                            <select name="priority" class="form-select">
                                <option value="Low">🟢 Low</option>
                                <option value="Medium">🟡 Medium</option>
                                <option value="High">🔴 High</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-check-circle"></i> Status
                            </label>

                            <select name="status" class="form-select">
                                <option value="Pending">⏳ Pending</option>
                                <option value="Progress">🚀 Progress</option>
                                <option value="Done">✅ Done</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="d-flex justify-content-between mt-4">

                    <a href="{{ route('study-tasks.index') }}"
                       class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i>
                        Kembali
                    </a>

                    <button type="submit" class="btn btn-purple">
                        <i class="bi bi-save-fill"></i>
                        Simpan Tugas
                    </button>

                </div>

            </form>

        </div>

    </div>
</div>

@endsection
