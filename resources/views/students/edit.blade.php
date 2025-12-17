@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h2 class="mb-3">Sửa sinh viên</h2>

    <form action="{{ route('students.update', $student->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Tên</label>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Giới tính</label>
            <select name="gender" class="form-select">
                <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Nam</option>
                <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Nữ</option>
                <option value="other" {{ $student->gender == 'other' ? 'selected' : '' }}>Khác</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Ngày sinh</label>
            <input type="date" name="birthday" class="form-control" value="{{ $student->birthday }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $student->email }}">
        </div>

        <div class="mb-3">
            <label class="form-label">SĐT</label>
            <input type="text" name="phone" class="form-control" value="{{ $student->phone }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Địa chỉ</label>
            <input type="text" name="address" class="form-control" value="{{ $student->address }}">
        </div>

        <button class="btn btn-success">Cập nhật</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>

</div>
@endsection
