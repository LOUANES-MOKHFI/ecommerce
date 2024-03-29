@extends('layouts.admin')

@section('title')

{{__('admin/options.addoption') }}

@endsection



@section('content')



    <div class="app-content content">

        <div class="content-wrapper">

            <div class="content-header row">

                <div class="content-header-left col-md-6 col-12 mb-2">

                    <div class="row breadcrumbs-top">

                        <div class="breadcrumb-wrapper col-12">

                            <ol class="breadcrumb">

                                <li class="breadcrumb-item"><a href="">{{__('admin/header.home')}} </a>

                                </li>

                                <li class="breadcrumb-item"><a href="{{route('admin.options')}}"> {{__('admin/options.all_options') }}  </a>

                                </li>

                                <li class="breadcrumb-item active">{{__('admin/options.addoption') }}

                                </li>

                            </ol>

                        </div>

                    </div>

                </div>

            </div>

            <div class="content-body">

                <!-- Basic form layout section start -->

                <section id="basic-form-layouts">

                    <div class="row match-height">

                        <div class="col-md-12">

                            <div class="card">

                                <div class="card-header">

                                    <h4 class="card-title" id="basic-layout-form">  {{__('admin/options.addoption') }}  </h4>

                                    <a class="heading-elements-toggle"><i

                                            class="la la-ellipsis-v font-medium-3"></i></a>

                                    <div class="heading-elements">

                                        <ul class="list-inline mb-0">

                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>

                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>

                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>

                                            <li><a data-action="close"><i class="ft-x"></i></a></li>

                                        </ul>

                                    </div>

                                </div>

                                @include('admin.includes.alerts.alerts')

                                <div class="card-content collapse show">

                                    <div class="card-body">

                                        <form class="form" action="{{route('admin.options.store')}}"

                                              method="POST"

                                              enctype='multipart/form-data'>

                                            @csrf

                                            <div class="form-body">



                                                <h4 class="form-section"><i class="ft-home"></i>{{__('admin/options.option_information') }} </h4>



                                                       

                                                        <div class="row">

                                                            <div class="col-md-6">

                                                                <div class="form-group">

                                                                    <label for="projectinput1">   {{__('admin/options.name')}} </label>

                                                                    <input type="text" value="{{old('name')}}" id="name"

                                                                           class="form-control"

                                                                           placeholder="  "

                                                                           name="name">

                                                                    @error("name")

                                                                    <span class="text-danger"> {{$message}}  </span>

                                                                    @enderror

                                                                </div>

                                                            </div>

                                                             <div class="col-md-6">

                                                                <div class="form-group">

                                                                    <label for="projectinput1">{{__('admin/options.product')}} </label>

                                                                    <select name="product_id" class="select2 form-control">

                                                                    <optgroup label="{{__('admin/options.choseProduct')}}" >

                                                                    @if($products && $products->count()>0)

                                                                        @foreach($products as $product)

                                                                            <option value="{{$product->id}}">{{$product->slug}}</option>

                                                                        @endforeach

                                                                    @endif

                                                                    </optgroup>

                                                                    </select>

                                                                    @error("product_id")

                                                                    <span class="text-danger"> {{$message}}  </span>

                                                                    @enderror

                                                                </div>

                                                            </div>

                                                             <div class="col-md-6">

                                                                <div class="form-group">

                                                                    <label for="projectinput1">Categorie de produits </label>

                                                                    <select name="category_id" class="select2 form-control">

                                                                    <optgroup label="Chosir la categorie" >

                                                                    @if($categories && $categories->count()>0)

                                                                        @foreach($categories as $category)

                                                                            <option value="{{$category->id}}">{{$category->name}}</option>

                                                                        @endforeach

                                                                    @endif

                                                                    </optgroup>

                                                                    </select>

                                                                    @error("category_id")

                                                                    <span class="text-danger"> {{$message}}  </span>

                                                                    @enderror

                                                                </div>

                                                            </div>

                                                            

                                                            

                                                            

                                                             <div class="col-md-6">

                                                                <div class="form-group">

                                                                    <label for="projectinput1"> Type de l'option</label>

                                                                    <select name="category" class="select2 form-control">

                                                                    <optgroup label="Choisir le type">

                                                                        <option value="1">Céramic</option>

                                                                        <option value="2">Mosaique</option>

                                                                        <option value="3">Salle De Bain</option>

                                                                    </optgroup>

                                                                    </select>

                                                                    @error("category")

                                                                    <span class="text-danger"> {{$message}}</span>

                                                                    @enderror

                                                                </div>

                                                            </div>

                                                            <div class="col-md-6">

                                                                <div class="form-group">

                                                                    <label for="projectinput1"> {{__('admin/options.attribute')}}</label>

                                                                    <select name="attribute_id" class="select2 form-control" id="attr">

                                                                    <optgroup label="{{__('admin/options.choseAttribute')}}">
                                                                        <option>----------------</option>

                                                                    @if($attributes && $attributes->count()>0)

                                                                        @foreach($attributes as $attribute)

                                                                            <option value="{{$attribute->id}}">{{$attribute->name}}</option>

                                                                        @endforeach

                                                                    @endif

                                                                    </optgroup>

                                                                    </select>

                                                                    @error("attribute_id")

                                                                    <span class="text-danger"> {{$message}}</span>

                                                                    @enderror

                                                                </div>

                                                            </div>

                                                            <div class="col-md-6 optimg" style="display: none">

                                                                 <div class="form-group">

                                                                    <label> Image de la couleur  </label>

                                                                    <label id="projectinput7" class="file center-block">

                                                                        <input type="file" id="file" name="img_couleur">

                                                                        <span class="file-custom"></span>

                                                                    </label>

                                                                    @error('img_couleur')

                                                                    <span class="text-danger">{{$message}}</span>

                                                                    @enderror

                                                                </div>

                                                            </div>

                                                             <div class="col-md-6 formatimg" style="display: none">

                                                                 <div class="form-group">

                                                                    <label> Image de Format  </label>

                                                                    <label id="projectinput7" class="file center-block">

                                                                        <input type="file" id="file" name="img_format">

                                                                        <span class="file-custom"></span>

                                                                    </label>

                                                                    @error('img_format')

                                                                    <span class="text-danger">{{$message}}</span>

                                                                    @enderror

                                                                </div>

                                                            </div>

                                                            <div class="col-md-6 finitionimg" style="display: none">

                                                                 <div class="form-group">

                                                                    <label> Image de Finition  </label>

                                                                    <label id="projectinput7" class="file center-block">

                                                                        <input type="file" id="file" name="img_finition">

                                                                        <span class="file-custom"></span>

                                                                    </label>

                                                                    @error('img_finition')

                                                                    <span class="text-danger">{{$message}}</span>

                                                                    @enderror

                                                                </div>

                                                            </div>
                                                       

                                                           

                                                        </div>

                                            </div>





                                            <div class="form-actions">

                                            <button type="button" class="btn btn-warning mr-1"

                                                        onclick="history.back();">

                                                    <i class="ft-x"></i> {{__('admin/content.back')}}

                                                </button>

                                                <button type="submit" class="btn btn-primary">

                                                    <i class="la la-check-square-o"></i> {{__('admin/content.save')}}

                                                </button>

                                            </div>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

                <!-- // Basic form layout section end -->

            </div>

        </div>

    </div>



@endsection



@section('script')

    <script type="text/javascript">

       $('#attr').on('change',function(e){

                console.log(e);

                var module = e.target.value;

               

               if(module == 2){

                    $('.optimg').show();

               }else{

                    $('.optimg').hide();

               }





              });



    </script>
 


     <script type="text/javascript">

       $('#attr').on('change',function(e){

                console.log(e);

                var module = e.target.value;

               

               if(module == 3){

                    $('.formatimg').show();

               }else{

                    $('.formatimg').hide();

               }





              });



    </script>

    <script type="text/javascript">

       $('#attr').on('change',function(e){

                console.log(e);

                var module = e.target.value;

               

               if(module == 7){

                    $('.finitionimg').show();

               }else{

                    $('.finitionimg').hide();

               }





              });



    </script>

    

@endsection

