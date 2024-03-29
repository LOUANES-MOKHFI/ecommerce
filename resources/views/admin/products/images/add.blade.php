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
                                <h3>Les images de produits</h3>
                                <div class="container" style="margin-bottom: 50px">
                                    <div class="row">
                                        @foreach($product->images as $image)
                                        <div class="col-md-3" style="margin-bottom: 20px">
                                            
                                            <img src="{{$image->photo}}" style="height: 100%;width: 100%">
                                            <div align="center" style="margin-top: 4px">
                                               <a href="{{route('admin.products.image.delete',$image -> id)}}" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{__('admin/category.delete') }}</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
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
                paramName: "dzfile", // The name that will be used to transfer the file
                //autoProcessQueue: false,
                maxFilesize: 5, // MB
                clickable: true,
                addRemoveLinks: true,
                acceptedFiles: 'image/*',
                dictFallbackMessage: " المتصفح الخاص بكم لا يدعم خاصيه تعدد الصوره والسحب والافلات ",
                dictInvalidFileType: "لايمكنك رفع هذا النوع من الملفات ",
                dictCancelUpload: "الغاء الرفع ",
                dictCancelUploadConfirmation: " هل انت متاكد من الغاء رفع الملفات ؟ ",
                dictRemoveFile: "حذف الصوره",
                dictMaxFilesExceeded: "لايمكنك رفع عدد اكثر من هضا ",
                headers: {
                    'X-CSRF-TOKEN':
                        "{{ csrf_token() }}"
                }
                ,
                url: "{{ route('admin.products.images.store') }}", // Set the url
                success:
                    function (file, response) {
                        $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                        uploadedDocumentMap[file.name] = response.name
                    }
                ,
                removedfile: function (file) {
                    file.previewElement.remove()
                    var name = ''
                    if (typeof file.file_name !== 'undefined') {
                        name = file.file_name
                    } else {
                        name = uploadedDocumentMap[file.name]
                    }
                    $('form').find('input[name="document[]"][value="' + name + '"]').remove()
                }
                ,
                // previewsContainer: "#dpz-btn-select-files", // Define the container to display the previews
                init: function () {
                        @if(isset($event) && $event->document)
                    var files =
                    {!! json_encode($event->document) !!}
                        for (var i in files) {
                        var file = files[i]
                        this.options.addedfile.call(this, file)
                        file.previewElement.classList.add('dz-complete')
                        $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
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

   <script type="text/javascript">
       $(document).on('click', '.delete_image', function (e) {
            e.preventDefault();

        id = $(this).attr('data-id');
        alert(id);
            $.ajax({
                type: 'get',
                url: '/delete-image'+id,

                success: function (data) {
                    if(data.wished )
                    //$('.alert-modal').css('display','block');
                    else
                    //$('.alert-modal2').css('display','block');
                }
            });
        });
   </script>
@endsection
