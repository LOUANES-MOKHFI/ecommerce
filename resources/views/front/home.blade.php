@extends('layouts.site')

@section('title')
	Accueil
@endsection

@section('style')
<style type="text/css">
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
</style>
@endsection

@section('content')             
            
<section class="home_page">


        <section class="home-slider-section">
            <div class="container" style="left: 150px">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <section class="home-slider" data-carousel="homeMainCarousel" data-paginator="home-slider-paginator">

                                <div class="home-slide">
                                    <div class="home-slide__text">
                                        <h2 class="home-slide__title">Porcelaine</h2>
                                        <div class="home-slide__claim wysiwyg">
                                        </div>
                                        <div class="home-slide__cta">
                                            
                                        </div>
                                    </div>
                                    <div class="home-slide__picture" data-original="/assets/assets/images/ceramic/accueil/porcelain.png"></div>
                                </div>
                                <div class="home-slide">
                                    <div class="home-slide__text">
                                        <h2 class="home-slide__title">Pate Blanche</h2>
                                        <div class="home-slide__claim wysiwyg">
                                        </div>
                                        <div class="home-slide__cta">
                                            
                                        </div>
                                    </div>
                                    <div class="home-slide__picture" data-original="/assets/assets/images/ceramic/accueil/pate blanche.png"></div>
                                </div>
                                <div class="home-slide">
                                    <div class="home-slide__text">
                                        <h2 class="home-slide__title">Pate Rouge</h2>
                                        <div class="home-slide__claim wysiwyg">
                                        </div>
                                        <div class="home-slide__cta">
                                            
                                        </div>
                                    </div>
                                    <div class="home-slide__picture" data-original="/assets/assets/images/ceramic/accueil/pate rouge.png"></div>
                                </div>
                                <div class="home-slide">
                                    <div class="home-slide__text">
                                        <h2 class="home-slide__title">Mosaique</h2>
                                        <div class="home-slide__claim wysiwyg">
                                        </div>
                                        <div class="home-slide__cta">
                                            
                                        </div>
                                    </div>
                                    <div class="home-slide__picture" data-original="/assets/assets/images/ceramic/accueil/mosaique.png"></div>
                                </div>
                                <div class="home-slide">
                                    <div class="home-slide__text">
                                        <h2 class="home-slide__title">Salle De Bain </h2>
                                        <div class="home-slide__claim wysiwyg">
                                        </div>
                                        <div class="home-slide__cta">
                                            
                                        </div>
                                    </div>
                                    <div class="home-slide__picture" data-original="/assets/assets/images/ceramic/accueil/Salle de bain SANINDUZA.jpg"></div>
                                </div>
                                
                                 
                            
                        </section>
                    </div>
                </div>
            </div>
        </section>
</section>

<section class="lookblock fullwidth">
    <div class="container scrollmouse" style="margin-top: 50px">
        <div class="row">

            <h4 class="label top-right" style="" >
                
                <span class="cnt"><img src="/assets/assets/images/ceramic/logostyle.png" class=""></span>
            </h4>
            <div class="col-md-8 col-md-push-2">
                <h3 class="headline" style="margin-bottom: 60px;color: #DB322B">Choisissez votre style</h3>
                <div class="abs">
                    
                </div>
            </div>
        </div>
        <section id="team">
                <div class="">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="member">
                             <img style="height: 400px" src="/assets/assets/images/ceramic/marbre.png" class="img-fluid" alt=""  >
                                <div class="member-info">
                                    <div class="member-info-content" style="height: 300px">
                                        <img  src="/assets/assets/images/gres-effetto-marmo.jpg" class="img-fluid" alt="">
                                        <h4>MARBRE</h4> 
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-2 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="member">
                                <img style="height: 400px" src="/assets/assets/images/ceramic/bois.png" class="img-fluid" alt=""  >
                                <div class="member-info">
                                    <div class="member-info-content" style="height: 300px">
                                        <img  src="/assets/assets/images/gres-effetto-cemento-design.jpg" class="img-fluid" alt="">
                                        <h4>BOIS</h4> 
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="member">
                             <img style="height: 400px" src="/assets/assets/images/ceramic/ciment.png" class="img-fluid" alt=""  >
                                <div class="member-info">
                                    <div class="member-info-content" style="height: 300px">
                                        <img  src="/assets/assets/images/gres-effetto-cemento-design.jpg" class="img-fluid" alt="">
                                        <h4>CIMENT</h4> 
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-2 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="member">
                             <img style="height: 400px" src="/assets/assets/images/ceramic/pierre.png" class="img-fluid" alt=""  >
                                <div class="member-info">
                                    <div class="member-info-content" style="height: 300px">
                                        <img  src="/assets/assets/images/gres-effetto-pietra.jpg" class="img-fluid" alt="">
                                        <h4>PIERRE</h4> 
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-2 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="member">
                             <img style="height: 400px" src="/assets/assets/images/ceramic/metal.png" class="img-fluid" alt=""  >
                                <div class="member-info">
                                    <div class="member-info-content" style="height: 300px">
                                        <img  src="/assets/assets/images/gres-effetto-marmo.jpg" class="img-fluid" alt="">
                                        <h4>METAL</h4> 
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-2 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="member">
                             <img style="height: 400px" src="/assets/assets/images/ceramic/design.png" class="img-fluid" alt=""  >
                                <div class="member-info">
                                    <div class="member-info-content" style="height: 300px">
                                        <img  src="/assets/assets/images/gres-effetto-marmo.jpg" class="img-fluid" alt="">
                                        <h4>DESIGN</h4> 
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
   </div>
</section>

<section class="pg-top-medium bg-white product-cat">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center h2" style="color: #DB322B">Nos Partenaires</h1>
            </div>
        </div>
    </div>
</section>

<section class="pg-top-medium pg-bottom-medium bg-white section-type-1 ">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="section-type-1__col col-md-7 section-type-1__photo--sx section-type-1__photo bg-after-1 ">
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
                <img alt="ECO CERAMIC" class="section-type-1__photo__img" src="/assets/assets/images/ceramic/site/ECOACCEUIL.png" title="ECO CERAMIC" style="height: 400px" width="100%"/>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <section class=" pg-top-medium pg-bottom-medium bg-white section-type-1">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class=" col-md-12 section-type-11__photo--dx section-type-1__photo bg-after-logo " >
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <img alt="ECO CERAMIC" class="section-type-1__photo__img" src="/assets/assets/images/ceramic/accueil/saninduza.png" title="ECO CERAMIC" />
                            <img src="/assets/assets/images/ceramic/accueil/saninduzalogo.png" style="width: 280px">
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <img alt="ECO CERAMIC" class="section-type-1__photo__img" src="/assets/assets/images/ceramic/accueil/saninduza1.png" title="ECO CERAMIC" />
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</div>





@endsection

@section('script')
@endsection