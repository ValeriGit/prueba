<x-app-layout>
    <div class="max-w-6xl mx-auto py-12">
        <h1 class="text-xl font-bold">Crear Producto</h1>
        <form action="{{ route('productos.store') }}" method="post">
            @csrf
            <div class="grid grid-cols-1 gap-6">
                <div class="col-span-1">
                    <label for="nombre" class="block text-sm font-medium leading-5 text-gray-700">
                        Nombre
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="nombre" name="nombre" type="text"
                            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                </div>
                <div class="col-span-1">
                    <label for="descripcion" class="block text-sm font-medium leading-5 text-gray-700">
                        Descripción
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <textarea id="descripcion" name="descripcion"
                            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                    </div>
                </div>
                <div class="col-span-1">
                    <label for="precio" class="block text-sm font-medium leading-5 text-gray-700">
                        Precio
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="precio" name="precio" type="text"
                            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                </div>
                <div class="col-span-1">
                    <label for="cantidad" class="block text-sm font-medium leading-5 text-gray-700">
                        Cantidad
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="cantidad" name="cantidad" type="text"
                            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
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
