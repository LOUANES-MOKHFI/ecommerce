@extends('layouts.admin')
@section('title')
{{$product->name}}
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
                                <li class="breadcrumb-item"><a href=""> {{__('admin/products.all_products') }}  </a>
                                </li>
                                <li class="breadcrumb-item active">{{$product->name}}
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
                                    <h4 class="card-title" id="basic-layout-form">  {{$product->name}}  </h4>
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
                                        <form class="form" action="{{route('admin.products.update',$product->id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <img style="width: 150px; height: 100px;" src="{{asset('assets/images/products/'.$product->image_principale)}}">
                                            <!--div class="form-group">
                                                <label> {{__('admin/category.image') }}  </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="photo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div-->
                                            <input type="hidden" name="id" value="{{$product->id}}">

                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i>{{__('admin/products.product_information') }} </h4>

                                                     <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">   {{__('admin/products.product')}} </label>
                                                                    <input type="file" 
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           name="image_principale">
                                                                    @error("image_principale")
                                                                    <span class="text-danger"> {{$message}}  </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">   {{__('admin/products.product')}} </label>
                                                                    <input type="text" value="{{$product->name}}" id="name"
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
                                                                    <label for="projectinput1"> {{__('admin/products.slug')}}</label>
                                                                    <input type="text" id="abbr"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           value="{{$product->slug}}"
                                                                           name="slug">

                                                                    @error("slug")
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">{{__('admin/products.choseCategory')}} </label>
                                                                    <select name="categories[]" class="select2 form-control" multiple>

                                                                    <optgroup label="{{__('admin/products.choseCategory')}}" >
                                                                    @if($categories && $categories->count()>0)
                                                                        @foreach($categories as $category)
                                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                    </optgroup>
                                                                    </select>
                                                                    @error("categories.0")
                                                                    <span class="text-danger"> {{$message}}  </span>
                                                                    @enderror
                                                                </div>
                                                            </div>


                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> {{__('admin/products.chosetags')}}</label>
                                                                    <select name="tags[]" class="select2 form-control" multiple>
                                                                    <optgroup label="{{__('admin/products.chosetags')}}">
                                                                    @if($tags && $tags->count()>0)
                                                                        @foreach($tags as $tag)
                                                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                    </optgroup>
                                                                    </select>
                                                                    @error("tags")
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> {{__('admin/products.chosebrands')}}</label>
                                                                    <select name="brand_id" class="select2 form-control">
                                                                    <optgroup label="{{__('admin/products.chosetags')}}">
                                                                    @if($brands && $brands->count()>0)
                                                                        @foreach($brands as $brand)
                                                                            <option value="{{$brand->id}}" @if($product->brand->name == $brand->name) selected @endif>@if($product->brand->name == $brand->name) {{$brand->name}} @endif</option>
                                                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                    </optgroup>
                                                                    </select>

                                                                    @error("brand_id")
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
                                                                           @if($product->is_active == 1) checked @endif/>
                                                                    <label for="switcheryColor4"
                                                                           class="card-title ml-1"> {{__('admin/products.status')}} </label>

                                                                    @error("is_active")
                                                                        <span class="text-danger"> </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">   {{__('admin/products.description')}} </label>
                                                                    <textarea class="form-control"
                                                                           placeholder="  "
                                                                           name="description">{{$product->description}}
                                                                    </textarea>
                                                                    @error("description")
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
