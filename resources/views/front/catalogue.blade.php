@extends('layouts.site')



@section('title')

	Tout les catalogues

@endsection



@section('style')

 

<style type="text/css">

@media screen and (max-width:993px)

{



}

@media screen and (min-width:993px)

{

	.cat{

		margin-left: 100px;

	}

}
.categorie-title{
	margin-bottom: 30px;
}
.categorie-catalogue{
	margin-bottom: 30px;
	margin-bottom: 20px;
}
.catalogue{
	margin-bottom: 20px;
}

</style>

@endsection



@section('content')             



<section class="home_page sidebar">

	<div class="container" style="margin-top: 30px;margin-bottom: 100px">

		<div class="row">

			<div class="col-md-12">

				<img src="{{asset('assets/assets/images/ceramic/catalogues/logo1.png')}}" style="float: right;width: 50%">

			</div>

		</div>

	</div>

	<div class="container categorie-title">

		<div class="row">
 
			<div class="col-md-12 categorie-catalogue">

				<img src="{{asset('assets/assets/images/ceramic/catalogues/pamessa.png')}}" style="width: 20%">

			</div>

			<div class="cat">

			@isset($pamesas)

			@foreach($pamesas as $catalogue) 

			<div class="col-md-4 col-sm-6 col-xs-6 catalogue">

				<a href="{{$catalogue->file}}" target="_blank">

					<img src="{{$catalogue->image}}" style="height: 40%;width: 60%">

				</a>

			</div>

			@endforeach

			@endisset

			</div>

		</div>

	</div>

	<!--div class="container categorie-title">

		<div class="row">

			<div class="col-md-12 categorie-catalogue">

				<img src="{{asset('assets/assets/images/ceramic/catalogues/saninduza.png')}}" style="width: 30%">

			</div>

			<div class="cat">

			@isset($saninduzas)

			@foreach($saninduzas as $catalogue) 

			<div class="col-md-4 col-sm-6 col-xs-6 catalogue">

				<a href="{{$catalogue->file}}" target="_blank">

					<img src="{{$catalogue->image}}" style="height: 40%;width: 60%">

				</a>

			</div>

			@endforeach

			@endisset

			</div>

		</div>

	</div-->

	<div class="container categorie-title">

		<div class="row">

			<div class="col-md-12 categorie-catalogue">

				<img src="{{asset('assets/assets/images/ceramic/catalogues/ab.png')}}" style="width: 20%">

			</div>

			<div class="cat">

			@isset($abs)

			@foreach($abs as $catalogue) 

			<div class="col-md-4 col-sm-6 col-xs-6 catalogue">

				<a href="{{$catalogue->file}}" target="_blank">

					<img src="{{$catalogue->image}}" style="height: 40%;width: 60%">

				</a>

			</div>

			@endforeach

			@endisset

			</div>

		</div>

	</div>

	<div class="container categorie-title">

		<div class="row">

			<div class="col-md-12 categorie-catalogue">

				<img src="{{asset('assets/assets/images/ceramic/catalogues/eco.png')}}" style="width: 20%">

			</div>

			<div class="cat">

			@isset($ecos)

			@foreach($ecos as $catalogue) 

			<div class="col-md-4 col-sm-6 col-xs-6 catalogue">

				<a href="{{$catalogue->file}}" target="_blank">

					<img src="{{$catalogue->image}}" style="height: 40%;width: 60%">

				</a>

			</div>

			@endforeach

			@endisset

			</div>

		</div>

	</div>

	<div class="container categorie-title">

		<div class="row">

			<div class="col-md-12 categorie-catalogue">

				<img src="{{asset('assets/assets/images/ceramic/catalogues/argenta.png')}}"style="width: 20%">

			</div>

			<div class="cat">

			@isset($argentas)

			@foreach($argentas as $catalogue) 

			<div class="col-md-4 col-sm-6 col-xs-6 catalogue">

				<a href="{{$catalogue->file}}" target="_blank">

					<img src="{{$catalogue->image}}" style="height: 40%;width: 60%">

				</a>

			</div>

			@endforeach

			@endisset

			</div>

		</div>

	</div>

	<div class="container categorie-title">

		<div class="row">

			<div class="col-md-12 categorie-catalogue">

				<img src="{{asset('assets/assets/images/ceramic/catalogues/onix.png')}}" style="width: 20%">

			</div>

			<div class="cat">

			@isset($onixs)

			@foreach($onixs as $catalogue) 

			<div class="col-md-4 col-sm-6 col-xs-6 catalogue">

				<a href="{{$catalogue->file}}" target="_blank">

					<img src="{{$catalogue->image}}" style="height: 40%;width: 60%">

				</a>

			</div>

			@endforeach

			@endisset

			</div>

		</div>

	</div>

	<div class="container categorie-title">

		<div class="row">

			<div class="col-md-12 categorie-catalogue">

				<img src="{{asset('assets/assets/images/ceramic/catalogues/BANHOAZIS.png')}}" style="width: 20%">

			</div>

			<div class="cat">

			@isset($BANHOAZIS)

			@foreach($BANHOAZIS as $catalogue) 

			<div class="col-md-4 col-sm-6 col-xs-6 catalogue">

				<a href="{{$catalogue->file}}" target="_blank">

					<img src="{{$catalogue->image}}" style="height: 40%;width: 60%">

				</a>

			</div>

			@endforeach

			@endisset

			</div>

		</div>

	</div>


</section>



      

@endsection



@section('script')



@endsection