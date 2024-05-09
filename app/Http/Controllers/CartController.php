<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

use function Laravel\Prompts\alert;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        try {
            if (!Auth::check()) {
                return redirect()->route('login');
            }

            $productId = $request->productId;

            $cart = session()->get('cart', []);

            // Check if the product already exists in the cart
            $found = false;
            foreach ($cart as &$item) {
                if ($item['id'] == $productId) {
                    $item['quantity']++;
                    $found = true;
                    break;
                }
            }

            // If the product is not found in the cart, add it
            if (!$found) {
                $product = Product::find($productId);
                if ($product) {
                    $cart[] = [
                        'id' => $productId,
                        'image' => $product->image, // Ensure 'image' key is set
                        'price' => $product->price,
                        'quantity' => 1,
                        'name' => $product->name,
                    ];
                }
            }
            // // Store the updated cart back into the session
            session()->put('cart', $cart);
            session()->save();
            // dd($cart);
            // return redirect()->route('cartView');
            return redirect()->route('cartView',['cart' => $cart]);
        } catch (\Exception $e) {
            // Handle any exceptions
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function cart_view()
    {
        $cart = session()->get('cart', []);
        // Pass the $cart variable to the cart view
        return view('theme.sub_view.cart', ['cart' => $cart]);
    }

    public function removeFromCart(Request $request)
    {
        // Get the product ID from the request
        $productId = $request->productId;
        // remove product from cart in session by product id
        $cart = session()->get('cart', []);
        // Loop through the cart items
        foreach ($cart as $key => $item) {
            // If the product ID matches the ID of the item in the cart
            if ($item['id'] == $productId) {
                // Remove the item from the cart
                unset($cart[$key]);
                // Break out of the loop
                break;
            }
        }
        // Store the updated cart back into the session
        session()->put('cart', $cart);
        // Redirect to the cart view route
        //return redirect()->route('cartView');
    }

}
