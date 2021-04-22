<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

<style>
.right_read{
padding-top:-100px;
}
</style>
<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>


	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2" id="center_heading">
					<div id="fh5co-logo"><a href="/">bagworld</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li>
							<a href="/">{{ __("Home")}}</a>
						</li>
						<li><a href="/myorders">{{ __("Orders")}}</a></li>
						<li><a href="/contact">{{ __("Contacts")}}</a></li>
						<li><a href="/cartlist">{{ __("cart")}}({{ $total }})</a></li>
						<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
						<span class="caret"></span></a>
						@if(Session::has('user')) 
						<ul class="dropdown-menu">
						<li class="log-header"><a h ref="/logout">{{ __("Logout")}}</a></li>
						</ul>
						</li>
						@else
						<li><a href="/login">{{ __("login")}}</a></li>
						@endif 
						<li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			@php $locale = session()->get('locale'); @endphp
            @switch($locale)
              @case('en')
                EN
              @break
              @case('kz')
                KZ
              @break
              @case('ru')
                RU
              @break
            @endswitch
            </a>
            <ul class="dropdown-menu">
              <li><a href="/kz">{{ __("KZ")}}</a></li>
              <li><a href="/en">{{ __("EN")}}</a></li>
              <li><a href="/ru">{{ __("RU")}}</a></li>
            </ul>
        </li>
						</ul>

				</div>			
				</div>	
		</div>
	</nav>
	</div>