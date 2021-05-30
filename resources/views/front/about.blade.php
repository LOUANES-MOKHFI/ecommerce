@extends('layouts.site')

@section('title')
    Qui sommes Nous
@endsection

@section('style')
 
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap');
  .call-to-action-3.large-5 {
    width: 14%; }
     @media (min-width: 769px) and (max-width: 991px) {
      .call-to-action-3.large-5 {
        width: 50%; } }
    @media (min-width: 1px) and (max-width: 768px) {
      .call-to-action-3.large-5 {
        width: 100%; } }
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
.lazy{
    width: 600px;
}


.section-type-1__photo__img{
    
}
@media screen and (max-width:869px){
    .section-type-1__photo__img {
    width: 100%;
    height: 230px;
}

.section-type-1__photo{
    background-color: #A52A2A;
        width: 400px;
}
.section-type-1__photo--sx{
    padding-left: 40px;
    padding-bottom: 20px;
}
.section-type-1__photo--dx{
    padding-right: 40px;
    padding-bottom: 20px;
}
.cc{
    margin-right: 100px;
}

}
@media screen and (min-width:869px){
    .section-type-1__photo__img {
    width: 100%;
    height: 300px;
}
.section-type-1__photo{
    background-color: #A52A2A;
}
.section-type-1__photo--sx{
    padding-left: 20px;
    padding-bottom: 20px;
}
.section-type-1__photo--dx{
    padding-right: 20px;
    padding-bottom: 20px;
}
.bb{
margin-left: 30px;
margin-right: 60px;
}
}

.font-showroom-left{
    background-color: rgb(122,17,32);
    height: 330px;
    bottom: 200px;
    right: 30px;
    width: 500px;
    position: relative;
    z-index: 1;
}

.font-showroom-center{
    background-color:rgb(122,17,32);
    height: 330px;
    bottom: 200px;
    right: 30px;
    width: 370px;
    position: relative;
    z-index: 1;
}
.font-showroom-right{
    background-color: rgb(122,17,32);
   height: 330px;
    bottom: 200px;
    left: 34px;
    width: 500px;
    position: relative;
    z-index: 1;
}
.img1,.img1{
height: 100%;
width: 100%;
}
@media screen and (max-width: 768px)
{
    .image-showroom-left,.image-showroom-center,.image-showroom-right{width: 310px}

.font-showroom-center,.font-showroom-left,.font-showroom-right{
    background-color: rgb(122,17,32);
    height: 280px;
    bottom: 165px;
    left: -20px;
    width: 350px;
    position: relative;
    z-index: 1;
}
.image-showroom-right,.image-showroom-left,.image-showroom-center{
    width: 350px
}
.img1,.img1{
  height:100%;
  width: 100%;
}
}
.bg-after-white{
    background-color: white;
}
</style>
@endsection

@section('content')             
<section class="image-text  image-text--c">
    <div class="container">
        <div class="row"> 
            <div class="col-xs-12">
                <div class="image-text__picture" style="background-image: url('/assets/assets/images/ceramic/site/aboutt.jpg')" title="Nueva ceramica">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home_page sidebar">
    <div class="prize-launch">
        <div class="sidebar">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-sm-12">
                     <div style="margin-bottom: 40px;">
                         <img src="{{asset('assets/assets/images/ceramic/site/about4.png')}}" style="width: 400px;" alt="Nueva ceramica">
                     </div>
                        <div class=""><p>Nuevaceramica est une jeune entreprise, fondée en 2010, spécialisée dans la vente de carrelage espagnol de qualité au meilleur prix, Et partenaire référent auprès des meilleurs fabricant de céramique de luxe ou économique. nous nous engageons à mettre notre expertise à votre service.</p>
                            <br>
                        <p>Découvrez un large choix de produits ( Du revêtement sol intérieur ou extérieur à la salle de bain, en passant par tous les dérivés de la céramique ( azulejos, mosaïque,...); Parmi notre gamme de produits, vous trouverez une sélection économique de carrelage design pas cher de haute qualité.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-12">
                    <div class="prize-launch__picture">
                                <img class="prize-launch__image lazy img1"  
                                    src="{{asset('assets/assets/images/ceramic/site/aboutt1.png')}}"
                                    alt="Nueva ceramica"
                                />
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 50px;margin-bottom: 40px">
                <div class="col-xs-12 col-md-6" style="margin-bottom: 40px;">
                    <div class="prize-launch__picture">
                        <img class="prize-launch__image lazy img1"  
                                    src="{{asset('assets/assets/images/ceramic/site/aboutt2.png')}}"
                                    alt="Nueva ceramica"
                                />
                    </div>
                </div>
                 <div class="col-xs-12 col-md-6">
                    <div style="margin-bottom: 40px;">
                         <img src="{{asset('assets/assets/images/ceramic/site/about5.png')}}" style="width: 400px;" alt="Nueva ceramica">
                     </div>
                    
                        
                        <div class=""><p>Vous pouvez trouver tout ça dans nos showrooms a Dely Brahim sur Alger et sur Tipaza à Kolea ou Nous disposons d’un entrepôt de plus que 800 mètres carrés et d’un magasin d’exposition du carrelage espagnol et salles de bain de 1000 mètres carrés où vous pourrez découvrir plusieurs références de carrelages, céramiques et faïences et bénéficiez de la disponibilité immédiate des articles en stock et du Service Après-Vente.</p>
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
                        <h2 class="h2 mg-bottom-medium" style="color: #800000;font-family: 'Times New Roman', Times, serif;">Nos Partenaires</h2>
                        <div class="row">
                            <div class="col-md-12 both">
                                @isset($brands)
                                @foreach($brands as $key=>$brand)
                                <div class="call-to-action-3 text-center large-5">
                                    <a class="call-to-action-3__link relative @if($key%2 == 0) bg-after-1 @else bg-after-white @endif _d-flex _align-items-center" >
                                        <div class="call-to-action-3__link__content">
                                            <img alt="" class="call-to-action-3__link__content__img mg-bottom-small" src="{{$brand->photo}}"/>
                                            <div class="call-to-action-3__link__content__text">
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
    <section class="pg-bottom-medium ">
        <div class=" cc">
            <div class="bb relative">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h2 mg-bottom-medium" style="color: #800000;font-family: 'Times New Roman', Times, serif;">Nos Showrooms</h2>
                            <div class="cc">
                                <div class="row">
                                    <div class="col-md-6 col-sm-10 col-sm-10">
                                        @isset($showroom1)
                                        <div class="image-showroom-left">
                                             <img alt="PAMESA" class="section-type-1__photo__img" style="padding-right: 50px" src="{{$showroom1->logo}}" title="PAMESA" width="100%"/>
                                        </div>
                                        <div class="font-showroom-left" >
                                            <div class="text-showroom">
                                            <h4 style="color: white;padding-top: 220px;padding-left: 20px;">{{$showroom1->adress}}</h4>
                                            <p style="color: white;padding-left: 20px;">{{$showroom1->phone}}</p>
                                            </div>
                                        </div>
                                          @endisset
                                    </div>
                                    <!--div class="col-md-4 col-sm-10 col-sm-10">
                                        @isset($showroom2)
                                        <div class="image-showroom-center">
                                             <img alt="PAMESA" class="section-type-1__photo__img" style="padding-right: 50px" src="{{$showroom2->logo}}" title="PAMESA" width="100%"/>
                                        </div>
                                        <div class="font-showroom-center" >
                                            <div class="text-showroom">
                                            <h4 style="color: white;padding-top: 180px;padding-left: 20px;">{{$showroom2->adress}}</h4>
                                            <p style="color: white;padding-left: 20px;">{{$showroom2->phone}}</p>
                                            </div>
                                        </div>
                                          @endisset
                                    </div-->
                                     <div class="col-md-6 col-sm-10 col-sm-10">
                                        @isset($showroom3)
                                            <div class="image-showroom-right">
                                                 <img alt="PAMESA" class="section-type-1__photo__img" style="padding-right: 50px" src="{{$showroom3->logo}}" title="PAMESA" width="100%"/>
                                            </div>
                                            <div class="font-showroom-right" >
                                                <div class="text-showroom">
                                                <h4 style="color: white;padding-top: 220px;padding-left: 20px;">{{$showroom3->adress}}</h4>
                                                <p style="color: white;padding-left: 20px;">{{$showroom3->phone}}</p>
                                                </div>
                                            </div>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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