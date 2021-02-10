@extends('layouts.site')
@section('title' ,'Suivi la commande')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/styles/cart_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/styles/cart_responsive.css')}}">


@endsection
@section('content')
  <div class="body-content outer-top-xs">
    <div class="container">
        <div class="row ">
            <div class="shopping-cart">
                <div class="shopping-cart-table ">
    <div class="table-responsive">
        @include('front.includes.alert1')
       <div class="container">
   
</div>
@if($commande)

<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row ">
            <div class="shopping-cart">
                <div class="shopping-cart-table ">
                    <h4>Mon Commande N° : {{$commande->id}}</h4>
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
@else
<div class="container">
    <div class="text-center alert alert-danger text-center">
        <p> Cette commande n'existe pas</p>
    </div>
</div>
@endif
    </div>
</div><!-- /.shopping-cart-table -->


</div><!-- /.shopping-cart -->
</div> <!-- /.row -->

</div><!-- /.body-content -->
   
@stop

@section('script')
   
    @stop
