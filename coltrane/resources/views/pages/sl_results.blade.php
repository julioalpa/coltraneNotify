@extends('layouts.sidebar')
@section('title') Resultados @endsection
@section('content')
    <table class="table table-bordered">
        <tr class="active">
            <td><b>Nombre</b></td>
            <td><b>Estado</b></td>
        </tr>
        @foreach($units as $array)
            @if($array->Status == "0")
                <tr class="danger">
            @else
                <tr class="success">
            @endif
                <td><center> {{$array->Nombre}} </center></td>
                <td><center> {{$array->Status}} </center></td>
            </tr>
        @endforeach
    </table>
@endsection