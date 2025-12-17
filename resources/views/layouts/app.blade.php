<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý hệ thống</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .nav-link.active {
            font-weight: bold;
            color: #ffc107 !important;
        }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

           <a class="navbar-brand" href="{{ route('home') }}">Quản lý</a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('subjects.*') ? 'active' : '' }}"
                           href="{{ route('subjects.index') }}">
                           Môn học
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('students.*') ? 'active' : '' }}"
                           href="{{ route('students.index') }}">
                           Sinh viên
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('scores.*') ? 'active' : '' }}"
                           href="{{ route('scores.index') }}">
                           Điểm
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('scores.filter') ? 'active' : '' }}"
                           href="{{ route('scores.filter') }}">
                           Xem điểm
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    <div class="py-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
