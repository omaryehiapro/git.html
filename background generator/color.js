const body=document.querySelector("body");
const colorpicker1=document.querySelector(".colorpicker1");
const colorpicker2=document.querySelector('.colorpicker2');



function gradient() {
   
    body.style.background = `linear-gradient(to right,
    ${colorpicker1.value},${colorpicker2.value})`;

}

colorpicker1.addEventListener("input", gradient);

colorpicker2.addEventListener("input", gradient);