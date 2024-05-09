@extends('layout.mainlayout')

@section('content')
    <div class="container-shop container-fluid h-100 w-100 mb-5 mt-2">
        <h1 class="text-center mt-3">Shop</h1>
        <div class="row px-0 pt-1 ">
            <div class="col-lg-9 col-md-9 col-12 d-lg-block d-md-block d-none">
                <ul class="px-0">
                    <li id="category" data-category-id="all">SHOP ALL</li>
                    @foreach ($categories as $category)
                        <li id="category" data-category-id="{{ $category->id }}">{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-12 text-lg-end text-md-end text-start px-lg-5 px-md-5">
                {{-- Sort By: --}}
                <select name="sort" id="sortBy" class="px-lg-3 px-md-3 border-0">
                    <option value="default">Default Sorting</option>
                    <option value="price-low" onclick="sortbyLowToHigh()">Sort by Price: low to high</option>
                    <option value="price-high">Sort by Price: high to low</option>
                </select>
            </div>
        </div>
        <div class="container-fluid h-auto">
            <div class="row px-0 pt-2" id="listProducts">
                @foreach ($products as $product)
                    <div id="product-card" class="col-lg-3 col-md-4 col-sm-6 col-6">
                        {{-- @include('layout.partials.product-card', ['product' => $product]) --}}
                        <div class="row text-center pb-2" id="card">
                            <div class="col-12 px-2 pt-2">
                                <img class="object-fit-cover" width="100%" height="425" id="pro-image" src="{{ $product->image }}" alt="">
                            </div>
                            <h2 class="pt-3" id="pro-name">{{ $product->name }}</h2>
                            <p id="pro-price">$ {{ $product->price }}</p>
                            <form id="addToCartForm" action="{{ route('addToCart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="productId" value="{{ $product->id }}">
                                <button id="addToCart" class="border-0 bg-white m-auto" href="#" type="submit">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    

    <script>
        const sortbyLowToHigh = () => {
            console.log('Sorting by price: low to high');
        }

        document.querySelectorAll('#category').forEach(function(category) 
        {
            category.addEventListener('click', function() {
                var categoryId = category.dataset.categoryId;
                console.log('Getting products for category ID: ' + categoryId);
                getProductByCategory(categoryId);
            });
        });

        function getProductByCategory(categoryId) {
            console.log('Category ID = ' + categoryId);
            
            const requestOptions = {
                method: "GET",
                redirect: "follow"
            };

            fetch("http://127.0.0.1:8000/api/product/productByCategory/"+categoryId, requestOptions)
            .then((response) => response.json())
            .then((result) => {
                var mainCards = document.querySelector('#listProducts');
                mainCards.innerHTML = '';

                result['data'].forEach((product) => {
                const productCardHTML = `
                    <div id="product-card" class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="row text-center pb-2" id="card">
                            <div class="col-12 px-2 pt-2">
                                <img class="object-fit-cover" width="100%" height="425" id="pro-image" src="${product.image}" alt="">
                            </div>
                            <h2 class="pt-3" id="pro-name">${product.name}</h2>
                            <p id="pro-price">$ ${product.price}</p>
                            <form id="addToCartForm" action="{{ route('addToCart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="productId" value="${product.id}">
                                <button id="addToCart" class="border-0 bg-white m-auto" href="#" type="submit">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                `;
                // Create a temporary container element
                const tempContainer = document.createElement('div');
                tempContainer.innerHTML = productCardHTML;
                
                // Append the first child of tempContainer (which is the product card) to the products container
                mainCards.innerHTML += productCardHTML;
            });

            })
            .catch((error) => console.error(error));

            // Sort product
            // document.querySelector('#sortBy').addEventListener('change', function() {
            //     var sortBy = this.value;
            //     sortProducts(sortBy);
            // });
            function sortProducts(sortBy) {
                var productsContainer = document.querySelector('#listProducts');
                var products = Array.from(productsContainer.children);

                // switch (sortBy) {
                //     case 'price-low':
                //         products.sort((a, b) => {
                //             var priceA = parseFloat(a.querySelector('#pro-price').textContent.replace('$', '').trim());
                //             var priceB = parseFloat(b.querySelector('#pro-price').textContent.replace('$', '').trim());
                //             return priceA - priceB;
                //         });
                //         break;
                //     case 'price-high':
                //         products.sort((a, b) => {
                //             var priceA = parseFloat(a.querySelector('#pro-price').textContent.replace('$', '').trim());
                //             var priceB = parseFloat(b.querySelector('#pro-price').textContent.replace('$', '').trim());
                //             return priceB - priceA;
                //         });
                //         break;
                //     default:
                //         // Default sorting or any other sorting criteria you may have
                //         break;
                // }
                // Append sorted products back to the container
                products.forEach(product => {
                    productsContainer.appendChild(product);
                });
            }

        }
    </script>
    <style>
        .container-shop ul li{
            list-style: none;
            display: inline;
            color: #101020;
            padding: 25px 10px;
            font-family: 'Raleway', sans-serif;
            font-size: 12.5px;
            letter-spacing: 2px !important;
            font-weight: 700;
            cursor: pointer;
        }
        .container-shop ul li:hover{
            color: #db9457;
        }
        #sortBy{
            font-family: 'Raleway', sans-serif;
            font-size: 14px !important;
            color: #3a3a3b;
            letter-spacing: 1.5px;
        }
        #sortBy:focus{
            outline: none;
        }
        h2{
        font-family: 'Playfair Display', serif;
        font-size: 17px;
    }
    #addToCart{
        text-decoration: none;
        color: #db9457;
        font-family: 'Raleway', sans-serif;
        font-size: 13.5px;
        letter-spacing: 2px;
        font-weight: 700;
        padding-top: -10px;
        display: none;
    }
    #card:hover #addToCart{
        display: block;
    }
    </style>
@endsection

    