<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Services\PhoneServicesInterface;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public $phoneService ;

    public function __construct(PhoneServicesInterface $phoneServices)
    {
        $this->phoneService = $phoneServices;
    }

    public function addToCart($id){
        $phone = $this->phoneService->findById($id);
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->addToCart($phone);
        Session::put('cart',$cart);
        return back();
    }

    public function showCart(){
        $cart = Session::has('cart')?Session::get('cart'):null;
        return view('phone.cart',compact('cart'));
    }
}
