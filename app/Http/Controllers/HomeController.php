<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TravelPackage;
use App\Transaction;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = TravelPackage::with(['galleries'])->get();
        return view('pages.home',[
            'items'=>$items,
            'travel_package'=> TravelPackage::count(),
            'transaction'=> Transaction::count(),
            'transaction_pending'=>Transaction:: where('transaction_status','PENDING')->count(),   
            'transaction_sucess'=>Transaction:: where('transaction_status','SUCESS')->count()
        ]);
    }
}
