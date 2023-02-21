<x-layout>
    <head>
        <title>Laravel Index</title>
        <script defer src="/js/indexstyle.js"></script>
        <script defer src="/js/scrollable.js"></script>
        <link rel="stylesheet" href="/css/vcard.css" />

    </head>


    @include('/partials._search')
    @unless (count($vtubers)==0)
    @foreach ($vtubers as $vtuber )
    <section>
    <div class="v-contenedor hiddeable">
        <img class="image" draggable="false" src="/images/{{ $vtuber->image }}.jpg">
        <div class="v-content">
            <h1 class="v-name"> {{ $vtuber -> name }}</h1>
            <div class="v-info">
                <h2 class="v-nickname">Nicknames: {{ $vtuber -> nickname }}</h2>
                <h2 class="v-fanname">Fanname: {{  $vtuber->fanname }} </h2>
                <h2 class="v-fanname">Oshi Mark: {{  $vtuber->oshimark }} </h2>
                <h2 class="v-gen">Generation: {{ $vtuber->company }} </h2>
            </div>
            {{--
            <p>{{ $vtuber->description }}</p>
                --}}
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tortor at auctor urna nunc. Dui accumsan sit amet nulla facilisi morbi tempus iaculis. Tristique senectus et netus et. Integer enim neque volutpat ac tincidunt vitae semper. </p>
            <button type="button" class="collapsible">Recommended Clip</button>
            <div class="content">
                <iframe class="v-video" src="{{ $vtuber -> clip }}" title="YouTube clip" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="space">
    </div>
</section>
@endforeach
@else
<h1 class="text-5xl font-serif m-20 p-20"> No data to show</h1>
@endunless

</x-layout>
