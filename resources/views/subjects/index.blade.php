@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Danh sách môn học</h2>
        <a href="{{ route('subjects.create') }}" class="btn btn-primary">+ Thêm môn học</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên môn</th>
                <th>Tín chỉ</th>
                <th>Mô tả</th>
                <th width="150">Hành động</th>
            </tr>
        </thead>

        <tbody>
            @foreach($subjects as $sub)
            <tr>
                <td>{{ $sub->id }}</td>
                <td>{{ $sub->name }}</td>
                <td>{{ $sub->credit }}</td>
                <td>{{ $sub->description }}</td>
                <td>
                    <a href="{{ route('subjects.edit', $sub->id) }}" class="btn btn-sm btn-warning">Sửa</a>

                    <form action="{{ route('subjects.destroy', $sub->id) }}" 
                          method="POST" 
                          class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Xóa môn học này?')">
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
