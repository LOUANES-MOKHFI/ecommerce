@extends('layouts.site')
@section('title' ,'Panier')

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
        <table class="table">
            <thead>
                <tr>
                    <th class="cart-romove item">Supprimer</th>
                    <th class="cart-description item">Image</th>
                    <th class="cart-product-name item">Produit</th>
                    <th class="cart-edit item">Modifier</th>
                    <th class="cart-qty item">Quantitie</th>
                    <th class="cart-sub-total item">prix</th>
                    <th class="cart-total last-item">total</th>
                </tr>
            </thead><!-- /thead -->
            
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="romove-item">
                        <a href="{{route('site.cart.remove-from-cart',$product->rowId)}}" title="cancel" class="icon" style="color: red;font-size: 28px"><i class="fa fa-trash-o"></i></a></td>
                    <td class="cart-image">
                        <a class="entry-thumbnail" href="detail.html">
                            <img src="{{getProduct($product->id) -> images[0] -> photo ?? ''}}" alt="{{$product->name}}" height="100">
                        </a>
                    </td>
                    <td class="cart-product-name-info">
                        <h4 class='cart-product-description'><a href="detail.html">{{$product->name}}</a></h4>
                        <div class="row">
                            
                        </div><!-- /.row -->
                    </td>
                   
                    <form action="{{route('site.cart.update-product-in-cart')}}" method="post">
                        @csrf
                    <td class="cart-product-edit">
                        <button class="btn fa fa-spinner" style="color: red"></button></td>
                    <td class="cart-product-quantity">
                        <div class="quant-input">
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <input type="hidden" name="rowId" value="{{$product->rowId}}">
                            <input type="number" name="qty" value="{{$product->qty}}" min="1">
                          </div>
                    </td>
                    </form>
                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{$product->price}} DA</span></td>
                    <td class="cart-product-grand-total"><span class="cart-grand-total-price">{{$product->price * $product->qty}} DA</span></td>
                </tr>
                @endforeach
               
            </tbody><!-- /tbody -->
            
           
        </table><!-- /table -->
    </div>
</div><!-- /.shopping-cart-table -->
               

<div class="col-md-8 col-sm-12 estimate-ship-tax">
    <table class="table">
        <thead>
            <tr>
                <th>
                    <a href="{{route('all-products')}}" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                </th>
            </tr>
        </thead>
    </table><!-- /table -->
</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 cart-shopping-total">
    <table class="table">
        <thead>
            <tr>
                <th>
                    <div class="cart-sub-total">
                        Total: <span class="inner-left-md">{{Cart::subtotal()}} DA</span>
                    </div>
                   
                </th>
            </tr>
        </thead><!-- /thead -->
        @if(Cart::subtotal() > 0.00)

        <tbody>
                <tr>
                    <td>
                        <div class="cart-checkout-btn pull-right">
                            <a href="{{route('payment_shipping')}}" type="submit" class="btn btn-primary checkout-btn" >Passer vers le Paiment</a>
                        </div>
                    </td>
                </tr>
        </tbody>
        @endif
    </table><!-- /table -->
</div>
</div><!-- /.shopping-cart -->
</div> <!-- /.row -->

</div><!-- /.body-content -->
   
@stop

@section('script')
    <script>


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.remove-from-cart', function (e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: $(this).attr('data-url-product'),
                data: {
                    'product_id': $(this).attr('data-id-product'),
                 },
                success: function (data) {

                }
            });
        });
    </script>
    @stop
