<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Vetra | E-Commerce HTML Admin Dashboard Template</title>

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

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->


<div class="form-wrapper">
    <div class="container">
        <div class="card">
            <div class="row g-0">
                <div class="col">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="ltf-block-logo d-block d-lg-none text-center text-lg-start">
                                <img width="120" src="../../assets/images/logo.svg" alt="logo">
                            </div>
                            <div class="my-5 text-center text-lg-start">
                                <h1 class="display-8">Create Account</h1>
                                <p class="text-muted">You can create a free account now</p>
                            </div>
                            @if($errors->any())
                                {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
                            @endif
                            <form class="mb-5" method="post" action="{{ route('signup') }}">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Enter fullname" autofocus
                                           required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Enter email"
                                           required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Enter password"
                                           required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Re-enter password"
                                           required>
                                </div>
                                <div class="text-center text-lg-start">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </form>

                            <p class="text-center d-block d-lg-none mt-5 mt-lg-0">
                                Don't have an account? <a href="{{ route('login') }}">Sign In</a>.
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
                        <p class="lead my-5">Do you already have an account?</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">Sign In</a>
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
