@extends('layout.mainlayout')
@section('content')
    <div class="container h-100 w-100 py-lg-5">
        <h1 class="text-center mb-2">CART</h1>
        @if (empty($cart))
            <div class="text-center mt-lg-5 mt-md-4 mt-3 " style="font-family: 'Raleway', sans-serif; font-size:16px; letter-spacing: 1.5px">
                Your cart is currently empty.
            </div>
            <div class="d-flex justify-content-center mt-4">
                <div id="return-shop"> <a href="{{ route('shop') }}"> RETURN TO SHOP</a></div>
            </div>
        @else
            <hr>
            <table class="table w-100">
                <thead>
                    <tr>
                        <th></th>
                        <th colspan="2">PRODUCT</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>SUBTOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $item)
                        <tr>
                            <td class="text-center"><i class="fa-solid fa-xmark remove-item" data-id="{{ $item['id'] }}"></i></td>
                            <td id="td-img"><img src="{{ $item['image'] }}" alt=""></td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['price'] }}</td>
                            <td><input id="quantity" type="number" min="1" value="{{ $item['quantity'] }}"></td>
                            <td>{{ $item['price'] * $item['quantity'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <footer>
                    <tr>
                        <td colspan="4"></td>
                        <td>TOTAL</td>
                        <td id="total">$ 0.00</td>
                    </tr>
                </footer>
            </table>
            <div class="d-flex justify-content-end mt-4">
                <div id="return-shop"> <a href="{{ route('shop') }}"> CHECK OUT </a></div>
            </div>
        @endif
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all quantity inputs
        const quantityInputs = document.querySelectorAll('#quantity');
        // Loop through each quantity input
        quantityInputs.forEach(input => {
            // Add event listener for input change
            input.addEventListener('input', function() {
                // Get the parent row of the input
                const parentRow = this.closest('tr');
                // Get the price and update the subtotal
                const price = parseFloat(parentRow.querySelector('td:nth-child(4)').innerText);
                const quantity = parseInt(this.value);
                const subtotal = price * quantity;
                // Update the subtotal cell in the same row
                parentRow.querySelector('td:nth-child(6)').innerText = subtotal.toFixed(2);
                calculateTotal();
            });
        });
        //Function to calculate the total
        function calculateTotal() {
            let total = 0;
            // Get all subtotal cells
            const subtotalCells = document.querySelectorAll('tbody td:nth-child(6)');
            // Loop through each subtotal cell and sum up the values
            subtotalCells.forEach(cell => {
                total += parseFloat(cell.innerText);
            });
            // Update the total in the footer
            document.getElementById('total').innerText = total.toFixed(2);
        }
        // Initial calculation of total
        calculateTotal();
        // Add event listener to remove items
        document.querySelectorAll('.remove-item').forEach(btn => {
            btn.addEventListener('click', function() {
                const itemId = this.dataset.id;
                removeFromCart(itemId);
            });
        });
        // Function to remove item from cart
        function removeFromCart(itemId) {
            fetch("{{ route('removeFromCart') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ productId: itemId }) // Send the product ID as JSON data
            })
            .then(response => {
                if (response.ok) {
                    const rowToRemove = document.querySelector(`.remove-item[data-id="${itemId}"]`).closest('tr');
                    rowToRemove.remove();
                    calculateTotal(); // Recalculate total after removing item
                    var hr = document.getElementsByClassName('hr')[0];
                    var table = document.getElementsByClassName('table')[0];
                    hr.style.display = 'none';  
                    table.style.display = 'none';
                } else {
                    // Handle error response
                    console.error('Error removing item from cart');
                }
            })
            .then(() => {
                // After removing item from table, update session data
                updateSessionData();
            })
            .catch(error => {
                console.error('Error removing item from cart:', error);
            });
        }

    });
</script>


<style>
    .container h1{
        font-family: 'Raleway', sans-serif;
        font-size: 30px;
        font-weight: 700;
        letter-spacing: 2px;
    }
    .table thead th{
        font-family: 'Raleway', sans-serif;
        font-size: 13px;
        letter-spacing: 1.5px;
        font-weight: bold;
        color: #3a3a3b;
    }
    .table tbody td{
        font-family: 'Raleway', sans-serif;
        font-size: 15.3px;
        letter-spacing: 1.2px;
        font-weight: bold;
        color: #3a3a3b;
        vertical-align: middle; 
    }
    .table tbody tr td img{
        max-height: 135px;
    }
    .table tbody tr td input{
        width: 60px;
        height: 30px;
        border: none;
    }
    #td-img{
        width: 100px !important;
    }
    .table tbody tr td input::-webkit-inner-spin-button {
	    opacity: 1;
    }
    .table tbody tr td input:hover{
        outline: none;
    }
    #return-shop{
        background-color: #242434;
        border: none;
        width: 220px;
        height: 43px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #return-shop:hover{
        background-color: #db9457;
    }
    #return-shop a{
        text-decoration: none;
        color: #db9457;
        font-family: 'Raleway', sans-serif;
        font-size: 13.6px;
        letter-spacing: 1.2px;
    }
    #return-shop:hover a{
        color: #242434;
    }

