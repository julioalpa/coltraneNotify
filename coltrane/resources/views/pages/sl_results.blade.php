@extends('layouts.sidebar')
@section('title') Resultados @endsection
@section('content')

    {{header("refresh:5")}}

    <table class="table table-bordered table-responsive">
        <tr class="active">
            <td><b>Nombre</b></td>
            <td><b>Tipo</b></td>
            <td><b>Estado</b></td>
        </tr>
        @foreach($units as $array)
            @if($array->status == "0")
                <tr class="danger">
            @else
                <tr class="success">
            @endif
                <td><center> {{$array->station_code}} </center></td>
                    <td><center> {{$array->station_type}} </center></td>
                <td id="{{$array->Id}}"><center> {{$array->status}} </center></td>
            </tr>
        @endforeach
    </table>
@endsection

