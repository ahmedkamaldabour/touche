@foreach($products as $product)
    <div class="col-sm-6 col-md-4 col-lg-4 {{$product->category_name}}">
        <div class="portfolio-item">
            <div class="hover-bg">
                <a href="{{asset($product->image)}}" title="{{$product->name}}"
                   data-lightbox-gallery="gallery1">
                    <div class="hover-text">
                        <h4>{{$product->name}}</h4>
                    </div>
                    <img src="{{asset($product->image)}}"
                         class="img-responsive"
                         alt="Project Title"> </a>
            </div>
        </div>
    </div>
@endforeach
