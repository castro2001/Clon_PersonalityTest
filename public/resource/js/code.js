
//Acordeon

const btnHamburgue = document.getElementById('hamburgue');
const navbar = document.querySelector('.hamburue');
btnHamburgue.addEventListener('click',()=>{
    navbar.classList.toggle('active')
})
const flagsElement = document.getElementById('flags')
const textsToChange = document.querySelectorAll('[data-section]')




flagsElement.addEventListener("click",(e)=>{
    changueLanguage(e.target.parentElement.dataset.languague);
 
});

//#region  Idiomas
const textsToChange = document.querySelectorAll('[data-language-section]')
const changueLanguage = async (languague)=>{
    //URL
    const url = new URL(window.location);
    url.searchParams.set('lang',languague)
    window.history.pushState({},'',url)
    
    //FECTH
      const requestJson = await fetch(`././model/${languague}.json`);
      const text = await requestJson.json();
  //console.log(text);
  
  
      for (const textToChange of textsToChange) {
          const section = textToChange.dataset.section;
          const value = textToChange.dataset.value
     
          textToChange.innerHTML= text[section][value]
      }
  
      
  }

  const peticion = async (languague) => {
    try {
        // Actualiza la URL con el parámetro de idioma
        const url = new URL(window.location);
        url.searchParams.set('lang', languague);
        window.history.pushState({}, '', url);

        // Fetch del archivo JSON correspondiente al idioma
        const requestJson = await fetch(`././model/${languague}.json`);
        const data = await requestJson.json();

        console.log(data.language);

        // Selección de elementos que se deben cambiar
        const textsToChange = document.querySelectorAll('[data-language-section]');
        const buttonToChange = document.querySelector('[data-language-selection]');

        textsToChange.forEach(text => {
            const section = text.getAttribute('data-language-section');
            const value = text.getAttribute('data-language-value');

            // Verifica que la sección y el valor existen en el JSON
            
                text.innerHTML = data[section][value];
            
        });

        // Actualización del texto del botón para mostrar el idioma seleccionado
        if (buttonToChange) {
            buttonToChange.innerText = data.language;
        }

    } catch (error) {
        console.error("Error al traducir la página:", error);
    }
};



const dataIdiomas = document.querySelectorAll('[data-idioma]');
dataIdiomas.forEach(languague=>{
    languague.addEventListener('click',()=>{
        const lang = languague.getAttribute('data-idioma');

        peticion(lang)
       
    })


   // changueLanguage(languague.getAttribute('data-idioma'))
})
//#endregion


/* 

const accordionItems = document.querySelectorAll('.article');

accordionItems.forEach(item => {
  const header = item.querySelector('header');
  const content = item.querySelector('.hidden'); // Targets the answer section

  header.addEventListener('click', () => {
    content.classList.toggle('hidden'); // Toggles visibility class
  });
});

*/
