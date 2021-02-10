<header class="header-style-1"> 
  
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">

        <div class="cnt-account">
          <ul class="list-unstyled list-inline">
            <li class="wishlist"><a href="{{route('wishlist.products.index')}}"><span>{{__('site/header.wishlist')}}</span></a></li>
            @guest()
                <li class="login"><a href="{{route('register')}}">{{__('site/header.signin')}}</a></li>
                <li class="login"><a href="{{route('login')}}">{{__('site/header.login')}}</a></li>
            @endguest
             @auth()
            <li class="login"><a href="{{route('account.my-account')}}">{{__('site/header.my-account')}}</a></li>
            <li class="login"><a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{Auth::user()->name}}<i class=""></i></a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @endauth

          </ul>
        </div>
        <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small lang"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value"> {{App::getLocale()}} </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li><a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a></li>
                 @endforeach
              </ul>
            </li>
          </ul>
          <!-- /.list-unstyled --> 
        </div>
      
        <!-- /.cnt-account -->
        
        <!--div class="cnt-block">
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">USD</a></li>
                <li><a href="#">INR</a></li>
                <li><a href="#">GBP</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-small lang"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
              </ul>
            </li>
          </ul>
        </div-->
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <div class="logo"> <a href="{{route('home')}}"> <img src="/assets/quickshop3.png" height="60" alt="logo" > </a> </div>
         </div>
        <!-- /.logo-holder -->
        
        <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form method="get" action="{{route('products.search')}}">
              <div class="control-group">
                <input class="search-field" placeholder="Rechercher un produit" name="products" required />
                <button class="search-button" ></button> </div>
            </form>
          </div>
        </div>
        <!-- /.top-search-holder -->
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row"> 
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          
          <div class="dropdown dropdown-cart">
           <a href="{{route('site.cart.index')}}" class="dropdown-toggle lnk-cart">
            <div class="items-cart-inner">
              <div class="basket">
              <div class="basket-item-count"><span class="count">{{Cart::count()}}</span></div>
              <div class="total-price-basket"> <span class="lbl">{{__('site/header.cart')}}</span> <span class="value">{{Cart::subtotal()}}</span> </div>
              </div>
            </div>
            </a>
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
        </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
           <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
           <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown"> <a href="{{Route('home')}}"><i class="fa fa-home" aria-hidden="true"></i> {{__('site/header.home')}}</a> </li>
                <li class="active dropdown"> <a href="{{Route('all-products')}}"><i class="fa fa-cubes" aria-hidden="true"></i> {{__('site/header.products')}}</a> </li>
                <li class="active dropdown"> <a href="{{Route('about')}}"><i class="fa fa-university"></i>{{__('site/header.about')}}</a> </li>
                <li class="active dropdown"> <a href="{{Route('contact')}}"><i class="fa fa-mobile"></i>{{__('site/header.contact')}}</a> </li>
                <li class="active dropdown"> <a href="#modalColor" data-target-color="blue" data-toggle="modal"><i class="fa fa-cart-plus"></i>{{__('site/header.tracking')}}</a> </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
</header>
