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
        <li class="active">Favorie</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    @include('front.includes.alert1')
   
      <div class="col-xs-12 col-sm-12 col-md-12"> 
        
        <div id="category" class="category-carousel hidden-xs">
          <div class="item">
            <div class="image"> <img src="/assets/assets/images/banners/cat-banner-1.jpg" alt="" class="img-responsive"> </div>
            <div class="container-fluid">
              <div class="caption vertical-top text-left">
                <div class="big-text"> Big Sale </div>
                <div class="excerpt hidden-sm hidden-md"> Save up to 49% off </div>
                <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
                <div class="buy-btn"><a href="#" class="lnk btn btn-primary">Show Now</a></div>
              </div>
              <!-- /.caption --> 
            </div>
            <!-- /.container-fluid --> 
          </div>
        </div>
        
     
       
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">
                     @isset($products)
                    @foreach($products as $product)

                  <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="item">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="{{route('product.details',$product -> slug)}}">
                             <img src="{{$product -> images[0] -> photo ?? ''}}" alt=""> 
                              <img src="{{$product -> images[1] -> photo ?? ''}}" alt="" class="hover-image">
                          </a>
                          
                          </div>
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
                    <!-- /.products --> 
                    </div>
                  </div>
                    @endforeach
                  @endisset
                
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane "  id="list-container">
              <div class="category-product">

                 @isset($products)
                    @foreach($products as $product)
                <div class="category-product-inner">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-3 col-lg-3">
                          <div class="product-image">
                            <div class="image"> <img src="{{$product -> images[0] -> photo ?? ''}}" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-9 col-lg-9">
                          <div class="product-info">
                            <h3 class="name"><a href="{{route('product.details',$product -> slug)}}">{{$product->name}}</a></h3>
                            <div class="product-price"> <span class="price"> {{$product -> special_price ?? $product -> price }}</span> <span class="price-before-discount">@if($product -> special_price) {{$product -> price}} @endif</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">{{$product->description}}.</div>
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
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
               @endforeach
                  @endisset
              </div>
              <!-- /.category-product --> 
            </div>
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container bottom-row">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
   
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
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

