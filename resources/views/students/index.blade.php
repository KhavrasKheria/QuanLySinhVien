@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Danh sách sinh viên</h2>
        <a href="{{ route('students.create') }}" class="btn btn-primary">+ Thêm sinh viên</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Giới tính</th>
                <th>Email</th>
                <th width="150">Hành động</th>
            </tr>
        </thead>

        <tbody>
            @foreach($students as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->name }}</td>
                <td> {{ $s->gender == 'male' ? 'Nam' : ($s->gender == 'female' ? 'Nữ' : 'Khác') }} </td>
                <td>{{ $s->email }}</td>
                <td>
                    <a href="{{ route('students.edit', $s->id) }}" class="btn btn-sm btn-warning">Sửa</a>

                    <form action="{{ route('students.destroy', $s->id) }}"
                        method="POST"
                        class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Xóa sinh viên này?')">
                            Xóa
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection