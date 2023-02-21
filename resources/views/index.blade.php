<x-layout>
    <head>
        <title>Laravel Index</title>
        <script defer src="/js/indexstyle.js"></script>
        <script defer src="/js/scrollable.js"></script>
        <link rel="stylesheet" href="/css/vcard.css" />
    </head>

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
            {{-- el siguiente section correspone al como se muestra y que info se muestra
            es posible separar esto en un componente aparte, en caso de que la pagina
            sea muy grande es bueno tenerlo en consideracion aunque no es el caso --}}

            <x-vcard :vtuber="$vtuber"/>
        @endforeach
    @else
        <h1 class="text-5xl font-serif m-20 p-20"> No data to show</h1>
    @endunless

    </body>
</x-layout>
