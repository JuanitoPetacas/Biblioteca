
var elementoVisible = true;
let toggle = document.getElementById('sidebarToggle')
let icon = document.getElementById('icon-dash')
toggle.addEventListener('click',()=>{

    let title = document.getElementById('title')
    if (elementoVisible) {
        // Si el elemento está visible, ocultarlo
        title.style.visibility = 'hidden';
        icon.style.marginLeft = "0.7rem";
    } else {

        // Si el elemento está oculto, mostrarlo
        icon.style.marginLeft = 0;
        title.style.visibility = 'visible';
    }
    
    // Invertir el estado de visibilidad para la próxima vez que se haga clic
    elementoVisible = !elementoVisible;
})
