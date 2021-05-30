@extends('layouts.admin')
@section('title','Contact')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">message N:  {{$contact->id}} </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">{{__('admin/header.home')}} </a>
                                </li>
                                <li class="breadcrumb-item active">message N:  {{$contact->id}}
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
                                    <h4 class="card-title">message N:  {{$contact->id}}</h4>
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


                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <div class="row">
                                        	<div class="col-md-6">Nom et prénom</div>
                                        	<div class="col-md-6">{{$contact->nom}} {{$contact->prenom}}</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-6">Wilaya / commune</div>
                                        	<div class="col-md-6">{{$contact->state->nom}}/{{$contact->communes->nom}}</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-6">Adress</div>
                                        	<div class="col-md-6">{{$contact->adress}}</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-6">Email</div>
                                        	<div class="col-md-6">{{$contact->email}}</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-6">Tél / Fax</div>
                                        	<div class="col-md-6">{{$contact->phone}} / {{$contact->fax ?? ''}}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">Me contacter par</div>
                                            <div class="col-md-6">
                                                @if($contact->typecontact ==1) Télèphone @endif
                                                @if($contact->typecontact ==2) Fax @endif
                                                @if($contact->typecontact ==3) Email @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-12">Message</div>
                                        	<div class="col-md-6">{{$contact->message}}</div>
                                        </div>
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
