<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $customer = Customer::where('user_id', $user->id)->first();

        return view('pages.front.customer.account', [
            'customer' => $customer,
            'user' => $user,
        ]);
    }
}
