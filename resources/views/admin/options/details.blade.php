@extends('layouts.admin')
@section('title')
{{$option->name}}
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">{{__('admin/options.all_options') }}</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">{{__('admin/header.home')}} </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.options')}}">{{__('admin/options.all_options')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{$option->name}}
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
                                        <div class="col-md-6">
                                             <h4 class="card-title">{{$option->name}}</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-outline-primary" href="{{route('admin.options.details.create',$option -> id)}}" data-i18n="nav.dash.crypto">Ajouter une details </a>
                                        </div>
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
                                                <th>ID</th>
                                                <th>Details</th>
                                                <th>Options </th>
                                                <th>{{__('admin/options.attribute')}} </th>
                                                <th>{{__('admin/options.action')}}</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($details)
                                                @foreach($details as $key => $detail)
                                                    <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{{$detail->name}}</td>
                                                        <td>{{$detail ->name}}</td>
                                                        <td>{{$option -> attribute ->name}}</td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.options.details.edit',$detail->id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">{{__('admin/options.edit') }}</a>


                                                                <a href="{{route('admin.options.details.delete',$detail -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{__('admin/options.delete') }}</a>
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
