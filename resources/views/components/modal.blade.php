<div class="fixed top-0 left-0 flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-30" x-show="{{$id}}">
    <div class="h-auto p-2 text-left bg-white rounded shadow-xl w-11/12 md:w-1/3 relative" @click.away="{{$id}} = false">
        @isset ($bordes)
            <div class="text-center sm:text-left">
        @else
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left p-4">
        @endisset

            <div class="flex justify-between items-center mb-3">
                @isset ($titulo)
                    <h3 class="font-bold text-2xl text-gray-900">{!! $titulo !!}</h3>
                @endisset

                {{-- Cerrar --}}
                <div class="cursor-pointer ml-5" @click="{{$id}} = false"><i class="fa fa-times"></i></div>
            </div>

            {{-- Contenido --}}
            {{ $slot }}
        </div>
    </div>
</div>