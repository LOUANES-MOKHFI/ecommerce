@extends('layouts.admin')
@section('title','Modifier une catalogue')

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
                                <li class="breadcrumb-item"><a href=""> Tout les catalogues </a>
                                </li>
                                <li class="breadcrumb-item active"> {{__('admin/category.edit') }} 
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
                                    <h4 class="card-title" id="basic-layout-form"> Modifier un catalogue </h4>
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
                                        <form class="form"
                                              action="{{route('admin.catalogues.update',$catalogue -> id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <input name="id" value="{{$catalogue -> id}}" type="hidden">

                                            <div class="form-group">
                                                <div class="text-center">
                                                    <img
                                                        src="{{$catalogue -> image}}"
                                                        class="rounded-circle  height-150" alt="{{__('admin/brands.image') }}">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label> {{__('admin/brands.image') }}  </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="image">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('image')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i>{{__('admin/brands.brands_information') }} </h4>
                                                <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">  Titre </label>
                                                                    <input type="text" value="{{$catalogue->title}}" id="name"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           name="title">
                                                                    @error("title")
                                                                    <span class="text-danger"> {{$message}}  </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label> Catalogue PDF  </label>
                                                                    <label id="projectinput7" class="file center-block">
                                                                        <input type="file" id="file" name="file">
                                                                        <span class="file-custom"></span>
                                                                    </label>
                                                                    @error('file')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> Marque</label>
                                                                    <select class="form-control" name="brand_id">
                                                                        <option value="">--Marque --</option>
                                                                        <optgroup label="Choisir la marque">
                                                                            @isset($brands)
                                                                            @foreach($brands as $brand)
                                                                                <option value="{{$brand->id}}" @if($brand->id == $catalogue->brand_id) checked @endif>{{$brand->name}}</option>
                                                                            @endforeach
                                                                            @endisset
                                                                        </optgroup>
                                                                    </select>

                                                                    @error("brand_id")
                                                                    <span class="text-danger"> {{$message}}</span>
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
@endsection
