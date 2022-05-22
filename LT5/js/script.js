/*eslint-env browser*/
var logo = document.getElementById('logo');
logo.addEventListener('click', function(logo){
    logo.target.classList.toggle('logo-max')
})

function info(obj) {
    if (obj.id === 'block-1') {
        const myElement = document.getElementById('block-8');
            myElement.style.display = "block";
    }
    else if (obj.id === 'block-2'){
         const myElement = document.getElementById('block-9');
            myElement.style.display = "block";       
    }
    else if (obj.id === 'block-3'){
         const myElement = document.getElementById('block-10');
            myElement.style.display = "block";       
    }
    else if (obj.id === 'block-4'){
         const myElement = document.getElementById('block-11');
            myElement.style.display = "block";       
    }
    else if (obj.id === 'block-5'){
         const myElement = document.getElementById('block-12');
            myElement.style.display = "block";       
    }
    else if (obj.id === 'block-6'){
         const myElement = document.getElementById('block-13');
            myElement.style.display = "block";       
    }
    else if (obj.id === 'block-7'){
         const myElement = document.getElementById('block-14');
            myElement.style.display = "block";       
    }
}

function hide(obj) {
    if (obj.id === 'block-1') {
        const myElement = document.getElementById('block-8');
            myElement.style.display = "none";
    }
    else if (obj.id === 'block-2') {
        const myElement = document.getElementById('block-9');
            myElement.style.display = "none";
    }
    else if (obj.id === 'block-3') {
        const myElement = document.getElementById('block-10');
            myElement.style.display = "none";
    }
    else if (obj.id === 'block-4') {
        const myElement = document.getElementById('block-11');
            myElement.style.display = "none";
    }
    else if (obj.id === 'block-5') {
        const myElement = document.getElementById('block-12');
            myElement.style.display = "none";
    }
    else if (obj.id === 'block-6') {
        const myElement = document.getElementById('block-13');
            myElement.style.display = "none";
    }
    else if (obj.id === 'block-7') {
        const myElement = document.getElementById('block-14');
            myElement.style.display = "none";
    }
}