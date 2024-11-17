<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;


class OrdersController extends Controller
{
    public function showPagePaymentTicket()
    {
        return view('website.pages.payment_ticket');
    }

    public function showPageConfirmPayment()
    {
        return view('website.pages.confirmation_payment');
    }
}
