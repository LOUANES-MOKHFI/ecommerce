@extends('layouts.site')



@section('title')

	Demander un devi

@endsection



@section('style')

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css">

 <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>





<style type="text/css">

.form-material {

	margin-top: 20px;

    background: url('/assets/assets/images/ceramic/site/devis1.png');

    



	  background-position: center;

	   background-size: 1200px  auto;

}



@media screen and (max-width:993px)

{

.form-material {

	margin-top: 20px;

    background: url('/assets/assets/images/ceramic/site/devis1.png');

   

    background-position: center;

    background-size: 600px 1700px;

}

.devis{

	margin-bottom: 30px;

	background: rgb(122,17,32);

	height: 50px;

	margin-left: 20px;

	width: 350px;	

}

}

@media screen and (min-width:993px)

{

.devis{

	margin-bottom: 30px;

	margin-left: 100px;

	background: rgb(122,17,32);

	width: 350px;	

}

.dd{

	margin-left: 40px

}

}

.login-block {

    margin: 30px auto;

    min-height: 93.6vh

}



.login-block .auth-box {

  padding:30px;

}



.contact-us {

    font-size: 24px;

    font-weight: 300

}



.respond {

    font-size: 15px !important;

    font-weight: 200;

    margin-top: -6px

}

}



.card {

    border-radius: 5px;

    -webkit-box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);

    box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);

    border: none;

    margin-bottom: 30px;

    -webkit-transition: all .3s ease-in-out;

    transition: all .3s ease-in-out

}



.card .card-block {

    padding: 1.25rem

}



.f-56 {

    font-size: 56px

}



.form-group {

	margin-left: 15px;

    margin-bottom: 1.25em

}



.form-material .form-control {

    display: inline-block;

    height: 43px;

    width: 100%;

    border: none;

    border-radius: 0;

    font-size: 16px;

    font-weight: 400;

    padding: 0;

    background-color: transparent;

    -webkit-box-shadow: none;

    box-shadow: none;

    border-bottom: 1px solid rgb(122,17,32);

}



.btn-md {

    padding: 10px 16px;

    font-size: 15px;

    line-height: 23px

}



.btn-danger {

    background-color: rgb(122,17,32);

    border-color: rgb(122,17,32);

    color:white;

    cursor: pointer;

    -webkit-transition: all ease-in .3s;

    transition: all ease-in .3s;

    font-size: 18px;

}



.btn {

    border-radius: 2px;

    text-transform: capitalize;

    font-size: 15px;

    padding: 10px 19px;

    cursor: pointer

}



.m-b-20 {

    margin-bottom: 20px

}



.btn-md {

    padding: 10px 16px;

    font-size: 15px;

    line-height: 23px

}

.sidebar{

  margin-left: 120px;

  margin-right: 40px;

}



@media(max-width: 768px) {

  .sidebar{
  margin-top: 20px;
  margin-left: 0px;
  margin-right: 0px;
}

.devis{

	margin-bottom: 30px;

	

	background: rgb(225,15,26);

	width: 350px;	

}

}

.ff{

	border-right: 1px solid rgb(122,17,32);

	border-left: 1px solid rgb(122,17,32);

}



label {

	color: rgb(122,17,32);

}

label span{

	color: rgb(122,17,32);

}

</style>

@endsection



@section('content')             



<section class="home_page">

    <section class="login-block sidebar">

		<div class="container-fluid">

			<div class="row">

		         		<div class="col-md-6 dd" style="">

		         			<img src="{{asset('assets/assets/images/ceramic/demandedevi.png')}}" style="height: 120px;width: 400px">

		         		</div>

		         	</div>

		         	<div class="row">

		         		<div class="col-md-4" style="border-bottom: 1px solid rgb(122,17,32);">

		         			<p style="color:rgb(122,17,32);font-size: 18px;font-weight: 200">Insérez vos donneés pour recevoir les information demandées</p>

		         		</div>

		         		<div class="col-md-4"></div>

		         		<div class="col-md-4" style="border-bottom: 1px solid rgb(122,17,32);">

		         			<p style="color:rgb(122,17,32);font-size: 18px;font-weight: 200">Saisissez les donneés du produit pour lequel vous souhaitez recevoir un devis</p>

		         		</div>

		         	</div>

		     <div class="row">



		         <div class="col-sm-12 ff" >

		         	<div id="errorss"></div>

		             <form class="md-float-material form-material" id="sendform">

		             	@csrf

		                 <div class="auth-box card">

		                     <div class="card-block">

		                         

		                         <div id="information"></div>



		                         <div id="formproduct">

		                         <div class="formp">

		                         	

		                         </div>



		                     	 </div> 

		                     	 <div class="row">



	         		<div class="col-md-6">

	         			<button type="button" id="add" name="add" class="btn btn-danger text-center">

	         				<span class="material-icons">add_circle_outline</span> Ajouter un produit

	         			</button>

	         		</div>

	         		<div class="col-md-6">

		        		<button type="submit" style="float:right;font-size:20px;font-weight:bold;color:rgb(122,17,32);" id="save" name="save" class=" btn text-center">

			        		Soumettre 

			        		<span class="material-icons">chevron_right</span> 

		        		</button>

		        		</div>

	         	</div> 

		                             

		                     </div>

		                 </div>

		             </form>

		         </div>

		     </div>

		 </div>

	</section>

</section>

@endsection



@section('script')

<script type="text/javascript">

	$(document).ready(function(){

		var count = 1;

		dynamic_field(count);

var html1 = ``;

			html1 += `

			<div class="row">

                 <div class="col-md-6">

                 	<label>Je suis un/une<span>*</span> :</label>

                    <div class="form-group form-primary">

                    	<select name="fonction" class="form-control text-left">

                    		<option>------------------------</option>

                    		<option value="Privé">Privé</option>

                    		<option value="Architecte">Architecte</option>

                    		<option value="Ingénieur">Ingénieur</option>

                    		<option value="Géomètre">Géomètre</option>

                    		<option value="Entreprise de construction">Entreprise de construction</option>

                    		<option value="Distributeur">Distributeur</option>

                    		<option value="Autre">Autre</option>

                    	</select>

                     </div>

                    @error("fonction")

                    <span class="text-danger"> {{$message}}  </span>

                    @enderror

                     

                 </div>

                 <div class="col-md-6">

                 	<div class="row">

                 		<div class="col-md-6">

                 			<label>Nom<span>*</span> :</label>

                                <div class="form-group form-primary">

                                  <input type="text" name="Fname" class="form-control text-left" placeholder="------------------------">

                                 </div>

                                 @error("Fname")

			                    <span class="text-danger"> {{$message}}  </span>

			                    @enderror

                 		</div>

                 		<div class="col-md-6">

                 			<label>Prénom<span>*</span> :</label>

                     		<div class="form-group form-primary"> <input type="text" name="Lname" class="form-control text-left" placeholder="------------------------">

                     		</div>

                     		 @error("Lname")

		                    <span class="text-danger"> {{$message}}  </span>

		                    @enderror

                     		

                 		</div>

                 	</div>

                 	

                 </div>

                 

			         </div>

			         <div class="row">

			         	 <div class="col-md-6">

			             	<div class="row">

			             		<div class="col-md-6">

			             			<label>Email<span>*</span> :</label>

			                            <div class="form-group form-primary">

			                              <input type="text" name="email" class="form-control text-left" placeholder="">

			                             </div>

			                              @error("email")

						                    <span class="text-danger"> {{$message}}  </span>

						                  @enderror

			                             

			             		</div>

			             		<div class="col-md-6">

			             			<label>Téléphone<span>*</span> :</label>

			                 		<div class="form-group form-primary"> <input type="text" name="phone" class="form-control text-left" placeholder="" >

			                 		</div>

			                 		 @error("phone")

				                    <span class="text-danger"> {{$message}}  </span>

				                    @enderror

			             		</div>

			             	</div>

			             </div>

			             <div class="col-md-6">

			             	<div class="row">

			             		<div class="col-md-6">

			             			<label>Wilaya<span>*</span> :</label>

			                            <div class="form-group form-primary">

			                              <select name="wilaya" class="form-control text-left state" >

			                              	<option>------------------------</option>

			                             	<optgroup label="Choisir la wilaya">

			                             		@isset($states)

			                             		@foreach($states as $state)

			                             		<option value="{{$state->id}}">{{$state->nom}}</option>

			                             		@endforeach

			                             		@endisset

			                             	</optgroup>

			                             </select>

			                             </div>

			                            @error("wilaya")

						                    <span class="text-danger"> {{$message}}  </span>

						                @enderror

			                             

			             		</div>

			             		<div class="col-md-6">

			             			<label>Ville<span>*</span> :</label>

			                 		<div class="form-group form-primary">

			                 			 <select name="ville" class="form-control text-left" >

			                 			 	

			                             	<optgroup label="Choisir la Commune" class="commune">

			                             		

			                             	</optgroup>

			                             </select>

			                 		</div>

			                 		@error("ville")

				                       <span class="text-danger"> {{$message}}  </span>

				                    @enderror

			                 		

			             		</div>

			             	</div>

			             </div>

			         </div>

			         <div class="row">

             	<div class="col-md-6">

             		<label>Message :</label>

             		<div class=" form-primary"> 

             			<input type="text" name="message" class="form-control text-left" placeholder="" >

             		</div>

             		 @error("message")

                    <span class="text-danger"> {{$message}}  </span>

                    @enderror

             		

             	</div>

             </div>`;



            $('#information').append(html1);

		function dynamic_field(number){

			var html = ``;

			var html2 = ``;

			



 if(number > 1){

	        	html += `

	        	<div class="row">

             		<div class="col-md-12">

             			<button type="button" style="float:right" id="remove" class="text-center">

             				<span class="material-icons">delete</span> Supprimer 

             			</button>

             		</div>

             	</div>`;



             	$('.formp').append(html);

	        }else{

  

	        	html+= `

	        	`;

	            $('.formp').html(html);

	        }

			html2 += `

				<div class="row">

                      <div class="col-md-6">

                     	<label>Marque<span>*</span> :</label>

                        <div class="form-group form-primary">

                         <select name="brand_id[]" class="form-control text-left brand">

                         	<option>------------------------</option>

                         	<optgroup label="Choisir la marque">

                         		@isset($brands)

                         		@foreach($brands as $brand)

                         		<option value="{{$brand->id}}">{{$brand->name}}</option>

                         		@endforeach

                         		@endisset

                         	</optgroup>

                         </select>

                     	</div>

                     	 @error("brand_id.0")

	                    <span class="text-danger"> {{$message}}  </span>

	                    @enderror

                     	

                     </div>

                     <div class="col-md-6">

                     	<label>Collection<span>*</span> :</label>

                        <div class="form-group form-primary">

                            <select name="product_id[]" class="form-control text-left">

                         	<optgroup label="Choisir le produit" class="product">
                         		@isset($products)
                         		@foreach($products as $product)
                         		<option value="{{$product->id}}">{{$product->name}}</option>
                         		@endforeach
                         		@endisset
                         		
                         	</optgroup>

                         </select>

                        </div>

                        @error("product_id.0")

	                    	<span class="text-danger"> {{$message}}  </span>

	                    @enderror

                       

                     </div>

                 	</div>

	                  <div class="row">

	                 	 <div class="col-md-6">

	                     	<div class="row">

	                     		<div class="col-md-6">

	                     			<label>Couleur<span>*</span> :</label>

		                                <div class="form-group form-primary">

		                                  <input type="text" name="color[]" class="form-control text-left" placeholder="------------------------">

		                                 </div>

		                                  @error("color.0")

						                    <span class="text-danger"> {{$message}}  </span>

						                    @enderror

	                     		</div>

	                     		<div class="col-md-6">

	                     			<label>Format<span>*</span> :</label>

	                         		<div class="form-group form-primary"> <input type="text" name="format[]" class="form-control text-left" placeholder="------------------------">

	                         		</div>

	                         		 @error("format.0")

				                    <span class="text-danger"> {{$message}}  </span>

				                    @enderror



	                     		</div>

	                     	</div>

	                     </div>

	                     <div class="col-md-6">

	                     	<div class="row">

	                     		<div class="col-md-6">

	                     			<label>Finition :</label>

		                                <div class="form-group form-primary">

		                                  <input type="text" name="surfaces[]" class="form-control text-left" placeholder="">

		                                 </div>

		                                  @error("surfaces.0")

					                    <span class="text-danger"> {{$message}}  </span>

					                    @enderror

	                     		</div>

	                     		<div class="col-md-6">

	                     			<label>Mètres carreés<span>*</span> :</label>

	                         		<div class="form-group form-primary"> <input type="text" name="m_carrees" class="form-control text-left" placeholder="" >

	                         		</div>

	                         		 @error("m_carrees")

				                    <span class="text-danger"> {{$message}}  </span>

				                    @enderror

	                     		</div>

	                     	</div>

	                     </div>

	                 </div>`;

	                 $('.formp').append(html2);

	       

	        

		}

		$('#add').click(function(){

			count++;

			dynamic_field(count);

		});

		$(document).on('click','#remove',function(){

			count--;

			dynamic_field(count);

		});



		$('#sendform').on('submit',function(event){

 			event.preventDefault();

 			$.ajax({

					url:'{{route("post-devis")}}',

					method:'post',

					data:$(this).serialize(),

					dataType:'json',

					beforeSend:function(){

						$('#save').attr('disabled','disabled');

					},

					success:function(data){

						if(data.error)

						{

							var error_html = '';

							for(var count=0;count<data.error.length;count++){

								error_html += '<p><span style="color:red">*</span>'+data.error[count]+'</p>';

							}

							$('#errorss').html('<div class="alert alert-danger">'+error_html+'</div>');

						}

						else{

							dynamic_field(1);

							$('#errorss').html('<div class="alert alert-success">'+data.success+'</div>');

						}

						$('#save').attr('disabled',false);

					}

 			});

		});

	});

</script>

<script type="text/javascript">

     $(document).ready(function() {

      $('.state').on('change',function(e){

        

        var id;

        id = e.target.value;



        var counter = 0;

        

            getcommune(id);

       

    });

   });



  function getcommune(id) {



    $('.commune').empty();



    $.ajax({

        type: 'GET',

        url: '/get-commune/' +id,

        success: function (response) {

            var response = JSON.parse(response);

            console.log(response);

           

            

            

              

               response.forEach(element => {



                   $('.commune').append(`

                        <option value="${element.id}">${element.nom}</option>                    

                    `);

                });

            

        }

      });

  }







 

</script>

<script type="text/javascript">
   /*  $(document).ready(function() {
      $('.brand').on('change',function(e){
        
        var id;
        id = e.target.value;

        var counter = 0;
        
            getproduct(id);
       
    });
   });

  function getproduct(id) {

    $('.product').empty();

    $.ajax({
        type: 'GET',
        url: '/get-product/' +id,
        success: function (response) {
            var response = JSON.parse(response);
            console.log(response);
           
            
            
              
               response.forEach(element => {

                   $('.product').append(`
                        <option value="${element.id}">${element.name}</option>                    
                    `);
                });
            
        }
      });
  }

*/


 
</script>

@endsection

