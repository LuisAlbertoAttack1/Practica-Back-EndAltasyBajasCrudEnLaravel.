@extends('layouts/main')
@section('contenido')
<div class="container tipoLetraText">
    <h2 class="tipoLetraText text-center mt-4 mb-4">Agregar</h2>
    <div class="row">
        <div class="col">
            <!--lleva la ruta-->
            
            <form action="/store" method="post">
                @csrf
                @method('POST')
          
                <label for="Tipo">Tipo</label>
                <select name="Tipo" id="Tipo"  type="text" class="form-select">
                <option value="Pago">Pago</option>
                <option value="Gasto">Gasto</option>    
                </select>

                <label for="Categoria">Categoria</label>
                <select name="Categoria" id="Categoria"  type="text" class="form-select">
                <option value="Gorras">Gorras</option>
                <option value="Playeras">Playeras</option>    
                <option value="Limpiesa_de_casa">Limpiesa_de_casa</option>   
                <option value="Creacion_de_pagina_web">Creacion_de_pagina_web</option>   
                </select>

                <label for="Cantidad">Cantidad</label>
                <input type="text" name="Cantidad" id="Cantidad" class="form-control">

                <label for="Descripcion">Descripcion</label>
                <input type="text" name="Descripcion" id="Descripcion" class="form-control">

                <label for="Fecha">Fecha</label>
                <input type="date" name="Fecha" id="Fecha" class="form-control">
                

                <div class="d-grid gap-2 col-4 mx-auto mt-4 mb-4">
                   <button class="btn btn-primary">Guardar</button>
                </div>

                <!--Fin del form-->
            </form>

            <!--el boton va fuera del form Inicio-->
            <div class="d-grid gap-2 col-4 mx-auto mt-4 mb-4">
                <a href="/AltasYBajas" class="btn btn-danger border-0">Regresar</a>
            </div>

            <!--Fin de boton-->

        </div>
    </div>
</div>


@endsection