<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Resources\Customer as CustomerResource;
use DateTime;
use DB;

class CustomerController extends Controller
{
    public function index()
    {
        return Customer::leftJoin("order", "order.customer_code", "=", "customer.customer_code")
        ->leftJoin("order_detail", "order_detail.order_number", "=", "order.order_number")
        ->leftJoin("product", "product.product_code", "=", "order_detail.product_code")->get();
    }

}
