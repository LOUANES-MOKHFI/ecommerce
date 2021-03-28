@extends('layouts.site')

@section('title')
	Qui sommes Nous
@endsection

@section('style')
 
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap');

.sidebar{
  margin-left: 120px;
}
@media(max-width: 768px) {
  .sidebar{
  padding: 20px 20px;
  margin-top: 20px;
  margin-left: 0px;
}
}

@media (min-width: 993px)
.prize-launch__logo {
    height: 196px;
    width: 196px;
    left: -100px;
    top: calc(100% - 300px);
}

.cardcontainer {
    width: 350px;
    height: auto;
    background-color: white;
    margin-left: auto;
    margin-right: auto;
    transition: 0.3s
}

.cardcontainer:hover {
    box-shadow: 0 0 45px gray
}

.photo {
    height: 300px;
    width: 100%
}

.photo img {
    height: 100%;
    width: 100%
}

.txt1 {
    margin: auto;
    text-align: center;
    font-size: 17px
}

.content {
    width: 80%;
    height: 100px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    top: -33px
}

.photos {
    width: 90px;
    height: 30px;
    background-color: #E74C3C;
    color: white;
    position: relative;
    top: -30px;
    padding-left: 10px;
    font-size: 20px
}

.txt4 {
    font-size: 33px;
    position: relative;
    top: 33px
}

.txt5 {
    position: relative;
    top: 18px;
    color: #E74C3C;
    font-size: 23px
}

.txt2 {
    position: relative;
    top: 10px
}

.cardcontainer:hover>.photo {
    height: 200px;
    animation: move1 0.5s ease both
}

@keyframes move1 {
    0% {
        height: 300px
    }

    100% {
        height: 200px
    }
}

.cardcontainer:hover>.content {
    height: 200px;
}

.footer {
    width: 80%;
    height: 100px;
    margin-left: auto;
    margin-right: auto;
    background-color: white;
    position: relative;
    top: -15px
}

.btn {
    position: relative;
    top: 20px
}

#heart {
    cursor: pointer
}

.like {
    float: right;
    font-size: 22px;
    position: relative;
    top: 20px;
    color: #333333
}

.fa-gratipay {
    margin-right: 10px;
    transition: 0.5s
}

.fa-gratipay:hover {
    color: #E74C3C
}

.txt3 {
    color: gray;
    position: relative;
    top: 18px;
    font-size: 14px
}

.comments {
    float: right;
    cursor: pointer
}

.fa-clock,
.fa-comments {
    margin-right: 7px
}
</style>
@endsection

@section('content')             
<section class="image-text  image-text--c">
    <div class="container">
        <div class="row"> 
			<div class="col-xs-12">
			    <div class="image-text__picture" style="background-image: url('/assets/assets/images/7983_z_macchiavecchia-hero.jpg')" title="">
			    </div>
			</div>
        </div>
    </div>
</section>
<section class="home_page sidebar">
    <div class="prize-launch">
        <div class="sidebar">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="prize-launch__text">
                        <h2 class="prize-launch__title">Profil de la société</h2>
                        <div class="prize-launch__description"><p>Nuevaceramica est une jeune entreprise, fondée en 2010, spécialisée dans la vente de carrelage espagnol de qualité au meilleur prix, Et partenaire référent auprès des meilleurs fabricant de céramique de luxe ou économique. nous nous engageons à mettre notre expertise à votre service.</p>
                        	<br>
                        <p>Découvrez un large choix de produits ( Du revêtement sol intérieur ou extérieur à la salle de bain, en passant par tous les dérivés de la céramique ( azulejos, mosaïque,...); Parmi notre gamme de produits, vous trouverez une sélection économique de carrelage design pas cher de haute qualité</p>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="prize-launch__picture">
                                <img class="prize-launch__image lazy img1" style="height: 400px" 
                                    src="/assets/assets/images/7983_z_macchiavecchia-hero.jpg"
                                    alt=""
                                />
                                <div class="prize-launch__logo"
                                    style="background-image: url('/media/filer_public_thumbnails/filer_public/9f/d8/9fd872c1-19df-4158-aed6-59adc2a37ba3/demodataprize-logo.png__132x37_q80_subsampling-2_upscale.png');">
                                </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="prize-launch__picture">
                        <img class="prize-launch__image lazy img1" style="height: 400px"  src="/assets/assets/images/7983_z_macchiavecchia-hero.jpg" alt=""/>
                        <div class="prize-launch__logo ll" style="right: -100px; background-image: url('/media/filer_public_thumbnails/filer_public/9f/d8/9fd872c1-19df-4158-aed6-59adc2a37ba3/demodataprize-logo.png__132x37_q80_subsampling-2_upscale.png');">
                        </div>
                    </div>
                </div>
                 <div class="col-xs-12 col-md-6">
                    <div class="prize-launch__text">
                        <h2 class="prize-launch__title">Ou Sommes Nous</h2>
                        <div class="prize-launch__description"><p>Vous pouvez trouver tout ça dans nos showrooms a Dely Brahim sur Alger ,à Ain Defla, et à Kolea ou Nous disposons d’un entrepôt de plus que 800 mètres carrés et d’un magasin d’exposition du carrelage espagnol et salles de bain de 1000 mètres carrés où vous pourrez découvrir plus de 4000 références de carrelages, céramiques et faïences et bénéficiez de la disponibilité immédiate des articles en stock et du Service Après-Vente.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="pg-bottom-medium ">
        <div class="container-emil-fluid">
            <div class="container-fluid relative">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h2 mg-bottom-medium">Nos Partenaires</h2>
                        <div class="row">
                            <div class="col-md-12 both">
                                @isset($brands)
                                @foreach($brands as $key=>$brand)
                                <div class="call-to-action-3 text-center large-5">
                                    <a class="call-to-action-3__link relative bg-after-{{$key+1}} _d-flex _align-items-center" >
                                        <div class="call-to-action-3__link__content">
                                            <img alt="" class="call-to-action-3__link__content__img mg-bottom-small" src="{{$brand->photo}}"/>
                                            <div class="call-to-action-3__link__content__text">
                                                <p class="p-small" style="color: white;font-size: 18px">{{$brand->name}}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="">
         <h4>Nos Showrooms</h4>
         <div class="row">
          @isset($showrooms)
            @foreach($showrooms as $key=>$showroom)
         <div class="cardcontainer col-md-6"  >
             <div class="photo"> <img src="{{$showroom->logo}}" alt="{{$showroom->title}}">
             </div>
             <div class="content">
                 <p style="font-weight: bold;font-size: 25px;padding-bottom: 20px" class="txt4">{{$showroom->title}}</p>
                 <p style="font-size: 20px" class="txt5">{{$showroom->adress}}</p>
             </div>
         </div>
             @endforeach
          @endisset
          </div>
    </div>
   
</section>

      
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
document.getElementById("heart").onclick = function(){
document.querySelector(".fa-gratipay").style.color = "#E74C3C";
};
});
</script>
@endsection