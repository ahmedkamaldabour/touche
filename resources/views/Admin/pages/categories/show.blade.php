@extends('Admin.includes.master')


@section('title' )
    Dashboard | {{ $category->name }} | Products
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm">All Categories</a>
                </div>
                <h2 class="card-header">{{ $category->name }}</h2>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        <tr>
                            @forelse($products as $product)
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{$product->image}}" alt=""
                                         style="width: 100px; height: 100px"></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <div class="btn-group ">
                                        <a href="{{ route('product.edit' , $product->id) }}"
                                           class="btn btn-primary btn-sm ">Edit</a>
                                        <div class='m-1'></div>
                                        <form action="{{ route('product.destroy' , $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </form>

                                        <div class='m-1'></div>
                                        <a href="{{ route('product.show' , $product->id) }}"
                                           class="btn btn-success btn-sm ">Show</a>
                                    </div>
                                </td>
                        </tr>
                        @empty
                            <td colspan="3" class="text-center">No Products Found</td>

                        @endforelse
                        </tbody>
                    </table>
                    <div class="m-5"></div>
                    <div class="d-flex justify-content-center">
                        {{
    $products->links()
}}
                    </div>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>
@endsection


