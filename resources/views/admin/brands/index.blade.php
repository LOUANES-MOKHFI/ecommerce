@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">{{__('admin/brands.all_brands') }}</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">{{__('admin/header.home')}} </a>
                                </li>
                                <li class="breadcrumb-item active">{{__('admin/brands.all_brands')}}
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
                                    <h4 class="card-title">{{__('admin/brands.all_brands') }}</h4>
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
                                                <th>{{__('admin/brands.image') }}</th>
                                                <th>{{__('admin/brands.brands')}} </th>
                                                <th>{{__('admin/brands.status')}}</th>
                                                <th>{{__('admin/brands.action')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($brands)
                                                @foreach($brands as $brand)
                                                    <tr>
                                                        <td> <img style="width: 150px; height: 100px;" src="{{$brand->photo}}"></td>
                                                        <td>{{$brand -> name}}</td>
                                                        <td>{{$brand -> getActive()}}</td>

                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.brands.edit',$brand -> id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">{{__('admin/category.edit') }}</a>


                                                                <a href="{{route('admin.brands.delete',$brand -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{__('admin/category.delete') }}</a>


                                                                <a href="{{route('admin.brands.changeStatus',$brand -> id)}}"
                                                                   class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                                                                    @if($brand -> is_active == 0)
                                                                    {{__('admin/category.activer') }}
                                                                        @else
                                                                    {{__('admin/category.desactiver') }}
                                                                    @endif
                                                                </a>


                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset

                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">
                                        {{$brands->links()}}

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
