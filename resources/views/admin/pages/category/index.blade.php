@extends('admin.index')
@section('page-title', 'Categories')
@section('content')
    <div class="content ">
        <div class="mb-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <i class="bi bi-globe2 small me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
            </nav>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-md-flex gap-4 align-items-center">
                    <div class="d-none d-md-flex">All Orders</div>
                    <div class="d-md-flex gap-4 align-items-center">
                        <form class="mb-3 mb-md-0">
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option>Sort by</option>
                                        <option value="desc">Desc</option>
                                        <option value="asc">Asc</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button class="btn btn-outline-light" type="button">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="ms-auto">
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary btn-icon">
                            <i class="bi bi-plus-circle"></i> Add Category
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive h-100">
            <table class="table table-custom table-lg mb-0 pb-5" id="orders">
                <thead>
                <tr>
                    <th>
                        <input class="form-check-input select-all" type="checkbox" data-select-all-target="#orders"
                               id="defaultCheck1">
                    </th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th class="text-end">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>
                            <input class="form-check-input" type="checkbox">
                        </td>
                        <td>
                            <a href="#">#{{ $category->id }}</a>
                        </td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at->format('M d Y') }}</td>
                        <td class="text-end">
                            <div class="d-flex">
                                <div class="dropdown ms-auto">
                                    <a href="#" data-bs-toggle="dropdown"
                                       class="btn btn-floating"
                                       aria-haspopup="true" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="{{ route('admin.categories.edit', $category) }}" class="dropdown-item">Edit</a>
                                        <form action="{{ route('admin.categories.destroy', $category) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item">Delete</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </td>
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
@endsection
