@extends('layouts.site')

@section('title' , 'produits')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/styles/shop_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">

@endsection


@section('content')
     
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">produit</a></li>
                <li class='active'>{{$product->name}}d</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
    <div class='container'>
        @include('front.includes.alert1')
        <div class='row single-product'>
            <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
                <div class="sidebar-module-container">
                <div class="home-banner outer-top-n outer-bottom-xs">
                    <img src="/assets/assets/images/banners/LHS-banner.jpg" alt="Image">
                </div>      
        <div class="sidebar-widget product-tag">
          <h3 class="section-title">Mot clés </h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list">
                @isset($tags)
                @foreach($tags as $tag)
             <a class="item" title="Phone" href="#">{{$tag->name}}</a> 
             @endforeach
             @endisset
            </div>
            <!-- /.tag-list --> 
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>


    </div>
            </div><!-- /.sidebar -->



      
            <div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
                @include('front.includes.alert1')
            <div class="detail-block">
                <div class="row">
                
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
             @isset($product -> images)
               @foreach($product -> images as $image)
            <div class="single-product-gallery-item" id="slide{{$image -> photo}}">
                <a data-lightbox="image-1" data-title="Gallery" href="{{$image -> photo}}">
                    <img class="img-responsive" alt="" src="{{$image -> photo}}" data-echo="{{$image -> photo}}" />
                </a>
            </div>
             @endforeach
            @endisset
        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                 @isset($product -> images)
               @foreach($product -> images as $image)
                <div class="item">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide{{$image -> photo}}">
                        <img class="img-responsive" alt="" src="{{$image -> photo}}" data-echo="{{$image -> photo}}" />
                    </a>
                </div>

                  @endforeach
            @endisset
                
            </div><!-- /#owl-single-product-thumbnails -->

            

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->                 
                    <div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
                        <div class="product-info">
                            <h1 class="name">{{$product->name}}</h1>
                            
                            <div class="rating-reviews m-t-20">
                                <div class="row">
                                <div class="col-lg-12">

                                    <div class="pull-left">
                                        <div class="reviews">
                                           Vues : <a href="#" class="lnk">{{$product->viewed}}</a>
                                        </div>
                                    </div>
                                    </div>
                                </div><!-- /.row -->        
                            </div><!-- /.rating-reviews -->

                            <div class="stock-container info-container m-t-10">
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="pull-left">
                                        <div class="stock-box">
                                            <span class="label">Disponibilite :</span>
                                        </div>  
                                    </div>
                                    <div class="pull-left">
                                        <div class="stock-box">
                                            <span class="value">{{$product->in_stock = 1 ? 'Disponibe' : 'Indisponible' }}</span>
                                        </div>  
                                    </div>
                                    </div>
                                </div><!-- /.row -->    
                            </div><!-- /.stock-container -->
                             <div class="stock-container info-container m-t-10">
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="pull-left">
                                        <div class="stock-box">
                                            <span class="label">Marque :</span>
                                        </div>  
                                    </div>
                                    <div class="pull-left">
                                        <div class="stock-box">
                                            <span class="value">{{$product->brand->name }}</span>
                                        </div>  
                                    </div>
                                    </div>
                                </div><!-- /.row -->    
                            </div><!-- /.stock-container -->

                            <div class="description-container m-t-20">
                                <p>{{$product->description}}</p>
                            </div><!-- /.description-container -->

                            <div class="price-container info-container m-t-30">
                                <div class="row">
                                    

                                    <div class="col-sm-6 col-xs-6">
                                        <div class="price-box">
                                            <span class="price">{{$product -> special_price ?? $product -> price }}</span>
                                            <span class="price-strike">@if($product -> special_price) {{$product -> price}} @endif</span>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-xs-6">
                                        <div class="favorite-button m-t-5">
                                           
                                            <a class="btn btn-primary addToWishlist" data-product-id="{{$product -> id}}" data-toggle="tooltip" data-placement="right" title="Ajouter au favorie" href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div><!-- /.row -->
                            </div><!-- /.price-container -->

                            <div class="quantity-container info-container">
                                <div class="row">
                                    <form method="post" action="{{route('add-to-cart')}}">
                                        @csrf
                                    <div class="qty">
                                        <span class="label">Qty :</span>
                                    </div>
                                    
                                    <div class="qty-count">
                                        <div class="cart-quantity">
                                            <div class="quant-input">
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                 @error('product_id')
                                                 <span  class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror 
                                                <input type="number" name="qty" min="1" value="1"  class="form-control">
                                          </div>
                                        </div>
                                                @error('qty')
                                                 <span  class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror 
                                    </div>

                                    <div class="add-btn">
                                        <button class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> Ajouter au panier</button>
                                    </div>
                                    </form>
                                    
                                </div><!-- /.row -->
                            </div><!-- /.quantity-container -->

                            

                            

                            
                        </div><!-- /.product-info -->
                    </div><!-- /.col-sm-7 -->
                </div><!-- /.row -->
                </div>



<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
            
            </div><!-- /.col -->
            <div class="clearfix"></div>
             <section class="section new-arriavls">
          <h3 class="section-title">MEME CATEGORIES</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            @isset($related_products)
            @foreach($related_products as $product)
            <div class="item item-carousel">
                 <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="{{route('product.details',$product -> slug)}}">
                             <img src="{{$product -> images[0] -> photo ?? ''}}" alt=""> 
                              <img src="{{$product -> images[1] -> photo ?? ''}}" alt="" class="hover-image">
                          </a>
                          
                          </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>best</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{route('product.details',$product -> slug)}}">{{$product->name}}</a></h3>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price">{{$product -> special_price ?? $product -> price }}</span> <span class="price-before-discount">@if($product -> special_price) {{$product -> price}} @endif</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                             
                               <li class="lnk wishlist"> <a class="add-to-cart cart-addition" href="#" title="ajouter au panier"  data-product-id="{{$product -> id}}":> <i class="fa fa-shopping-cart"></i>  </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart addToWishlist" href="#" title="ajoute au favorie"  data-product-id="{{$product -> id}}":> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
            </div>
            @endforeach
            @endisset
            <!-- /.item -->
             
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        </div><!-- /.row -->


</div>
       
    @include('front.includes.not-logged')
    @include('front.includes.alert')   <!-- we can use only one with dynamic text -->
    @include('front.includes.alert2')
    @include('front.includes.alert-cart')
   
@endsection

@section('script')
    <script>
        $(document).on('click', '.quick-view', function () {
            $('.quickview-modal-product-details-' + $(this).attr('data-product-id')).css("display", "block");
        });
        $(document).on('click', '.close', function () {
            $('.quickview-modal-product-details-' + $(this).attr('data-product-id')).css("display", "none");

            $('.not-loggedin-modal').css("display", "none");
            $('.alert-modal').css("display", "none");
            $('.alert-modal2').css("display", "none");
            $('.alert-cart').css("display", "none");

        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.addToWishlist', function (e) {
            e.preventDefault();

            @guest()
                $('.not-loggedin-modal').css('display','block');
            @endguest
            $.ajax({
                type: 'post',
                url: "{{Route('wishlist.store')}}",
               
                data: {
                    'productId': $(this).attr('data-product-id'),
                },
                success: function (data) {
                    if(data.wished )
                    $('.alert-modal').css('display','block');
                    else
                        $('.alert-modal2').css('display','block');
                }
            });
        });

        $(document).on('click', '.cart-addition', function (e) {
            e.preventDefault();
            
            $.ajax({
                type: 'post',
                url: "{{Route('site.cart.add')}}",
                data: {
                    'product_id': $(this).attr('data-product-id'),
                    'product_slug' : $(this).attr('data-product-slug'),
                },
                success: function (data) {
                     if(data.cart )
                    $('.alert-cart').css('display','block');

                }
            });
        });
    </script>

@stop

