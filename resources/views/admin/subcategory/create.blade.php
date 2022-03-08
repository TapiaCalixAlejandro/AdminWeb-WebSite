@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="">Subcategoría</a></li>
        <li class="breadcrumb-item active text-primary" aria-current="page">Crear Subcategoría</li>
    </ol>
    <div class="card">
        <div class="card-header text-primary">
            <span><strong>Agregar subcategoría</strong></span>
        </div>
        <div class="card-body">
            <form action="{{route('admin.subcategory.store')}}" method="POST" enctype="multipart/form-data" class="m-3">
                @csrf
                <div class="row-auto">
                    <div class="col-auto">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback d-block" role="alert">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                </div>
                {{-- <div class="row-auto">
                    <div class="col-auto mt-2">
                        <label for="images">Imagen<span class="badge bg-success text-white shadow-sm m-2">Seleccione una imagen para subacetgoría</span></label>
                        <input id="input-20" type="file" name="image" accept="image/*">
                    </div>
                </div> --}}
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/plugins/piexif.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/plugins/sortable.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/fileinput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/locales/LANG.js"></script>
    <script>
        $(document).ready(function() {
        // For Bootstrap 5.x
        $("#input-20").fileinput({
            browseClass: "btn btn-primary rounded-pill",
            mainClass: "d-grid",
            showCaption: false,
            showRemove: false,
            showUpload: false,
            dropZoneEnabled: false,
            maxFileCount: 10,
            minFileCount: 2,
            uploadUrl: "/site/test-upload",
            enableResumableUpload: true,
        });
    
        // For Bootstrap 4.x uncomment and use below code
        /*
        $("#input-20").fileinput({
            browseClass: "btn btn-primary btn-block",
            showCaption: false,
            showRemove: false,
            showUpload: false
        });
        */
    });
    </script>
@endsection