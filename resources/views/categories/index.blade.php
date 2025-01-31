@extends('layouts.app')

@section('title', 'Categorías')

@push('styles')
  <link rel="stylesheet" href="{{asset('css/table.css')}}">
@endpush

@section('content')
<h1>Lista de categorías</h1>
<a href="{{ route('categories.create') }}"><button>Nueva Categoría</button></a>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{$category->name}}</td>
      <td>{{$category->description}}</td>
      <td>
        <a href="{{ route('categories.show', $category) }}"><button>Ver Detalles</button></a>
        <a href="{{ route('categories.edit', $category) }}"><button>Editar</button></a>
        <form action="{{ route('categories.destroy', $category) }}" method="post" style="display: inline;">
          @csrf
          @method('DELETE')
          <button type="submit">Eliminar</button>
        </form>
      </td>
    @endforeach
    </tr>
  </tbody>
</table>

@endsection