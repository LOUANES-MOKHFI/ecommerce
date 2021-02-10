@extends('layouts.site')

@section('title' , 'contactez-nous')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/styles/contact_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/front/styles/contact_responsive.css')}}">

@endsection


@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Contactez-nous</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
    <div class="contact-page">
		<div class="row">
			
				
	<form action="{{route('contact.store')}}" id="contact_form" method="post">
							@csrf
				<div class="col-md-8 contact-form">
	<div class="col-md-12 contact-title">
		@include('front.includes.alert1')
		<h4>Contactez-nous</h4>
	</div>
	<div class="col-md-4 ">
			<div class="form-group">
		    <label class="info-title" for="exampleInputName">Nom et prénom <span>*</span></label>
		    <input type="text" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="" name="name">
		@error("name")
								<br>
                                    <span class="text-danger"> {{$message}}  </span>
								@enderror
		  </div>
		
	</div>
	<div class="col-md-4">
		
			<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" name="email">
		  @error("email")
								<br>
                                    <span class="text-danger"> {{$message}}  </span>
								@enderror
			</div>
	</div>
	<div class="col-md-4">
		
			<div class="form-group">
		    <label class="info-title" for="exampleInputTitle">Télèphone <span>*</span></label>
		    <input type="text" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="TELEPHONE" name="phone">
		 	@error("phone")
								<br>
                                    <span class="text-danger"> {{$message}}  </span>
								@enderror
		  </div>
		
	</div>
	<div class="col-md-12">
		
			<div class="form-group">
		    <label class="info-title" for="exampleInputComments">Message <span>*</span></label>
		    <textarea class="form-control unicase-form-control" id="exampleInputComments" name="message"></textarea>
		    @error("message")
								<br>
                                    <span class="text-danger"> {{$message}}  </span>
								@enderror
		  </div>
		
	</div>
	<div class="col-md-12 outer-bottom-small m-t-20">
		<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Envoyer</button>
	</div>
</div>
</form>
<div class="col-md-4 contact-info">
	<div class="contact-title">
		<h4>Informations</h4>
	</div>
	<div class="clearfix address">
		<span class="contact-i"><i class="fa fa-map-marker"></i></span>
		<span class="contact-span">Boutique en ligne</span>
	</div>
	<div class="clearfix phone-no">
		<span class="contact-i"><i class="fa fa-mobile"></i></span>
		<span class="contact-span">+213 662887669</span>
	</div>
	<div class="clearfix email">
		<span class="contact-i"><i class="fa fa-envelope"></i></span>
		<span class="contact-span"><a href="#">louanes.mokhfi@gmail.com</a></span>
	</div>
</div>			
</div><!-- /.contact-page -->
<div class="col-md-12 contact-map outer-bottom-vs">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.0080692193424!2d80.29172299999996!3d13.098675000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526f446a1c3187%3A0x298011b0b0d14d47!2sTransvelo!5e0!3m2!1sen!2sin!4v1412844527190" width="600" height="450"  style="border:0"></iframe>
				</div>
		</div><!-- /.row -->
	</div>
 

   
@endsection

@section('script')
  
@stop

