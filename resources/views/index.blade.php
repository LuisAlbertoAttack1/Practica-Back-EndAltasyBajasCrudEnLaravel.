@extends('layouts/main')

@section('contenido')

<div class="container">
  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <label>Total De Ganancias {{ $totalPagos }} </label>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <label>Total De Gastos  {{ $totalGastos }}  </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection