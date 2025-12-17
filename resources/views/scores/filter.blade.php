@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h2 class="mb-3">Xem điểm theo môn hoặc theo sinh viên</h2>

    <form method="GET" action="{{ route('scores.filter') }}" class="card p-4 shadow-sm mb-4">

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Chọn sinh viên</label>
                <select name="student_id" class="form-select">
                    <option value="">-- Tất cả sinh viên --</option>
                    @foreach($students as $s)
                        <option value="{{ $s->id }}" {{ request('student_id') == $s->id ? 'selected' : '' }}>
                            {{ $s->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Chọn môn học</label>
                <select name="subject_id" class="form-select">
                    <option value="">-- Tất cả môn học --</option>
                    @foreach($subjects as $sub)
                        <option value="{{ $sub->id }}" {{ request('subject_id') == $sub->id ? 'selected' : '' }}>
                            {{ $sub->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <button class="btn btn-primary">Lọc điểm</button>
    </form>

    <h4>Kết quả</h4>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Sinh viên</th>
                <th>Môn học</th>
                <th>Điểm</th>
            </tr>
        </thead>

        <tbody>
            @forelse($scores as $sc)
            <tr>
                <td>{{ $sc->id }}</td>
                <td>{{ $sc->student->name }}</td>
                <td>{{ $sc->subject->name }}</td>
                <td>{{ $sc->score }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center text-muted">Không có dữ liệu</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
