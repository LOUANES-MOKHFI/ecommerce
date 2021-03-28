@extends('layouts.site')

@section('title')
{{__('site/auth.register')}}
@endsection
@section('content')
   <div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{route('home')}}">{{__('site/auth.home')}}</a></li>
                <li class='active'>{{__('site/auth.register')}}</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
<div class="col-md-12 col-sm-12 create-new-account">
    <h4 class="checkout-subtitle">{{__('site/auth.newaccount')}}</h4>
    <p class="text title-tag-line">{{__('site/auth.creatyouraccount')}}</p>
    <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('register') }}">
                                @csrf
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail2">{{__('site/auth.email')}} <span>*</span></label>
            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" name="email" value="{{ old('email') }}" type="email" required="">
            @error('email')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">{{__('site/auth.name')}} <span>*</span></label>
            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="name" value="{{ old('name') }}" type="text" required="">
            @error('name')
            <span class="invalid-feedback text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">{{__('site/auth.password')}} <span>*</span></label>
            <input type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="password">
             @error('password')
            <span class="text-danger invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
         <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">{{__('site/auth.confirmepassword')}}<span>*</span></label>
            <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="password_confirmation" type="password" value="" required="">
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">{{__('site/auth.register')}}</button>
    </form>
    
    
    </div>  
   </div>
</div><!-- /.sigin-in-->

</div>
  

@stop

