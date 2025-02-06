<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Carrito') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                @php
                  $total = 0;
                @endphp
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($items as $item)
                    @php
                      $subtotal = $item['price'] * $item['amount'];
                      $total += $subtotal;
                    @endphp
                    <tr>
                      <td>{{ $item['id'] }}</td>
                      <td>{{ $item['name'] }}</td>
                      <td>{{ number_format($item['price'], 2) }}€</td>
                      <td>{{ $item['amount'] }}</td>
                      <td>{{ number_format($subtotal, 2, ',', '.') }}€</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th colspan="4">Total:</th>
                      <td>{{ number_format($total, 2, ',', '.') }}€</td>
                    </tr>
                  </tfoot>
                </table>  
                @auth
                  <button class="btn mt-3">Realizar pedido</button>
                  <form action="{{ route('emptyCart') }}" method="post">
                     @csrf
                     @method('DELETE')
                      <button type="submit" class="btn danger mt-3">Vaciar carrito</button>
                  </form>
                  @else
                  <p>Debes registrarte para hacer el pedido
                    <a href="{{ route('login') }}" class="btn success">Login</a>
                  </p>
                  @endauth
              </div>
          </div>
      </div>
  </div>
</x-app-layout>