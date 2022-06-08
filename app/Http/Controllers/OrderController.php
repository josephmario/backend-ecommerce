<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Customer;
class OrderController extends Controller
{
    public function index()
    {
        return Customer::select('customer.*', 'order.id as order_id', 'order.*', 'order_detail.id as order_detail_id', 'order_detail.*', 'product.id as product_id', 'product.*')->leftJoin("order", "order.customer_code", "=", "customer.customer_code")
        ->leftJoin("order_detail", "order_detail.order_number", "=", "order.order_number")
        ->leftJoin("product", "product.product_code", "=", "order_detail.product_code")->get();
    }
    public function create(Request $request)
    {
        $order = Order::create([
            'customer_code' => $request->customer_code,
            'order_number' => $request->order_number,
            'status' => 'Created',
        ]);
        $order_detail = OrderDetail::create([
            'order_number' => $request->order_number,
            'product_code' => $request->product_code,
            'quantity' => $request->quantity,
            'gross_sale' => $request->gross_sale,
        ]);
        return response()->json(['order' => $order,
            'order_detail' => $order_detail]);
    }
    public function show($order_detail_id)
    {
        $order_detail = OrderDetail::find($order_detail_id);
        if(is_null($order_detail)) {
            return response()->json([
                "message" => "Order not found"
            ], 404);
        }else{
            return Customer::select('customer.*', 'order.id as order_id', 'order.*', 'order_detail.id as order_detail_id', 'order_detail.*', 'product.id as product_id', 'product.*')->leftJoin("order", "order.customer_code", "=", "customer.customer_code")
            ->leftJoin("order_detail", "order_detail.order_number", "=", "order.order_number")
            ->leftJoin("product", "product.product_code", "=", "order_detail.product_code")->where("order_detail.id", "=", $order_detail_id)->get();
        }
    }
    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        if(is_null($order)) {
            return response()->json([
                "message" => "Order Detail not found"
            ], 404);
        }else {
            $order->update($request->all());
        }
    }

}
