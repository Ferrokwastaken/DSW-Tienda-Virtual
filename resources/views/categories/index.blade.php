<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Categoría') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
        @if (Auth::check() && Auth::user() -> is_admin)
          <a href="{{ route('categories.create') }}" class="btn mb-3">Nueva Categoría</a>
          @endif
          <table class="table">
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
                  <a href="{{ route('categories.show', $category) }}" class="btn success">Ver Detalles</a>
                  @if (Auth::check() && Auth::user() -> is_admin)
                  <a href="{{ route('categories.edit', $category) }}" class="btn warning">Editar</a>
                  <form action="{{ route('categories.destroy', $category) }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn danger">Eliminar</button>
                  </form>
                  @endif
                </td>
                @endforeach
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>