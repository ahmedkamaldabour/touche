@extends('Admin.includes.master')


@section('title' , 'Dashboard | Product' )


@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <section style="background-color: #eee;">
                <div class="container py-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-6">
                            <div class="card text-black">
                                <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
                                <img src={{$product->image}}  width="300" height="300"
                                     class="card-img-top" alt="Product"/>
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5 class="card-title">{{$product->name}}</h5>
                                        <p class="text-muted mb-4">{{$product->description}}</p>
                                    </div>
                                    <div class="d-flex justify-content-between total font-weight-bold mt-4">
                                        <span>Price</span><span>{{$product->price}}</span>
                                    </div>
                                    <div class="d-flex justify-content-between total font-weight-bold mt-4">
                                        <span>Category</span><span>{{$product->category->name}}</span>
                                    </div>
                                    <div class="text-center d-flex justify-content-between total font-weight-bold mt-4">
                                        <a href="{{ route('product.edit' , $product->id) }}"
                                           class="btn btn-primary btn-sm ">Edit</a>
                                        <div class='m-1'></div>
                                        <form action="{{ route('product.destroy' , $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection

