<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')- Ceramic</title>
   
    <meta charset="utf-8">

   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Casalgrande Padana">
    <meta property="og:title" content="Casalgrande Padana">
    <meta property="og:description" content="Casalgrande Padana">
    <meta property="og:type" content="article">
   <meta name="csrf_token" content="{{ csrf_token() }}" />


    <meta name="theme-color" content="#DB322B">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" sizes="192x192" href="/assets/assets/images/ceramic/logo.png">
    <link rel="manifest" href="/manifest.json">

    <meta name="google-site-verification" content="D2TIjgJfDBXBg2_f49Xfc-NMNwceBh1TY_VztgqeTBI">
    
    <link rel="icon" href="/assets/assets/images/ceramic/logo.png" type="image/x-icon">

    <title>Casalgrande Padana</title>


   
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="{{asset('assets/assets/css/css1.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/assets/css/common.HEAD.HomePage.min.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/assets/css/main.0dd114f60009.css')}}">
    
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css">

    

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin" media="all">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<style type="text/css">


</style>
@yield('style')
<style type="text/css">
    .withchild a{
        color: white
    }
</style>
</head>

<body>

<div id="page-container">    
    <!-- Header -->
    
   @include('front.includes.header')
  
<main class="site-main">

<header class="page-header headroom headroom--not-bottom headroom--not-top headroom--pinned" id="sticky-header" style="height: 94px">
    <div class="container">
        <div class="row" style="max-width: 70%">
            <div class="col-xs-12">
                <a href="{{route('home')}}" class="page-header__brand">
                    <img style="margin-bottom: 0px;height: 60px;width: 150px" src="/assets/assets/images/ceramic/logoo.png" alt="Casalgrande Padana. Pave your way">
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