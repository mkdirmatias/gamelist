<div class="flex justify-between capitalize text-3xl mb-5 items-center relative" x-data="{menu:false}">
    <div class="font-semibold">{{$slot}}</div>

    <div class="flex items-center cursor-pointer" @click="{menu=true}">
        <img class="h-10 w-10 rounded-full object-cover" src="https://ui-avatars.com/api/?name=Matias Baeza" alt="Profile" />
        <button class="ml-1 focus:outline-none">
            <svg class="h-4 w-4 fill-current" viewBox="0 0 192 512">
                <path
                    d="M96 184c39.8 0 72 32.2 72 72s-32.2 72-72
                    72-72-32.2-72-72 32.2-72 72-72zM24 80c0 39.8 32.2 72
                    72 72s72-32.2 72-72S135.8 8 96 8 24 40.2 24 80zm0
                    352c0 39.8 32.2 72 72 72s72-32.2
                    72-72-32.2-72-72-72-72 32.2-72 72z">
                </path>
            </svg>
        </button>
    </div>

    <div class="absolute right-0 top-12 text-xs bg-white z-10 rounded-lg shadow" x-show="menu">
        <div class="p-4 flex items-center justify-center" @click.away="menu = false">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">
                    <i class="fa fa-times mr-2"></i>
                    Cerrar Sesión
                </button>
            </form>
        </div>
    </div>
</div>