<!-- Portfolio Section -->
<div id="portfolio">
    <div class="section-title text-center center">
        <div class="overlay">
            <h2>Gallery</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="categories">
                <ul class="cat">
                    <li>
                        <ol class="type">
                            <li><a href="#" data-filter="*" class="active">All</a></li>
                            <li><a href="#" data-filter=".breakfast">Breakfast</a></li>
                            <li><a href="#" data-filter=".lunch">Lunch</a></li>
                            <li><a href="#" data-filter=".dinner">Dinner</a></li>
                            <li><a href="#" data-filter=".drinks">Drinks</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="portfolio-items">
                @include('EndUser.partials.composer.category-product.gallery-compose')
            </div>
        </div>
    </div>
</div>
