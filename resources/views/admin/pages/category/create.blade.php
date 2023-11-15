@extends('admin.index')
@section('page-title', 'Categories')
@section('content')
    @if(session('error'))
        <div class="text-danger mb-2">{{ session('error') }}</div>
    @endif

    <form action="{{ isset($category) ? route('admin.categories.update', $category) : route('admin.categories.store') }}" method="post" class="row g-3">
        @csrf
        @if(isset($category)) @method('PUT') @endif
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Category Name</label>
            <input type="text" class="form-control" name="category_name" value="{{ isset($category) ? $category->name : '' }}">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">{{ isset($category) ? 'Update' : 'Submit' }}</button>
        </div>
    </form>
@endsection
