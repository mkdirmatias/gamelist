<x-login>
    <div class="flex flex-col justify-center items-center h-screen bg-gray-100">
        <div>
            <img class="w-32 mb-10" src="{{ asset('img/logo-black.png') }}" alt="logo">
        </div>
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 px-6 py-10 sm:px-10 sm:py-6 bg-white rounded-lg shadow-md lg:shadow-lg">
            @if($errors->any())
                <x-alerta color="red" :mensajes="$errors->all()"></x-alerta>
            @endif
        
            <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                Iniciar Sesión
            </h2>

            <form class="mt-5" method="POST" action="{{ route('login') }}">
                @csrf

                <label for="email" class="block text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                <input id="email" autofocus type="email" name="email" placeholder="....." value="{{ old('email') }}" autocomplete="email" class="block w-full py-3 px-1 mt-2 text-gray-800 appearance-none border-b-2 border-gray-100 focus:text-gray-500 focus:outline-none focus:border-gray-200" required>

                <label for="password" class="block mt-5 text-xs font-semibold text-gray-600 uppercase">Contraseña</label>
                <input id="password" type="password" name="password" placeholder="*****" autocomplete="current-password" class="block w-full py-3 px-1 mt-2 mb-4 text-gray-800 appearance-none border-b-2 border-gray-100 focus:text-gray-500 focus:outline-none focus:border-gray-200" required>

                <button type="submit" class="w-full py-3 mt-5 bg-gray-800 rounded-sm font-medium text-white uppercase focus:outline-none hover:bg-gray-700 hover:shadow-none">
                    Entrar
                </button>
            </form>
        </div>
    </div>
</x-login>
