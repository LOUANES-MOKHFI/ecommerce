@extends('layouts.admin')
@section('title','Devis')
@section('style')
<style type="text/css">
    .mt-100 {
    margin-top: 20px
}

.modal-content {
    border-radius: 0.7rem
}

@media(width:1024px) {
    .modal-dialog {
        max-width: 1200px
    }
}

.modal-title {
    text-align: center;
    font-size: 3vh;
    font-weight: bold
}

h4 {
    margin-left: auto
}

.modal-header {
    border-bottom: none;
    text-align: center;
    padding-bottom: 0
}

h6 {
    color: rgb(2, 55, 230);
    margin-top: 2vh;
    margin-bottom: 0;
    font-size: 2vh
}

.modal-body {
    padding: 2vh
}

.modal-footer {
    border-top: none;
    justify-content: center;
    padding-top: 0
}

.row {
   
    padding: 2vh 0 2vh 0;
    justify-content: space-between;
    flex-wrap: unset;
    margin: 0
}
.bb{
     border-bottom: 1px solid rgba(0, 0, 0, .2);
}

ul {
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: space-around
}

ul li {
    font-size: 2vh;
    font-weight: bold;
    line-height: 4vh
}

.left {
    float: left;
    font-weight: normal;
    color: rgb(126, 123, 123)
}

.right {
    float: right;
    text-align: right
}


@media(min-width:1025px) {
    img {
        width: 100%
    }
}

.btn {
    background-color: rgb(2, 55, 230);
    border-color: rgb(2, 55, 230);
    color: white;
    width: 90%;
    padding: 2vh;
    margin-top: 0;
    border-radius: 0.7rem;
    box-shadow: none
}

.openmodal {
    background-color: white;
    color: black;
    width: 30vw
}
</style>
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Devis</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">{{__('admin/header.home')}} </a>
                                </li>
                                <li class="breadcrumb-item active">Devis
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
                                    <h4 class="card-title">Devis N° {{$devi->id}}</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                </div>

                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                         <div style="">
                                            <div class=" modal-dialog-centered">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                       
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div> <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class=" bb">

                                                                <div class="col"> 
                                                                    <ul type="none">
                                                                        <li>Wilaya: {{$devi->state->nom}}</li>
                                                                        <li>Commune: {{$devi->communes->nom}}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6>Détails de devi</h6>
                                                            <div class="row bb">
                                                                <div class="col-xs-6">
                                                                    <ul type="none">
                                                                        <li class="left">Devi N°: </li>
                                                                        <li class="left">Date: </li>
                                                                        <li class="left">Nom et prénom:</li>
                                                                        <li class="left">Email:</li>
                                                                        <li class="left">Télèphone:</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <ul class="right" type="none">
                                                                        <li class="right">{{$devi->id}}</li>
                                                                        <li class="right">{{date_format($devi->created_at,'Y-m-d')}}</li>
                                                                        <li class="right">{{$devi->Fname}} - {{$devi->Lname}}</li>
                                                                        <li class="right">{{$devi->email}}</li>
                                                                        <li class="right">{{$devi->phone}}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                             @foreach($details as $detail)
                                                            <h6>Détails de produit</h6>
                                                            <div class="row bb" style="border-bottom: none">
                                                                <div class="col-xs-6">
                                                                    <ul type="none">
                                                                        <img class="img-fluid" src="/ceramica/public/assets/images/products/{{$detail->product->image_principale}}" style="height: 40%;width: 40%">
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                   

                                                                    <ul type="none">
                                                                 
                                                                        <li class="right" style="text-align:left"><span style="color: red"> Produit : </span>{{$detail->product->name}}</li>
                                                                        <li class="right" style="text-align:left"><span style="color: red"> Marque : </span>{{$detail->brand->name}}</li>
                                                                        <li class="right" style="text-align:left"><span style="color: red"> Couleur : </span>{{$detail->color}}</li>
                                                                        <li class="right" style="text-align:left"><span style="color: red"> Format : </span>{{$detail->format}}</li>
                                                                        <li class="right" style="text-align:left"><span style="color: red"> Surfaces : </span>{{$detail->surfaces}}</li>
                                                                        <li class="right" style="text-align:left"><span style="color: red"> Métres carrées : </span>{{$detail->m_carrees}}</li>
                                                                    </ul>
                                                                    
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div> <!-- Modal footer -->
                                                    <div class="modal-footer">Message: <br> {{$devi->message}} </div>
                                                </div>
                                            </div>
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
