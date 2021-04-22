@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table">
         
            <tbody>
              <tr>
                <td>{{ __("Amount")}}</td>
              <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td>{{ __("Tax")}}</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>{{ __("Delivery")}} </td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>{{ __("Total Amount")}}</td>
              <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">{{ __("Payment Method")}}</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>{{ __("online payment")}}</span> <br> <br>
                  <input type="radio" value="cash" na me="payment"> <span>{{ __("EMI payment")}}</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>{{ __("payment on delivery")}}</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-default">{{ __("Order Now")}}</button>
              </form>
          </div>
     </div>
</div>
@endsection 