<x-layout>
    <head>
        <title>Laravel - {{ $vtuber->name }}</title>
    </head>
    {{-- por alguna razón no sirve la pantalla de carga en esta pagina, no es un problema porque seria molesto
        pero es curioso --}}
    @include('/partials._search')
    {{-- una lina otra vez --}}
    <div class="line space"></div>
    @if ($vtuber)
    <x-comments>
        <x-vcard :vtuber="$vtuber" />

        {{--
            haceerlo como hardcode y luego pasarlo a la template
            --}}
    </x-comments>
    @else
        <h1 class="text-5xl font-serif m-20 p-20"> No data to show</h1>
    @endif


    </body>
</x-layout>
