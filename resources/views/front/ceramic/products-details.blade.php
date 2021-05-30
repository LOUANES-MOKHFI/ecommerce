@extends('layouts.site')

@section('title')
    {{$product->name}}
@endsection

@section('style')
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<style type="text/css">
    /* Carousel */


@media (min-width: 992px){
.col-md-7 {
    width: 100%;
}
.home-slide__text {
    
    max-width: 25%;
    min-height: 590px;
    padding: 120px 32px;
   
}
}

 .home-slide__title{
  font-family: "Times New Roman", Times, serif;
  font-weight: 80;
}
@media screen and (min-width:992px)
{
    .home-slide__text {
      font-family: "Times New Roman", Times, serif;
    max-width: 30%;
    font-size: 45px;
    min-height: 590px;
    padding: 120px 32px; 
}
.home-slider .owl-controls {
    left: 200px;
    top: 80px;
    position: absolute;
}

.section-type-1__photo__img{
    height: 650px;
    margin-top: 130px;
}
.section-type-1__photo--dx{
    
    height: 550px;
}
.iconecouleur{
    height: 40px;width: 40px;    margin-top: 80px;
    margin-left: 180px;
}
.divcouleur2{
display: none
}
.a{
    right: 150px
}
.devis{
    width: 340px;height: 50px;float: right;margin-right: 50px;margin-top: 20px;
}
}
@media screen and (max-width:992px)
{
.home-slider .owl-controls {
    top: 200px;
}
.home-slide__text {
    font-family: "Times New Roman", Times, serif;
    max-width: 0%;
    font-size: 45px;
    min-height: 500px;
    padding: 120px 32px;
}
.section-type-1__photo__img{
    height: 350px;

    margin-top: 10px;
}
.section-type-1__photo--dx{
    width: 100%;
    height: 400px;
}
.home-slide__picture{
    right: 30px;
}
.iconecouleur{
    height: 40px;width: 40px;    margin-top: 0px;
    margin-left: 0px;
}
.divcouleur1{
display: none
}
.devis{
    width: 300px;height: 50px;float: right;margin-bottom: 30px;margin-right: 20px;margin-top: 20px;
}

}


.MultiCarousel { float: right; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:20%;top:calc(50% - 20px);background-color: transparent; }
    .MultiCarousel .leftLst { left:0;color: rgb(225,15,26);background-color: transparent;height: 80px;margin-top: -20px}
    .MultiCarousel .rightLst { right:0;color: rgb(225,15,26);background-color: transparent;height: 80px;margin-top: -20px}
    .leftLst img ,.rightLst img {    height: 61px;width: 41px;}


        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background-color:transparent; }
        .btn-primary {
    border: none;}
.item{
    width: 130px;
}
.bord {
  
  border-left: 3px solid rgb(225,15,26);
  height:200px;
}


.modal-content {
    -webkit-border-radius: 0;
    -webkit-background-clip: padding-box;
    -moz-border-radius: 0;
    -moz-background-clip: padding;
    border-radius: 6px;
    background-clip: padding-box;
    -webkit-box-shadow: 0 0 40px rgba(0,0,0,.5);
    -moz-box-shadow: 0 0 40px rgba(0,0,0,.5);
    box-shadow: 0 0 40px rgba(0,0,0,.5);
    color: #000;
    background-color: #fff;
    border: rgba(0,0,0,0);
}
.modal-message .modal-dialog {
    width: 300px;
}
.modal-message .modal-body, .modal-message .modal-footer, .modal-message .modal-header, .modal-message .modal-title {
    background: 0 0;
    border: none;
    margin: 0;
    padding: 0 20px;
    text-align: center!important;
}

.modal-message .modal-title {
    font-size: 17px;
    color: #737373;
    margin-bottom: 3px;
}

.modal-message .modal-body {
    color: #737373;
}

.modal-message .modal-header {
    color: #fff;
    margin-bottom: 10px;
    padding: 15px 0 8px;
}
.modal-message .modal-header .fa, 
.modal-message .modal-header 
.glyphicon, .modal-message 
.modal-header .typcn, .modal-message .modal-header .wi {
    font-size: 30px;
}

.modal-message .modal-footer {
    margin: 25px 0 20px;
    padding-bottom: 10px;
}

.modal-backdrop.in {
    zoom: 1;
    filter: alpha(opacity=75);
    -webkit-opacity: .75;
    -moz-opacity: .75;
    opacity: .75;
}
.modal-backdrop {
    background-color: #fff;
}
.modal-message.modal-success .modal-header {
    color: #53a93f;
    border-bottom: 3px solid #a0d468;
}

.modal-message.modal-info .modal-header {
    color: #57b5e3;
    border-bottom: 3px solid #57b5e3;
}

.modal-message.modal-danger .modal-header {
    color: #d73d32;
    border-bottom: 3px solid #e46f61;
}

.modal-message.modal-warning .modal-header {
    color: #f4b400;
    border-bottom: 3px solid #ffce55;
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


@media screen and (min-width: 768px){
    .home_page{
            
    }
    .carousel{
        top: -35px;
        margin-left: 76px;
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
    height: 200px;
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
  top:120px;
}
.ft-pc{
    display: none;
}
}

body .carousel{
    left: 0px;
}
@media screen and (max-width: 768px)
{
    .slide-pc{
        display: none;
    }

}
@media screen and (min-width: 768px)
{
    .slide-mobile{
        display: none;
    }
   .mobile{
    display: none;
   }
}
.lead{
  font-family: "Times New Roman", Times, serif;font-size:15px;
    
}
.name-opt{
   font-family: "Times New Roman", Times, serif;font-size:22px;
   font-weight: bold;color:rgb(225,15,26);
}


@media (max-width: 768px) {
    .carousel-inner .carousel-item > div {
        display: block;
    }
  
    
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
    #recipeCarousel{
top: 30px;left: 0px
}
.btn-slide-left img{
       height: 25px;width: 15px;
}
.btn-slide-right img{
   height: 25px;width: 15px;
}
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .-item-prev {
   
}

/* display 3 */
@media (min-width: 768px) {
    #recipeCarousel{
top: 30px;left: -100px
}
.btn-slide-left, .btn-slide-right{
   top: -280px;
}
.btn-slide-left img{
       height: 35px;width: 20px;
      
  margin-right: 200px;
}

.btn-slide-right img{
   height: 35px;width: 20px;
  margin-left: 200px;
}
    .carousel-inner .carousel-item-right.active,
    
    
    
}

.carousel-inner .carousel-item-right,


.carred:hover{
 background: rgb(225,15,26);

}
.redd{
  background: rgb(225,15,26);

}
</style>



@endsection

@section('content')             



<section class="home_page">
    <section class="home-slider-section slide-pc">
            <div class="container" style="left: 120px">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <section class="home-slider" data-carousel="homeMainCarousel" data-paginator="home-slider-paginator">
                            @isset($product->images)
                                @foreach($product->images as $image)
                                    <div class="home-slide">
                                        <div class="home-slide__text">
                                            <h2 class="home-slide__title">{{$product->name}}</h2>
                                            <div class="home-slide__claim wysiwyg">
                                            </div>
                                            <div class="home-slide__cta">
                                                
                                            </div>
                                        </div>
                                        <div class="home-slide__picture" >
                                            <div class="section-type-1__col col-md-7 section-type-1__photo--dx section-type-1__photo bg-after-1 imgred" >
                                            <img alt="ECO CERAMIC" class="section-type-1__photo__img " src="{{$image->photo ?? ''}}" title="ECO CERAMIC"  width="100%"/>
                                        </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                        </section>
                    </div>
                </div>
            </div>
           
    </section>
    <div class="carousel slide carousel-fade slide-mobile" data-ride="carousel" data-interval="3000" id="carousel-1" style="margin-top: 50px;">
        <div class="carousel-inner" role="listbox">
            @isset($product->images)
                @foreach($product->images as $key=> $image)
            <div class="carousel-item @if($key == 0) active @endif w3-animate-right">
                <img class="mySlides img-fluid w-100 d-block" src="{{$image->photo ?? ''}}" alt="{{$product->name}}">
                <div class="carousel-caption">
                    <h3 class="animated slideInLeft">{{$product->name}}</h3>
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
                    @isset($product->images)
                @foreach($product->images as $key=>$image)
                    <li data-target="#carousel-1" data-slide-to="{{$key}}" @if($key == 0) class="active" @endif></li>
                      @endforeach
            @endisset
                </ol>

    </div> 

      <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-4">
              <a href="{{route('demande-devis',$product->slug)}}" target="_blank" >
            <img src="{{asset('assets/assets/images/ceramic/devis.png')}}" class="devis" >
        </a>
          </div>
      </div>  
        


    <section style="margin-bottom: 50px">
       
  <!--Couleur-->
    @isset($options)
<div class="container">
    <div class="row a">
        <div class="col-md-2 divcouleur1">
            <img src="{{asset('assets/assets/images/ceramic/couleur.png')}}" class="iconecouleur" style="">
        </div>
        <div class="col-md-2 divcouleur2" style="margin-bottom: 10px">
            <img src="{{asset('assets/assets/images/ceramic/couleur.png')}}" class="iconecouleur" style="">
            <span class="name-opt"> Modèles</span>
        </div>
        <div class="col-md-10">
           


            <div class="container">
    
    <div class="row">
        <div style="color:rgb(225,15,26);font-size: 22px;margin-bottom: 10px;margin-left: 30px" class="divcouleur1 name-opt">Modèles</div>
        <div style="border-top: 3px solid rgb(225,15,26);width: 200px"></div>
           <div class="bord" style="margin-bottom: 200px">
            <div class="container text-center my-3">
                  <div class="container text-center my-3">
                    <div class="row mx-auto my-auto">
                      <div class="slide-pc">
                        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel" style="">
                            <div class="carousel-inner w-100" role="listbox">
                              @isset($countouleur)
                                @foreach($countouleur as $key => $option)
                                    @if(!empty($option->img_couleur))
                                      @if($countouleur->count() < 5)
                                      <div class=" @if($key==0) active @endif" >
                                          <div class="col-md-2 col-sm-6" style="padding: 0px;margin:0px">
                                              <div class="card card-body">
                                                  <img class="img-fluid" src="{{$option->img_couleur}}" style="height: 280px;width: 100px;">
                                                  <p class="opt-name">{{$option->name}}</p>
                                              </div>
                                          </div>
                                      </div>
                                    @else
                                      <div class="carousel-item @if($key==0) active @endif" >
                                          <div class="col-md-2 col-sm-6" style="padding: 0px;margin:0px">
                                              <div class="card card-body">
                                                  <img class="img-fluid" src="{{$option->img_couleur}}" style="height: 280px;width: 100px;">
                                                  <p class="opt-name">{{$option->name}}</p>
                                              </div>
                                          </div>
                                      </div>
                                    @endif
                                     @endif
                                @endforeach
                                @endisset
                              
                            </div>
                            <a class="carousel-control-prev w-auto btn-slide-left" href="#recipeCarousel" role="button" data-slide="prev" >
                              <img src="{{asset('assets/assets/images/ceramic/left.png')}}">
                            </a>
                            <a class="carousel-control-next w-auto btn-slide-right" href="#recipeCarousel" role="button" data-slide="next" >
                                <img src="{{asset('assets/assets/images/ceramic/right.png')}}">
                            </a>
                        </div>
                      </div>
                        <div class="slide-mobile">
                          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel" style="">
                            <div class="carousel-inner w-100" role="listbox">
                              @isset($countouleur)
                                @foreach($countouleur as $key => $option)
                                    @if(!empty($option->img_couleur))
                                      <div class="carousel-item @if($key==0) active @endif" >
                                          <div class="col-md-2 col-sm-6" style="padding: 0px;margin:0px">
                                              <div class="card card-body">
                                                  <img class="img-fluid" src="{{$option->img_couleur}}" style="height: 280px;width: 100px;">
                                                  <p class="opt-name">{{$option->name}}</p>
                                              </div>
                                          </div>
                                      </div>
                                     @endif
                                @endforeach
                                @endisset
                              
                            </div>
                            <a class="carousel-control-prev w-auto btn-slide-left" href="#recipeCarousel" role="button" data-slide="prev" >
                              <img src="{{asset('assets/assets/images/ceramic/left.png')}}">
                            </a>
                            <a class="carousel-control-next w-auto btn-slide-right" href="#recipeCarousel" role="button" data-slide="next" >
                                <img src="{{asset('assets/assets/images/ceramic/right.png')}}">
                            </a>
                        </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div> 
@endisset
   

    @if(!empty($product->file))
        <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-4">
            <a href="{{ url('ceramica/public/assets/images/file/'.$product->file) }}" target="_blank" >
                <img src="{{asset('assets/assets/images/ceramic/download.png')}}" class="devis">
            </a>
          </div>
      </div>  
    @endif
   
    
  <!--Format-->

   @isset($options)
<div class="container" style="margin-top: 30px;margin-bottom: 60px">
    <div class="row a">
        <div class="col-md-2 divcouleur1">
            <img src="{{asset('assets/assets/images/ceramic/format.png')}}" class="iconecouleur" style="">
        </div>
        <div class="col-md-2 divcouleur2" style="margin-bottom: 10px">
            <img src="{{asset('assets/assets/images/ceramic/format.png')}}" class="iconecouleur" style="">
            <span class="name-opt"> Formats</span>
        </div>
        <div class="col-md-10">
            <div class="container">
    
    <div class="row">
        <div style="color:rgb(225,15,26);font-size: 22px;margin-bottom: 10px;margin-left: 30px" class="divcouleur1 name-opt">Formats</div>
        <div style="border-top: 3px solid rgb(225,15,26);width: 200px"></div>
         <div class="bord">

        <div class="MultiCarousel " data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            
           
            <div class="MultiCarousel-inner ">
                      @isset($countformat)
                        @foreach($countformat as $key => $option)
                             @if(!empty($option->img_format))
                                <div class="item" style="width: 190px">
                                    <div class="pad15">
                                        <div class="pad15">
                                        <p class="lead" style="font-size: 18px;color:rgb(225,15,26)">{{$option->name}}</p>
                                        <div class="carred aa carred{{$key}}" id="{{$option->id}}" >
                                        <a style="cursor: pointer;" class="details" data_id="{{$option->id}}"><img src="{{$option->img_format}}" style="height: 100%;width: 100%">
                                        </a>
                                        </div>
                                        </div>
                                        

                                    </div>
                                </div>
                                @endif
                         @endforeach
                         @endisset


                    
            </div>
             
        </div>

      
        </div>
    </div>
</div>
        </div>
    </div>
</div> 

@endisset

<div class="container bb">
    
    <div class="" style="margin-bottom: 6px;">
        <div class="details_option" style="border: 1px solid rgb(225,15,26);">
          @isset($countformat[0]->details)
          @foreach($countformat[0]->details as $detail)
          <div class="col-sm-6 col-md-3" style="margin-bottom: 6px;margin-top:10px;">
            <div class="shop__thumb">
               
                    <div class="shop-thumb__img">
                      <img src="{{$detail->image}}" style="height:85%;width:85%">
                    </div>
                    <p class="lead shop-thumb__title"  style="color: black;font-family: 'Times New Roman', Times, serif;font-size:15px;">
                       {{$detail->name}}
                    </p>
               
            </div>
        </div>
        @endforeach
        @endisset
        </div>
    </div>
</div>


<!--Finition-->
 @isset($options)
<div class="container" style="margin-top: 30px">
    <div class="row a">
        <div class="col-md-2 divcouleur1">
            <img src="{{asset('assets/assets/images/ceramic/finition.png')}}" class="iconecouleur" style="">
        </div>
        <div class="col-md-2 divcouleur2" style="margin-bottom: 10px">
            <img src="{{asset('assets/assets/images/ceramic/finition.png')}}" class="iconecouleur" style="">
            <span style="color:rgb(225,15,26);font-size: 22px"> Finitions</span>
        </div>
        <div class="col-md-10">
            <div class="container">
    
    <div class="row ">
        <div  style="color:rgb(225,15,26);font-size: 22px;margin-bottom: 10px;margin-left: 30px" class="divcouleur1 name-opt">Finitions</div>
         <div style="border-top: 3px solid red;width: 200px"></div>
         <div class="bord">
        <div class="MultiCarousel " data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            
           
            <div class="MultiCarousel-inner ">
                      @isset($counfinition)
                        @foreach($counfinition as $key => $option)
                             @if(!empty($option->img_finition))
                                <div class="item">
                                    <div class="pad15">
                                        
                                        <img src="{{$option->img_finition}}" >
                                    </div>
                                </div>
                               @endif
                         @endforeach
                           @endisset
                    
            </div>
            @if($counfinition->count() > 2)
            <button class="btn btn-primary leftLst mobile"><img src="{{asset('assets/assets/images/ceramic/left.png')}}"></button>
            <button class="btn btn-primary rightLst mobile"><img src="{{asset('assets/assets/images/ceramic/right.png')}}"></button>
            @endif
            @if($counfinition->count() > 4)
            <button class="btn btn-primary leftLst pc"><img src="{{asset('assets/assets/images/ceramic/left.png')}}"></button>
            <button class="btn btn-primary rightLst pc"><img src="{{asset('assets/assets/images/ceramic/right.png')}}"></button>
            @endif
        </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div> 
@endisset
</section>
</section>





@endsection

@section('script')

<script type="text/javascript">
   
   /*function myOverFunction() {
   
     var x = document.getElementsByClassName("details")[0].id;
      $(".bb").slideToggle();
        var counter = 0;
        getdetail(x);
      }*/


$(document).on('click', '.carred0', function () {
         $(".carred0").css("background","rgb(225,15,26)");
          $(".carred1").css("background","white");
           $(".carred2").css("background","white");
            $(".carred3").css("background","white");
             $(".carred4").css("background","white");
    });
$(document).on('click', '.carred1', function () {
         $(".carred1").css("background","rgb(225,15,26)");
          $(".carred0").css("background","white");
           $(".carred2").css("background","white");
            $(".carred3").css("background","white");
             $(".carred4").css("background","white");
    });
$(document).on('click', '.carred2', function () {
         $(".carred2").css("background","rgb(225,15,26)");
          $(".carred0").css("background","white");
           $(".carred1").css("background","white");
            $(".carred3").css("background","white");
             $(".carred4").css("background","white");
    });
$(document).on('click', '.carred3', function () {
         $(".carred3").css("background","rgb(225,15,26)");
          $(".carred0").css("background","white");
           $(".carred1").css("background","white");
            $(".carred2").css("background","white");
             $(".carred4").css("background","white");
    });
$(document).on('click', '.carred4', function () {
         $(".carred4").css("background","rgb(225,15,26)");
          $(".carred0").css("background","white");
           $(".carred1").css("background","white");
            $(".carred2").css("background","white");
             $(".carred3").css("background","white");
    });
 


    $(document).on('click', '.carred', function () {       
         var id;
        id = $(this).attr('id');

         $(this).addClass('redd');
        var counter = 0;
        
            getdetail(id);
        
    });
 

  function getdetail(id) {

    $('.details_option').empty();
   /* $(".carred").click(function(){
  if($(this).attr('data_id') == id) $(this).css('background-color', 'red');
});*/

   // $(".carred").css("background","white");

    $.ajax({
        type: 'GET',
        url: '/get-Detail-Option/' +id,
        success: function (response) {
            var response = JSON.parse(response);
            console.log(response);
            
            if (response.length == 0) {
            	
              $('.details_option').append('Aucun détails pour cette format');

            } else {
               response.forEach(element => {

                   $('.details_option').append(`
                   
                            <div class="col-sm-6 col-md-3" style="margin-bottom: 6px;margin-top:10px;">
                                <div class="shop__thumb">
                                   
                                        <div class="shop-thumb__img">
                                          <img src="${element.image}" style="height:85%;width:85%">
                                        </div>
                                        <p class="lead shop-thumb__title"  style="color: black;font-family: "Times New Roman", Times, serif;font-size:15px;">
                                           ${element.name}
                                        </p>
                                   
                                </div>
                            </div>
                  
                    `);
                });
            }
        }
      });
  }



 
</script>

<script type="text/javascript">
 /*
    $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);

           
            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(40px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[3]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
    */
</script>
<script type="text/javascript">

  $('#recipeCarousel').carousel({
  interval: 10000
})

$('.carousel .carousel-item').each(function(){

    var minPerSlide = 4;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
   next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        
        next.children(':first-child').clone().appendTo($(this));
      }
    
});

</script>
<scr
@endsection