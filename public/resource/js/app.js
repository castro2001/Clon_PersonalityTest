
AOS.init();


//#region Modales
const modal = document.querySelectorAll('[data-modal-target]')
modal.forEach((modalButton)=>{
    modalButton.addEventListener('click',()=>{
    const target=modalButton.getAttribute(`data-modal-target`);
    const modalTarget = document.getElementById(target);
    if(modalTarget){
        modalTarget.classList.toggle('hidden')
    } 
        
    })
})


const modalClose= document.querySelectorAll('[data-modal-hide]')

modalClose.forEach(close=>{
    close.addEventListener('click',()=>{
        const target=close.getAttribute(`data-modal-hide`);
    const modalTarget = document.getElementById(target);
    
    if(modalTarget){
        modalTarget.classList.toggle('hidden')
    } 
    })
})
// Cerrar el modal al hacer clic fuera del contenido
const modalOverlays = document.querySelectorAll('[aria-hidden]'); // Asumiendo que tu modal tiene una clase .modal-overlay
modalOverlays.forEach((overlay) => {
    overlay.addEventListener('click', (event) => {
        if (event.target === overlay) {
            overlay.classList.add('hidden');
        }
    });
});
//#endregion


//#region Accordion
const accordions = document.querySelectorAll('[data-accordion="collapse"]');


accordions.forEach(accordion => {
    const buttons = accordion.querySelectorAll('button[data-accordion-target]');
    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const target = document.querySelector(this.getAttribute('data-accordion-target'));
            const activePanels = accordion.querySelectorAll('section:not(.hidden)');

            activePanels.forEach(panel => {
                if (panel !== target) { // No afectar el panel clicado
                    panel.classList.add('hidden');
                
                    panel.style.height = '0'; // Asegúrate de que la altura sea 0
                  
                }
            });

            if (target.classList.contains('hidden')) {
                target.classList.remove('hidden');
                target.classList.remove('translate-x-full');
                target.classList.add('translate-x-0');
                target.style.height = target.scrollHeight + 'px'; // Ajusta la altura del contenido
               
            } else {
                target.classList.add('hidden');
                target.classList.remove('translate-x-0');
                target.classList.add('translate-x-full');
                target.style.height = '0'; // Asegúrate de que la altura sea 0
               
            }
        });
    });
});


//#endregion

//#region Tab
const tabs = document.querySelectorAll('#tabMenu li');
    
tabs.forEach(tab => {
    tab.addEventListener('click', function() {
        // Remover la clase active y el borde superior de todos los elementos
        tabs.forEach(t => {
            t.classList.remove('border-t', 'border-[#7980eb]');
        });

        // Agregar la clase active y el borde superior al elemento seleccionado
        this.classList.add('border-t', 'border-[#7980eb]');
    });
});

//#endregion

//#region NNavbar 
const navbarToogle = document.querySelectorAll('[data-toogle]'); // Asumiendo que tu modal tiene una clase .modal-overlay
navbarToogle.forEach((toogle) => {
    toogle.addEventListener('click', () => {

        console.log(toogle.getAttribute(`data-toogle`));

        const target=toogle.getAttribute(`data-toogle`);
        const modalTarget = document.getElementById(target);
        if(modalTarget){
            modalTarget.classList.toggle('hidden')
        } 

        
    });
});
//#endregion

//#region Dropdown 
const DropdownToogle = document.querySelectorAll('[data-dropdown-toggle]');
DropdownToogle.forEach((dropdown) => {
    dropdown.addEventListener('click', (event) => {

        const target = dropdown.getAttribute('data-dropdown-toggle');
        console.log(target);
        
        const dropdownTarget = document.getElementById(target);
        dropdownTarget.classList.toggle('hidden');
    });      
});
//#endregion

//#region Idiomas


const idiomas = document.querySelectorAll('[data-idioma]');

idiomas.forEach(idioma => {
    idioma.addEventListener("click", async (e) => {
        const id = idioma.getAttribute('data-idioma');
        const request = await fetch(`App/model/${id}.json`);
        const response = await request.json();
        console.log(response);
        
        const buttonToChange = document.querySelector('[data-language-selection]');
        const pageToChange = document.querySelectorAll('[data-language-page]');
      
        pageToChange.forEach(pageChange=>{
            const page = pageChange.getAttribute('data-language-page');
            const section = pageChange.getAttribute('data-language-section');

            const value = pageChange.getAttribute('data-language-value');
            console.log(`${page}>${section}: ${value}>`);

            pageChange.innerHTML = response[page][section][value];  
            
        })

    

        localStorage.setItem('language', id);
          // Actualización del texto del botón para mostrar el idioma seleccionado
          if (buttonToChange) {
            buttonToChange.innerHTML = response.language;
        }
        // Esperar un momento antes de recargar la página
        setTimeout(() => {
            window.location.reload();
        }, 100); // 100 milisegundos de retraso
    });
});

// Al cargar la página, aplicar el idioma guardado
document.addEventListener("DOMContentLoaded", async () => {
    const savedLanguage = localStorage.getItem('language');
    if (savedLanguage) {
        const request = await fetch(`App/model/${savedLanguage}.json`);
        const response = await request.json();

        const buttonToChange = document.querySelector('[data-language-selection]');
        const pageToChange = document.querySelectorAll('[data-language-page]');

        pageToChange.forEach(pageChange=>{
            const page = pageChange.getAttribute('data-language-page');
            const section = pageChange.getAttribute('data-language-section');

            const value = pageChange.getAttribute('data-language-value');
            console.log(`${page}>${section}: ${value}>`);

            pageChange.innerHTML = response[page][section][value];  
        })


        // Actualización del texto del botón para mostrar el idioma seleccionado
        if (buttonToChange) {
            buttonToChange.innerHTML = response.language;
        }
    }
});

//#endregion