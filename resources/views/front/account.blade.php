@extends('layouts.site')

@section('title' , 'Mon Compte')
@section('style')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<style type="text/css">
    .card {
    width: 100%;
    padding: 30px
}

.form {
    padding: 20px;
    text-align: left;
}

.form-control {
    height: 50px;
    background-color: #eee
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #f50057;
    outline: 0;
    box-shadow: none;
    background-color: #eee
}

.inputbox {
    margin-bottom: 15px
}

.register {
    width: 200px;
    height: 51px;
    background-color: #f50057;
    border-color: #f50057
}

.register:hover {
    width: 200px;
    height: 51px;
    background-color: #f50057;
    border-color: #f50057
}

.login {
    color: #f50057;
    text-decoration: none
}

.login:hover {
    color: #f50057;
    text-decoration: none
}

.form-check-input:checked {
    background-color: #f50057;
    border-color: #f50057;
    text-align: left;
}
input{
    text-align: left;
}

</style>
@endsection

@section('content')

	  <div class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Title -->
							<div class="bread-title"><h2>Mon compte</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>	

		<!-- Profile -->

	<div class="container d-flex justify-content-center align-items-center">
    <div class="card">
        @include('front.includes.alert')
        @include('front.includes.alert1')
        <div class="row">
        	 <div class="col-md-6">
                <div class="form">
                     <form method="POST" action="{{ route('account.update.password') }}">
                        @csrf
                        <h2>Modifier Votre mot de passe</h2>
                        <div class="inputbox mt-3"> <span>Ancien Mot de passe</span> 
                            <input type="password" name="old_password" class="form-control" id="old_password">
                            @error('old_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                           @enderror
                        </div>
                        <div class="inputbox mt-3"> <span>Nouveau mot de passe</span>
                           <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror"> 
                           @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                           @enderror
                        </div>

                        <div class="inputbox mt-3"> <span>Confirmer le mot de passe</span>
                           <input type="password" id="confirm_password" class="form-control" name="password_confirmation"> 
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                           
                            <div class="text-right"> <button class="btn btn-success register btn-block">Modifier</button> </div>

                        </div>

                    </form>
                </div>
            </div>
                <div class="col-md-6">
                <div class="form">
                     <form method="POST" action="{{ route('account.update.informations') }}">
                        @csrf
                        <h2>Mes informations</h2>
                         <div class="inputbox mt-3"> <span>Nom et prénom</span>
                           <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" value="{{$user->name}}"> 
                           @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                           @enderror
                        </div>
                       <div class="inputbox mt-3"> <span>Email</span>
                           <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{$user->email}}"> 
                           @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                           @enderror
                        </div>
                       

                        <div class="d-flex justify-content-between align-items-center">
                           
                            <div class="text-right"> <button class="btn btn-success register btn-block">Modifier</button> </div>

                        </div>

                    </form>
                </div>
            </div>
           
        </div>

        <!-- update pasword-->
    </div>
</div>
<div class="container">
	<div class="row">
		<h1>Mes Commandes</h1>
	</div>
</div>
@if($commandes->count() > 0)
@foreach($commandes as $key =>$commande)

<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row ">
            <div class="shopping-cart">
                <div class="shopping-cart-table ">
                	<h4>Mon Commande N° : {{$key +1}}</h4>
                    <h4>Etat : 
                        @if($commande->status == 1)
                            <p class="btn btn-info">En Attente</p>
                        @elseif($commande->status == 2)
                            <p class="btn btn-warning">En Traitement</p>
                        @elseif($commande->status == 3)
                            <p class="btn btn-success">Confirmer</p>
                        @elseif($commande->status == 4)
                            <p class="btn btn-danger">Réfuser</p>
                        @endif
                     </h4>
                	<h4>code de la Commande N° : {{$commande->code}}</h4>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="cart-description item">Image</th>
                    <th class="cart-product-name item">Produit</th>
                    <th class="cart-qty item">Quantitie</th>
                    <th class="cart-sub-total item">prix</th>
                    <th class="cart-total last-item">total</th>
                </tr>
            </thead><!-- /thead -->
            
            <tbody>
                @foreach($commande->orders as $product)
                <tr>
                    <td class="cart-image">
                        <a class="entry-thumbnail" href="">
                            <img src="{{getProduct($product->product_id) -> images[0] -> photo ?? ''}}" alt="{{$product->product->name}}" height="50">
                        </a>
                    </td>
                    <td class="cart-product-name-info">
                        <h4 class='cart-product-description'><a href="">{{$product->product->name}}</a></h4>
                    </td>
                    <td class="cart-product-quantity">
                        <div class="quant-input">
                               <h6>{{$product->qte_product}}</h6>
                          </div>
                    </td>
                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{$product->product->price}} DA</span></td>
                    <td class="cart-product-grand-total"><span class="cart-grand-total-price">{{$product->product->price * $product->qte_product}} DA</span></td>
                </tr>
                @endforeach
               
            </tbody><!-- /tbody -->
            
           
        </table><!-- /table -->
    </div>
</div><!-- /.shopping-cart-table -->
               

</div><!-- /.shopping-cart -->
</div> <!-- /.row -->

</div><!-- /.body-content -->
</div>
@endforeach
@else
<div class="container">
	<div class="text-center alert alert-danger text-center">
		<p> Vous n'avez fait aucun demmande</p>
	</div>
</div>
@endif


@endsection
@section('script')


@stop

