@extends('layouts.app')

@section('title', 'Categorías')

@push('styles')
  <link rel="stylesheet" href="{{asset('css/table.css')}}">
@endpush

@section('content')
<h1>Lista de categorías</h1>
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
        
      </td>
    @endforeach
    </tr>
  </tbody>
</table>

@endsection