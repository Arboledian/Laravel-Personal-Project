//este scrip es para crear la barra retaible
//identifica los elementos con la clase collapsible y responde cuando se clickea sobre ellos, luego a
//sus clases  hijas se vuelven visibles u ocultas segun corresponda
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
    if (content.style.display === "flex") {
        content.style.display = "none";
    } else {
        content.style.display = "flex";
    }
});
}




