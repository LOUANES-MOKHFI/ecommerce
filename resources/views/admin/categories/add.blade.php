@extends('layouts.admin')
@section('title','Ajouter un categorie')

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
                                <li class="breadcrumb-item"><a href=""> {{__('admin/category.all_category') }}  </a>
                                </li>
                                <li class="breadcrumb-item active">{{__('admin/category.addcategory') }}
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
                                    <h4 class="card-title" id="basic-layout-form">  {{__('admin/category.addcategory') }}  </h4>
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
                                        <form class="form" action="{{route('admin.maincategories.store')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label> {{__('admin/category.image') }}  </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="image">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('image')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i>{{__('admin/category.category_information') }} </h4>

                                              
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">   {{__('admin/category.category')}} </label>
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
                                                                    <label for="projectinput1"> {{__('admin/category.slug')}}</label>
                                                                    <input type="text" id="abbr"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           value="{{old('slug')}}"
                                                                           name="slug">

                                                                    @error("slug")
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-1">
                                                                    <input type="checkbox" value="1"
                                                                           name="is_active"
                                                                           id="switcheryColor4"
                                                                           class="switchery" data-color="success"
                                                                           checked/>
                                                                    <label for="switcheryColor4"
                                                                           class="card-title ml-1"> {{__('admin/category.status')}} </label>

                                                                    @error("is_active")
                                                                        <span class="text-danger"> </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        
                                                                <div class="col-md-3">
                                                                    <div class="form-group mt-1">
                                                                    <input type="radio" value="1"
                                                                           name="type"
                                                                           id="switcheryColor4"
                                                                           class="switchery" data-color=""
                                                                           checked/>
                                                                    <label for="switcheryColor4"
                                                                           class="card-title ml-1"> {{__('admin/category.maincategory')}} </label>

                                                                    @error("type")
                                                                        <span class="text-danger"> </span>
                                                                    @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group mt-1">
                                                                    <input type="radio" value="2"
                                                                           name="type"
                                                                           id="switcheryColor4"
                                                                           class="switchery" data-color=""
                                                                           />
                                                                    <label for="switcheryColor4"
                                                                           class="card-title ml-1"> {{__('admin/category.subcategory')}} </label>

                                                                    @error("type")
                                                                        <span class="text-danger"> </span>
                                                                    @enderror
                                                                    </div>
                                                                </div>
                                                        </div>
                                            </div>
                                            <div class="col-md-12 hidden" id="cats_list">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">   {{__('admin/category.category')}} </label>
                                                                    <select name="parent_id" class="select2 form-control">
                                                                    <optgroup label="{{__('admin/category.chosecategory')}}">
                                                                    @if($categories && $categories->count()>0)
                                                                        @foreach($categories as $category)
                                                                            <option value="{{$category->id}}">
                                                                                {{$category->name}}
                                                                            </option>
                                                                        @endforeach
                                                                    @endif
                                                                    </optgroup>
                                                                    </select>
                                                                    @error("parent_id")
                                                                    <span class="text-danger"> {{$message}}  </span>
                                                                    @enderror
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

   <script>
        $('input:radio[name="type"]').change(
            function(){
                if(this.checked && this.value == '2'){
                    $('#cats_list').removeClass('hidden');
                }
                else{
                    $('#cats_list').addClass('hidden');
                }
            });
   </script>
@endsection
