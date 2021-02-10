@extends('layouts.site')
@section('title','Paiment')
@section('style')

<style type="text/css">
    
select {
    width: 100%;
    padding: 12px 5px;
    border: 1px solid #ddd;
    border-radius: 5px
}
.option{
     width: 100%;
    padding: 12px 5px;
    border: 1px solid #ddd;
    border-radius: 5px
}
,abel{
    font-weight: bold;
    font-size: 18px;
}
input{
    font-size: 18px;
}
input::value{
        font-size: 18px;
}
td,th{
    padding-right: 10px;
}
.checkout__order__subtotal{
 font-weight: bold;font-size: 17px
}
.checkout__order__total{
    font-weight: bold;
    color: red;
    font-size: 17px;
}
#descr_com{
    padding-top: 15px;
}
.invalid-feedback{
    color: red;
    font-size: 14px;
}
.btn-primary{
    padding-top: 10px;
    margin-bottom: 10px;
}
</style>
@stop

@section('content')  

    <div class="container" style="margin-top: 50px">  
    <form action="{{route('payment-shipping.process') }}" method="post">
        @csrf
    <div class="row" style="margin-bottom: 20px">
        <div class="col-md-9 card">
            <h3>Details de la commande</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nom et Prénom</label>
                            <input type="text" name="name" class="form-control" value="{{$user->name}}">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{$user->email}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <label>Wilaya de livraison</label>
                            <select name="states_id" class="">
                                <optgroup label="choisir la wilaya de livraison">
                                    @foreach($states as $state)
                                        <option class="option" value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @error('states_id')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Numero de telephone</label>
                            <input type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" value="{{old('mobile')}}">
                            @error('mobile')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Commune</label>
                            <input type="text" name="commune" class="form-control @error('commune') is-invalid @enderror" value="{{old('commune')}}">
                            @error('commune')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Code postal</label>
                            <input type="text" name="code_postal" class="form-control @error('code_postal') is-invalid @enderror" value="{{old('code_postal')}}">
                            @error('code_postal')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Commentaire</label>
                            <textarea name="comment" class="form-control @error('comment') is-invalid @enderror">{{old('comment')}}</textarea>
                            @error('comment')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                    </div>
                </div>
            
        </div>
        <div class="col-md-3 card">
             <div class="checkout__order">
                                <h4>Votre Commande</h4>
                                <table class="table">
                                    <thead>
                                        <th>Produits</th>
                                        <th>Quantities</th>
                                        <th></th>
                                        <th>Prix</th>
                                    </thead>
                                    <tbody>
                                        @foreach(Cart::content() as $product)
                                        <tr>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->qty}}</td>
                                            <td>*</td>
                                            <td>{{$product->price}} DA</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                                
                                <div class="checkout__order__subtotal">Prix des produits <span>{{Cart::subtotal()}} DA</span></div>
                                <div class="checkout__order__subtotal" id="price"></div>
                                <div class="checkout__order__total">Total <span>{{Cart::subtotal()}} DA</span></div>
                               
                                <p id="descr_com">Vos données personnelles seront utilisées pour le traitement de votre commande, vous accompagner au cours de votre visite du site web.</p>

                                <button type="submit" class="btn btn-primary">Commander</button>
                            </div>
        </div>
        
    </div>
    </form>
</div>
@stop

@section('scripts')

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
    var $form         = $(".validation");
  $('form.validation').bind('submit', function(e) {
    var $form         = $(".validation"),
        inputVal = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputVal),
        $errorStatus = $form.find('div.error'),
        valid         = true;
        $errorStatus.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorStatus.removeClass('hide');
        e.preventDefault();
      }
    });
  
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-num').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeHandleResponse);
    }
  
  });
  
  function stripeHandleResponse(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
  
});
</script>
    <script>


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.remove-from-cart', function (e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: $(this).attr('data-url-product'),
                data: {
                    'product_id': $(this).attr('data-id-product'),
                    'product_id': $(this).attr('data-id-product'),
                },
                success: function (data) {

                }
            });
        });
    </script>
    @stop
