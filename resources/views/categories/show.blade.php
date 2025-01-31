@extends('layouts.app')

@section('title', 'Categoría')

@section('content')
<h1>{{ $category->name }}</h1>
<p>{{ $category->description }}</p>
<p>Productos:</p>
@endsection