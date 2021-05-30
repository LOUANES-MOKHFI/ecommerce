@extends('layouts.site')



@section('title')

	Tout les Videos

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
			@isset($videos)
			   @foreach($videos as $video)
					<div class="col-md-4">

						<video width="" height="220" controls>
						  <source src="{{$video->video}}" type="video/mp4">
							  {{$video->title}}
						</video>
						<h6>{{$video->title}}</h6>

					</div>
				@endforeach
			@endisset

		</div>

	</div>


</section>



      

@endsection



@section('script')



@endsection