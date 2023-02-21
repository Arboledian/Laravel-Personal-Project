<x-layout>
    <head>
        <title>Laravel Index</title>
        <script defer src="/js/indexstyle.js"></script>
        <script defer src="/js/scrollable.js"></script>
        <link rel="stylesheet" href="/css/vcard.css" />
    </head>

    @include('/partials._search')
    {{-- una lina otra vez --}}
    <div class="line space"></div>

    {{-- funcion @unless de laravel, es como un if else, en este caso busca si existen datos en el array
            /variable vtubers, si hay datos prosigue y en caso de que no devuelve un lo que este en el else, --}}


        {{-- foreach es la tipica funcion para buscar datos en un array --}}

            {{-- el siguiente section correspone al como se muestra y que info se muestra
            es posible separar esto en un componente aparte, en caso de que la pagina
            sea muy grande es bueno tenerlo en consideracion aunque no es el caso --}}
@if ($vtuber)

<x-vcard :vtuber="$vtuber"/>

@else
<h1 class="text-5xl font-serif m-20 p-20"> No data to show</h1>
@endif


    </body>
</x-layout>
