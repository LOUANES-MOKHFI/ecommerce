<!DOCTYPE html>
<html lang="en" data-textdirection="{{app()-> getLocale() === 'ar' ? 'rtl' :'ltr'}}">
<head>
<title>@yield('title')- QuickShop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{csrf_token()}}">
<meta name="description" content=" Un site web pour la vente de nos produits en ligne">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/quickshop3.png')}}">
@if(app()-> getLocale() === 'ar')
<link rel="stylesheet" href="/assets/assets/css/rtl/bootstrap.min.css">
<link rel="stylesheet" href="/assets/assets/css/rtl/main.css">
<link rel="stylesheet" href="/assets/assets/css/rtl/font-awesome.css">

@else

<link rel="stylesheet" href="/assets/assets/css/bootstrap.min.css">

<!-- Customizable CSS -->
<link rel="stylesheet" href="/assets/assets/css/main.css">
@endif

<link rel="stylesheet" href="/assets/assets/css/blue.css">
<link rel="stylesheet" href="/assets/assets/css/owl.carousel.css">
<link rel="stylesheet" href="/assets/assets/css/owl.transitions.css">
<link rel="stylesheet" href="/assets/assets/css/animate.min.css">
<link rel="stylesheet" href="/assets/assets/css/rateit.css">
<link rel="stylesheet" href="/assets/assets/css/bootstrap-select.min.css">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="/assets/assets/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

@yield('style')
</head>

<body>

<div class="super_container">
    
    <!-- Header -->
    
   @include('front.includes.header')
    
    <!-- Banner -->

   @yield('content')

    <!-- Footer -->

  @include('front.includes.footer')

  @include('front.includes.suivi-commande')
    <!-- Copyright -->

</div>

<script src="/assets/assets/js/jquery-1.11.1.min.js"></script> 
<script src="/assets/assets/js/bootstrap.min.js"></script> 
<script src="/assets/assets/js/bootstrap-hover-dropdown.min.js"></script> 
<script src="/assets/assets/js/owl.carousel.min.js"></script> 
<script src="/assets/assets/js/echo.min.js"></script> 
<script src="/assets/assets/js/jquery.easing-1.3.min.js"></script> 
<script src="/assets/assets/js/bootstrap-slider.min.js"></script> 
<script src="/assets/assets/js/jquery.rateit.min.js"></script> 
<script src="/assets/assets/js/lightbox.min.js"></script> 
<script src="/assets/assets/js/bootstrap-select.min.js"></script> 
<script src="/assets/assets/js/wow.min.js"></script> 
<script src="/assets/assets/js/scripts.js"></script>


     <script type="text/javascript">

     $(document).ready(function(){
      $('body').on('click', '#btn-color-targets > .btn', function(){
          var color = $(this).data('target-color');
          $('#modalColor').attr('data-modal-color', color);
        });
    }); 

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
@yield('script')
</body>

</html>