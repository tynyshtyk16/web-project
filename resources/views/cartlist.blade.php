@extends('master')
@section("content")

<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>{{ __("Result for Products")}}</h4>
            <!-- <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br> -->
            @foreach($bags as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="list-text">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                    </div>
             </div> 
             <div class="col-sm-3" id="bttn">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >{{ __("Remove to Cart")}}</a>
             </div>
            </div>
            @endforeach
          </div>
          <a class="btn btn-warning" id="btnorder" href="ordernow">{{ __("Order Now")}}</a> <br> <br>

     </div>
</div>
@endsection 