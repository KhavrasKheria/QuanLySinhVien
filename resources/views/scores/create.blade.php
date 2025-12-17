@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h2 class="mb-3">Thêm điểm</h2>

    <form action="{{ route('scores.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label class="form-label">Sinh viên</label>
            <select name="student_id" class="form-select">
                @foreach($students as $s)
                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Môn học</label>
            <select name="subject_id" class="form-select">
                @foreach($subjects as $sub)
                    <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Điểm</label>
            <input type="number" step="0.01" name="score" class="form-control">
        </div>

        <button class="btn btn-primary">Lưu</button>
        <a href="{{ route('scores.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>

</div>
@endsection
