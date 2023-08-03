<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\String_;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function addToCart(Request $request)
    {
        $request['user_id'] = 1;

        Cart::create($request->all());

        return response()->json([
            'data' => $request->all(),
        ]);
    }


    public function viewCart()
    {
        $data = Cart::all();
        return view('client.cart.viewcart', compact('data'));
    }

    public function delCart(string $id)
    {
//        dd(Cart::query()->find($id));
        Cart::find($id)->delete();
        return back();

    }

//    public function index()
//    {
//        if (Auth::check()) {
//
//            // Check if exists product
//            if ($this->product->where(['id' => $productId, 'status' => 1])->exists()) {
//
//                // Check product have color case
//                if ($this->product->productColors()->count() > 1) {
//
//                    // Check product color quantity selected
//                    if ($this->productSelectedQuantity) {
//
//                        $productColor = $this->product->productColors()->where('id', $this->productColorId)->first();
//
//                        // Check exist product in cart
//                        $productColorCart = Cart::query()->where([
//                            'user_id' =>  \auth()->user()->id,
//                            'product_id' => $productId,
//                            'product_color_id' => $productColor->id,
//                        ])->exists();
//
//                        //Check product cart already added or yet?
//                        if ($productColorCart) {
//                            $this->alertResult('Product already added.', 'warning', 401);
//                        } else {
//
//                            // Check product color quantity
//                            if ($productColor->quantity > 0) {
//
//                                // Compare product color quantity available with quantity selected
//                                if ($productColor->quantity >= $this->quantityCount) {
//
//                                    Cart::query()->create([
//                                        'user_id' => \auth()->user()->id,
//                                        'product_id' => $productId,
//                                        'product_color_id' => $this->productColorId,
//                                        'quantity' => $this->quantityCount
//                                    ]);
//
//                                    $this->emit('updateProductCart');
//                                    $this->alertResult('Product added to cart.', 'success');
//
//                                } else {
//                                    $this->alertResult('Only ' . $productColor->quantity . ' quantity available.', 'warning', 401);
//                                }
//                            } else {
//                                $this->alertResult('Product color out of stock.', 'warning', 401);
//                            }
//                        }
//                    } else {
//                        $this->alertResult('Select your product color.', 'warning', 401);
//                    }
//                } else {
//
//                    // Check exist product in cart
//                    $productCart = Cart::query()->where([
//                        'user_id' =>  \auth()->user()->id,
//                        'product_id' => $productId,
//                    ])->exists();
//
//                    if ($productCart) {
//                        $this->alertResult('Product already added.', 'warning', 401);
//                    } else {
//                        if ($this->product->quantity > 0) {
//
//                            if ($this->product->quantity >= $this->quantityCount) {
//
//                                Cart::query()->create([
//                                    'user_id' => \auth()->user()->id,
//                                    'product_id' => $productId,
//                                    'quantity' => $this->quantityCount
//                                ]);
//
//                                $this->emit('updateProductCart');
//                                $this->alertResult('Product added to cart.', 'success');
//
//                            } else {
//                                $this->alertResult('Only ' . $this->product->quantity . ' quantity available.', 'warning', 401);
//                            }
//                        } else {
//                            $this->alertResult('Product out of stock.', 'warning', 401);
//                        }
//                    }
//                }
//            } else {
//                $this->alertResult('Product dose not exists.', 'warning', 401);
//            }
//        } else {
//            $this->alertResult('Please login to add to card.', 'warning', 401);
//        }
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     */
//    public function addToCart($productId)
//    {
//        // Check user login
//        if (Auth::check()) {
//
//            // Check if exists product
//            if ($this->product->where(['id' => $productId, 'status' => 1])->exists()) {
//
//                // Check product have color case
//                if ($this->product->productColors()->count() > 1) {
//
//                    // Check product color quantity selected
//                    if ($this->productSelectedQuantity) {
//
//                        $productColor = $this->product->productColors()->where('id', $this->productColorId)->first();
//
//                        // Check exist product in cart
//                        $productColorCart = Cart::query()->where([
//                            'user_id' =>  \auth()->user()->id,
//                            'product_id' => $productId,
//                            'product_color_id' => $productColor->id,
//                        ])->exists();
//
//                        //Check product cart already added or yet?
//                        if ($productColorCart) {
//                            $this->alertResult('Product already added.', 'warning', 401);
//                        } else {
//
//                            // Check product color quantity
//                            if ($productColor->quantity > 0) {
//
//                                // Compare product color quantity available with quantity selected
//                                if ($productColor->quantity >= $this->quantityCount) {
//
//                                    Cart::query()->create([
//                                        'user_id' => \auth()->user()->id,
//                                        'product_id' => $productId,
//                                        'product_color_id' => $this->productColorId,
//                                        'quantity' => $this->quantityCount
//                                    ]);
//
//                                    $this->emit('updateProductCart');
//                                    $this->alertResult('Product added to cart.', 'success');
//
//                                } else {
//                                    $this->alertResult('Only ' . $productColor->quantity . ' quantity available.', 'warning', 401);
//                                }
//                            } else {
//                                $this->alertResult('Product color out of stock.', 'warning', 401);
//                            }
//                        }
//                    } else {
//                        $this->alertResult('Select your product color.', 'warning', 401);
//                    }
//                } else {
//
//                    // Check exist product in cart
//                    $productCart = Cart::query()->where([
//                        'user_id' =>  \auth()->user()->id,
//                        'product_id' => $productId,
//                    ])->exists();
//
//                    if ($productCart) {
//                        $this->alertResult('Product already added.', 'warning', 401);
//                    } else {
//                        if ($this->product->quantity > 0) {
//
//                            if ($this->product->quantity >= $this->quantityCount) {
//
//                                Cart::query()->create([
//                                    'user_id' => \auth()->user()->id,
//                                    'product_id' => $productId,
//                                    'quantity' => $this->quantityCount
//                                ]);
//
//                                $this->emit('updateProductCart');
//                                $this->alertResult('Product added to cart.', 'success');
//
//                            } else {
//                                $this->alertResult('Only ' . $this->product->quantity . ' quantity available.', 'warning', 401);
//                            }
//                        } else {
//                            $this->alertResult('Product out of stock.', 'warning', 401);
//                        }
//                    }
//                }
//            } else {
//                $this->alertResult('Product dose not exists.', 'warning', 401);
//            }
//        } else {
//            $this->alertResult('Please login to add to card.', 'warning', 401);
//        }
//    }

}
