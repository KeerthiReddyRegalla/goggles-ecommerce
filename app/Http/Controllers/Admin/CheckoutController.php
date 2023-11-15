<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\DB\ProductService;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = collect($request->all());

        $cartProducts = $data->map(function ($value, $key) use ($data) {
            if(str_contains($key, 'googles_item')){
                $index = substr($key, -1);
                $product = ProductService::query()->where('title', $value)->first();
                if (is_null($product)) return false;
                return  (object)[
                    'item' => $product,
                    'quantity' => $data['quantity_'.$index],
                ];
            }
            return false;

        })->filter(function ($value, $key){
            return $value;
        })->flatten();

        return view('retail.checkout')->with(['products' => $cartProducts]);
    }
}
