<div>
    <div class="md:flex md:justify-between items-center mb-5" x-data="{agregar:false}">
        <div class="text-gray-700 font-medium mb-1 md:mb-0 cursor-pointer" @click="{agregar=true}">
            <button class="bg-teal-300 p-2 rounded-lg px-5"><i class="fas fa-plus"></i> Agregar</button>
        </div>

        {{-- Buscador --}}
        <div class="relative mt-4 md:mt-0">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                </svg>
            </span>
            <input class="w-full md:w-96 rounded-md outline-none pl-10 border-0 p-2 " type="text" placeholder="Buscar Juego..." wire:model="busqueda">
        </div>


        <x-modal id='agregar' titulo="Agregar Juego">
            <form class="flex flex-col" action="{{ route('game.add') }}" method="post">
                @csrf
                <label for="nombre" class="font-bold mt-2">Nombre</label>
                <input class="border p-2 px-3" type="text" name="nombre" value="{{ old('nombre') }}" required placeholder="...">

                <label for="link" class="font-bold mt-2">Link</label>
                <input class="border p-2 px-3" type="text" name="link" value="{{ old('link') }}" required placeholder="...">

                <label for="imagen" class="font-bold mt-2">Imagen</label>
                <input class="border p-2 px-3" type="text" name="imagen" value="{{ old('imagen') }}" required placeholder="...">

                <label for="descripcion" class="font-bold mt-2">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="border p-2 px-3"></textarea>

                <div class="mt-3">
                    <span class="flex w-full rounded-md shadow-sm">
                        <button type="submit" class="inline-flex justify-center w-full px-4 py-2 text-white bg-teal-500 rounded hover:bg-teal-700">
                            Agregar
                        </button>
                    </span>
                </div>
            </form>
        </x-modal>
    </div>

    {{-- Verificar errores --}}
    @if($errors->any())
        <div class="mb-5">
            <x-alerta color="red" :mensajes="$errors->all()"></x-alerta>
        </div>
    @endif

    {{-- Resultados --}}
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Juego
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Estado
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Acción
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    @forelse ($games as $game)
                        <tr x-data="{ver:false, imagen:false, eliminar:false, editar:false}">
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 cursor-pointer" @click="imagen = true">
                                        <img class="h-10 w-10 rounded-full" src="{{ $game->imagen_game }}" alt="">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm leading-5 font-medium text-gray-900">{{ $game->nombre_game }}</div>
                                        <div class="text-sm leading-5 text-gray-500"><a href="{{ $game->link_game }}" target="_blank">{{ $game->link_game }}</a></div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                {!! $game->estado_game == '1' ? '<i class="text-teal-300 fas fa-circle"></i> Activo' : '<i class="text-red-400 fas fa-circle"></i> Inactivo' !!}
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium flex space-x-1">
                                
                                <div class="bg-gray-200 p-2 flex items-center justify-center rounded-full h-10 w-10 cursor-pointer" @click="ver = true">
                                    <i class="fas fa-eye"></i>
                                </div>
                            
                                <div class="bg-blue-400 text-white p-2 flex items-center justify-center rounded-full h-10 w-10 cursor-pointer" @click="editar = true">
                                    <i class="fas fa-edit"></i>
                                </div>
                            
                                <div class="bg-red-400 text-white p-2 flex items-center justify-center rounded-full h-10 w-10 cursor-pointer" @click="eliminar = true">
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                {{-- Modales --}}
                                <x-modal id='ver' titulo="{{ $game->nombre_game }}">{{ $game->descripcion_game }}</x-modal>

                                <x-modal id='imagen'><img src="{{ $game->imagen_game }}" alt=""></x-modal>

                                <x-modal id='eliminar' titulo="¿Eliminar Juego? ">
                                    <form action="{{ route('game.delete',$game) }}">
                                        @csrf
                                        <div class="mt-3">
                                            <span class="flex w-full rounded-md shadow-sm">
                                                <button type="submit" class="inline-flex justify-center w-full px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700">
                                                    ELIMINAR
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </x-modal>

                                <x-modal id='editar' titulo="Editar {{ $game->nombre_game }}">
                                    <form class="flex flex-col" action="{{ route('game.update',$game) }}" method="post">
                                        @csrf
                                        <label for="estado" class="font-bold mt-2">Estado</label>
                                        <select class="border p-2 px-3" name="estado" id="estado" required>
                                            <option value="1" {{ $game->estado_game == 1 ? 'selected' : '' }}>ACTIVO</option>
                                            <option value="0" {{ $game->estado_game == 0 ? 'selected' : '' }}>INACTIVO</option>
                                        </select>
                                        
                                        <label for="nombre" class="font-bold mt-2">Nombre</label>
                                        <input class="border p-2 px-3" type="text" name="nombre" value="{{ $game->nombre_game }}" required placeholder="...">

                                        <label for="link" class="font-bold mt-2">Link</label>
                                        <input class="border p-2 px-3" type="text" name="link" value="{{ $game->link_game }}" required placeholder="...">

                                        <label for="imagen" class="font-bold mt-2">Imagen</label>
                                        <input class="border p-2 px-3" type="text" name="imagen" value="{{ $game->imagen_game }}" required placeholder="...">

                                        <label for="descripcion" class="font-bold mt-2">Descripción</label>
                                        <textarea name="descripcion" id="descripcion" class="border p-2 px-3">{{ $game->descripcion_game }}</textarea>

                                        <div class="mt-3">
                                            <span class="flex w-full rounded-md shadow-sm">
                                                <button type="submit" class="inline-flex justify-center w-full px-4 py-2 text-white bg-teal-500 rounded hover:bg-teal-700">
                                                    Editar
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </x-modal>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">Sin resultados</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
