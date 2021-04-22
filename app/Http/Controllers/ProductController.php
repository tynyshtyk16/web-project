<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Models\Bag;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Session;
class ProductController extends Controller
{
    function index(){  
      $data= Bag::all();
 
        return view('bag',['bags'=>$data] ); 
    }
    function detail($id)
    {
        $data =Bag::find($id);
        return view('detail',['bags'=>$data]) ;
    }
    function search(Request $req)
    {
        $data= Bag::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['bags'=>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save(); 
            return redirect('/');
 
        }
        else
        {
            return redirect('/login');
        }    }

    static function cartItem()
    {
     $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    } 
    function cartList()
    {
        // return 'hello';
        // $userId=Session::get('user')['id'];
        // $products= DB::table('cart')
        // ->join('bags','cart.product_id','=','bags.id')
        // ->where('cart.user_id',$userId)
        // ->select('bags.*','cart.id as cart_id')
        // ->get();
        // return view('cartlist',['bags'=>$bags]);

        $userId=Session::get('user')['id'];
        $bags= DB::table('cart')
         ->join('bags','cart.product_id','=','bags.id')
         ->where('cart.user_id',$userId)
         ->select('bags.*','cart.id as cart_id')
         ->get();
 
         return view('cartlist',['bags'=>$bags]);
    }
  
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id']; 
        $total= $bags= DB::table('cart')
         ->join('bags','cart.product_id','=','bags.id')
         ->where('cart.user_id',$userId) 
         ->sum('bags.price');
 
         return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/');
    }
    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('bags','orders.product_id','=','bags.id')
         ->where('orders.user_id',$userId)
         ->get();
 
         return view('myorders',['orders'=>$orders]);
    }
    // public function changeLocale($locale){
    //     session(['locale'=>$locale]);

    //     App::setlocale($locale);
    //   return redirect()->back();
    // }
}   
 
