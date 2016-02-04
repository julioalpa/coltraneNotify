@extends('layouts.sidebar')
@section('title') Reporte @endsection
@section('content')

    <form method="post" action="{{ route('estaciones_store_path') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <div class="container">
                <div class="row">
                    <div class='col-sm-6'>
                        <input type='text' class="form-control" id='datetimepicker4' />
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#datetimepicker4').datetimepicker();
                        });
                    </script>
                </div>
            </div>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="boton">CONSULTAR</button>
    </form>

@endsection