@extends('layouts.site')
@section('title')
    {{__('site/auth.connecter')}}
@endsection


@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{route('home')}}">{{__('site/auth.home')}}</a></li>
                <li class='active'>{{__('site/auth.connecter')}}</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->            
<div class="col-md-10 col-sm-10 sign-in">
    <h4 class="">{{__('site/auth.connecter')}}</h4>
    <p class="">{{__('site/auth.welcome')}}</p>
    <!--div class="social-sign-in outer-top-xs">
        <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
        <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
    </div-->
    <form class="register-form outer-top-xs" role="form" action="{{ route('login') }}" method="post">
         @csrf
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">{{__('site/auth.email')}} <span>*</span></label>
            <input  name="email" value="{{ old('email') }}" type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
            @error('email')
                <span  class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputPassword1">{{__('site/auth.password')}} <span>*</span></label>
            <input name="password" type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
            @error('password')
            <span class="text-danger invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="radio outer-xs">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{__('site/auth.remember')}}
            </label>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="forgot-password pull-right">  {{__('site/auth.forgetpassword')}}</a>
            @endif
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">{{__('site/auth.connecter')}}</button>
    </form>                 
</div>


</div>
</div>
</div>
</div>
  
    <br>
@stop
