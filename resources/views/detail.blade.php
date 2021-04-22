
@extends('master')
@section('content')
<style>
/* .imgfor{
    padding-top:80px;
} */
#desc{
    padding-top:110px;
}
a{
    color:black;
}
</style>
<div class="container">
 <div class="row">
 <div class="col-sm-6" id="imgfor">
 <img class="detail-img" src="{{$bags['gallery']}}" alt="">
 </div>
 <div class="col-sm-6" id="desc">
 <h3>{{ __("Name")}}: {{$bags['name']}}</h2>
       <h3> {{ __("Price")}} : {{$bags['price']}}</h3>
       <h4> {{ __("Details")}}: {{$bags['description']}}</h4>
       <h4>  {{ __("category")}}: {{$bags['category']}}</h4>
       <br><br> 
       <form action="/add_to_cart" method="post">
    @csrf
           <input type="hidden" name="product_id" value={{$bags['id']}}> 
       <button> {{ __("Add to cart")}}</button> 
       </form>
       <br>
       <button> {{ __("Buy now")}}</button>
       <br><br>
       <a href="/"> {{ __("back")}}</a>

       </div>

  </div>
      </div>
 @endsection 