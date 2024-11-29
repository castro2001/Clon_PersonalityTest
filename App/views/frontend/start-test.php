
<div class="space-y-2 w-full md:max-w-4xl mx-auto min-h-[600px]">
    <!-- Barra de progreso -->
    
    <div class="w-full md:max-w-4xl bg-gray-200 rounded-full h-2.5" id="progress-bar-container">
    <div id="progress" class="bg-[#7980eb] h-2.5 rounded-full" style="width: 0%;"></div>
</div>

    <!-- PREGUNTAS
    class="bg-[#7980eb] h-2.5 rounded-full" style="width: 0%"  
    
    -->
    <div class="join-horizontal space-x-2 space-y-2 lg:tooltip p-5  w-full">
      
        <div id="quiz-container"></div>
      

   
    <!-- BUTTONS ACTIONS -->
        <div class="md:mt-6 animate-fade-down animate-ease-in delay-300">
          <div class="flex w-full lg:flex-row justify-between mt-3 md:mt-6 space-x-3.5">
            <div class="grid flex-grow bg-white place-items-center">
              <button class="btn btn-circle w-16 md:w-32 btn-outline"  id="prevButton" disabled>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"
                  ></path>
                </svg>

              </button>
            </div>
            <div id="countdown-container"></div>

          
        
            <div class="grid flex-grow bg-white place-items-center">
            <button class="btn btn-circle w-16 md:w-32 btn-outline" id="nextButton" disabled >
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
                >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                ></path>
                </svg>
            </button>
            </div>

          </div>
        </div>
    </div>

    <dialog id="modalConfirm" class="modal">
      <div class="modal-box">
        <h3 class="font-bold text-lg">Deseas finalizar?</h3>
        <div role="alert" class="alert">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            class="stroke-info shrink-0 w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
            ></path></svg><span
            >Recuerda que una vez finalizado no podrás cambiar ninguna de las
            respuestas.</span
          >
        </div>
        <div class="modal-action">
          <form method="dialog" class="flex-row space-x-3">
            <button class="btn h-16 ml-2"  id="modal-close">Cerrar</button
            ><button
              class="btn btn-lg sm:btn-sm md:btn-md h-16 lg:btn-lg bg-gray-900 hover:bg-[#7980eb] text-white"
                id="modal-finish"
              >
              Finalizar
            </button>
          </form>
        </div>
      </div>
    </dialog>
</div>
    



