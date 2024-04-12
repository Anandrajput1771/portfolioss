let navbar =document.querySelector("ul");
let menu =document.querySelector(".menu");

menu.addEventListener('click',()=>{
    navbar.classList.toggle("mobile");
})