@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <div class="row">
                <h2 style="text-align: center">Lista de Usuarios</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-primary">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <table class="table table-dark table-responsive-lg">
                <tr>
                    <th style="font-size: 20pt; color: #7e57c2">Nombre</th>
                    <th style="font-size: 20pt; color: #7e57c2">Cantidad Posts</th>

                </tr>
                <tbody>
                @foreach($data as $user)
                    <tr>
                        <td style="font-size: 15pt; color: #7e57c2">{{$user->name}}</td>
                        <td style="font-size: 15pt; color: #7e57c2">{{$user->cantidad}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
