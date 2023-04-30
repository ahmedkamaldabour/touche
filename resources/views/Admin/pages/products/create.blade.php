@extends('Admin.includes.master')

@section('title', 'Create Category')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Add Product</h5>
                    <div class="card-body">
                        @if($errors->any())
                            @include('message.error')
                        @endif
                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="defaultFormControlInput" class="form-label">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    value="{{ old('name') }}"
                                    id="defaultFormControlInput"
                                    placeholder="Product Name"
                                    aria-describedby="defaultFormControlHelp"
                                />
                                <label for="defaultFormControlInput" class="form-label">Description</label>
                                <textarea
                                    class="form-control"
                                    name="description"
                                    id="defaultFormControlTextarea"
                                    rows="3"
                                    placeholder="Product Description"
                                >{{ old('description') }}</textarea>

                                <label for="defaultFormControlInput" class="form-label">Price</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    name="price"
                                    value="{{ old('price') }}"
                                    id="defaultFormControlInput"
                                    placeholder="Product Price"
                                    aria-describedby="defaultFormControlHelp"
                                />

                                <label for="defaultFormControlInput" class="form-label">Category</label>
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                    <option selected>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                <label for="defaultFormControlInput" class="form-label">Image</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    name="image"
                                    value="{{ old('image') }}"
                                    id="defaultFormControlInput"
                                    placeholder="Product Image"
                                    aria-describedby="defaultFormControlHelp"
                                />


                            </div>
                            <div class="m-4"></div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
