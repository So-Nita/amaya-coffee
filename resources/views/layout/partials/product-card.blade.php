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
<style>
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

<script>
    function addToCart(productId) {
        @auth
            fetch(`/api/cart/add/${productId}`, {
                method: 'POST',
                headers: {
                    'Authorization': 'Bearer {{ auth()->user()->api_token }}', 
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
            })
            .then(response => {
                if (response.ok) {
                    console.log('Product added to cart successfully');
                } else {
                    console.error('Error adding product to cart');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        @else
            window.location.href = '/login';
        @endauth
    }
</script>