const observer = new IntersectionObserver((entries) =>{
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting){
            entry.target.classList.add('show');
        }
        else
        {
            entry.target.classList.show('show');
        }
    });
});
const hiddenElements = document.querySelectorAll('.hiddeable');
hiddenElements.forEach((el) => observer.observe(el));

/*
const boxes = document.querySelectorAll(".box");
const checkBoxes = () => {
    const triggerBottom = (window.innerHeight / 5) *4;
    boxes.forEach((box) =>{
        const boxTop = box.getBoundingClientRect().top;
        if (boxTop < triggerBottom) box.classList.add("show");
        else box.classList.remove("show");
    });
};

window.addEventListener("show",checkBoxes);
checkBoxes();*/

