@extends('Admin.includes.master')

@section('title', 'Create Category')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Add Category</h5>
                    <div class="card-body">
                        @if($errors->any())
                            @include('message.error')
                        @endif
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                            <div>
                                <label for="defaultFormControlInput" class="form-label">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    value="{{ old('name') }}"
                                    id="defaultFormControlInput"
                                    placeholder="Category Name"
                                    aria-describedby="defaultFormControlHelp"
                                />
                                <div id="defaultFormControlHelp" class="form-text">
                                    The name of the category should be unique and Descriptive .
                                </div>
                            </div>
                            <div class="m-2"></div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
