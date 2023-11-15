<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - E-Commerce</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}"/>

    <!-- Themify icons -->
    <link rel="stylesheet" href="{{ asset('admin/dist/icons/themify-icons/themify-icons.css') }}" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/app.min.css') }}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="auth">
<div class="form-wrapper">
    <div class="container">
        <div class="card">
            <div class="row g-0">
                <div class="col">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="d-block d-lg-none text-center text-lg-start">
                                <h3>Goggles Ecommerce</h3>
                            </div>
                            <div class="my-5 text-center text-lg-start">
                                <h1 class="display-8">Sign In</h1>
                                <p class="text-muted">Sign in to Googles to continue</p>
                            </div>
                            @if(session('success'))
                                <div class="text-success mb-2">{{ session('success') }}</div>
                            @endif
                            @if(session('error'))
                                <div class="text-danger mb-2">{{ session('error') }}</div>
                            @endif
                            <form class="mb-5" method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Enter email" autofocus name="email"
                                           required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Enter password" name="password"
                                           required>
                                </div>
                                <div class="text-center text-lg-start">
                                    <p class="small">Can't access your account? <a href="#">Reset your password now</a>.</p>
                                    <button class="btn btn-primary">Sign In</button>
                                </div>
                            </form>
                            <p class="text-center d-block d-lg-none mt-5 mt-lg-0">
                                Don't have an account? <a href="{{ route('signup') }}">Sign up</a>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col d-none d-lg-flex border-start align-items-center justify-content-between flex-column text-center">
                    <div class="logo">
                        <h3>Goggles E-commerce</h3>
                    </div>
                    <div>
                        <h3 class="fw-bold">Welcome to Googles!</h3>
                        <p class="lead my-5">If you don't have an account, would you like to register right now?</p>
                        <a href="{{ route('signup') }}" class="btn btn-primary">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Bundle scripts -->
<script src="{{ asset('admin/libs/bundle.js') }}"></script>

<!-- Main Javascript file -->
<script src="{{ asset('admin/dist/js/app.min.js') }}"></script>
</body>
</html>
