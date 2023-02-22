<x-layout>
    <head>
        {{-- por alguna razón tengo que poner el script acá tambien por consistencia --}}
        <script defer src="/js/indexstyle.js"></script>
        <title>Laravel - Index</title>
    </head>
    @include('/partials._loadingscreen')


    @include('/partials._search')

    {{-- info de la pagina --}}
    <div>
        <aside>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua. Tortor at auctor urna nunc. Dui accumsan sit amet nulla facilisi morbi tempus
                iaculis. Tristique senectus et netus et. Integer enim neque volutpat ac tincidunt vitae semper. </p>
        </aside>
    </div>

    {{-- una lina otra vez --}}
    <div class="line space"></div>

    {{-- funcion @unless de laravel, es como un if else, en este caso busca si existen datos en el array
            /variable vtubers, si hay datos prosigue y en caso de que no devuelve un lo que este en el else, --}}
    @unless(count($vtubers) == 0)

        {{-- foreach es la tipica funcion para buscar datos en un array --}}
        @foreach ($vtubers as $vtuber)
            {{-- se usa la plantilla vcard para mostar la informacion, ademas se use :vtuber para poder pasar
            la información de la variable $vtuber --}}
            <x-vcard :vtuber="$vtuber" />
        @endforeach
    @else
        <h1 class="text-5xl font-serif m-20 p-20"> No match found</h1>
    @endunless

    </body>
</x-layout>
