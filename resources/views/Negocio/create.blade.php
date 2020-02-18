@extends('layouts.layout')
@section('content')
<div class="row">
 <section class="content">
  <div class="col-md-8 col-md-offset-2">
   @if (count($errors) > 0)
   <div class="alert alert-danger">
    <strong>Error!</strong> Revise los campos obligatorios.<br><br>
    <ul>
     @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
     @endforeach
    </ul>
   </div>
   @endif
   @if(Session::has('success'))
   <div class="alert alert-info">
    {{Session::get('success')}}
   </div>
   @endif

   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Nuevo Negocio</h3>
    </div>
    <div class="panel-body">     
     <div class="table-container">
      <form method="POST" action="{{ route('Negocio.store') }}"  role="form">
       {{ csrf_field() }}
       <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre del Negocio">
         </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="direccion" id="direccion" class="form-control input-sm" placeholder="Direccion del Negocio">
         </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="lat" id="lat" class="form-control input-sm" placeholder="lat">
         </div>
        </div>
       </div>

       <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="lng" id="lng" class="form-control input-sm" placeholder="lng">
         </div>
        </div>
       </div>

       <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="foto" id="foto" class="form-control input-sm" placeholder="foto">
         </div>
        </div>
       </div>

       <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="comentario" id="comentario" class="form-control input-sm" placeholder="comentario">
         </div>
        </div>
       </div>

   
       <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
         <input type="submit"  value="Guardar" class="btn btn-success btn-block">
         <a href="{{ route('Negocio.index') }}" class="btn btn-info btn-block" >Atrás</a>
        </div> 

       </div>
      </form>
     </div>
    </div>

   </div>
  </div>
 </section>
 @endsection