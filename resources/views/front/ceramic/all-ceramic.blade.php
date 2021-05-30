@extends('layouts.site')



@section('title')

	Tout ls produits

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

  padding: 10px;

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

</style>

@endsection



@section('content')  

<div class="sidebar">

  <div class="row">

    <div class="col-sm-4 col-md-3">

      <!-- Filter -->

      <form class="shop__filter">

        <!-- Price -->

         <!-- Checkboxes -->

         @isset($categories)

        <h3 class="headline">

          <span>Categories</span>

        </h3>

	        @foreach($categories as $key => $category)

	        <div class="checkbox">

	          <input type="checkbox" attr_id="{{$category->id}}" attr-name="{{$category->name}}"

	           value="" id="shop-filter-checkbox_{{$category->name}}" class="category_checkbox" 

             @isset($cat) @if($cat->id == $category->id) checked @endif @endisset>

	          <label attr-id="{{$category->id}}" for="shop-filter-checkbox_{{$category->name}}">{{$category->name}}</label>

	        </div>

	        @endforeach

	        <div class="checkbox">

	          <input type="checkbox" attr_id="0"

	           value="" id="shop-filter-checkbox_0" class="category_checkbox">

	          <label attr-id="0" for="shop-filter-checkbox_0">Tout</label>

	        </div>

        @endisset



        <!-- Checkboxes -->

       @isset($brands)

        <h3 class="headline">

          <span>Marques</span>

        </h3>

	        @foreach($brands as $key => $brand)

	        <div class="checkbox">

	          <input type="checkbox" class="brand_checkbox"  brand_id="{{$brand->id}}" value=""  id="shop-filter-checkbox_{{$brand->name}}" >

	          <label brand_id="{{$brand->id}}" for="shop-filter-checkbox_{{$brand->name}}">{{$brand->name}}</label>

	        </div>

	        @endforeach

        @endisset



        <!-- Radios -->

        <!-- Checkboxes -->

        @isset($attributes)

        	@foreach($attributes as $attribute)

	        <h3 class="headline">

	          <span>{{$attribute->name}}</span>

	        </h3>

	        @isset($attribute->options)

	           @foreach($attribute->options as $option)

              <div class="checkbox">

                <input type="checkbox" class="options_checkbox"  opt_id="{{$option->id}}" value=""  id="shop-filter-checkbox_{{$option->name}}" >

                <label opt_id="{{$option->id}}" for="shop-filter-checkbox_{{$option->name}}">{{$option->name}}</label>

              </div>

			        

	        	@endforeach

	        @endisset

        	@endforeach

        @endisset

      </form>

    </div>

    

    <div class="col-sm-8 col-md-9">

       

         <hr>

      <div class="row ceramic">

          @isset($products)

      	  	@foreach($products as $product)



      		      <div class="col-sm-6 col-md-4">

				            <div class="shop__thumb">

				                <a href="#">

				                    <div class="shop-thumb__img">

				                      <img src="{{asset('assets/images/products/'.$product->image_principale)}}" style="height:250px;" class="img-responsive" alt="{{$product->name}}">

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

        url: 'get_ceramic/' +attr_id,

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

				                <a href="#">

				                    <div class="shop-thumb__img">

				                      <img style="height:250px;" src="/assets/images/products/${element.image_principale}">

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

            fetchCauseAgainstoptions(ids);

        }

    });

	});



	function fetchCauseAgainstoptions(opt_id) {



    $('.ceramic').empty();



    $.ajax({

        type: 'GET',

        url: 'get_ceramic_by_options/' +opt_id,

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

				                <a href="#">

				                    <div class="shop-thumb__img">

				                      <img style="height:250px;" src="/assets/images/products/${element.image_principale}">

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

        url: 'get_ceramic_by_brand/' +brand_id,

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

				                <a href="#">

				                    <div class="shop-thumb__img">

				                      <img style="height:250px;" src="/assets/images/products/${element.image_principale}">

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

@endsection