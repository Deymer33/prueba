@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Depuración de Datos</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>País</th>
                <th>Tipo</th>
                <th>Fuente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($scrapings as $scraping)
            <tr>
                <td>{{ $scraping->id }}</td>
                <td>{{ $scraping->scraping_country }}</td>
                <td>{{ $scraping->scraping_type }}</td>
                <td>{{ $scraping->scraping_fount }}</td>
                <td>
                    <form action="{{ route('scrapings.approve', $scraping->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success">Aprobar</button>
                    </form>
                    <form action="{{ route('scrapings.refuse', $scraping->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger">Rechazar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No hay datos pendientes de depuración.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
