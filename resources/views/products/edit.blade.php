<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Inicio') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">

          <form action="{{ route('products.update', $product) }}" method="post" class="form">
            @csrf
            @method('PUT')
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" required>
            <label for="description">Descripción</label>
            <textarea name="description" id="description" required>{{ $product->description }}</textarea>
            <label for="price">Precio</label>
            <input type="number" name="price" id="price" step="0.01" value="{{ $product->price }}" required>
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" value="{{ $product->stock }}" required>
            <button type="submit" class="btn mt-3">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>