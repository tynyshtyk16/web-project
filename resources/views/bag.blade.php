@extends('master')
@section('content')
<style>
.trending-imag{
        height:400px;
  margin-top:100px;
    }

</style>
<div class="custom-product">
<div class="row0">
<img src="{{ asset('/sources/back.png') }}" alt="">
</div>
 
      <div class="trending-wrapper">
      <p style="color:black">{{ __("cool bags ever")}}</p>
        <h3 style="font-size:40px;">{{ __("Trending Products")}}</h3>
        @foreach($bags as $item)
        <div class="trening-item">
        <a href="detail/{{$item['id']}}">
          <img class="trending-imag" src="{{$item['gallery']}}">
          <div class="fortxt">
            <h3 class="items-text" style="font-size:18px;">{{$item['name']}}</h3>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      </div>
      
 @endsection