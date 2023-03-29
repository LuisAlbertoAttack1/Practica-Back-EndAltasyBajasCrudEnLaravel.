@extends('layouts/main')

@section('contenido')
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col">
<!--Fin de boton-->
<!--Fin de textto-->
<!--Inicio de table-->

                <table class="table table-sm tipoLetraText text-center" id="diseñodetable">
                    <hr>
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Categoria</th>
                            <th>Cantidad</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                        

                        </tr>
                        <tbody>
                            @foreach ($items as $item)
                                

                            <tr>
                                <td>{{$item->Tipo}}</td>
                                <td>{{$item->Categoria}}</td>
                                <td>{{$item->Cantidad}}</td>
                                <td>{{$item->Descripcion}}</td>
                                <td>{{$item->Fecha}}</td>
                      
                            </tr>
                            @endforeach
                        </tbody>
                    </thead>

                </table>
<!--Fin de table-->

<div class="d-grid gap-2 col-6 mx-auto">
    <a href="/create" class="btn btn-primary">Agregar</a>
  </div>


            </div>
        </div>
    </div>

@endsection