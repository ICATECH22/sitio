@extends('theme.main.index')
@section('csscontent')
    <link rel="stylesheet" href="{{ asset('assets/css/estilos_tabla.css') }}">
@endsection
{{-- contenido --}}
@section('contenido')
    <div class="container-xl">
        <br><br>
        <table>
            <caption>Lista de Planteles Icat</caption>
            <thead>
                <tr>
                    <th scope="col">Nombre del Plantel</th>
                    <th scope="col">Lista del Directorio</th>
                    <th scope="col">Código</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Array_EntidadesFederativas as $key => $value)
                    <tr>
                        <td data-label="Folio/Serie">{{ $value }}</td>
                        <td data-label="Proveedor"><a href="{{ route('plantel.icat.entidad.federativa', ['nombre_icat' => $key]) }}" target="_blank">{{ $key }}</a></td>
                        <td data-label="Total"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
{{-- contenido end --}}
