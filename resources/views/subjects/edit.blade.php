@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h2 class="mb-3">Sửa môn học</h2>

    <form action="{{ route('subjects.update', $subject->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Tên môn</label>
            <input type="text" name="name" class="form-control" value="{{ $subject->name }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Tín chỉ</label>
            <input type="number" name="credit" class="form-control" value="{{ $subject->credit }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Mô tả</label>
            <textarea name="description" class="form-control">{{ $subject->description }}</textarea>
        </div>

        <button class="btn btn-success">Cập nhật</button>
        <a href="{{ route('subjects.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>

</div>
@endsection
