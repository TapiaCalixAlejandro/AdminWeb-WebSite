@extends('layouts.app')

@section('content')
    <div class="">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active text-primary" aria-current="page">Productos</li>
        </ol>
        <div class="card">
            <div class="card-header text-primary d-flex justify-content-between align-middle">
                <div class="d-flex align-items-center">
                    <span><strong>Registros de productos</strong></span>
                </div>
                <a href="{{route('admin.products.create')}}" class="btn btn-primary shadow-sm rounded-pill">Agregar</a>
            </div>
            <div class="row card-body table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th class="text-center text-primary">Imagen</th>
                            <th class="text-center text-primary">Nombre</th>
                            <th class="text-center text-primary">Precio</th>
                            <th class="text-center text-primary">Subcategoría</th>
                            <th class="text-center text-primary">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $item)
                            <tr>
                                <td>{{$item->image}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->subcategory_id}}</td>
                                <td>
                                    <a href="" class="btn btn-light">Detalle</a>
                                    <a href="" class="btn btn-light">Editar</a>
                                    <a href="" class="btn btn-light">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection