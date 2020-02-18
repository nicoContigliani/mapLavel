@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Usted a ingresado Correctamente</h4><br>

<h5>Administración Mapas</h5><br>

<input type ='button' class="btn btn-secondary btn-block"   value = 'Ir a Administración' onclick="location.href = '{{ route('Negocio.index') }}'"/>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
