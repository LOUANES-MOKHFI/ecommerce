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
        <li><a href="#">Accueil</a></li>
        <li class='active'>{{$category->name}}</li>
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
    <div class='row'>
      <div class='col-xs-12 col-sm-12 col-md-3 sidebar'> 
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories principales</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
                 @foreach(AllCategorie() as $category)
              <li class="dropdown menu-item"> <a href="{{route('category',$category -> slug )}}" class="dropdown-toggle" @if(count($category -> childrens) >0) data-toggle="dropdown" @endif><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>{{$category -> name}}</a>
                @isset($category -> childrens)
                <ul class="dropdown-menu mega-menu">
                    @foreach($category -> childrens as $childern)
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-13 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="{{route('category',$childern -> slug )}}">{{$childern -> name}}</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
                @endisset
                </li>
                @endforeach  

            </ul>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
       
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
            <div class="sidebar-widget">
              <h3 class="section-title">Trie par</h3>
              <div class="widget-header">
                <h4 class="widget-title">Categorie</h4>
              </div>
              @foreach(AllCategorie() as $category)
              <div class="sidebar-widget-body">
                <div class="accordion">
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#{{$category->slug}}" data-toggle="collapse" class="accordion-toggle collapsed"> {{$category->name}} </a> </div>
                    <!-- /.accordion-heading -->
                     @isset($category -> childrens)
                    <div class="accordion-body collapse" id="{{$category->slug}}" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                            @foreach($category -> childrens as $childern)
                          <li><a href="{{route('category',$childern -> slug )}}">{{$childern -> name}}</a></li>
                            @endforeach
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    @endisset
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group --> 
                  
                </div>
                <!-- /.accordion --> 
              </div>
              @endforeach
              <!-- /.sidebar-widget-body --> 
            </div>
         
            <form method="get" action="{{route('product.price')}}">
            <div class="sidebar-widget">
              <div class="widget-header">
                <h4 class="widget-title">Prix</h4>
              </div>
              <div class="sidebar-widget-body m-t-10">
               
                <div class="price-range-holder"> 
                  <input type="number" placeholder="0" class="form-control" name="minprice" min="0">
                  <input type="number" placeholder="10000" class="form-control" name="maxprice" min="0" >
                </div>
                <!-- /.price-range-holder --> 
                <button class="lnk btn btn-primary">Filtrer</button> 
               
                 </div>
            </div>
            </form>
            
            <div class="sidebar-widget">
              <div class="widget-header">
                <h4 class="widget-title">Marques</h4>
              </div>
              <div class="sidebar-widget-body">
                    @isset($brands)
                    @foreach($brands as $brand)
                    <form action="{{route('product.brand')}}" method="post" style="margin-top: 2px">
                        @csrf
                        <input type="hidden" name="brand" value="{{$brand->id}}">
                        <button class="btn btn-default">{{$brand->name}}</button>
                    </form>
                 
                    @endforeach
                    @endisset
                
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
           
            
            <div class="sidebar-widget product-tag outer-top-vs">
              <h3 class="section-title">Product tags</h3>
              <div class="sidebar-widget-body outer-top-xs">
                <div class="tag-list">
                    @isset($tags)
                    @foreach($tags as $tag)
                     <a class="item" title="{{$tag->name}}" href="#">{{$tag->name}}</a> 
                    @endforeach
                    @endisset
                </div>
                <!-- /.tag-list --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
           
          
        
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class="col-xs-12 col-sm-12 col-md-9 rht-col"> 
        
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
        
     
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-bars"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-5 col-lg-5 hidden-sm">
              <div class="col col-sm-6 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Afficher par</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="{{route('product.price.orderby','DESC')}}">Prix:DESCENDENT</a></li>
                        <li role="presentation"><a href="{{route('product.price.orderby','ASC')}}">Prix:ASCENDENT</a></li>
                        <li role="presentation"><a href="{{route('product.vente')}}">Les Plus ventes</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-6 col-md-6 no-padding hidden-sm hidden-md">
                
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">
                     @isset($products)
                    @foreach($products as $product)

                  <div class="col-sm-6 col-md-4 col-lg-3">
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
         
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
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

