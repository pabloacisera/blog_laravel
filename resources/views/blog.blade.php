<x-layout meta-title="blogs">
    @foreach ($posts as $p)
        <div class="bg-white shadow-md rounded-lg p-6 mx-auto my-6 border-2 border-gray-200 hover:border-blue-400 transition-all mt-5" style="max-width: 800px !important; width: 100% !important; margin-top: 2rem;">
            <!-- Encabezado del post -->
            <div class="flex items-center mb-4">
                <!-- Avatar -->
                <img src="https://via.placeholder.com/40" alt="Avatar" class="w-10 h-10 rounded-full mr-3">
                <!-- Información del usuario y fecha -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-800">autor</h3>
                    <p class="text-xs text-gray-500">fecha</p>
                </div>
            </div>

            <!-- Contenido del post -->
            <div class="mb-4">
                <h2 class="text-lg font-bold text-gray-800 mb-2">{{ $p['title'] }}</h2>
                <p class="text-gray-600 text-justify">{{ $p['content'] }}</p>
            </div>

            <!-- Imagen opcional -->
            @if (!empty($p['image']))
                <img src="{{ $p['image'] }}" alt="Post image" class="rounded-lg w-full mb-4">
            @endif

            <!-- Botones de acción -->
            <div class="flex items-center justify-between text-gray-600">
                <div class="flex space-x-4">
                    <!-- Botón "Me gusta" con ícono -->
                    <button class="flex items-center text-blue-500 hover:text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M14.72 2.292a5.5 5.5 0 00-7.78 0L6.293 2.94a1 1 0 00-.293.708V17a1 1 0 001 1h2a1 1 0 001-1v-6h2v6a1 1 0 001 1h2a1 1 0 001-1V3.707a1 1 0 00-.293-.708l-.686-.647z" />
                        </svg>
                        Me gusta
                    </button>
                    <!-- Botón "Comentar" con ícono -->
                    <button class="flex items-center text-green-500 hover:text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M18 10c0 3.866-3.582 7-8 7a8.93 8.93 0 01-4-.937L2 17l.937-4A8.93 8.93 0 012 10c0-3.866 3.582-7 8-7s8 3.134 8 7z" />
                        </svg>
                        Comentar
                    </button>
                </div>
                <!-- Número de comentarios -->
                <p class="text-sm text-gray-500">22 comentarios</p>
            </div>

            <!-- Caja de comentarios -->
            <div class="mt-4">
                <input type="text" placeholder="Escribe un comentario..."
                    class="w-full border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
            </div>
        </div>
    @endforeach
</x-layout>

