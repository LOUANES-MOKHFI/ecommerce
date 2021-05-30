@extends('layouts.site')



@section('title')

  {{$cat->name}}

@endsection



@section('style')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">



<style type="text/css">

.shop-index__section {

  position: relative;

  margin-bottom: 60px;

}

.shop-index__section.alt {

  background-color: #f5f5f5;

  padding-top: 60px;

  padding-bottom: 60px;

  border-width: 1px 0 1px 0;

  border-style: solid;

  border-color: rgba(0, 0, 0, 0.05);

}

.shop-index__heading {

  margin-top: 0;

  margin-bottom: 60px;

  font-family: 'Questrial', sans-serif;

}

.shop-index__heading + p {

  margin-top: -50px;

  margin-bottom: 60px;

  color: #777777;

}

/* Shop: Slideshow */

.shop__slideshow {

  margin-top: -18px;

  margin-bottom: 60px;

}

.shop__slideshow .carousel-inner .item__container {

  display: table;

  width: 100%;

  height: 100%;

}

.shop__slideshow .carousel-inner .item-container__inner {

  display: table-cell;

  vertical-align: middle;

}

.shop__slideshow .carousel-inner .item {

  width: 100%;

  height: 600px;

}

.shop__slideshow .carousel-inner .item_1 {

  background: url(../img/home_11.jpg) no-repeat center center / cover;

}

.shop__slideshow .carousel-inner .item_2 {

  background: url(../img/home_12.jpg) no-repeat center center / cover;

}

.shop__slideshow .carousel-inner .item_3 {

  background: url(../img/home_14.jpg) no-repeat center center / cover;

}

.shop-slideshow__heading {

  margin: 0 0 20px 0;

  font-family: 'Questrial', sans-serif;

  font-size: 46px;

  line-height: 1.2;

  color: white;

}

.shop-slideshow__subheading {

  margin-bottom: 30px;

  font-family: 'Questrial', sans-serif;

  font-size: 20px;

  line-height: 1.5;

  color: white;

}

.shop-slideshow__btn {

  border: 2px solid white;

  border-radius: 0;

  color: white;

  font-weight: 600;

}

.shop-slideshow__btn:hover,

.shop-slideshow__btn:focus {

  color: #333333;

  background-color: white;

}

@media (max-width: 767px) {

  .shop__slideshow .carousel-inner .item {

    height: 400px;

    padding: 0 30px;

    text-align: center;

  }

  .shop-slideshow__heading {

    font-size: 32px;

  }

  .shop-slideshow__subheading {

    font-size: 16px;

  }

}

/* Carousel controls */

.shop-slideshow__control {

  display: block;

  position: absolute;

  top: 50%;

  left: 10px;

  width: 30px;

  height: 70px;

  opacity: 0;

  -webkit-transform: translateY(-50%);

      -ms-transform: translateY(-50%);

       -o-transform: translateY(-50%);

          transform: translateY(-50%);

  -webkit-transition: opacity .3s;

       -o-transition: opacity .3s;

          transition: opacity .3s;

}

.shop-slideshow__control:hover {

  opacity: 1 !important;

}

.shop-slideshow__control[data-slide="next"] {

  left: auto;

  right: 10px;

}

.shop__slideshow:hover .shop-slideshow__control {

  opacity: .3;

}

/* Features */

.shop-index-features__item {

  margin-bottom: 40px;

  text-align: center;

}

.shop-index-features__icon {

  margin-bottom: 20px;

  width: 90px;

  height: 100px;

  background: url(../img/hexagon.svg) no-repeat center center / cover;

  display: block;

  margin-left: auto;

  margin-right: auto;

  line-height: 100px;

  text-align: center;

  font-size: 24px;

}

.shop-index-features__heading {

  margin-bottom: 15px;

}

.shop-index-features__heading + p {

  color: #777777;

}

/* Blog post */

.shop-index-blog__posts > [class*="col-"] {

  padding-top: 20px;

  padding-bottom: 20px;

  border-right: 1px solid rgba(0, 0, 0, 0.05);

}

.shop-index-blog__posts > [class*="col-"]:last-child {

  border-right: 0;

}

.shop-index-blog__post {

  width: 80%;

  display: block;

  margin-left: auto;

  margin-right: auto;

}

.shop-index-blog__img {

  position: relative;

  float: left;

  margin-right: 30px;

  margin-bottom: 20px;

  width: 90px;

  height: 100px;

  overflow: hidden;

}

.shop-index-blog__img:before {

  content: "";

  position: absolute;

  top: 0;

  right: 0;

  bottom: 0;

  left: 0;

  background: url(../img/hexagon_reversed.svg) no-repeat top left / 100% 100%;

}

.shop-index-blog__img > img {

  height: 100%;

  width: auto;

}

.shop-index-blog__body {

  overflow: hidden;

}

.shop-index-blog__heading {

  position: relative;

  margin-top: 0;

  margin-bottom: 30px;

  line-height: 1.5;

}

.shop-index-blog__heading:after {

  content: "";

  position: absolute;

  bottom: -15px;

  left: 0;

  width: 30px;

  height: 2px;

  background-color: rgba(0, 0, 0, 0.1);

}

.shop-index-blog__content {

  margin-bottom: 20px;

  color: #777777;

}

@media (max-width: 991px) {

  .shop-index-blog__img {

    float: none;

    margin-right: 0;

    display: block;

    margin-left: auto;

    margin-right: auto;

  }

  .shop-index-blog__heading {

    text-align: center;

  }

  .shop-index-blog__heading:after {

    left: 50%;

    margin-left: -15px;

  }

}

@media (max-width: 767px) {

  .shop-index-blog__posts > [class*="col-"] {

    padding-top: 0;

    padding-bottom: 60px;

    border-right: 0;

  }

  .shop-index-blog__posts > [class*="col-"]:last-child {

    padding-bottom: 0;

  }

  .shop-index-blog__post {

    width: 100%;

  }

}

/* Newsletter */

.shop-index__newsletter {

  padding-bottom: 20px;

}

.shop-index__newsletter .shop-index__heading {

  margin-bottom: 20px;

  line-height: 42px;

  text-align: center;

}

.shop-index__newsletter input[type="email"] {

  height: 42px;

  padding: 11px 12px;

}

.shop-index__newsletter button[type="submit"] {

  padding: 11px 30px;

  width: 100%;

}

@media (min-width: 768px) {

  .shop-index__newsletter .shop-index__heading {

    margin-bottom: 0px;

    text-align: right;

  }

  .shop-index__newsletter input[type="email"] {

    border-radius: 21px 0 0 21px;

  }

  .shop-index__newsletter button[type="submit"] {

    margin-left: -3px;

    border-radius: 0 21px 21px 0;

    width: auto;

  }

}

/** Shop: Thumbnails **/

.shop__thumb {

  padding-top: 0px;

  padding-right: 10px;

  padding-left: 10px;

  padding-bottom: 10px;

  margin-bottom: 10px;

  background-color: white;

  text-align: center;

  -webkit-transition: border-color 0.1s, -webkit-box-shadow 0.1s;

       -o-transition: border-color 0.1s, box-shadow 0.1s;

          transition: border-color 0.1s, box-shadow 0.1s;

}

.shop__thumb:hover {

  border-color: rgba(0, 0, 0, 0.07);

  -webkit-box-shadow: 0 5px 30px rgba(0, 0, 0, 0.07);

          box-shadow: 0 5px 30px rgba(0, 0, 0, 0.07);

}

.shop__thumb > a {

  color: #333333;

}

.shop__thumb > a:hover {

  text-decoration: none;

}

.shop-thumb__img {

  position: relative;

  margin-bottom: 20px;

  overflow: hidden;

}

.shop-thumb__title {
  font-weight: 600;
  font-family: "Times New Roman", Times, serif;
}

.shop-thumb__price {

  color: #777777;

}

.shop-thumb-price_old {

  text-decoration: line-through;

}

.shop-thumb-price_new {

  color: red;

}

/** Shop: Item **/

.shop-item__info {

  padding: 30px;

  margin-bottom: 40px;

  background-color: white;

  border: 1px solid rgba(0, 0, 0, 0.05);

}

.shop-item-cart__title {

  margin-bottom: 20px;

  line-height: 1.3;

}

.shop-item-cart__price {

  font-size: 28px;

  font-weight: 400;

  color: #F7C41F;

}

.shop-item__intro {

  color: #777777;

  border-bottom: 1px solid rgba(0, 0, 0, 0.05);

  padding-bottom: 10px;

  margin-bottom: 20px;

}

.shop-item__add button[type="submit"] {

  padding: 15px 20px;

}

.shop-item__img {

  margin-bottom: 40px;

}

.shop-item-img__main {

  width: -webkit-calc(100% - 110px);

  width: calc(100% - 110px);

  height: auto;

  float: left;

}

.shop-item-img__aside {

  width: 100px;

  height: auto;

  float: left;

}

.shop-item-img__aside > img {

  cursor: pointer;

  margin-bottom: 10px;

  border: 1px solid rgba(0, 0, 0, 0.1);

  opacity: .5;

}

.shop-item-img__aside > img:hover,

.shop-item-img__aside > img.active {

  border-color: rgba(0, 0, 0, 0.05);

  opacity: 1;

}

@media (max-width: 767px) {

  .shop-item-img__main {

    width: -webkit-calc(100% - 60px);

    width: calc(100% - 60px);

  }

  .shop-item-img__aside {

    width: 50px;

  }

}

/** Shop: Filter **/

.shop__filter {

  border:1px solid black;

  border-radius: 20px;

  margin-bottom: 40px;

}

/* Shop filter: Pricing */

.shop-filter__price {

  padding: 15px;

}

.shop-filter__price [class*='col-'] {

  padding: 2px;

}

/* Shop filter: Colors */

.shop-filter__color {

  display: inline-block;

  margin: 0 2px 2px 0;

}

.shop-filter__color input[type="text"] {

  display: none;

}

.shop-filter__color label {

  width: 30px;

  height: 30px;

  background: transparent;

  border: 1px solid rgba(0, 0, 0, 0.1);

  border-radius: 3px;

  cursor: pointer;

}

/** Shop: Sorting **/

.shop__sorting {

  list-style: none;

  padding-left: 0;

  margin-bottom: 40px;

  margin-top: -20px;

  border-bottom: 1px solid rgba(0, 0, 0, 0.1);

  text-align: right;

}

.shop__sorting > li {

  display: inline-block;

}

.shop__sorting > li > a {

  display: block;

  padding: 20px 10px;

  margin-bottom: -1px;

  border-bottom: 2px solid transparent;

  color: #757575;

  -webkit-transition: all .05s linear;

       -o-transition: all .05s linear;

          transition: all .05s linear;

}

.shop__sorting > li > a:hover,

.shop__sorting > li > a:focus {

  color: #333333;

  text-decoration: none;

}

.shop__sorting > li.active > a {

  color: #ed3e49;

  border-bottom-color: #ed3e49;

}

@media (max-width: 767px) {

  .shop__sorting {

    text-align: left;

    border-bottom: 0;

  }

  .shop__sorting > li {

    display: block;

  }

  .shop__sorting > li > a {

    padding: 10px 15px;

    margin-bottom: 10px;

    border-bottom: 1px solid rgba(0, 0, 0, 0.1);

  }

  .shop__sorting > li.active > a {

    font-weight: 600;

  }

}

/** Shop: Checkout **/

.checkout__block {

  margin-bottom: 40px;

}

.checkout-cart__item {

  margin-bottom: 15px;

}

.checkout-cart-item__img {

  max-width: 80px;

  margin-right: 10px;

  float: left;

}

.checkout-cart-item__content {

  overflow: hidden;

}

.checkout-cart-item__heading {

  margin-top: 0;

}

.checkout-cart-item__footer {

  padding: 10px 0;

  margin-top: 10px;

  border-top: 1px solid #eee;

}

.checkout-cart-item__price {

  font-weight: 600;

}

.checkout-total__block {

  margin-bottom: 40px;

  border-top: 1px solid #e9e9e9;

  border-bottom: 1px solid #e9e9e9;

}

.checkout-total__block > .row > [class*="col-"] {

  padding: 40px 40px;

  border-right: 1px solid #e9e9e9;

  color: #aaa;

}

.checkout-total__block > .row > [class*="col-"]:last-child {

  border-right: 0;

  color: #333333;

}

@media (max-width: 767px) {

  .checkout-total__block {

    border: 0;

  }

  .checkout-total__block > .row > [class*="col-"] {

    padding: 15px 20px;

    border: 0;

    border-top: 1px solid #e9e9e9;

  }

  .checkout-total__block > .row > [class*="col-"]:last-child {

    border-bottom: 1px solid #e9e9e9;

  }

}

.checkout-total__heading {

  float: left;

}

.checkout-total__price {

  float: right;

  margin: 9px 0;

  font-size: 17px;

}

.checkout__submit {

  padding: 15px 40px;

}

/** Shop: Order Confirmation */

.shop-conf__heading {

  margin-bottom: 40px;

}

.shop-conf__heading + p {

  margin-bottom: 100px;

}





/**

 * Forms

 */

.form-control,

.form-control:focus {

  -webkit-box-shadow: none;

          box-shadow: none;

  outline: none;

}

/* Has error */

.has-error .form-control {

  border-color: #d9534f;

  -webkit-box-shadow: none !important;

          box-shadow: none !important;

}

.has-error .form-control:focus {

  border-color: #b52b27;

}

.has-error .help-block {

  color: #d9534f;

}

/* Checkboxes */

.checkbox input[type="checkbox"] {

  display: none;



}

.checkbox label {

  margin-left: 10px;

  color: #DB322B;

}

.checkbox label:before {

  content: "";

  display: inline-block;

  vertical-align: middle;

  

  width: 20px;

  height: 20px;

  line-height: 20px;

  background-color: #eee;

  text-align: center;

  font-family: "FontAwesome";

}

.checkbox input[type="checkbox"]:checked + label::before {

  content: "\f00c";

}

/* Radios */

.radio input[type="radio"] {

  display: none;

}

.radio label {

  padding-left: 0;

}

.radio label:before {

  content: "";

  display: inline-block;

  vertical-align: middle;

  margin-right: 15px;

  width: 20px;

  height: 20px;

  border-radius: 50%;

  border: 10px solid #eee;

  background-color: #333333;

}

.radio input[type="radio"]:checked + label:before {

  border-width: 7px;

}

/* Quantity */

.input_qty {

  margin-bottom: 10px;

}

.input_qty input[type="text"] {

  display: none;

}

.input_qty label {

  width: 100%;

  height: 40px;

  border: 1px solid rgba(0, 0, 0, 0.1);

  line-height: 40px;

  text-align: center;

}

.input_qty label > span:not(.output) {

  width: 40px;

  height: 40px;

  float: left;

  border-right: 1px solid rgba(0, 0, 0, 0.1);

  cursor: pointer;

  -webkit-user-select: none;

  -moz-user-select: none;

   -ms-user-select: none;

       user-select: none;

}

.input_qty label > span:not(.output):last-child {

  float: right;

  border-right: 0;

  border-left: 1px solid rgba(0, 0, 0, 0.1);

}

.input_qty label > span:not(.output):hover {

  background-color: rgba(0, 0, 0, 0.02);

}

.input_qty label > output {

  display: inline-block;

  line-height: inherit;

  padding: 0;

}

.input_qty_sm label {

  width: 80px;

  height: 20px;

  border: 0;

  line-height: 20px;

  color: #ccc;

}

.input_qty_sm label > span:not(.output) {

  width: 20px;

  height: 20px;

  border: 0 !important;

}

.input_qty_sm label > span:not(.output):hover {

  background-color: transparent;

  color: #333333;

}

.input_qty_sm label output {

  color: #ccc;

  font-weight: 600;

}

input {

  margin-left: 20px;

}

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











ul {

    list-style-type: none

}



a {

    color: #b63b4d;

    text-decoration: none

}



.accordion {

    width: 100%;

    max-width: 384px;

    margin: 30px auto 20px;

    background:white;

    -webkit-border-radius: 4px;

    -moz-border-radius: 4px;

    border-radius: 0px

}



.accordion .link {

    cursor: pointer;

    display: block;

    padding: 15px 15px 15px 42px;

    color: #DB322B;

    font-size: 18px;

    font-weight: 700;

    border-bottom: 1px solid #CCC;

    position: relative;

    -webkit-transition: all 0.4s ease;

    -o-transition: all 0.4s ease;

    transition: all 0.4s ease;

    font-family: Acumin Variable Concept;

}



.accordion li:last-child .link {

    border-bottom: 0

}



.accordion li i {

    position: absolute;

    top: 16px;

    left: 12px;

    font-size: 22px;

    color: white;

    -webkit-transition: all 0.4s ease;

    -o-transition: all 0.4s ease;

    transition: all 0.4s ease

}



.accordion li i.fa-plus-circle {

    right: 12px;

    color:  #DB322B;

    left: auto;

    font-size: 26px

}

.accordion li.open .link {



    color: #DB322B;



}



.accordion li.open i {

    color: #DB322B;

}



.accordion li.open i.fa-plus-circle {

    -webkit-transform: rotate(180deg);

    -ms-transform: rotate(180deg);

    -o-transform: rotate(180deg);

    transform: rotate(180deg)

}



.submenu {

    display: none;

    background: white;

    font-size: 14px

}



.submenu li {

    border-bottom: 1px solid #4b4a5e

}



.submenu input {

    display: block;

    text-decoration: none;

    color: #DB322B;

    padding: 8px;

    font-size: 18px

    padding-left: 42px;

    -webkit-transition: all 0.25s ease;

    -o-transition: all 0.25s ease;

    transition: all 0.25s ease

}

.submenu a {
    display: block;
    text-decoration: none;
    color: #DB322B;
    font-size: 18px;
    padding: 8px;
    padding-left: 42px;
    -webkit-transition: all 0.25s ease;
    -o-transition: all 0.25s ease;
    transition: all 0.25s ease
}
.submenu a:hover {
    background: #b63b4d;
    color: white
}
.headline{

  color: white

}

.checkbox input{

  background: red;

}


@media(max-width: 768px) {

  .head{

  margin-left: 0px;

  margin-bottom: 30px

}

}

.acc{

  margin-bottom: -30px;

}

.acc .a {

    cursor: pointer;

    display: block;

    padding: 10px 10px 10px 42px;

    color: white;

    background: rgb(225,15,26);

    font-size: 18px;

    font-weight: 700;

    border-bottom: 1px solid #CCC;

    position: relative;

    -webkit-transition: all 0.4s ease;

    -o-transition: all 0.4s ease;

    transition: all 0.4s ease;

}
@media screen and (max-width: 768px){
  .head{
     margin-top: 30px;width: 1000px;margin-bottom: 30px;
  }
  .imgcat{
    width: 40%;
    height: 30%
  }
}
@media screen and (min-width:769px)
{
   .head{
  margin-bottom: 30px;width: 1000px;left: 370px

}
  .imgcat{
    height: 500px;
    width: 100%
  }
  .head{
    margin-bottom: 200px;
  }
}

[type='checkbox'] ~ label:after{left:10px;top:9px;}
</style>

@endsection



@section('content')  


  <section class="bg-white hero-4 no-pg relative head" style="">

    <div class="hero-4__bg" style="background-image: url();">

      <img src="{{$cat->image}}" class="imgcat">

    </div>

    

  </section>  





<div class="sidebar" style="margin-top: -180px;">

  <div class="row">
    @if($cat->id != 13)
    <div class="col-sm-4 col-md-3"  >

      <!-- Filter -->

      <div class="" style="width: 225px">

        <div class="acc">

          <div class="a" style="font-size: 20px;font-family: Acumin Variable Concept Light;font-weight: 36">Filtrer la Recherche</div>

        </div>

        <ul id="accordion" class="accordion">

            <li>

                
              @if($cat->id == 5)
              @isset($attributes)
                  @foreach($attributes as $attribute)
                    @if($attribute->id == 5 || $attribute->id == 8)
                      <div class="link" style="font-family:acumin variable concept;font-weight:40">{{$attribute->name}}
                        <img src="/assets/assets/images/ceramic/plus.png" class="plus" style="height: 23px;width: 23px;float: right">

                      </div>
                      <ul class="submenu">
                          @isset($attribute->options)
                             @foreach($attribute->options as $option)

                             @if($option->category_id == $cat->id)

                              <li>

                                <div class="checkbox">

                                  <input type="checkbox" cat_id="{{$cat->id}}" class="options_checkbox"  opt_id="{{$option->id}}" value=""  id="shop-filter-checkbox_{{$option->name}}" >

                                  <label opt_id="{{$option->id}}" for="shop-filter-checkbox_{{$option->name}}" style="font-family:acumin variable concept;font-weight:30">{{$option->name}}</label>

                                </div>

                              </li>

                              @endif
                            @endforeach
                          @endisset
                      </ul>

                          @endif

                          @endforeach

                        @endisset
              @else
               <div class="link" style="font-family:acumin variable concept;font-weight:40">Matiere

                  <img src="/assets/assets/images/ceramic/plus.png" class="plus" style="height: 23px;width: 23px;float: right">

                </div>
                <ul class="submenu">
                    @isset($categories)
                        @foreach($categories as $key => $category)
                        @if($category->id !=5 || $category->id != 13)
                          <li>
                            <a href="{{route('category',$category->slug)}}" style="font-family:acumin variable concept;">{{$category->name}}</a>
                           </li>
                        @endif
                        @endforeach
                      @endisset
                </ul>

                <div class="link" style="font-family:acumin variable concept;font-weight:40">Marque

                  <img src="/assets/assets/images/ceramic/plus.png" class="plus" style="height: 23px;width: 23px;float: right">

                </div>
                <ul class="submenu">
                    @isset($brands)
                          @foreach($brands as $key => $brand)
                          <li>
                            <div class="checkbox">
                              <input type="checkbox" class="brand_checkbox"  brand_id="{{$brand->id}}" value=""  id="shop-filter-checkbox_{{$brand->name}}" >
                              <label brand_id="{{$brand->id}}" for="shop-filter-checkbox_{{$brand->name}}" style="font-family:acumin variable concept;font-weight:30">{{$brand->name}}</label>
                            </div>
                          </li>
                          @endforeach
                      @endisset
                </ul>

                <div class="link" style="font-family:acumin variable concept;font-weight:40">Effet

                  <img src="/assets/assets/images/ceramic/plus.png" class="plus" style="height: 23px;width: 23px;float: right">

                </div>
                <ul class="submenu">
                    @isset($effets)
                          @foreach($effets as $key => $effet)
                          <li>
                            <div class="checkbox">
                              <input type="checkbox" class="effet_checkbox"  effet_id="{{$effet->id}}" value=""  id="shop-filter-checkbox_{{$effet->name}}" >
                              <label effet_id="{{$effet->id}}" for="shop-filter-checkbox_{{$effet->name}}" style="font-family:acumin variable concept;font-weight:30">{{$effet->name}}</label>
                            </div>
                          </li>
                          @endforeach
                      @endisset
                </ul>


                @isset($attributes)
                  @foreach($attributes as $attribute)
                    @if($attribute->id == 4)
                      <div class="link" style="font-family:acumin variable concept;font-weight:40">{{$attribute->name}}
                        <img src="/assets/assets/images/ceramic/plus.png" class="plus" style="height: 23px;width: 23px;float: right">

                      </div>
                      <ul class="submenu">
                          @isset($attribute->options)
                             @foreach($attribute->options as $option)

                             @if($option->category_id == $cat->id)

                              <li>

                                <div class="checkbox">

                                  <input type="checkbox" cat_id="{{$cat->id}}" class="options_checkbox"  opt_id="{{$option->id}}" value=""  id="shop-filter-checkbox_{{$option->name}}" >

                                  <label opt_id="{{$option->id}}" for="shop-filter-checkbox_{{$option->name}}" style="font-family:acumin variable concept;font-weight:30">{{$option->name}}</label>

                                </div>

                              </li>

                              @endif
                            @endforeach
                          @endisset
                      </ul>

                          @endif

                          @endforeach

                        @endisset
              @endif
            </li>
        </ul>
      </div>
    </div>
    @endif

     @if($cat->id == 13)
      <div class="col-sm-12 col-md-12">
     @else
      <div class="col-sm-8 col-md-9">
     @endif   

      <div class="row ceramic">

          @isset($products)

            @foreach($products as $product)



                <div class="col-sm-6 col-md-4">

                    <div class="shop__thumb">

                        <a href="{{route('product.details',$product->slug)}}">

                            <div class="shop-thumb__img">

                              <img src="{{asset('ceramica/public/assets/images/products/'.$product->image_principale)}}" style="height:250px;" class="img-responsive" alt="{{$product->name}}">

                            </div>

                            <h5 class="shop-thumb__title">

                               {{$product->name}}

                            </h5>

                        </a>

                    </div>

                </div>

              @endforeach

            @endisset



      </div> <!-- / .row -->



      <!-- Pagination -->

      <div class="row">

        <div class="col-sm-12">



          <ul class="pagination pull-right">

           

          </ul>

          

        </div>

      </div> <!-- / .row -->

      

    </div> <!-- / .col-sm-8 -->

  </div> <!-- / .row -->

</div>

@endsection



@section('script')



<script type="text/javascript">

  $(document).ready(function() {

    $(document).on('click', '.category_checkbox', function () {



        var ids = [];



        var counter = 0;

        $('.category_checkbox').each(function () {

            if ($(this).is(":checked")) {

                ids.push($(this).attr('attr_id'));

                

                counter++;

            }

        });



        if (counter == 0) {

            $('.cat').empty();

            $('.ceramic').empty();

            $('.ceramic').append('Aucun produit existe');

        } else {

            fetchCauseAgainstCategory(ids);

        }

    });

   });



  function fetchCauseAgainstCategory(attr_id) {



    $('.ceramic').empty();



    $.ajax({

        type: 'GET',

        url: '/category/get_ceramic/' +attr_id,

        success: function (response) {

            var response = JSON.parse(response);

            console.log(response);

          

            

            if (response.length == 0) {

              $('.ceramic').append('Aucun produit existe');



            } else {

              

               response.forEach(element => {



                   $('.ceramic').append(`



                    <div class="col-sm-6 col-md-4">

                    <div class="shop__thumb">

                        <a href="/product/${element.slug}">

                            <div class="shop-thumb__img">

                              <img style="height:250px;" src="/ceramica/public/assets/images/products/${element.image_principale}">

                            </div>

                            <h5 class="shop-thumb__title">

                               ${element.name}

                            </h5>

                        </a>

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

  $(document).ready(function() {

    $(document).on('click', '.options_checkbox', function () {



        var ids = [];

        var cat = $(this).attr('cat_id');

       

        var counter = 0;

        $('.options_checkbox').each(function () {

            if ($(this).is(":checked")) {

                ids.push($(this).attr('opt_id'));

                

                counter++;

            }

        });



        if (counter == 0) {

            //$('.ceramic').empty();

            $('.ceramic').append('Aucun produit existe');

        } else {

            fetchCauseAgainstoptions(ids,cat);

        }

    });

  });



  function fetchCauseAgainstoptions(opt_id,cat_id) {



    $('.ceramic').empty();



    $.ajax({

        type: 'GET',

        url: '/category/get_ceramic_by_options/' +opt_id+'/'+cat_id,

        success: function (response) {

            var response = JSON.parse(response);

            console.log(response);

          

            

            if (response.length == 0) {

                $('.ceramic').append('Aucun produit existe');

            } else {

               response.forEach(element => {



                   $('.ceramic').append(`



                    <div class="col-sm-6 col-md-4">

                    <div class="shop__thumb">

                        <a href="/product/${element.slug}">

                            <div class="shop-thumb__img">

                              <img style="height:250px;" src="/ceramica/public/assets/images/products/${element.image_principale}">

                            </div>

                            <h5 class="shop-thumb__title">

                               ${element.name}

                            </h5>

                        </a>

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

  $(document).ready(function() {

    $(document).on('click', '.brand_checkbox', function () {



        var ids = [];



        var counter = 0;

        $('.brand_checkbox').each(function () {

            if ($(this).is(":checked")) {

                ids.push($(this).attr('brand_id'));

                

                counter++;

            }

        });



        if (counter == 0) {

            $('.ceramic').empty();

            $('.ceramic').append('Aucun produit existe');

        } else {

            fetchCauseAgainstbrand(ids);

        }

    });

  });



  function fetchCauseAgainstbrand(brand_id) {



    $('.ceramic').empty();



    $.ajax({

        type: 'GET',

        url: '/category/get_ceramic_by_brand/' +brand_id,

        success: function (response) {

            var response = JSON.parse(response);

            console.log(response);

          

            

            if (response.length == 0) {

                $('.ceramic').append('Aucun produit existe');

            } else {

               response.forEach(element => {



                   $('.ceramic').append(`



                    <div class="col-sm-6 col-md-4">

                    <div class="shop__thumb">

                        <a href="/product/${element.slug}">

                            <div class="shop-thumb__img">

                              <img style="height:250px;" src="/ceramica/public/assets/images/products/${element.image_principale}">

                            </div>

                            <h5 class="shop-thumb__title">

                               ${element.name}

                            </h5>

                        </a>

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

  $(document).ready(function() {

    $(document).on('click', '.effet_checkbox', function () {



        var ids = [];



        var counter = 0;

        $('.effet_checkbox').each(function () {

            if ($(this).is(":checked")) {

                ids.push($(this).attr('effet_id'));

                

                counter++;

            }

        });



        if (counter == 0) {

            $('.ceramic').empty();

            $('.ceramic').append('Aucun produit existe');

        } else {

            fetchCauseAgainsteffet(ids);

        }

    });

  });



  function fetchCauseAgainsteffet(effet_id) {



    $('.ceramic').empty();



    $.ajax({

        type: 'GET',

        url: '/effet/get_ceramic_by_effet/' +effet_id,

        success: function (response) {

            var response = JSON.parse(response);

            console.log(response);

          

            

            if (response.length == 0) {

                $('.ceramic').append('Aucun produit existe');

            } else {

               response.forEach(element => {



                   $('.ceramic').append(`



                    <div class="col-sm-6 col-md-4">

                    <div class="shop__thumb">

                        <a href="/product/${element.slug}">

                            <div class="shop-thumb__img">

                              <img style="height:250px;" src="/ceramica/public/assets/images/products/${element.image_principale}">

                            </div>

                            <h5 class="shop-thumb__title">

                               ${element.name}

                            </h5>

                        </a>

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

 $(function() {

var Accordion = function(el, multiple) {

this.el = el || {};

this.multiple = multiple || false;



var links = this.el.find('.link');



links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)

}



Accordion.prototype.dropdown = function(e) {

var $el = e.data.el;

$this = $(this),

$next = $this.next();



$next.slideToggle();

$this.parent().toggleClass('open');



if (!e.data.multiple) {

$el.find('.submenu').not($next).slideUp().parent().removeClass('open');

};

}



var accordion = new Accordion($('#accordion'), false);

});

</script>

@endsection