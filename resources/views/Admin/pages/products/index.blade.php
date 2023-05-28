@extends('Admin.includes.master')


@section('title' , 'Dashboard | Product' )


@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">All Products</h5>
                <div class="card-body">
                    <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm">Add New Product</a>
                </div>
                <div class="table-responsive text-nowrap">
                    @include('message.flash')
                    <table id="myTable" class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th> Category</th>
                            <th>Price</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        @forelse($products as $product)
                            <tr id="{{$product->id}}">
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{$product->image}}" alt=""
                                         style="width: 100px; height: 100px"></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <div class="btn-group ">
                                        <a href="{{ route('product.edit' , $product->id) }}"
                                           class="btn btn-primary btn-sm ">Edit</a>
                                        <div class='m-1'></div>
                                        <button id="btn-delete" onclick="confirmDelete({{$product->id}})"
                                                class="btn btn-danger btn-sm">Delete
                                        </button>
                                        <div class='m-1'></div>
                                        <a href="{{ route('product.show' , $product->id) }}"
                                           class="btn btn-success btn-sm ">Show</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <td colspan="3" class="text-center">No Products Found</td>
                        @endforelse
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

@push('js')

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteWithAjaxRequest(id);
                    Swal.fire('Deleted!', 'Your file has been deleted.', 'success');

                }
            })
        }

        function deleteWithAjaxRequest(id) {
            const productDiv = document.getElementById(id);
            $.ajax({
                url: `/admin/product/delete/${id}`, type: "post", data: {
                    _token: "{{ csrf_token() }}", id: id, _method: "DELETE"
                }, success: function (response) {
                    productDiv.remove();
                }, error: function (error) {
                    console.log(error);
                }
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@endpush


