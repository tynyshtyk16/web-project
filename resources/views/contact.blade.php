@extends('master')
@section("content")
<style>
    .form-group {
  width: 100%;
}
.animate-box{
/* text-align:center; */
padding-left:140px;
padding-top:100px;
/* padding-right:100px; */
}

.fh5co-contact-info ul {
  padding: 0;
  margin: 0;
}
.fh5co-contact-info ul li {
  padding: 0 0 0 40px;
  margin: 0 0 30px 0;
  list-style: none;
  position: relative;

}
</style>
<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">

					<div class="fh5co-contact-info">
						<h3>{{ __("Contact Information")}}</h3>
						<ul>
							<li class="address">{{ __("address of shop")}}, <br> {{ __("Kazakhstan, Atyrau")}}</li>
							<li class="phone"><a href="tel://1234567920">+ 777666222</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">bagworld@gmail.com</a></li>
						</ul>
					</div>

				</div>
                @if (count($errors) > 0)
                        <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        </div>
                    @endif
				<div class="col-md-6 animate-box">
					<h3>{{ __("Get In Touch")}}</h3>
					<form action="{{url('sendemail/send')}}" method="post">
                    {{ csrf_field() }}

						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" name="name" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" name="lastname" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" name="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
@endsection 