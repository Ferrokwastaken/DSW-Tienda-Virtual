<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Crear producto') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <form action="{{ route('products.store') }}" method="post" class="form">
            @csrf
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" required>
            <label for="description">Descripción</label>
            <textarea name="description" id="description" required></textarea>
            <label for="price">Precio</label>
            <input type="number" name="price" id="price" step="0.01" required>
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" required>
            <button type="submit" class="btn mt-3">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>