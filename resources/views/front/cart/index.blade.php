@extends('layouts.site')

@section('content')
    <nav data-depth="1" class="breadcrumb-bg">
        <div class="container no-index">
            <div class="breadcrumb">

                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="{{route('home')}}">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                </ol>

            </div>
        </div>
    </nav>

    <div class="container no-index">
        <div class="row">
            <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <section id="main">
                    <h1 class="page-title">Shopping Cart</h1>
                    <div class="cart-grid row">
                        <div class="cart-grid-body col-xs-12 col-lg-9">
                            <!-- cart products detailed -->
                            <div class="cart-container">
                                <div class="cart-overview js-cart"
                                     data-refresh-url="">
                                    @isset($products)
                                        <ul class="cart-items">
                                            @foreach($products as $product)
                                                <li class="cart-item">
                                                    <div class="product-line-grid row spacing-10">
                                                        <!--  product left content: image-->
                                                        <div class="product-line-grid-left col-sm-2 col-xs-4">
                                                            <span class="product-image media-middle">
                                                              <img class="img-fluid"
                                                                   src="{{getProduct($product->id) -> images[0] -> photo ?? ''}}"
                                                                   alt="{{$product->name}}">
                                                            </span>
                                                        </div>
                                                                    
                                                        <!--  product left body: description -->
                                                        <div class="product-line-grid-body col-sm-10 col-xs-8">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-xs-12">
                                                                    <div class="product-line-info">
                                                                        <a class="label" href="{{route('product.details',getProduct($product->id)->slug)}}"
                                                                           data-id_customization="0">{{$product -> name}}</a>
                                                                    </div>

                                                                    <div class="product-line-info product-price">
                                                                   
                                                                       <span itemprop="price" class="price">{{getProduct($product->id)->special_price ?? getProduct($product->id)->price }}
                                                                       </span>
                                                                        @if(getProduct($product->id)->special_price)
                                                                            <span class="regular-price">{{getProduct($product->id)->price}}</span>
                                                                        @endif
                                                                    </div>

                                                                </div>
                                                                    <div class="text-center product-line-actions col-sm-6 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-9 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-xs-6 qty">
                                                                                    <div class="label">Qty:</div>
                                                                                    <form action="{{route('site.cart.update-product-in-cart')}}" method="post">
                                                                                         @csrf
                                                                                    <input type="hidden" name="id" value="{{$product->id}}">
                                                                                    <input type="hidden" name="rowId" value="{{$product->rowId}}">
                                                                                <div class="input-group bootstrap-touchspin">
                                                                                    <input type="number" class="" name="qty" value="{{$product->qty}}" min="1">
                                                                                    
                                                                                    <div class="cart-line-product-actions shop-item"> 
                                                                                        <button type="submit" class="fa fa-spinner" style="color: red;font-size: 28px"></button>
                                                                                    </div>
                                                                                </div>
                                                                           
                                                                                </form>


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-3 col-xs-12 text-xs-right align-self-end">
                                                                            <div class="cart-line-product-actions shop-item">
                                                                                <span><a href="{{route('site.cart.remove-from-cart',$product->rowId)}}" class="fa fa-trash-o" style="color: red;font-size: 28px"></a></span>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            @endforeach
                                        </ul>
                                    @endisset
                                </div>
                            </div>
                            <a class="label btn btn-primary" href="http://demo.bestprestashoptheme.com/savemart/en/">
                                Continue shopping
                            </a>
                            <!-- shipping informations -->
                        </div>
                        <!-- Right Block: cart subtotal & cart total -->
                        <div class="cart-grid-right col-xs-12 col-lg-3">
                            <div class="cart-summary">
                                <div class="cart-detailed-totals">
                                    <div class="cart-summary-products">
                                        <div class="summary-label">There are  ({{Cart::count()}}) items in your cart</div>
                                    </div>

                                    <div class="">
                                        <div class="cart-summary-line cart-total">
                                            <span class="label">Total:</span>
                                            <span class="value">{{Cart::subtotal()}}</span>
                                        </div>

                                    </div>

                                </div>


                                <div class="checkout text-xs-center card-block">
                                    <a href="{{route('payment')}}" type="button" class="btn btn-primary"> proceed to payment
                                    </a>
                                </div>


                            </div>


                            <div class="blockreassurance_product">
                                <div>
            <span class="item-product">
                                                        <img class="svg invisible"
                                                             src="../modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png">
                                    &nbsp;
            </span>
                                    <p class="block-title" style="color:#000000;">Security policy (edit with
                                        Customer reassurance module)</p>
                                </div>
                                <div>
            <span class="item-product">
                                                        <img class="svg invisible"
                                                             src="../modules/blockreassurance/img/ic_local_shipping_black_36dp_1x.png">
                                    &nbsp;
            </span>
                                    <p class="block-title" style="color:#000000;">Delivery policy (edit with
                                        Customer reassurance module)</p>
                                </div>
                                <div>
            <span class="item-product">
                                                        <img class="svg invisible"
                                                             src="../modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png">
                                    &nbsp;
            </span>
                                    <p class="block-title" style="color:#000000;">Return policy (edit with Customer
                                        reassurance module)</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>


                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@stop

@section('scripts')
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
