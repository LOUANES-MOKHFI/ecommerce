<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')- Ceramic</title>
   
    <meta charset="utf-8">

   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nueva Ceramica">
    <meta property="og:title" content="Nueva Ceramica">
    <meta property="og:description" content="Nueva Ceramica">
    <meta property="og:type" content="article">
   <meta name="csrf_token" content="{{ csrf_token() }}" />


    <meta name="theme-color" content="#DB322B">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" sizes="192x192" href="/assets/assets/images/ceramic/logo.png">
    <link rel="manifest" href="/manifest.json">

    <meta name="google-site-verification" content="D2TIjgJfDBXBg2_f49Xfc-NMNwceBh1TY_VztgqeTBI">
    
    <link rel="icon" href="/assets/assets/images/ceramic/icone.png" type="image/x-icon">

    <title>Casalgrande Padana</title>


   
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="{{asset('assets/assets/css/css1.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/assets/css/common.HEAD.HomePage.min.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/assets/css/main.0dd114f60009.css')}}">
    
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css">

    

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin" media="all">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link data-olark="true" rel="stylesheet" href="https://static.olark.com/jsclient/styles/cryptic-capybara/theme.css" type="text/css">


@yield('style')
<style type="text/css">
    body{
        font-family: "Times New Roman", Times, serif;
    }
    .withchild a{
        color: white
    }

.page-header.headroom--pinned {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    -webkit-transform: translateY(0);
    transform: translateY(0);
}
.page-header.headroom {
    transition: -webkit-transform 200ms linear;
    transition: transform 200ms linear;
    transition: transform 200ms linear,-webkit-transform 200ms linear;
    will-change: transform;
}
@media (min-width: 993px)
.page-header {
    height: 100px;
    padding-left: 103px;
}
.page-header {
        

    padding-bottom: 16px;
    padding-top: 16px;
    background-color: #fff;
    border-bottom: 0;
    margin: 0;
    position: static;
    transition: top .2s;
    z-index: 8;
}
.page-header {
    padding-bottom: 9px;
    margin: 0px 0 20px;
    border-bottom: 1px solid #eee;
}
@media (min-width: 769px)
.page-header__brand {
    max-width: 190px;
}
.page-header__brand {
    display: block;
    margin: 0 auto;
    max-width: 148px;
    width: 100%;
}
.img {
    height: auto;
    vertical-align: bottom;
    width: 100%;
}
@media (min-width: 769px){
.site-header {
    height: 20%;
    width: 80px;
   
}
}
.action-home {
    height: 90px;
    width: 90px;
}
.action-search {
    height: 90px;
    width: 90px;
}



.white-text{
    color: white
}
@media screen and (min-width: 768px){
    .page-footer {
        margin-right: -40px;
    margin-top: 40px;
    
}
    .social{
        margin-top: 0px
    }
    .fullwidth{
        left: 30px;
    }
    .abs{
        width: 600px
    }
    .headr{
             width: 80px;   
            }
            .action-menu {
    height: 90px;
    width: 90px;

}
.footer-footer{
        margin-left: 20px;
        margin-right: 40px;

}
@media screen and (max-width: 768px){
    .modal-mobile{
        top: 0px;
}
    .action-menu {
    height: 70px;
    width: 60px;
}

    .footer-footer{
        padding-left: 20px;
        padding-right: 20px;
            }
            .abs{
                width: 100%;
            }
            .headr{
             width: 280px;   
            }
            .imghead{
                margin-top: 10px;
                    height: 100px;
                    width: 200px;
                }



            }


}

.menu-list button,.menu-list .children{
     background-color: rgb(225,15,26);
}
@media (min-width:769px){.site-navigation__brand{display:inline-block;visibility:visible;margin-top:42px;max-width:220px}}
@media (max-width:769px){.site-navigation__brand{display:inline-block;visibility:visible;margin-top:42px;}}
@media (min-width: 769px){
.site-navigation {
    left: 90px;
    top: 0;
}
}
</style>
</head>

<body>

<div id="page-container">    
    <!-- Header -->
    
   @include('front.includes.header')
  
<main class="site-main">
<!--header class="page-header headroom headroom--top headroom--not-bottom" id="sticky-header" >
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="{{route('home')}}" class="page-header__brand">
                                <img class="img" src="/assets/assets/images/ceramic/logonueva.png" alt="Casalgrande Padana. Pave your way" >
                            </a>
                        </div>
                    </div>
                </div>
            </header-->
 
            <header class="page-header headroom headroom--not-bottom headroom--top" id="sticky-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="{{route('home')}}" class="page-header__brand">
                                <img src="/assets/assets/images/ceramic/logonueva.png" alt="Casalgrande Padana. Pave your way">
                            </a>
                        </div>
                    </div>
                </div>
            </header>               

  @yield('content')

</main>
 

    <!-- Footer -->
@include('front.includes.footer')

    <!-- Copyright -->

</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script type="text/javascript" src="{{asset('assets/assets/js/js.js')}}"></script>



  
@yield('script')
</body>

</html>