@extends('layouts.admin')
@section('title')
Commande

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
                                <li class="breadcrumb-item active">Commandes
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
                                    <h4 class="card-title">Commandes</h4>
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
                                                <th>Client </th>
                                                <th>Mobile</th>
                                                <th>Wilaya</th>
                                                <th>Etat</th>
                                                <th>Actions</th>                                                
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($commandes)
                                                @foreach($commandes as $commande)
                                                    <tr>
                                                        <td>{{$commande ->id}}</td>
                                                        <td>{{$commande ->user->name}}</td>
                                                        <td>{{$commande ->mobile}}</td>
                                                        <td>{{$commande ->state->name}}</td>
                                                        <td>
                                                        @if($commande->status == 1)
                                                            <p class="btn btn-info">En Attente</p>
                                                        @elseif($commande->status == 2)
                                                            <p class="btn btn-warning">En Traitement</p>
                                                        @elseif($commande->status == 3)
                                                            <p class="btn btn-success">Confirmer</p>
                                                        @elseif($commande->status == 4)
                                                            <p class="btn btn-danger">Réfuser</p>
                                                        @endif
                                                        </td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a class="btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1" href="{{route('admin.orders.show',$commande->id)}}">Afficher</a>
                                                                <button
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1" data-id="{{$commande->id}}" data-toggle="modal" data-target="#change">Changer l'etat</button>


                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset
                                           

                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">
                                        {{$commandes->links()}}

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

    <div class="modal fade" id="change" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Changer l'etat  </h4>
      </div>
      <form method="post" action="{{route('admin.orders.changeStatus')}}" class="mb-0"   text-align="justify" style="font-size: 20px">
          @csrf

            <div class="modal-body">
              <input type="hidden" name="id" id="id">
              <select name="status" class="form-control">
                <optgroup label="Chose your status">
                  <option value="1">En attente</option>
                  <option value="2">En Traitement</option>
                  <option value="3">Terminer</option>
                  <option value="4">Réfuser</option>
                </optgroup>
              </select>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="submit" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Change</button>
              </div>
        </form>
    </div>
  </div>

</div>
@endsection

@section('script')
<script type="text/javascript">
  $('#change').on('show.bs.modal',function(event){
    var button = $(event.relatedTarget)
    var id = button.data('id')

    var modal = $(this)
    modal.find('.modal-body #id').val(id);
  });
</script>

@endsection