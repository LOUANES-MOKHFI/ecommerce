@extends('layouts.site')

@section('title')
S'inscrire
@endsection
@section('content')
   <div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li class='active'>S'inscrire</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
<div class="col-md-12 col-sm-12 create-new-account">
    <h4 class="checkout-subtitle">Crée un nouveau compte</h4>
    <p class="text title-tag-line">Create votre nouveau compte.</p>
    <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('register') }}">
                                @csrf
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail2">Email <span>*</span></label>
            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" name="email" value="{{ old('email') }}" type="email" required="">
            @error('email')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Nom et prénom <span>*</span></label>
            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="name" value="{{ old('name') }}" type="text" required="">
            @error('name')
            <span class="invalid-feedback text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Mot de passe <span>*</span></label>
            <input type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="password">
             @error('password')
            <span class="text-danger invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
         <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Confirmer le mot de passe<span>*</span></label>
            <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="password_confirmation" type="password" value="" required="">
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">S'inscrire</button>
    </form>
    
    
    </div>  
   </div>
</div><!-- /.sigin-in-->

</div>
  

@stop

