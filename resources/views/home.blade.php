@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="text-center mb-4">

        <h1 class="fw-bold">Thi thứ 5 - là ca 4- Nguyễn Lê Anh Kiệt</h1>
        <p class="text-muted">Chọn một chức năng bên dưới để bắt đầu</p>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-3 mb-3">
            <a href="{{ route('students.index') }}" class="text-decoration-none">
                <div class="card shadow-sm p-4 text-center">
                    <h4>Sinh viên</h4>
                </div>
            </a>
        </div>

        <div class="col-md-3 mb-3">
            <a href="{{ route('subjects.index') }}" class="text-decoration-none">
                <div class="card shadow-sm p-4 text-center">
                    <h4>Môn học</h4>
                </div>
            </a>
        </div>

        <div class="col-md-3 mb-3">
            <a href="{{ route('scores.index') }}" class="text-decoration-none">
                <div class="card shadow-sm p-4 text-center">
                    <h4>Điểm</h4>
                </div>
            </a>
        </div>

    </div>

</div>
@endsection