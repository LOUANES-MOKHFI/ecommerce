@extends('layouts.site')
@section('title')
Se connecter
@endsection


@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li class='active'>Connecter</li>
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
    <h4 class="">Se connecter</h4>
    <p class="">Salut, Bienvenu dans votre compte.</p>
    <!--div class="social-sign-in outer-top-xs">
        <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
        <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
    </div-->
    <form class="register-form outer-top-xs" role="form" action="{{ route('login') }}" method="post">
         @csrf
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            <input  name="email" value="{{ old('email') }}" type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
            @error('email')
                <span  class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
            <input name="password" type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
            @error('password')
            <span class="text-danger invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="radio outer-xs">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Se souvenir de moi!
            </label>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="forgot-password pull-right">Mot de passe oublie?</a>
            @endif
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Se connecter</button>
    </form>                 
</div>


</div>
</div>
</div>
</div>
  
    <br>
@stop
