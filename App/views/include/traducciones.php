<header class="bg-[#7980eb]  sticky top-0 z-20 sm-hidden">
  <nav class=" border-gray-200 dark:bg-gray-900 dark:border-gray-700 ">
      <div class="max-w-screen-xl  flex  items-center justify-between mx-auto px-4 py-2.5">
      <div class="flex lg:flex-1  space-x-3 rtl:space-x-reverse">
          <div>
              <a href="<?= HOME ?>" class="-m-1.5 p-1.5 cursor-pointer">
                  <span class="sr-only" ><?= COMPANY?> </span>
              <img src="https://personalitytest.mobi/logo.webp" class="ml-6 h-8 md:h-12 w-auto" alt="Personality Test - Test de Personalidad Online"/>
              </a>
          </div>
      </div>
          
          <button data-collapse-toggle="navbar-dropdown" id="hamburgues" type="button" aria-hidden="true"
          class="inline-flex items-center p-2 ms-3 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden
           hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" 
           aria-controls="navbar-dropdown" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
          </button>
          
          
            <div class="hidden p-5  w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 mt-4   md:flex-row md:mt-0 md:text-sm md:gap-x-12   ">
                  
                    <li class="relative">
                     
                    </li>

                    <li>
                    <a href="<?= PRICE?>" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Precio</a>
                    </li>
                    <li>
                    <button data-modal-target="darsebaja-modal" data-modal-toggle="darsebaja-modal" class="block py-2 px-3 text-white rounded hover:bg-white md:hover:bg-transparent md:border-0 md:hover:text
                            -blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg
                            -transparent"  type="button"> Darse de baja</button>
                    </li>
                    <li >
                    <button class="py-1 bg-white cursor-pointer inline-flex items-center text-xs space-x-2 hover:bg-transparent hover:text-white px-4 border rounded-full "
                     data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login" width="20"  height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                        <path d="M21 12h-13l3 -3"></path>
                        <path d="M11 15l-3 -3"></path>
                    </svg>   
                    Login
                        </button
                    </li>
                </ul>
          </div>
      </div>
      
 

  </nav>

 
</header>