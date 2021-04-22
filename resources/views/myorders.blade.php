@extends('master')
@section("content")
<style>
#orders-row{
  padding-left:200px;
}
/* .fortexts h2,h5,{
  float:right;
} */
</style>
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>{{ __("my orders")}} </h4>
            {{ __("")}}
            @foreach($orders as $item)
            <div id = "orders-row" class="row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="fortexts" style="font-size:20px;">
                      <h2 style="font-size:20px;">{{ __("Name")}} : {{$item->name}}</h2>
                      <h5>{{ __("Delivery Status")}}: {{$item->status}}</h5>
                      <h5>{{ __("Address")}} : {{$item->address}}</h5>
                      <h5>{{ __("Payment Status")}} : {{$item->payment_status}}</h5>
                      <h5>{{ __("Payment Method")}} : {{$item->payment_method}}</h5>

                    </div>
             </div>
            
            </div>
            @endforeach
          </div>

     </div>
</div>
@endsection 