@foreach($categories as $category)
    <div class="menu-section">
        <h2 class="menu-section-title">{{$category->name}}</h2>
        <hr>
        @foreach($category->products as $product)
            <div class="menu-item">
                <div class="menu-item-name">{{$product->name}}</div>
                <div class="menu-item-price">{{'$ '. $product->price}}</div>
                <div class="menu-item-description">{{$product->description}}</div>
            </div>
        @endforeach
    </div>
@endforeach
