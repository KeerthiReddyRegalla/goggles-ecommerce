@extends('admin.index')
@section('page-title', 'Products')
@section('content')

    <form action="{{ isset($product) ? route('admin.products.update', $product) : route('admin.products.store') }}" method="post" class="g-3" enctype="multipart/form-data">
      @csrf
        @if(isset($product))
            @method('PUT')
        @endif
        <div class="row mb-2">
            <div class="col-md-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ isset($product) ? $product->title : '' }}">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-4">
                @php
                $categories = \App\Models\Category::all();
                @endphp
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category">
                    <option selected>Choose...</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{  isset($product) && $product->category_id  == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" value="{{ isset($product) ? $product->price : '' }}">
            </div>
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Discounted Price</label>
                <input type="number" step="0.01" class="form-control" name="discounted_price" value="{{ isset($product) ? $product->discounted_price : '' }}">
            </div>
        </div>
        <div class="row mb-2 align-items-center">
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Quantity(In Stock)</label>
                <input type="number" step="0.01" class="form-control" name="qty" value="{{ isset($product) ? $product->qty : '' }}">
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="featured" {{ isset($product) && $product->featured ? 'checked' : '' }}>
                    <label class="form-check-label" for="featured">
                        Featured
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-4">
                <label for="title" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" value="{{ isset($product) ? $product->type : '' }}">
            </div>
            <div class="col-md-4">
                <label for="title" class="form-label">Rating</label>
                <input type="number" min="1" max="5" class="form-control" name="rating" value="{{ isset($product) ? $product->rating : '' }}">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-4">
                <label class="form-label">Thumbnail Image</label>
                <div class="input-group">
                    <input type="file" class="form-control" name="thumbnail_image">
                </div>
                @if(isset($product))
                    <div class="text-end">
                        <small>{{ $product->thumbnail_image }}</small>
                    </div>
                @endif

            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-8">
                <label class="form-label">Images</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="images[]" multiple>
                </div>
                @if(isset($product))
                    <div class="text-end">
                        <small>
                            @foreach(json_decode($product->images) as $image)
                                {{ $image }}
                            @endforeach
                        </small>
                    </div>
                @endif
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-8">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description">{{ isset($product) ? $product->description : '' }}</textarea>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update' : 'Submit' }}</button>
        </div>

    </form>
@endsection
