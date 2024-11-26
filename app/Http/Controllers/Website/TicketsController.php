<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class TicketsController extends Controller
{

    public function __construct()
    {
    }

    public function checkAuthAfterCheckout(Request $request)
    {
        try{
            // storage to session
            Session::put('order', $request->only(['schedule_id','cb']));
            session()->save(); // Explicitly save the session

            if(!auth()->check()){
                return redirect()->route('auth.showLoginForm',['callback_url' => route('auth.client.movies.show.payment')]);
            }

            return redirect()->route('auth.client.movies.show.payment');

        }catch (\Exception $exception){
            logger($exception->getMessage());
            toastr()->error('Có lỗi xảy ra, vui lòng thử lại sau!');
            return redirect()->back();
        }
    }
}