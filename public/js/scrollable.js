//este script sirve para hacer el efecto de fade al scrollear
//funciona agarrando como constante a los elementos con la clasee hiddeable, luego se identifica cuando está
//intersectando con el observer, cuando intersecta se agrega la clase show que vuelve visible al elemento
//y cuando deja de intersectar se remueve la clase
const observer = new IntersectionObserver((entries) =>{
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting){
            entry.target.classList.add('show');
        }
        else
        {
            entry.target.classList.remove('show');
        }
    });
});
const hiddenElements = document.querySelectorAll('.hiddeable');
hiddenElements.forEach((el) => observer.observe(el));




