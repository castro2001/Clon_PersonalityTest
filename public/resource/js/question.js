const questions = [
    { id: 1, pregunta: "¿Te consideras una persona no convencional?", opciones: ["😠", "🙁", "😐", "🙂", "😁"] },
    { id: 2, pregunta: "¿Encuentras fascinantes las culturas y puntos de vista diferentes al tuyo?", opciones: ["😠", "🙁", "😐", "🙂", "😁"] },
    { id: 3, pregunta: "¿Prefieres la variedad y la espontaneidad en lugar de la rutina y la estructura?", opciones: ["😠", "🙁", "😐", "🙂", "😁"] },
    
    { id: 4, pregunta: "¿Eres curioso/a y abierto/a a nuevas ideas?", opciones: ["😠", "🙁", "😐", "🙂", "😁"] },
    { id: 5, pregunta: "¿Te interesa el arte, la música o la literatura no convencionales?", opciones: ["😠", "🙁", "😐", "🙂", "😁"] },
    { id: 6, pregunta: "¿Te sientes cómodo/a cuestionando las normas establecidas?", opciones: ["😠", "🙁", "😐", "🙂", "😁"] },
    
    { id: 7, pregunta: "¿Te esfuerzas por alcanzar la perfección en tus tareas?", opciones: ["😠", "🙁", "😐", "🙂", "😁"] },
   
    { id: 8, pregunta: "¿Te gusta planificar y organizar tus actividades?", opciones: ["😠", "🙁", "😐", "🙂", "😁"] },
    { id: 9, pregunta: "¿Eres detallista y cuidadoso/a en tu trabajo?", opciones: ["😠", "🙁", "😐", "🙂", "😁"] },
    { id:10 , pregunta: "¿Te esfuerzas por alcanzar la perfección en tus tareas?", opciones: ["😠", "🙁", "😐", "🙂", "😁"] },

   




];
//Preguntas
let currentIndex = 0;
const questionsPerPage = 3;
let respuestasSeleccionadas = {};//mantener las preguntas seleccionadas

//Temporizador
let timeRemaining = 600 //10 min en sg
let timeInterval;


function startTimer(){
    const countdownContainer = document.getElementById('countdown-container');

    timerInterval = setInterval(() => {
        const minutes = Math.floor(timeRemaining / 60);
        const seconds = timeRemaining % 60;
        countdownContainer.innerHTML = `
        <div class="grid flex-grow bg-white place-items-center">
                <button class="w-28 h-9 md:w-44 md:h-12 rounded-full bg-gray-800 text-white text-primary-color text-lg font-extralight shadow-lg hover:text-white cursor-default">
                  <span class=" font-mono text-sm md:text-2xl">
                    <span >${String(minutes).padStart(2,'0')}</span>:
                    <span >${String(seconds).padStart(2,'0')} </span>
                  </span>
                </button>
              </div
      
      `
   

        timeRemaining--;

        if (timeRemaining < 0) {
            clearInterval(timerInterval);
            // Aquí puedes manejar lo que pasa cuando el tiempo se agota
        }
    }
    , 1000);
}

// Calcula el porcentaje completado
function updateProgressBar() {
    const progressBar = document.getElementById('progress');
    const totalQuestions = questions.length;
    const answeredQuestions = Object.keys(respuestasSeleccionadas).length;
    const progressPercent = (answeredQuestions / totalQuestions) * 100;
    progressBar.style.width = `${progressPercent}%`;


}


function renderQuestions() {
    const quizContainer = document.getElementById('quiz-container');
    quizContainer.innerHTML = '';

    const start = currentIndex;
    const end = start + questionsPerPage;
    const currentQuestions = questions.slice(start, end);

    currentQuestions.forEach(question => {
        const questionCard = document.createElement('div');
        questionCard.className = "flex justify-center align-center mb-2 w-full  ";
        questionCard.innerHTML = `
               <div class="card w-full mx-auto max-w-full bg-base-100 shadow-xl">
        <div class="card-body p-6">
            <h3 class="text-center font-semibold text-sm md:text-xl">${question.pregunta}</h3>
        </div>
        <div class="flex w-full justify-between px-4">
            <div class="text-xs text-left">
                Muy en desacuerdo
            </div>
            <div class="text-xs text-right">
                Muy de acuerdo
            </div> 
        </div>
        <div class="flex justify-center w-full p-5">
            <div class="grid grid-cols-5 sm:grid-cols-5 lg:grid-cols-5 gap-4 justify-items-center question-container p-4 w-full">
                ${question.opciones.map(opcion => `
                            <input
                                class="btn radio w-10 md:w-24 text-xl md:text-3xl"
                                type="radio"
                                name="options-${question.id}"
                                aria-label="${opcion}"
                                title="${opcion}"
                                value="${opcion}"
                                ${respuestasSeleccionadas[question.id] === opcion ? 'checked' : ''}
                                onchange="handleOptionChange(${question.id}, '${opcion}')"
                            />
                `).join('')}
            </div>
        </div>
    </div>
</div>

        `;

        quizContainer.appendChild(questionCard);
    });
   
    updateButtons();
    updateProgressBar();
}

function handleOptionChange( questionId, selectedOption) {
    const currentQuestions = questions.slice(currentIndex, currentIndex + questionsPerPage);
    let allSelected = true;
    respuestasSeleccionadas[questionId] = selectedOption;
    currentQuestions.forEach(question => {
        const selectedOption = document.querySelector(`input[name="options-${question.id}"]:checked`);
        if (!selectedOption) {
            allSelected = false;
        }
    });

    const nextButton = document.getElementById('nextButton');
    nextButton.disabled = !allSelected;

    if (allSelected && currentIndex + questionsPerPage >= questions.length) {
            //muesttro el dialogo
            const modal = document.getElementById('modalConfirm');
            modal.showModal();

            const modalFinish = document.getElementById('modal-finish');
            const modalClose = document.getElementById('modal-close');
            modalFinish.onclick=()=>{
                window.location.href="http://localhost/ladingprueba/end-test";
            }

            modalClose.onclick=()=>{
                modal.close();
            }

    }else if(allSelected){
        
            currentIndex += questionsPerPage;
        

        renderQuestions();
        nextButton.disabled = allSelected;
    }
    updateButtons()
   
}

function updateButtons() {
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    //const isLastPage = currentIndex + questionsPerPage >= questions.length;

    prevButton.disabled = currentIndex === 0;
    nextButton.disabled = Object.keys(respuestasSeleccionadas).length < (currentIndex + questionsPerPage);

    prevButton.onclick = () => {
        currentIndex -= questionsPerPage;
        renderQuestions();
    };

    nextButton.onclick = () => {
        currentIndex += questionsPerPage;
        renderQuestions();
    };
}
startTimer();

renderQuestions();
document.addEventListener('DOMContentLoaded', () => {
    // Iniciar el temporizador cuando se carga el DOM
});