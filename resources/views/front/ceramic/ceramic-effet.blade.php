
@extends('layouts.site')

@section('title')
  {{$effet->name}}
@endsection

@section('style')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<style type="text/css">



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

<div class="sidebar" style="margin-top: 100px;">
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="container"> 
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
    </div>

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
            fetchCauseAgainsteffet(ids);
        }
    });
  });

  function fetchCauseAgainsteffet(brand_id) {

    $('.ceramic').empty();

    $.ajax({
        type: 'GET',
        url: '/Effet/get_ceramic_by_effet/' +brand_id,
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