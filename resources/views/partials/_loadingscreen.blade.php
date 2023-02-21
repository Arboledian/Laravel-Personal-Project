{{-- este script usa su propio css
    funciona de la siguiente forma, el vid preloader se carga como una caja negra que usa toda la pantalla
    y el div ring tiene la animacion del anillo, la animacion esta hecha totalmente con css,
    , para que funciones como una verdadera pantalla de carga el css esconde la scrollbar por defecto --}}
<link rel="stylesheet" href="css/preloader.css" />

<div id="preloader">
    <div class="ring"></div>
</div>

<script>
    //en resumen este script agarra el documento con la id proloader y le quita sus propiedades css
    // y devuelve la scrollbar a su valor por defecto
    //el cambio se efectua cuando la pagina deja de cargar o pasa el tiempo, lo que pase mas tarde
    var loader = document.getElementById("preloader");

    window.addEventListener('load', function(load) {
        window.removeEventListener('load', load, false);
        setTimeout(function() {
            loader.style.display = 'none';
            document.body.style.overflow = "auto";
        }, 500);

    }, false);
</script>
