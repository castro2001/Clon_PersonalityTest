<div id="authentication-modal" tabindex="-1" aria-hidden="true" class=" hidden fixed	 z-50 inset-0 bg-gray-500 
bg-opacity-50 flex items-center justify-center">
    <div class="absolute right-0 bg-white p-4 w-full max-w-md h-full shadow-lg">
          <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5   "> 
                <button type="button" class="end-2.5 text-black rounded-full bg-gray-200  hover:bg-gray-400 hover:text-gray-900 rounded-lg text-sm 
                 w-10 h-10 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

          
            <!-- Modal body -->
            <div class="p-4 md:p-8 max-w-sm w-full relative shadow  ">
                <h2 class="text-2xl font-bold text-center mb-6" data-language-page="Header" data-language-section="Modal_2" data-language-value="title">Acceda a su cuenta</h2>

                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label for="email" class="sr-only">Correo Electrónico</label>
                        <div class="relative">
                            <input type="email" id="email" name="email" placeholder="Correo Electrónico" class="w-full p-3 pl-10 border border-gray-300 rounded
                              rounded focus:outline-none focus:ring-2 ring-offset-2 focus:ring-gray-500 " required>
                            <span class="fas fa-envelope absolute left-3 top-3 text-gray-400">
                                
                            </span>
                    </div>
                    </div>
                    <div>
                        <label for="password" class="sr-only">Contraseña</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" placeholder="Contraseña" class="w-full
                             p-3 pl-10 border border-gray-300 rounded focus:outline-none focus:ring-2 ring-offset-2 focus:ring-gray-500" required>
                            <span class=" fas fa-key absolute left-3 top-3 text-gray-400"> 
                             
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-blue-500">
                            <span class="ml-2 text-sm text-gray-600" data-language-page="Header" data-language-section="Modal_2" data-language-value="alert_1">Recordarme</span>
                        </label>
                        <a href="#" class="text-sm text-black hover:underline" data-language-page="Header" data-language-section="Modal_2" data-language-value="alert_2">Olvidé mi contraseña</a>
                    </div>
                    <button type="submit" data-language-page="Header" data-language-section="Modal_2" data-language-value="button" class="w-full  bg-inherit bg-stone-900   text-white p-3 rounded-lg font-semibold hover:bg-[#7980eb] transition duration-200">
                        <span class="inline-flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25M8.25 9V5.25m-3 3.75h12a.75.75 0 01.75.75v9a2.25 2.25 0 01-2.25 2.25h-9A2.25 2.25 0 014.5 18.75v-9a.75.75 0 01.75-.75z" />
                            </svg>
                            Acceder
                        </span>
                    </button>
                </form>
            </div>
        <!-- Modal content -->
       
    </div>
</div>

<div id="darsebaja-modal" tabindex="-1" aria-hidden="true" class=" hidden fixed transition delay-150 duration-300 ease-in-out  bottom-0 z-50 inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center">
    <div class="absolute right-0 bg-white p-4 w-full max-w-md h-full shadow-lg">
        <!-- Modal content -->
        <div class="flex items-center justify-between p-4 md:p-5  rounded-t ">
             
             <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex 
             justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="darsebaja-modal">
                 <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                 </svg>
                 <span class="sr-only">Close modal</span>
             </button>
        </div>

         <!-- Modal body -->
         <div class="p-4 md:p-8 lg:max-w-sm lg:w-full relative   ">
              
                <?php include __DIR__."/../include/forms.php" ?>
         </div>
    </div>
</div>

<div id="register-modal" tabindex="-1" aria-hidden="true" class=" hidden fixed	 z-50 inset-0 bg-gray-500 
bg-opacity-50 flex items-center justify-center">
    <div class="absolute right-0 bg-white p-4 max-w-sm w-80 lg:w-full lg:max-w-md h-full shadow-lg">
        <!-- Modal content -->
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5  rounded-t ">
               
               <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm 
               w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="register-modal">
                   <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                   </svg>
                   <span class="sr-only">Close modal</span>
               </button>

         
           </div>
          <!-- Modal body -->
          <div class="p-4 md:p-8 lg:max-w-sm lg:w-full relative ">
                <h2 class="text-2xl font-bold text-center mb-6">Completa tus datos</h2>

                <form action="#" method="POST" class="space-y-4">
                    <div class="relative">
                            <input type="text" id="name" name="name" placeholder="Nombres Completos" class="w-full p-3 pl-10 border border-gray-300 rounded
                              rounded focus:outline-none focus:ring-2 ring-offset-2 focus:ring-gray-500 " required>
                            <span class="fas fa-user absolute left-3 top-3 text-gray-400">
                                
                            </span>
                    </div>

                    <div class="relative">
                            <input type="email" id="email" name="email" placeholder="Correo Electrónico" class="w-full p-3 pl-10 border border-gray-300 rounded
                              rounded focus:outline-none focus:ring-2 ring-offset-2 focus:ring-gray-500 " required>
                            <span class="fas fa-envelope absolute left-3 top-3 text-gray-400">
                                
                            </span>
                    </div>


                   
                   
                        <div class="relative">
                            <input type="password" id="password" name="password" class="w-full
                             p-3 pl-10 border border-gray-300 rounded focus:outline-none focus:ring-2 ring-offset-2 focus:ring-gray-500" required>
                            <span class=" fas fa-key absolute left-3 top-3 text-gray-400"> 
                             
                            </span>
                        </div>
                    

                    <div class="flex items-center justify-between">
                        <input type="checkbox" class="form-checkbox text-blue-500">
                        <label class="inline-flex items-center">
                            <span class="ml-2 text-sm text-gray-600" style="text-align: justify;">Declaro qque soy mayor de edad segun las leyes de mi pais 
                                y he leido y acepto los <a href="#" class="font-bold	">terminos y condiciones del servicio..</a>
                            </span>
                        </label>
                    </div>
                    <div class="flex items-center justify-between">
                        <input type="checkbox" class="form-checkbox text-blue-500">
                        <label class="inline-flex items-center">
                            <span class="ml-2 text-sm text-gray-600" style="text-align: justify;">Aunque que mi información personal sea usada según lo indicado por la politica de privacidad
                                y he leido y acepto los <a href="#" class="font-bold	">politica dde privacidad</a>
                            </span>
                        </label>
                    </div>
                    <button type="submit"  class="w-full  bg-inherit bg-stone-900   text-white p-3 rounded-lg font-semibold hover:bg-[#7980eb] transition duration-200">
                        <span class="inline-flex items-center justify-center">
                          <span class="fas fa-user-plus"></span>
                           Registrar cuenta
                        </span>
                    </button>
                </form>
            </div>

    </div>
</div>