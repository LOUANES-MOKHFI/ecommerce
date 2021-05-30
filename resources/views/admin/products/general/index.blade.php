@extends('layouts.admin')
@section('title')
{{__('admin/products.all_products')}}

@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">{{__('admin/products.all_products') }}</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">{{__('admin/header.home')}} </a>
                                </li>
                                <li class="breadcrumb-item active">{{__('admin/products.all_products')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body"> 
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-4"><h4 class="card-title">{{__('admin/products.all_products') }}</h4></div>
                                         <div class="col-md-4"><a href="{{route('admin.products.general.create')}}" class="btn btn-outline-info">
                                            Ajouter un produit
                                        </a></div>
                                        <div class="col-md-4"><a href="{{route('admin.products.detail')}}" class="btn btn-outline-warning">
                                            détail des produit
                                        </a></div>
                                    </div>
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
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <tr>
                                                <th>{{__('admin/products.image') }}</th>
                                                <th>{{__('admin/products.product')}} </th>
                                                <th>{{__('admin/products.slug')}}</th>
                                                <th>{{__('admin/products.status')}}</th>
                                                <th>{{__('admin/products.action')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($products)
                                                @foreach($products as $product)
                                                    <tr>
                                                        <td> <img style="width: 150px; height: 100px;" src="{{asset('ceramica/public/assets/images/products/'.$product->image_principale)}}"></td>
                                                        <td>{{$product -> name}}<br>
                                                         <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">Modifier</a>
                                                        </td>
                                                        <td>{{$product -> slug}}</td>
                                                        <td>{{$product->getActive()}}</td>

                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">

                                                                <a href="{{route('admin.products.images',$product -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{__('admin/products.images') }}</a>

                                                                <a href="{{route('admin.products.delete',$product -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Supprimer</a>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset
                                           

                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">
                                     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
