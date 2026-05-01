<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JakoStay')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f6fa;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #fff;
            border-right: 1px solid #eee;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        .topbar {
            background: #fff;
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
        }

        .stat-card {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
        }

        .stat-icon {
            background: #fff3e6;
            padding: 10px;
            border-radius: 10px;
            color: #ff7a00;
        }

        .table-card {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
        }

        .badge-status {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }

        .status-confirmed {
            background: #d4edda;
            color: #28a745;
        }

        .status-pending {
            background: #fff3cd;
            color: #ffc107;
        }

        .status-cancelled {
            background: #f8d7da;
            color: #dc3545;
        }

        /* MOBILE FIX */
        @media(max-width: 768px){
            .sidebar {
                position: fixed;
                left: -250px;
                top: 0;
                z-index: 1000;
                transition: 0.3s;
            }

            .sidebar.active {
                left: 0;
            }
        }
    </style>
</head>

<body>

<div class="d-flex">

    {{-- Sidebar --}}
    @include('admin.partial.leftmenu')

    <div class="content">

        {{-- Topbar --}}
        @include('admin.partial.header')

        {{-- Page Content --}}
        @yield('content')

    </div>

</div>

</body>
</html>
