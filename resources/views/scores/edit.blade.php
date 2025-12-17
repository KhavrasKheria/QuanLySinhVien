@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h2 class="mb-3">Sửa điểm</h2>

    <form action="{{ route('scores.update', $score->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Sinh viên</label>
            <select name="student_id" class="form-select">
                @foreach($students as $s)
                    <option value="{{ $s->id }}" {{ $score->student_id == $s->id ? 'selected' : '' }}>
                        {{ $s->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Môn học</label>
            <select name="subject_id" class="form-select">
                @foreach($subjects as $sub)
                    <option value="{{ $sub->id }}" {{ $score->subject_id == $sub->id ? 'selected' : '' }}>
                        {{ $sub->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Điểm</label>
            <input type="number" step="0.01" name="score" class="form-control" value="{{ $score->score }}">
        </div>

        <button class="btn btn-success">Cập nhật</button>
        <a href="{{ route('scores.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>

</div>
@endsection
