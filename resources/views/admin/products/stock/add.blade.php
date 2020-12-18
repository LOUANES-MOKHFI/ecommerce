@extends('layouts.admin')
@section('title')
{{__('admin/sidebar.addproduct')}}
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
                                <li class="breadcrumb-item active">{{__('admin/sidebar.addproduct') }}
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
                                    <h4 class="card-title" id="basic-layout-form">  {{__('admin/sidebar.addproduct') }}  </h4>
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
                                        <form class="form" action="{{route('admin.products.stock.store')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{$product->id}}" name="product_id">
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

                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i>{{__('admin/products.stockInformation') }} </h4>

                                              
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> {{__('admin/products.codeProduct')}}</label>
                                                                    <input type="text" id="abbr"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           value="{{$product->sku}}"
                                                                           name="sku">

                                                                    @error("sku")
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">   {{__('admin/products.track')}} </label>
                                                                    <select id="manageStock" name="manage_stock" class="select2 form-control">
                                                                    <optgroup label="{{__('admin/products.chosetype')}}" >
                                                                        <option value="1">{{__('admin/products.manageStock')}}</option>
                                                                        <option value="0" selected>{{__('admin/products.dontmanageStock')}}</option>
                                                                    </optgroup>
                                                                    </select>
                                                                    @error("manage_stock")
                                                                    <span class="text-danger"> {{$message}}  </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> {{__('admin/products.stockStatus')}}</label>
                                                                    <select name="in_stock" class="select2 form-control">
                                                                    <optgroup label="{{__('admin/products.choseStatus')}}" >
                                                                        <option value="1">{{__('admin/products.available')}}</option>
                                                                        <option value="0">{{__('admin/products.unavailable')}}</option>
                                                                    </optgroup>
                                                                    </select>
                                                                    @error("in_stock")
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="display:none" id="qty">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> {{__('admin/products.qty')}}</label>
                                                                    <input type="number" id="abbr"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           value="{{$product->qty}}"
                                                                           name="qty">

                                                                    @error("qty")
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
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

   <script>
        $(document).on('change','#manageStock',function(){
            //alert($this.val());
            if(this.value == '1'){
                    $('#qty').show();
                }
                else{
                    $('#qty').hide();
                }
        });

   </script>
@endsection
