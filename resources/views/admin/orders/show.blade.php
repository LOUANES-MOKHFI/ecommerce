@extends('layouts.admin')
@section('title')
Commande

@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Tout les commandes</h3>
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
                                <div class="card-header row">
                                    <div class="col-md-6">
                                        <h4 class="card-title"><span style="color: green">Commandes N :</span> {{$commande->id}}</h4>
                                        <h4 class="card-title"><span style="color: green">Code :</span> {{$commande->code}}</h4>
                                        <h4 class="card-title"><span style="color: green">Nom et prénom :</span> {{$commande->user->name}}</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title"><span style="color: green">Email :</span> {{$commande->user->email}}</h4>
                                        <h4 class="card-title"><span style="color: green">Mobile :</span> {{$commande ->mobile}}</h4>
                                        <h4 class="card-title"><span style="color: green">Adress :</span> {{$commande ->state->name}} - {{$commande ->commune}}</h4>
                                        
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
                                            class="table display nowrap table-striped table-bordered">
                                            <thead class="">
                                            <tr>
                                                <th class="cart-description item">Image</th>
                                                <th class="cart-product-name item">Produit</th>
                                                <th class="cart-qty item">Quantitie</th>
                                                <th class="cart-sub-total item">prix</th>
                                                <th class="cart-total last-item">total</th>                                             
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($commande->orders)
                                                 @foreach($commande->orders as $product)
                                                    <tr>
                                                        <td class="cart-image">
                                                                <img src="{{getProduct($product->product_id) -> images[0] -> photo ?? ''}}" alt="{{$product->product->name}}" height="80">
                                                        </td>
                                                        <td class="cart-product-name-info">
                                                            <h4 class='cart-product-description'><a href="">{{$product->product->name}}</a></h4>
                                                        </td>
                                                        <td class="cart-product-quantity">
                                                            <div class="quant-input">
                                                                   <h6>{{$product->qte_product}}</h6>
                                                              </div>
                                                        </td>
                                                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">
                                                            @if(empty($product->product->special_price)){{$product->product->price}} @else {{$product->product->special_price}} @endif DA</span></td>
                                                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">
                                                             @if(empty($product->product->special_price)){{$product->product->price * $product->qte_product}}
                                                             @else {{$product->product->special_price * $product->qte_product}}  @endif DA</span></td>
                                                    </tr>
                                                    @endforeach
                                            @endisset
                                           

                                            </tbody>
                                        </table>
                                        <h2>Etat  : @if($commande->status == 1)
                                                            <p class="btn btn-info">En Attente</p>
                                                        @elseif($commande->status == 2)
                                                            <p class="btn btn-warning">En Traitement</p>
                                                        @elseif($commande->status == 3)
                                                            <p class="btn btn-success">Confirmer</p>
                                                        @elseif($commande->status == 4)
                                                            <p class="btn btn-danger">Réfuser</p>
                                                        @endif </h2>
                                        <button class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1" data-id="{{$commande->id}}" data-toggle="modal" data-target="#change">Changer l'etat</button>
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
