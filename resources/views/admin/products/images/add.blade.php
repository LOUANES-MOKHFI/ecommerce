@extends('layouts.admin')
@section('title')
{{__('admin/sidebar.addproduct')}}
@endsection

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
                                <li class="breadcrumb-item"><a href=""> {{__('admin/products.all_products') }}  </a>
                                </li>
                                <li class="breadcrumb-item active">{{__('admin/sidebar.addproduct') }}
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
                                    <h4 class="card-title" id="basic-layout-form">  {{__('admin/sidebar.addproduct') }}  </h4>
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
                                        <form class="form" action="{{route('admin.products.images.store.db')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i>{{__('admin/products.images') }} </h4>

                                                    <div class="form-group">
                                                        <div class="dropzone dropzone-area" id="dpz-multiple-files">
                                                            <div class="dz-message">
                                                              {{__('admin/products.images') }}
                                                            </div>
                                                        </div>
                                                        <br><br>
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
@section('script')
    <script>
        var uploadedDocumentMap = {}
        Dropzone.options.dpzMultipleFiles = {
            paramName : "dzfile",
            maxFilessize : 5,
            clickable : true,
            adRemoveLinks : true,
            acceptedFiles : 'image/*',
            dictFallbackMessage : "csdcsdc",
            dictInvalidFileType : " Vous ne pouves pas ajouter ce type de fichier ",
            dictCancelUpload : "csdadcs",
            dictCancelUploadConfirmation : "sdadasda",
            dictRemoveFile: " Supprimer la photo",
            dictMaxFilesExceeded : "vous ne peuvez pas ajouter ce nombre des photos",
            headers : {
                'X-CSRF-TOKEN':
                "{{csrf_token()}}"
            },

            url: "{{ route('admin.products.images.store') }}",
            success: function(file, response){
                    $('form').append('<input type="hidden" name = "document[]" value="' + response.name +'">')
                    uploadedDocumentMap[file.name] = response.name
                },

            removedFile: function(file)
            {
                file.previewElement.remove()
                var name = ''
                if(typeof file.file_name !== 'undifined'){
                    name = file.file_name
                }
                else{
                    name = uploadedDocumentMap[file.name]
                }
                $('form').find('input[name="document[]"][value="'+ name + '"]').remove()
            },
            init:
             function()
            {
                @if(isset($event) && $event->document)
                var files = {!!json_encode($event->document) !!}
                for(var i in files){
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name= "document[]" value="' + file.file_name +'">')
                }
                @endif
            }
        }
    </script>
   <script>
        $('input:radio[name="type"]').change(
            function(){
                if(this.checked && this.value == '2'){
                    $('#cats_list').removeClass('hidden');
                }
                else{
                    $('#cats_list').addClass('hidden');
                }
            });
   </script>
@endsection