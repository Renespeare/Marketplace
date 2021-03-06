<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $product = Product::with(['galleries', 'user'])->where('slug', $id)->firstOrFail();
        return view('pages.detail', [
            'product' => $product
        ]);
    }

    public function add($id, $users_id)
    {
        $data = [
            'products_id' => $id,
            'users_id' => $users_id
        ];
        //dd($data);
        Cart::create($data);

        return redirect()->route('cart');
        // ->with('success_message', 'Item was added to cart');
    }
}
