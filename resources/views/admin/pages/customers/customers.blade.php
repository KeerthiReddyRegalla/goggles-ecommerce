@extends('admin.index')
@section('page-title', 'Customers')
@section('content')
    <div class="content">

        <div class="mb-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <i class="bi bi-globe2 small me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Customers</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex gap-4 align-items-center">
                            <div class="d-none d-md-flex">All Customers</div>
                            <div class="d-md-flex gap-4 align-items-center">
                                <form class="mb-3 mb-md-0">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <select class="form-select">
                                                <option>Sort by</option>
                                                <option value="desc">Desc</option>
                                                <option value="asc">Asc</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-select">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="ms-auto">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive h-100">
                    <table class="table table-custom table-lg mb-0" id="products">
                        <thead>
                        <tr>
                            <th>
                                <input class="form-check-input select-all" type="checkbox"
                                       data-select-all-target="#products" id="defaultCheck1">
                            </th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <a href="#">#{{ $user->id }}</a>
                                </td>

                                <td>{{ $user->title }}</td>

                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <nav class="mt-4" aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
@endsection
