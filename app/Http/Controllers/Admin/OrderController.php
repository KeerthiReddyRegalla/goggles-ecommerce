<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('admin.pages.order.orders')->with(['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'city' => 'required',
            'total' => 'required',
            'address_type' => 'nullable'
        ]);

        DB::transaction(function () use ($request, &$order){
            $order = Order::create($request->all());
            $items = json_decode($request->items);
            foreach ($items as $item){
                OrderProducts::create([
                    'qty' => $item->quantity,
                    'order_id' => $order->id,
                    'product_id' => $item->item->id,
                ]);
            }
        });

        return response()->json(['data' => $order]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
