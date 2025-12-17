@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Danh sách điểm</h2>
        <a href="{{ route('scores.create') }}" class="btn btn-primary">+ Thêm điểm</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Sinh viên</th>
                <th>Môn học</th>
                <th>Điểm</th>
                <th width="150">Hành động</th>
            </tr>
        </thead>

        <tbody>
            @foreach($scores as $sc)
            <tr>
                <td>{{ $sc->id }}</td>
                <td>{{ $sc->student->name }}</td>
                <td>{{ $sc->subject->name }}</td>
                <td>{{ $sc->score }}</td>
                <td>
                    <a href="{{ route('scores.edit', $sc->id) }}" class="btn btn-sm btn-warning">Sửa</a>

                    <form action="{{ route('scores.destroy', $sc->id) }}" 
                          method="POST" 
                          class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Xóa điểm này?')">
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
