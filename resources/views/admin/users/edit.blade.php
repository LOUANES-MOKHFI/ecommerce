@extends('layouts.admin')
@section('title','Modifier un uitilisateur')

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
                                <li class="breadcrumb-item"><a href=""> {{__('admin/users.all_users') }} </a>
                                </li>
                                <li class="breadcrumb-item active"> {{__('admin/users.edit') }} - {{$user -> name}}
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
                                    <h4 class="card-title" id="basic-layout-form"> {{__('admin/users.edituser') }} </h4>
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
                                              action="{{route('admin.users.update',$user -> id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <input name="id" value="{{$user -> id}}" type="hidden">
                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i>{{__('admin/users.user_information') }} </h4>
                                               
                                                <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">   {{__('admin/users.name')}} </label>
                                                                    <input type="text" value="{{$user->name}}" id="name"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           name="name">
                                                                    @error("name")
                                                                    <span class="text-danger"> {{$message}}  </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> {{__('admin/users.email')}}</label>
                                                                    <input type="email" id="abbr"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           value="{{$user->email}}"
                                                                           name="email">

                                                                    @error("email")
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> {{__('admin/users.role')}}</label>
                                                                    <select class="form-control select2" name="role_id">
                                                                        <optgroup label=" {{__('admin/users.choserole')}}">
                                                                        @if($roles && $roles->count()>0) 
                                                                            @foreach($roles as $role)
                                                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                                            @endforeach
                                                                            @endif
                                                                        </optgroup>
                                                                    </select>

                                                                    @error("role_id")
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-1">
                                                                <label for="projectinput1"> {{__('admin/users.password')}}</label>
                                                                <input type="password" id="abbr"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           value=""
                                                                           name="password">

                                                                    @error("password")
                                                                        <span class="text-danger"> </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-1">
                                                                <label for="projectinput1"> {{__('admin/users.confirmPassword')}}</label>
                                                                <input name="password_confirmation" type="password"
                                                                           class="form-control"
                                                                           placeholder="  ">
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
