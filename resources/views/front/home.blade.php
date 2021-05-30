@extends('layouts.site')

@section('title')
    Accueil
@endsection

@section('style')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style type="text/css">
    .lookimageFull img{
        height: 370px;
    }
   .home-slide__title{
  font-family: "Times New Roman", Times, serif;
  font-weight: 80;
}
 .effet p,.texteffet p,.texteffet h6 {
     font-family: "Times New Roman", Times, serif;
 }
@media (min-width: 869px)
  .top-right .cnt {
    display: none;
}

@media (min-width: 992px)
.col-md-2 {
    width: 14%;
}
@media (min-width: 1024px){
.col-md-2 {
    width: 14%;
}

.row .label {
    font-size: 24px;
    text-transform: uppercase;
    padding: 10px;
   
    padding-bottom: 100px;
    padding-left: 150px;
    z-index: 0;
    pointer-events: none;
    position: absolute;
    font-weight: 500;
    color: rgba(0, 0, 0, 1);
    min-width: 520px;
    text-align: left;
}

.top-right {
    top: 0;
    right: -220px;
    transform: rotate(
90deg
) scaleX(-1);
    transform-origin: top right;
}
.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: bold;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}
.top-right .cnt {
    display: inline-block;
    transform: rotate( 90deg ) scaleX(-1);
    position: absolute;
    margin-top: 100px;
    margin-right: 280px;
    font-size: 18px;
    right: 0;
}
}
@media screen and (max-width: 768px)
.row .label {
    display: none;
}


    #team {
   
}

.section-header h3 {
    font-size: 36px;
    color: #283d50;
    text-align: center;
    font-weight: 500;
    position: relative
}

.section-header p {
    text-align: center;
    margin: auto;
    font-size: 15px;
    padding-bottom: 60px;
    color: #556877;
    width: 50%
}

.fadeInUp {
    animation-name: fadeIn;

}

#team .member {
    text-align: center;
    height: 400px;
    margin-bottom: 20px;
    position: relative;
    
    overflow: hidden
}

#team .member .member-info {
    opacity: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    transition: 0.2s
}

#team .member .member-info-content {
    margin-bottom: 100px;
    transition: margin 0.8s
}

#team .member:hover .member-info {
    background: white;
    opacity: 1;
    transition: 0.6s
}

#team .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
    color: black;
}

#team .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
    color: black
}

#team .member .social a {
    transition: none;
    color: black;
}


.widget.widget-image {
    overflow: hidden;
}

.widget {
    border: none;
    box-shadow: 0 2px 0 rgba(0,0,0,.07);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    margin-bottom: 20px;
    position: relative;
    background: #fff;
    padding: 20px;
    display: block;
}

.widget-image-cover {
    margin: -20px;
    padding: 100% 20px 20px;
    border-radius: 5px;
    overflow: hidden;
    background: #3C454D;
    position: relative;
}

.widget-image:hover .widget-image-cover img {
    max-width: 110%;
    min-height: 110%;
    margin-left: -5%;
    margin-top: -5%;
}

.widget-image .widget-image-cover img {
    transition: all .1s ease-in-out;
}

.widget-image-cover img {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    min-height: 100%;
    max-width: 100%;
}

.widget-image-info {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to bottom,rgba(0,0,0,0) 0,rgba(0,0,0,.8) 75%);
    padding: 20px;
    color: #fff;
}

.widget-image-info h5 {
    color: #fff;
    margin-top: 0;
    margin-bottom: 5px;
    font-size: 16px;
}

.widget-image-info p {
    color: rgba(255,255,255,.9);
}


.widget-image-user .widget-image-user-image {
    border-radius: 36px;
    float: left;
    width: 36px;
    background: #fff;
}

.widget-image-user .widget-image-user-info {
    margin-left: 46px;
}

.widget-image-user .widget-image-user-image img {
    max-width: 100%;
    border-radius: 36px;
}
.insp{
    transform:rotate(90deg) scaleX(-1);
    height: 600px;
    width: 200px;
    top:0;right:-50px;
}
#team .member .member-info-content {
    height: 300px;
}
@media screen and (min-width:869px){
.imageblockStand img{
    height: 100%;

}
.ggg{
 height: 370px;
}
.pierree img{
    width: 250px;
}
#team .member .member-info-content {
    margin-bottom: 200px;
    width: 1000px

}

#team .member .member-info-content {
    
    transition: margin 0.8s
}

.img-fluid{
    height: 400px;
}
#team .member h4{

}

.texteffet{
    display: none;
}
.looktxt{width:100%;top:0;margin:0;padding:0px 0px;min-height:550px}
}
@media screen and (max-width:993px)
{
    .ggg{
 height: 200px;
}
.effet{
   display: none;
}

.home-slide__picture {
    max-height: 500px;
}
#team .member .member-info-content {
    margin-bottom: 200px;
    width: 1000px

}

#team .member .member-info-content {
     
    transition: margin 0.8s
}

.img-fluid{
    height: 400px;
}
#team .member h4{

}

.home-slide{height:600px;position:relative}

.footerimg{
    margin-top: -50px;
}
.homesilde{
    margin-top: 5px;
}
}
.home-slide__title {
font-size: 45px;
}
.marbre{

}
.bois{
    background-color: white;
}
.ciment{
   background-color: white;
}
.pierre{
    background-color: white;
}
.metal{
background-color: white;
}
.designe{
   background-color: white;
}
.content-image h4{
    position: relative;
    z-index: 1;
    top: -60px;
    font-size: 24px;
    margin-left: 20px;
    text-transform: uppercase;
        margin-bottom: -38px;
}
@media (max-width: 600px)
.lookrow .looktxt p {
    display: block;
    visibility: hidden;
}
@media screen and (max-width: 768px)
{
.effet{
    display: none;
} 
.slidpc{
    display: none;
}
.homesilde{
    left: -150px;
}
.home-slider .owl-next {
    background-color: transparent;
    height: 25px;
    width: 25px;
    margin-left: 220px;
    box-shadow: none;
}
.home-slider .owl-prev{
    background-color: transparent;
    height: 25px;
    width: 25px;
    box-shadow: none;

}
.home-slider .owl-controls {
    top: 380px;

}

.home-slide__title {
    margin-left: 35px;
    margin-top: 250px;
    font-size: 35px;
    width: 230px;
}
.home-slide__claim:after {
    content: '';
    position: absolute;
    left: 30px;
    top: -45px;
    height: 3px;
    width: 200px;
    background-color: rgb(225,15,26);
}
.home-slide__picture {
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
    z-index: -1;
}
.home-slide__text {
    background-color: transparent;
    max-width: 40%;
    min-height: 650px;
    padding: 120px 32px;
    width: 35%;
}
.home-slider .owl-next i,.home-slider .owl-prev i {
    color: rgb(225,15,26);
    top: -5px;
    font-size: 35px;

   
}
.owl-carousel .owl-stage-outer{
    right: -16px;
}
}
@media screen and (min-width: 768px)
{
.slidmobile{
    display: none;
}

}



.carousel-fade .carousel-item {
  height:100%;
}

.carousel-fade .carousel-item img {
  height:100vh;
  width:100%;
  max-width:100%;
  background-size:cover;
  background-origin:content-box;
  background-clip:content-box;
  background-position:center;
  color:rgba(0,0,0,0.56);
  right:0;
  left:0;
  resize:both;
}

.carousel-control-prev-icon, .carousel-control-next-icon {
  background:none;
  border:2px solid #fff;
  height:60px;
  width:60px;
  line-height:55px;
  opacity:9 !important;
  filter:brightness(100%) !important;
  font-size:40px;
  border-radius:100%;
}

.carousel-control-prev-icon:hover, .carousel-control-next-icon:hover {
  background:#fff;
  opacity:9;
  color:#000;
}

.la {
  opacity:99;
  z-index:1;
  position:relative;
}





@media (min-width: 992px) {
  .carousel-caption {
    top:420px !important;
  }
}

.carousel-caption h3 {
    font-family: "Times New Roman", Times, serif;
 
  text-align:center;
  font-weight:bold;
}

@media (min-width: 992px) {
    
  .carousel-caption h3 {
    font-family: "Times New Roman", Times, serif;
    color: white;
    font-size:60px !important;
    text-align:center;
    font-weight:bold;
  }
}

.carousel-caption p {
  font-size:30px;
  margin-top:20px;
  text-align:center;
}

@media (min-width: 992px) {
  .carousel-caption p {
    font-size:30px !important;
    margin-top:20px;
    text-align:center;
  }
}

.carousel-caption .btn {
  border:2px solid #fff;
  border-radius:0;
}

@media (min-width: 300px) {
  .img-fluid.w-100.d-block {
    height:auto;
  }
}

@media (min-width: 576px) {
  .img-fluid.w-100.d-block {
    height:auto;
  }
}

@media (min-width: 768px) {
  .img-fluid.w-100.d-block {
    height:auto;
  }
}

@media (min-width: 992px) {
  .img-fluid.w-100.d-block {
   
  }
}

@media (min-width: 300px) {
  .carousel-caption {
    top:0;
    font-size:20px;
  }
}

@media (min-width: 300px) {
  .carousel-caption h3 {
    font-size:30px;
    color: white
  }
}

.carousel-caption p {
  font-size:15px;
}

@media (min-width: 768px) {
  .carousel-caption {
    top:100px;
     font-size:40px;
    color: white
  }
}

@media (min-width: 768px) {
  .carousel-caption h3 {
    font-size:40px;
    color: white
  }
}




.carousel {

    position: relative;
}
.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 60px;
    left: 90px;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}


.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}
.carousel-item {
    position: relative;
    display: none;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .3s ease;
    transition: transform .3s ease;
    transition: transform .3s ease,-webkit-transform .3s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 100px;
    perspective: 100px;
}
.carousel-item .active{

}

.w-100 {
    width: 100%!important;
}
.d-block {
    display: block!important;
}

.carousel-control-prev {
    left: 0;
}
.carousel-control-next, .carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: .5;
}
.carousel-control-prev {
    left: 0;
}

.carousel-control-next {
    right: 0;
}


.carousel-indicators .active {
    background-color:  rgb(225,15,26);
}



.carousel-indicators li {
    position: relative;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 40px;
    height: 6px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: rgba(255,255,255,.5);
}

.carousel-control-next-icon, .carousel-control-prev-icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    background: transparent no-repeat center center;
    background-size: 100% 100%;
}


.typecat{
    top: -500px;
    z-index: 8;
    text-align: center;
    margin-left: 300px;
}

@media screen and (min-width: 768px){
    .home_page{
            
    }
      
    .videoslide{
        
        margin-left: 90px;
    }
    iframe{

    	 margin-left: 90px;
    }
    .carousel{
        top: -20px;
        margin-left: -322px;
    }
    .carousel-inner{
    height: 600px;
}
    .carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 40px;
    left: 85px;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}
.carousel-caption {
  top:220px;
}
.ft-mobile{
    display: none;
}
}
@media screen and (max-width: 768px){

    .carousel{
        top: 10px;
    }
    .carousel-inner{
    height: 260px;
}
    .carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 30px;
    left: 25px;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}
.carousel-caption {
  top:130px;
}
.

.swiper-container {
    top: -400px;
}


.ft-pc{
    display: none;
}
.footerimg-mobile{

}
.swiper-container {
top: -300px;
}
}

.swiper-container {
	top: -20px;
    height: 91vh;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.swiper-container-android .swiper-slide, .swiper-wrapper {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate(0px, 0px);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
}
.swiper-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    z-index: 1;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-transition-property: -webkit-transform;
    -moz-transition-property: -moz-transform;
    -o-transition-property: -o-transform;
    -ms-transition-property: -ms-transform;
    transition-property: transform;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}

</style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection

@section('content')  

          


<!--div class="carousel videoslide">

   			<iframe src="https://player.vimeo.com/video/483941289?autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0" width="1920" height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>            </div>

   
</div-->

<div data-height="100vh" data-min-height="550px" data-slide-effect="fade" data-loop="true" data-autoplay="false" class="swiper-container swiper-slider swiper-custom">
            <div class="swiper-wrapper">

			<iframe src="https://player.vimeo.com/video/483941289?autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0" width="1920" height="720" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
            <!-- Swiper Navigation-->
            <div class="swiper-button swiper-button-prev" style="display: none;"><span class="swiper-button__arrow"></span>
              <div class="preview">
                <h3 class="title"></h3>
                <div class="preview__img"></div>
              </div>
            </div>
            <div class="swiper-button swiper-button-next" style="display: none;"><span class="swiper-button__arrow"></span>
              <div class="preview">
                <h3 class="title"></h3>
                <div class="preview__img"></div>
              </div>
            </div>
          </div>
        
    <!--div class="carousel slide carousel-fade " data-ride="carousel" data-interval="3000" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            @isset($sliders)
                @foreach($sliders as $key=> $image)
            <div class="carousel-item @if($key == 0) active @endif w3-animate-right">
                <img class="mySlides img-fluid w-100 d-block" src="{{$image->photo ?? ''}}" alt="{{$image->title}}">
                <div class="carousel-caption">
                    <h3 class="animated slideInLeft">{{$image->title}}</h3>
                </div>
            </div>
                @endforeach
            @endisset
        </div>
    <div>
        <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
            <span class="material-icons" style="font-size: 40px;color: white">chevron_left</span>
        </a>
        <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
            <span class="material-icons" style="font-size: 40px;color: white">chevron_right</span>
        </a>
    </div>
        <ol class="carousel-indicators">
             @isset($sliders)
                @foreach($sliders as $key=> $image)

            <li data-target="#carousel-1" data-slide-to="0" class="@if($key==0) active @endif"></li>
                @endforeach
            @endisset
        </ol>
 </div--> 


<section class="home_page">
   
       
</section>

<section class="lookblock fullwidth" >
    <div class="container scrollmouse">
        <div class="row" >
            <h4 class="label top-right">
                <span class="cnt"><img src="/assets/assets/images/ceramic/Fichier 42@2x.png" class="" style="width: 55%;"></span>
            </h4>
            <div class="col-md-8 col-md-push-2">
                <h3 class="headline" style="margin-bottom: 60px;color: #DB322B;font-family: Acumin Variable Concept;font-weight: bold">Choisissez votre style</h3>
                <div class="abs">
                    <p style="font-family: Acumin Variable Concept;font-size: 20px;color: #DB322B;;margin-bottom: 100px">Personnalisez votre maison en céramique : Le matériau idéal car il allie la beauté esthétique des différents effets reproductibles (marbre, pierre, métal, bois ou ciment) à la solidité, la fonctionnalité et les caractéristiques techniques du céramique.</p>
                </div>
            </div>
        </div>
        <div class="row lookrow">
            <div class="col-md-2 col-tb-4 col-xs-1 effect fadeInUp" data-wow-delay=".10s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <a href="{{route('getproductbyeffet','marbre')}}" title="Grès cérame effet marbre et Terrazzo: une élégance intemporelle" class="lookLink">
                    <div class="lookimage">
                        <div class="content-overlay">
                            
                        </div>
                        <div class="lookimageFull content-image">
                            <img src="/assets/assets/images/ceramic/site/effet1/marbre.png" alt="Nueva ceramica" title="amarbre" height="470" width="171">
                        </div>
                        <div class="lookimageSplit content-details fadeIn-bottom ">
                            <div class="imageblock imageblockStand ">
                                <img src="/assets/assets/images/ceramic/marbre2.jpg" alt="Nueva ceramica" title="marbre" height="200" width="200">

                            </div>
                            <div class="col-md-12 looktxt effect animated" style="visibility: visible;">
                                
                                <div class="effet marbre">
                                    <img src="/assets/assets/images/ceramic/site/effet1/marbre1.png" alt="Nueva ceramica" title="marbre" height="200" width="200">
                                </div>

                                <div class="texteffet">
                                <h3 class="">Marbre</h3>
                                <h6 class="" style="font-size: 12px;font-weight: 10">L’effet marbre interprètent avec un réalisme surprenant le charme intemporel du marbre et reproduisent fidèlement ses veines et son authenticité.</h6>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-tb-4 col-xs-1 effect fadeInUp" data-wow-delay=".20s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <a href="{{route('getproductbyeffet','bois')}}" title="Grès cérame effet bois : le charme de l’authenticité" class="lookLink">
                    <div class="lookimage">
                        <div class="content-overlay"></div>
                        <div class="lookimageFull content-image">
                            <img src="/assets/assets/images/ceramic/site/effet1/bois.png" alt="Nueva ceramica" title="Bois" height="470" width="171">
                           
                        </div>
                        <div class="lookimageSplit content-details fadeIn-bottom">
                            <div class="imageblock imageblockStand">
                                <img src="/assets/assets/images/ceramic/bois2.png" alt="Nueva ceramica" title="Bois" height="400" width="400">
                            </div>
                            <div class="col-md-12 looktxt effect animated" style="visibility: visible;">
                               <div class="effet bois">
                               <img src="/assets/assets/images/ceramic/site/effet1/bois1.png" alt="Nueva ceramica" title="marbre" height="200" width="200">
                                </div>

                                <div class="texteffet">
                                <h3 class="">Bois</h3>
                                <h6 class="" style="font-size: 12px;font-weight: 10">L’effet bois est un choix qui exprime la personnalité et permet de créer des espaces résidentiels et commerciaux relaxants, où se sentir parfaitement à son aise.</h6>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-tb-4 col-xs-1 effect fadeInUp" data-wow-delay=".30s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <a href="{{route('getproductbyeffet','ciment')}}" title="Grès cérame effet pierre : résistant par nature" class="lookLink">
                    <div class="lookimage">
                        <div class="content-overlay"></div>
                        <div class="lookimageFull content-image">
                            <img src="/assets/assets/images/ceramic/site/effet1/ciment.png" alt="Nueva ceramica" title="Aciment" height="470" width="171">
                           
                        </div>
                        <div class="lookimageSplit content-details fadeIn-bottom">
                            <div class="imageblock imageblockStand ">
                                <img src="/assets/assets/images/ceramic/ciment2.jpg" alt="Nueva ceramica" title="ciment" height="400" width="400">
                            </div>
                            <div class="col-md-12 looktxt effect animated" style="visibility: visible;">
                                 <div class="effet ciment">
                                <img src="/assets/assets/images/ceramic/site/effet1/ciment1.png" alt="Nueva ceramica" title="marbre" height="200" width="200">
                                </div>

                                <div class="texteffet">
                                <h3 class="">Ciment</h3>
                                <h6 class="" style="font-size: 12px;font-weight: 10">Le céramique effet ciment imitent avec une extrême fidélité les traits du béton brut et s’accordent avec des espaces d’esprit contemporain et minimaliste.</h6>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-tb-4 col-xs-1 effect fadeInUp" data-wow-delay=".40s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <a href="{{route('getproductbyeffet','pierre')}}" title="Grès cérame effet ciment Cemento &amp; Design Look : inspiration, innovation, performance" class="lookLink">
                    <div class="lookimage">
                        <div class="content-overlay"></div>
                        <div class="lookimageFull content-image">
                            <img src="/assets/assets/images/ceramic/site/effet1/pierre.png" alt="Nueva ceramica" title="pierre" height="470" width="171">
                            
                        </div>
                        <div class="lookimageSplit content-details fadeIn-bottom">
                            <div class="imageblock imageblockStand pierree">
                                <img src="/assets/assets/images/ceramic/pierre2.png" alt="Nueva ceramica" title="pierre" height="400" width="400">
                            </div>
                            <div class="col-md-12 looktxt effect animated" style="visibility: visible;">
                                 <div class="effet pierre">
                                <img src="/assets/assets/images/ceramic/site/effet1/pierre1.png" alt="Nueva ceramica" title="marbre" height="200" width="200">
                                </div>

                                <div class="texteffet">
                                <h3 class="">Pierre</h3>
                                <h6 class="" style="font-size: 12px;font-weight: 10">Les pierres émergent de manière forte et diffuse comme un nouveau classique, un langage qui parle d’harmonies, de nuances, de textures raffinées, de détails luxueux.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-tb-4 col-xs-1 effect fadeInUp" data-wow-delay=".50s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <a href="{{route('getproductbyeffet','metal')}}" title="Carrelages en grès cérame effet métal : l’élégance absolue de la matière" class="lookLink">
                    <div class="lookimage">
                        <div class="content-overlay"></div>
                        <div class="lookimageFull content-image">
                            <img src="/assets/assets/images/ceramic/site/effet1/metal.png" alt="Nueva ceramica" title="metal" height="470" width="171">
                        </div>
                        <div class="lookimageSplit content-details fadeIn-bottom">
                            <div class="imageblock imageblockStand ">
                                <img src="/assets/assets/images/ceramic/metal2.jpg" alt="Nueva ceramica" title="metal" height="400" width="400">
                            </div>
                            <div class="col-md-12 looktxt animated" style="visibility: visible;">

                                <div class="effet metal">
                                <img src="/assets/assets/images/ceramic/site/effet1/metal1.png" alt="Nueva ceramica" title="marbre" height="200" width="200">
                                </div>

                                <div class="texteffet">
                                <h3 class="">Métal</h3>
                                <h6 class="" style="font-size: 12px;font-weight: 10">Le grès cérame imitation métal est la juste combinaison entre un design ultra technologique et une déco minimaliste. Il apporte une lumière très claire et procure une sensation d'ouverture.</h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-tb-4 col-xs-1 effect fadeInUp" data-wow-delay=".60s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <a href="{{route('getproductbyeffet','design')}}" title="Effet couleur : des carrelages pur l’architecture contemporaine" class="lookLink">
                    <div class="lookimage">
                        <div class="content-overlay"></div>
                        <div class="lookimageFull content-image">
                            <img src="/assets/assets/images/ceramic/site/effet1/design.png" alt="Nueva ceramica" title="design" height="470" width="171">
                           
                        </div>
                        <div class="lookimageSplit content-details fadeIn-bottom">
                            <div class="imageblock imageblockStand">
                                <img src="/assets/assets/images/ceramic/design3.png" alt="Nueva ceramica" title="design" height="400" width="400">
                            </div>
                            <div class="col-md-12 looktxt animated" style="visibility: visible;">
                                 <div class="effet designe">
                                <img src="/assets/assets/images/ceramic/site/effet1/design1.png" alt="Nueva ceramica" title="design" height="" width="200">
                                </div>

                                <div class="texteffet">
                                <h3 class="">Désign</h3>
                                <h6 class="" style="font-size: 12px;font-weight: 10">Le grès cérame effet design peut être classique et essentiel, mais également novateur et contemporain. Il exalte l'espace sans étouffer le style du mobilier.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="pg-top-medium bg-white product-cat">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center h2" style="color: #DB322B;font-family: Acumin Variable Concept;font-weight: bold">Nos Partenaires</h1>
            </div>
        </div>
    </div>
</section>

<section class="pg-top-medium pg-bottom-medium bg-white section-type-1 ">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="section-type-1__col col-md-7 section-type-1__photo--sx section-type-1__photo bg-after-1" >
                <img alt="PAMESA" class="section-type-1__photo__img" src="/assets/assets/images/ceramic/site/pamesaacceuil.png" title="PAMESA" width="100%"/>
            </div>
            <div class="section-type-1__col col-md-5 section-type-1__coltext order-12">
                <div class="section-type-1__content" style="margin-top: 60px;">
                    <div class="section-type-1__content_brand">
                        <img alt="PAMESA" class="section-type-1__logo" src="/assets/assets/images/ceramic/site/LOGOPAMESA.jpg"  title="PAMESA" width="100%"/>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<section class=" pg-top-medium pg-bottom-medium bg-white section-type-1">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="section-type-1__col col-md-5 section-type-1__coltext ">
                <div class="section-type-1__content" style="margin-top: 60px;">
                    <div class="section-type-1__content_brand">
                        <img alt="argenta" class="section-type-1__logo" src="/assets/assets/images/ceramic/site/argentalogo.png" title="argenta" width="100%"/>
                    </div>
                    
                </div>
            </div>
            <div class="section-type-1__col col-md-7 section-type-1__photo--dx section-type-1__photo bg-after-1 ">
                <img alt="argenta" class="section-type-1__photo__img" src="/assets/assets/images/ceramic/site/argentaacceuil.png" title="argenta" width="100%"/>
            </div>
        </div>
    </div>
</section>
<section class="pg-top-medium pg-bottom-medium bg-white section-type-1 ">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="section-type-1__col col-md-7 section-type-1__photo--sx section-type-1__photo bg-after-1 ">
                <img alt="AB ceramica" class="section-type-1__photo__img" src="/assets/assets/images/ceramic/site/ABacceuil.png" title="AB ceramica" width="100%"/>
            </div>
            <div class="section-type-1__col col-md-5 section-type-1__coltext order-12">
                <div class="section-type-1__content" style="margin-top: 60px;">
                    <div class="section-type-1__content_brand">
                        <img alt="AB ceramica" class="section-type-1__logo" src="/assets/assets/images/ceramic/site/ABCERAMIC.png" title="AB ceramica" width="100%"/>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class=" pg-top-medium pg-bottom-medium bg-white section-type-1">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="section-type-1__col col-md-5 section-type-1__coltext ">
                <div class="section-type-1__content" style="margin-top: 60px;">
                    <div class="section-type-1__content_brand">
                        <img alt="ECO CERAMIC" class="section-type-1__logo" src="/assets/assets/images/ceramic/site/ECOCERAMICLOGO.png" title="ECO CERAMIC"  width="100%"/>
                    </div>
                    
                </div>
            </div>
            <div class="section-type-1__col col-md-7 section-type-1__photo--dx section-type-1__photo bg-after-1 ">
                <img alt="ECO CERAMIC" class="section-type-1__photo__img ggg" src="/assets/assets/images/ceramic/site/ECOACCEUIL.png" title="ECO CERAMIC" style="" width="100%"/>
            </div>
        </div>
    </div>
</section>


<section class="container ft-pc" >
    <div class="col-md-12">
        <img src="/assets/assets/images/ceramic/accueil/footer2.png" class="footerimg">
    </div>
</section>
<section class=" ft-mobile" >
    <div class="col-md-12">
        <img src="/assets/assets/images/ceramic/accueil/footer3.png" class="footerimg-mobile">
    </div>
</section>

<div style="height: 100px"></div>





@endsection

@section('script')
<script type="text/javascript">
    $(".content-image").hover(function(){
  $(".h44").css("top","60px");
  }, function(){
  $(".h44").css("top","-60px");
});
</script>

@endsection