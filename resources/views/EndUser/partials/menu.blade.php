<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
    <div class="section-title text-center center">
        <div class="overlay">
            <h2>Menu</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
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
            </div>
        </div>
    </div>
</div>

