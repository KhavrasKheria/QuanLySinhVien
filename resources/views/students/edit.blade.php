@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h2 class="mb-3">Sửa sinh viên</h2>

    <form action="{{ route('students.update', $student->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        {{-- Tên --}}
        <div class="mb-3">
            <label class="form-label">Tên</label>
            <input 
                type="text" 
                name="name" 
                class="form-control" 
                value="{{ old('name', $student->name) }}">
        </div>

        {{-- Giới tính --}}
        <div class="mb-3">
            <label class="form-label">Giới tính</label>
            <select name="gender" class="form-select">
                <option value="male"   {{ old('gender', $student->gender) === 'male' ? 'selected' : '' }}>Nam</option>
                <option value="female" {{ old('gender', $student->gender) === 'female' ? 'selected' : '' }}>Nữ</option>
                <option value="other"  {{ old('gender', $student->gender) === 'other' ? 'selected' : '' }}>Khác</option>
            </select>
        </div>

        {{-- Ngày sinh --}}
        <div class="mb-3">
            <label class="form-label">Ngày sinh</label>
            <input 
                type="date" 
                name="birthday" 
                class="form-control" 
                value="{{ old('birthday', $student->birthday) }}">
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input 
                type="email" 
                name="email" 
                class="form-control" 
                value="{{ old('email', $student->email) }}">
        </div>

        {{-- Số điện thoại --}}
        <div class="mb-3">
            <label class="form-label">SĐT</label>
            <input 
                type="text" 
                name="phone" 
                class="form-control" 
                value="{{ old('phone', $student->phone) }}">
        </div>

        {{-- Địa chỉ --}}
        <div class="mb-3">
            <label class="form-label">Địa chỉ</label>
            <input 
                type="text" 
                name="address" 
                class="form-control" 
                value="{{ old('address', $student->address) }}">
        </div>

        <button class="btn btn-success">Cập nhật</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>

</div>
@endsection
