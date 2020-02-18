@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Negocios</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Negocio.create') }}" class="btn btn-info" >Añadir Negocio</a>
            </div>
          </div>


          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Id</th>
               <th>Nombre</th>
               <th>Direccion</th>
               <th>Latitud</th>
               <th>longitud</th>
               <th>Foto</th>
               <th>Comentario</th>

               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($negocios->count())  
              @foreach($negocios as $negocio)  
              <tr>
                <td>{{$negocio->id}}</td>
                <td>{{$negocio->nombre}}</td>
                <td>{{$negocio->direccion}}</td>
                <td>{{$negocio->lat}}</td>
                <td>{{$negocio->lng}}</td>
                <td>{{$negocio->foto}}</td>
                <td>{{$negocio->comentario}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('NegocioController@edit', $negocio->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('NegocioController@destroy', $negocio->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>

        
      </div>
      {{ $negocios->links() }}
    </div>
  </div>
</section>

@endsection