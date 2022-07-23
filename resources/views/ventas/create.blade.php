<x-app-layout>
    <div class="max-w-6xl mx-auto py-12">
        <h1>
            Registrar Venta
        </h1>

        <form action="{{ route('ventas.store') }}" method="post">
            @csrf
            <div class="grid grid-cols-1 gap-6">
                <div class="col-span-1">
                    <label for="cliente_id" class="block text-sm font-medium leading-5 text-gray-700">
                        Nombre
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <select id="cliente_id" name="cliente_id" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            <option value="">Seleccione un cliente</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-span-1">
                    <label for="cantidad" class="block text-sm font-medium leading-5 text-gray-700">
                        cantidad
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <textarea id="cantidad" name="cantidad"
                            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                    </div>
                </div>
                {{-- <div class="col-span-1">
                    <label for="direccion" class="block text-sm font-medium leading-5 text-gray-700">
                        Direccion
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="direccion" name="direccion" type="text"
                            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                </div> --}}
                <div class="col-span-1">
                    <label for="total" class="block text-sm font-medium leading-5 text-gray-700">
                        total
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="total" name="total" type="text"
                            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                </div>
                <div class="col-span-1">
                    <label for="fecha" class="block text-sm font-medium leading-5 text-gray-700">
                        fecha
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="fecha" name="fecha" type="date"
                            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                </div>
                <div class="col-span-1">
                    <label for="producto" class="block text-sm font-medium leading-5 text-gray-700">
                        producto
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <select id="producto_id" name="producto_id" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            <option value="">Seleccione un producto</option>
                            @foreach ($productos as $producto)
                                <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-span-1 py-2">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Crear
                    </button>
                </div>
        </form>
    </div>
</x-app-layout>
