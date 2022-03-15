@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                @if (Request::is('*/edit'))
                <form action="/crud/public/usuarios/add" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control"  placeholder="Name" value="{{ $usuario -> name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ $usuario -> email}}">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>

                @else
                <form action="/crud/public/usuarios/add" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control"  placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
