<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Authentication') | JakoStay</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ url('public/assets/images/favicon.png') }}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

    {{-- Optional existing assets --}}
    <link href="{{ url('public/assets/css/roboto-fontface.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/assets/css/karla.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
        :root {
            --primary-color: #FF5F00;
            --primary-dark: #e65300;
            --light-bg: #fff7f2;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --border-color: #e5e7eb;
        }

        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, rgba(255,95,0,0.08), rgba(255,255,255,0.95)),
                        url('{{ url("public/assets/images/jakostay-auth-bg.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .auth-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 25px 0;
        }

        .auth-card {
            background: rgba(255, 255, 255, 0.97);
            backdrop-filter: blur(8px);
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.10);
            border: 1px solid rgba(255,255,255,0.4);
        }

        .brand-side {
            background: linear-gradient(135deg, var(--primary-color), #ff8a3d);
            color: white;
            padding: 50px 40px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .brand-logo-box {
            width: 70px;
            height: 70px;
            border-radius: 18px;
            background: rgba(255,255,255,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .brand-title {
            font-size: 34px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .brand-subtitle {
            font-size: 15px;
            line-height: 1.8;
            opacity: 0.95;
        }

        .brand-badge {
            display: inline-block;
            margin-top: 25px;
            background: rgba(255,255,255,0.18);
            color: #fff;
            padding: 8px 14px;
            border-radius: 30px;
            font-size: 13px;
        }

        .form-side {
            padding: 45px 35px;
            background: #fff;
        }

        .mobile-brand {
            display: none;
        }

        .mobile-brand h2 {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 4px;
        }

        .mobile-brand p {
            color: var(--text-light);
            margin-bottom: 0;
        }

        .form-label {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 8px;
        }

        .form-control {
            height: 52px;
            border-radius: 14px;
            border: 1px solid var(--border-color);
            box-shadow: none !important;
            font-size: 15px;
            padding: 12px 15px;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.15rem rgba(255, 95, 0, 0.15) !important;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            height: 52px;
            border-radius: 14px;
            font-weight: 600;
            font-size: 15px;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .auth-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .auth-link:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .auth-footer-text {
            color: var(--text-light);
            font-size: 14px;
        }

        @media (max-width: 991px) {
            .brand-side {
                display: none !important;
            }

            .form-side {
                padding: 35px 25px;
            }

            .mobile-brand {
                display: block;
                text-align: center;
                margin-bottom: 25px;
            }
        }

        @media (max-width: 576px) {
            .auth-wrapper {
                padding: 15px 0;
            }

            .auth-card {
                border-radius: 22px;
            }

            .form-side {
                padding: 28px 20px;
            }

            .form-control,
            .btn-primary {
                height: 48px;
                font-size: 14px;
            }
        }
    </style>

    @stack('style')
    @stack('styles')
</head>
<body>

    <div class="container auth-wrapper">
        <div class="row justify-content-center w-100">
            <div class="col-12 col-lg-10 col-xl-9">
                <div class="auth-card">
                    <div class="row g-0">

                        {{-- Left Branding --}}
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="brand-side">
                                <div class="brand-logo-box">J</div>
                                <h1 class="brand-title">JakoStay</h1>
                                <p class="brand-subtitle">
                                    Smart hotel and lodge management for modern hospitality teams.
                                    Manage rooms, reservations, guests, and daily operations with ease.
                                </p>
                                <span class="brand-badge">Hotel Management System</span>
                            </div>
                        </div>

                        {{-- Right Form Content --}}
                        <div class="col-12 col-lg-6">
                            <div class="form-side">

                                {{-- Mobile Logo --}}
                                <div class="mobile-brand">
                                    <a href="{{ url('/') }}" class="text-decoration-none">
                                        <h2>JakoStay</h2>
                                    </a>
                                    <p>Hotel Management System</p>
                                </div>

                                {{-- Session Alerts --}}
                                @if(session('success'))
                                    <div class="alert alert-success rounded-4">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if(session('error'))
                                    <div class="alert alert-danger rounded-4">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger rounded-4">
                                        {{ $errors->first() }}
                                    </div>
                                @endif

                                {{-- Page Content --}}
                                @yield('content')

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scripts --}}
    <script src="{{ url('public/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('public/assets/plugins/feather-icons/feather.min.js') }}"></script>

    <script>
        feather.replace();

        function togglePassword(inputId, iconId = null) {
            let input = document.getElementById(inputId);
            if (input) {
                input.type = input.type === 'password' ? 'text' : 'password';
            }
        }
    </script>

    @stack('scripts')
    @stack('script')

</body>
</html>
