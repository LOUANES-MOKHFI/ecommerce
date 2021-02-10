@extends('layouts.admin')
@section('title','Modifier un role')

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
                                <li class="breadcrumb-item"><a href=""> {{__('admin/roles.all_roles') }} </a>
                                </li>
                                <li class="breadcrumb-item active"> {{__('admin/roles.edit') }} - {{$role -> name}}
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
                                    <h4 class="card-title" id="basic-layout-form"> {{__('admin/roles.editrole') }} </h4>
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
                                              action="{{route('admin.roles.update',$role -> id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <input name="id" value="{{$role -> id}}" type="hidden">
                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i>{{__('admin/roles.roles_information') }} </h4>
                                               
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('admin/roles.name')}}</label>
                                                            <input type="text" id="name"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{$role -> name}}"
                                                                   name="name">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    

                                                </div>
                                                <div class="row">
                                                            @foreach(Config('global.permissions') as $name=> $value)
                                                            <div class="form-group col-sm-4">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" class="chk-box" name="permissions[]" value="{{$name}}" {{in_array($name, $role->permissions)? 'checked' : ''}}> {{$value}}
                                                                </label>
                                                            </div>
                                                            @endforeach
                                                            @error('categories.0')
                                                               <span class="text-danger">{{$message}}</span>
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
