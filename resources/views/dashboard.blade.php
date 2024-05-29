@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <p>Bienvenido, {{ Auth::user()->nombre_cliente }}!</p>
                    <p>Has iniciado sesión correctamente.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
