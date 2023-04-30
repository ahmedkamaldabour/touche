@extends('Admin.includes.master')


@section('title' , 'Dashboard | Category' )


@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">All Categories</h5>
                <div class="card-body">
                    <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Add New Category</a>
                </div>
                <div class="table-responsive text-nowrap">
                    @include('message.flash')
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th> Product Count</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        <tr>
                            @forelse($categories as $category)
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->products_count }}</td>
                                <td>
                                    <div class="btn-group ">
                                        <a href="{{ route('category.edit' , $category->id) }}"
                                           class="btn btn-primary btn-sm ">Edit</a>
                                        <div class='m-1'></div>
                                        <form action="{{ route('category.destroy' , $category->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </td>
                        </tr>
                        @empty
                            <td colspan="3" class="text-center">No Category Found</td>

                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>
@endsection


