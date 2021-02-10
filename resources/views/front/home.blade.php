@extends('layouts.site')
@section('title')
    Accueill
@endsection

@section('style')
  

   <style type="text/css">
       
   </style>
@endsection 

@section('content')
  <div class="body-content outer-top-vs" id="top-banner-and-menu">
  <div class="container">
    @include('front.includes.alert1')
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> {{__('site/home.categories')}}</div>
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
                </nav>
                </div>

              
        <div class="sidebar-widget hot-deals outer-bottom-xs">
          <h3 class="section-title">{{__('site/home.specialProduct')}}</h3>
          <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
            @foreach($special_products as $product)
            <div class="item">
              <div class="products">
                <div class="hot-deal-wrapper">
                  <div class="image"> 
                  <a href="#">
                  <img src="{{$product -> images[0] -> photo ?? ''}}" alt="{{$product->name}}"> 
                  <img src="{{$product -> images[1] -> photo ?? ''}}" alt="{{$product->name}}" class="hover-image">
                  </a>
                  </div>
                  <div class="sale-offer-tag"><span>{{pourcentage($product->price,$product->special_price)}}<br>
                    promo</span></div>
                  <!--div class="timing-wrapper">
                    <div class="box-wrapper">
                      <div class="date box"> <span class="key">120</span> <span class="value">DAYS</span> </div>
                    </div>
                    <div class="box-wrapper">
                      <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                    </div>
                    <div class="box-wrapper">
                      <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                    </div>
                    <div class="box-wrapper">
                      <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                    </div>
                  </div-->
                </div>
                <!-- /.hot-deal-wrapper -->
                
                <div class="product-info text-left m-t-20">
                  <h3 class="name"><a href="detail.html">{{$product->name}}</a></h3>
                  <div class="product-price"> <span class="price"> {{$product -> special_price ?? $product -> price }}</span> <span class="price-before-discount">@if($product -> special_price) {{$product -> price}} @endif</span> </div>
                  <!-- /.product-price --> 
                  
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  <div class="action">
                    <div class=" btn-group">
                      <a class="btn btn-primary cart-addition" href="#" data-product-id="{{$product->id}}" type="button"><i class="fa fa-shopping-cart"></i>{{__('site/home.addToCart')}}</a>
                    </div>
                  </div>
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            @endforeach
           
          </div>
          <!-- /.sidebar-widget --> 
        </div>

        
        <div class="sidebar-widget outer-bottom-small">
          <h3 class="section-title">{{__('site/home.cheapset')}}</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products special-product">
                  @foreach($cheapest_prices as $product)
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{$product -> images[0] -> photo ?? ''}}" alt="{{$product->name}}"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">{{$product->name}}</a></h3>
                            <div class="product-price"> <span class="price"> {{$product->price}} </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                 @endforeach
                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        
        
        <div class="sidebar-widget newsletter outer-bottom-small">
          <h3 class="section-title">{{__('site/home.newsletter')}}</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <p>{{__('site/home.newsletterinscrire')}}</p>
            <div id="statusSubscribe" style="display: none;color: red"></div>
                <form action="javascript:void(0);" type="post" class="newsletter-area">
                  {{ csrf_field() }}
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail1">{{__('site/home.email')}}</label>
                <input onfocus="enableSubscriber(); " type="email"class="form-control" id="email" placeholder="S'abonner avec notre site web">
              </div>
              <button onclick="checkSubscriber();addSubscriber();" id="btnSubmit" class="btn btn-primary">{{__('site/home.abonner')}}</button>
            </form>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
       
        
      </div>
     
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url(/assets/assets/images/slider1.png);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">{{__('site/home.newproducts')}}</div>
                  <div class="big-text fadeInDown-1"> {{__('site/home.newbrand')}} </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>{{__('site/home.allproductstype')}}</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="{{route('all-products')}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">{{__('site/home.shopnow')}}</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            
            <div class="item" style="background-image: url(/assets/assets/images/slider2.jpg);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">QuickShop </div>
                  <div class="big-text fadeInDown-1"> {{__('site/home.profiterproducts')}} </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>{{__('site/home.presentourproducts')}}</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="{{route('all-products')}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">{{__('site/home.shopnow')}}</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
       
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">{{__('site/home.newproducts')}}</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">{{__('site/home.bestseller')}}</a></li>
              <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">{{__('site/home.bestvisited')}}</a></li>
              <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">{{__('site/home.promo')}}</a></li>
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">
         
            <!-- /.tab-pane -->
            
            <div class="tab-pane in active" id="smartphone">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    @isset($best_seller)
                    @foreach($best_seller as $product)
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
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
                             
                               <li class="lnk wishlist"> <a class="add-to-cart cart-addition" href="#" title="ajouter au panier"  data-product-id="{{$product -> id}}"> <i class="fa fa-shopping-cart"></i>  </a> </li>
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
                  @endforeach
                  @endisset
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="laptop">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  
                  @isset($best_visited)
                    @foreach($best_visited as $product)
                  <div class="item item-carousel">
                     <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
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
                </div>
              </div>
            </div>
            
            <div class="tab-pane" id="apple">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  
                  @isset($promotion_products)
                    @foreach($promotion_products as $product)

                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
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
                  <!-- /.item -->
                  
                  @endforeach
                  @endisset
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane --> 
            
          </div>
          <!-- /.tab-content --> 
        </div>

        <div class="wide-banners outer-bottom-xs">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="/assets/assets/images/banners/home1.png" style="height: 160px;width: 290px" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            
            <div class="col-md-4 col-sm-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="/assets/assets/images/banners/home2.png" style="height: 160px;width: 290px" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            
            <!-- /.col -->
            <div class="col-md-4 col-sm-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="/assets/assets/images/banners/home3.png"  style="height: 160px;width: 290px" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
      
        <section class="section featured-product">
        <div class="row">
        <!--div class="col-lg-3">
          <h3 class="section-title">Electronics & Digital</h3>
          <ul class="sub-cat">
          <li><a href="#">Computers</a></li>
          <li><a href="#">Air Condtion</a></li>
          <li><a href="#">Mobile Phones</a></li>
          <li><a href="#">Camera</a></li>
          <li><a href="#">Television</a></li>
          <li><a href="#">Sound & Speakers</a></li>
          <li><a href="#">Games & Audio Music</a></li>
          <li><a href="#">Digital Watches</a></li>
          <li><a href="#">Washing Machines</a></li>
         <li><a href="#">Office Electronics</a></li>
          </ul>
          </div>
          <div class="col-lg-9">
          <div class="owl-carousel homepage-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="/assets/assets/images/products/p13.jpg" alt=""> 
                              <img src="/assets/assets/images/products/p13_hover.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    
                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    
                  </div>
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="/assets/assets/images/products/p15.jpg" alt=""> 
                              <img src="/assets/assets/images/products/p15_hover.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    
                    <div class="tag new"><span>new</span></div>
                  </div>
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    
                  </div>
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="/assets/assets/images/products/p10.jpg" alt=""> 
                              <img src="/assets/assets/images/products/p10_hover.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    
                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    
                  </div>
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="/assets/assets/images/products/p11.jpg" alt=""> 
                              <img src="/assets/assets/images/products/p11_hover.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    
                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    
                  </div>
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="/assets/assets/images/products/p8.jpg" alt=""> 
                              <img src="/assets/assets/images/products/p8_hover.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    
                    <div class="tag new"><span>new</span></div>
                  </div>
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    
                  </div>
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
           
          </div>
          </div-->
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners outer-bottom-xs">
          <div class="row">
            <div class="col-md-8">
              <div class="wide-banner1 cnt-strip">
                <div class="image"> <img class="img-responsive" src="/assets/assets/images/banners/home-banner.jpg" alt=""> </div>
                <div class="strip strip-text">
                  <div class="strip-inner">
                    <h2 class="text-right">{{__('site/home.newproducts')}}<br>
                      <span class="shopping-needs">Profitez d'acheter nos derniers produits</span></h2>
                  </div>
                </div>
                <div class="new-label">
                  <div class="text">New</div>
                </div>
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>

            <!-- /.col --> 
            <div class="col-md-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="/assets/assets/images/banners/home4.png" alt=""> </div>
                
                
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>
            
          </div>
          <!-- /.row --> 
        </div>
       

        
        <section class="section new-arriavls">
          <h3 class="section-title">{{__('site/home.populaireproducts')}}</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            @isset($popular_products)
            @foreach($popular_products as $product)
            <div class="item item-carousel">
                 <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
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
        
        
      </div>
     
    </div>
  
      <div class="logo-slider-inner">
       
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
   
  </div>
  <!-- /.container --> 
</div>
  
@include('front.includes.not-logged')
    @include('front.includes.alert')   
    @include('front.includes.alert2')
    @include('front.includes.alert-cart')

@endsection


@section('script')
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/styles/bootstrap4/popper.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/front/styles/bootstrap4/bootstrap.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/front/plugins/greensock/TweenMax.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/front/plugins/greensock/TimelineMax.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/front/plugins/scrollmagic/ScrollMagic.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/plugins/greensock/animation.gsap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/plugins/greensock/ScrollToPlugin.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/front/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/front/plugins/slick-1.8.0/slick.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/front/plugins/easing/easing.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/front/js/custom.js')}}" type="text/javascript"></script>
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
         <script type="text/javascript">
        function checkSubscriber(){
            var email = $("#email").val();
            $.ajax({
               type:'post',
               url: '/check-subscriber-email',
               data:{email:email},
               success:function(response){
                if(response == "exist"){

                    $("#statusSubscribe").show();
                     $("#btnSubmit").hide();
                    $("#statusSubscribe").html("<span style='color:red;'>cette Adress email est existe</span>");
                }else{
                    $("#statusSubscribe").show();
                    $("#statusSubscribe").html("<font style='color:green;'>Votre Adress email est Ajouter avec succees</font>");
                }
               },
               error:function(response){
              //  alert('error');
               }
            });
        }

        function addSubscriber(){
            var email = $("#email").val();
            $.ajax({
               type:'post',
               url:'/add-subscriber-email',
               data:{email:email},
               success:function(response){
                if(response == "exist"){

                    $("#statusSubscribe").show();
                     $("#btnSubmit").hide();
                    $("#statusSubscribe").html("<span style='color:red;'>cette Adress email est existe</span>");
                }else if(response == "Enregistre"){
                    $("#statusSubscribe").show();
                    
                    $("#statusSubscribe").html("<font style='color:green;'>Votre Adress email est Ajouter avec succees</font>");
                }
               },
               error:function(response){
              //  alert('error');
               }
            });
        }

        function enableSubscriber(){
            $("#btnSubmit").show();
            $("#statusSubscribe").hide();
        }
    </script>

@stop

