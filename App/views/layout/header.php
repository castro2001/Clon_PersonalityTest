<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla Lading <?= isset($title) ? $title : '' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css"/>
    <link rel="stylesheet" href="public/resource/css/style.css"> 
     <script src="https://cdn.tailwindcss.com"></script> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>
<!--#region Barra de navigation -->
<header class="bg-[#7980eb] sticky top-0 z-20 sm-hidden">
  <nav class=" border-gray-200 dark:bg-gray-900 dark:border-gray-700 ">
      <div class="max-w-screen-xl  flex  items-center justify-between mx-auto px-4 py-2.5">
      <div class="flex lg:flex-1  space-x-3 rtl:space-x-reverse">
          <div>
              <a href="<?=HOME ?>" class="-m-1.5 p-1.5 cursor-pointer">
                  <span class="sr-only" >Plantilla laddinng </span>
              <img src="https://personalitytest.mobi/logo.webp" class="ml-6 h-8 md:h-12 w-auto" alt="Personality Test - Test de Personalidad Online"/>
              </a>
          </div>
      </div>
          
          <button data-collapse-toggle="navbar-dropdown" id="hamburgues" type="button"
          class="text-white md:hidden "
           data-toogle="nav">
          <span class="fas fa-bars"></span>
        
          </button>
          
          
            <div class="hidden p-5  w-full md:block md:w-auto">
                <ul class="flex flex-col font-medium p-4 mt-4   md:flex-row md:mt-0 md:text-sm md:gap-x-12   ">
                  
                    <li class="relative">
                          <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownMenu"  class="flex items-center justify-between w-full py-2 px-3 text-white 
                          rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white
                           dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent" >
                            <span class="fas fa-earth-asia "></span>
                           <span class="px-2" data-language-selection="language"   >Espanol</span>
                           <span class="fas fa-angle-down "></span>

                        </button>
                            <!-- Dropdown menu -->
                        <div id="dropdownMenu" class="hidden  z-10 absolute top-50 w-80 rounded-lg  -translate-x-20 translate-y-6  left-0 p-5 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="flex flex-col row-span-3">
                                    <li data-idioma="es" class="flex items-center mx-5  mb-5 cursor-pointer hover:bg-gray-100">
                                        <img src="public/resource/image/spain.webp" alt="Español" class="w-8 h-8 mr-2">
                                        <span class="text-slate-500" >Español</span>
                                    </li>
                                    <li data-idioma="en" class="flex items-center mx-5 mb-5	 cursor-pointer hover:bg-gray-100">
                                        <img src="public/resource/image/united_kingdom.webp" alt="English" class="w-8 h-8 mr-2">
                                        <span class="text-slate-500">English</span>
                                    </li>
                                    <li  data-idioma="it" class="flex items-center mx-5  mb-5 cursor-pointer hover:bg-gray-100">
                                        <img src="public/resource/image/italy.webp" alt="Italiano" class="w-8 h-8 mr-2"/> 
                                        <span class="text-slate-500">Italiano</span>
                                    </li>
                                    <li data-idioma="fr" class="flex items-center mx-5 mb-5 cursor-pointer hover:bg-gray-100">
                                        <img src="public/resource/image/france.png" alt="Français" class="w-8 h-8 mr-2"/>  
                                        <span class="text-slate-500">Français</span>
                                    </li>
                                    <li data-idioma="ge" class="flex items-center mx-5 mb-5 cursor-pointer hover:bg-gray-100">
                                        <img src="public/resource/image/germany.png" alt="Deutsch" class="w-8 h-8 mr-2"/> 
                                        <span class="text-slate-500">Deutsch</span>
                                    </li>
                                    <li data-idioma="sw" class="flex items-center mx-5 mb-5  cursor-pointer hover:bg-gray-100">

                                        <img src="public/resource/image/sweden.png" alt="Svenska" class="w-8 h-8 mr-2"/> 
                                        <span class="text-slate-500">Svenska</span>
                                    </li>
                                    <li data-idioma="ca" class="flex items-center mx-5  mb-5 cursor-pointer hover:bg-gray-100">
                                        <img src="public/resource/image/catalonia.png" alt="Català" class="w-8 h-8 mr-2"> 
                                        <span class="text-slate-500">Català</span>
                                    </li>
                                    <li data-idioma="po" class="flex items-center mx-5 mb-5  cursor-pointer hover:bg-gray-100">
                                        <img src="public/resource/image/portugal.png" alt="Português" class="w-8 h-8 mr-2">
                                        <span class="text-slate-500">Português</span>
                                    </li>
                                </ul>
                        </div>
                    </li>

                    <li>
                    <a href="<?=PRICE ?>" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" 
                    data-language-page="Header"   data-language-section="Navigation" data-language-value="navItem1">Precio</a>
                    </li>
                    <li>
                    <button data-modal-target="darsebaja-modal" data-modal-toggle="darsebaja-modal" class="block py-2 px-3 text-white rounded hover:bg-white md:hover:bg-transparent md:border-0 md:hover:text
                            -blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg
                            -transparent"  type="button" data-language-page="Header" data-language-section="Navigation" data-language-value="navItem2"> Darse de baja</button>
                    </li>
                    <li >
                    <button class="py-1 bg-white cursor-pointer inline-flex items-center text-xs space-x-2 hover:bg-transparent hover:text-white px-4 border rounded-full " data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login" width="20"  height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                        <path d="M21 12h-13l3 -3"></path>
                        <path d="M11 15l-3 -3"></path>
                    </svg>   
                    <span  data-language-page="Header" data-language-section="Navigation" data-language-value="login" >Login</span>
                        </button
                    </li>
                </ul>
          </div>
      </div>
      
 

  </nav>

  <section id="nav" class="bg-white h-screen hidden w-full absolute right-0 grid grid-rows-5 grid-cols-1 gap-5 p-4">
        <ul class="flex flex-col row-span-3">
            <li data-idioma="es" class="flex items-center mx-5  mb-5 cursor-pointer hover:bg-gray-100">
                <img src="public/resource/image/spain.webp" alt="Español" class="w-8 h-8 mr-2">
                <span class="text-slate-500">Español</span>
            </li>
            <li data-idioma="en"data-idioma="en" class="flex items-center mx-5 mb-5	 cursor-pointer hover:bg-gray-100">
                <img src="public/resource/image/united_kingdom.webp" alt="English" class="w-8 h-8 mr-2">
                <span class="text-slate-500">English</span>
            </li>
            <li  data-idioma="it" class="flex items-center mx-5  mb-5 cursor-pointer hover:bg-gray-100">
           
                    <img src="public/resource/image/italy.webp" alt="Italiano" class="w-8 h-8 mr-2"/> 

                    <span class="text-slate-500">Italiano</span>
                
            </li>
            <li class="flex items-center mx-5 mb-5 cursor-pointer hover:bg-gray-100">
                <img src="public/resource/image/france.png" alt="Français" class="w-8 h-8 mr-2"/>  
                <span class="text-slate-500">Français</span>
            </li>
            <li class="flex items-center mx-5 mb-5 cursor-pointer hover:bg-gray-100">
                <img src="public/resource/image/germany.png" alt="Deutsch" class="w-8 h-8 mr-2"/> 
                <span class="text-slate-500">Deutsch</span>
            </li>
            <li class="flex items-center mx-5 mb-5  cursor-pointer hover:bg-gray-100">

                <img src="public/resource/image/sweden.png" alt="Svenska" class="w-8 h-8 mr-2"/> 
                <span class="text-slate-500">Svenska</span>
            </li>
            <li class="flex items-center mx-5  mb-5 cursor-pointer hover:bg-gray-100">
                <img src="public/resource/image/catalonia.png" alt="Català" class="w-8 h-8 mr-2"> 
                <span class="text-slate-500">Català</span>
            </li>
            <li class="flex items-center mx-5 mb-5  cursor-pointer hover:bg-gray-100">
                <img src="public/resource/image/portugal.png" alt="Português" class="w-8 h-8 mr-2">
                <span class="text-slate-500">Português</span>
            </li>
        </ul>

        <div class=" w-full p-5 h-3/4 flex flex-col bg-white absolute overflow-hidden  hidden"  tabindex="-1" aria-hidden="true"  id="modal-2">
            <div class=" p-4 rounded-lg" role="alert">    
                <div class=" flex ">
                        <button type="button" class="text-gray bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto 
                        inline-flex justify-center items-center" data-modal-hide="modal-2">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                </div>
                <?php require_once __DIR__.'/../include/forms.php' ?>

            </div>

        </div>
        <div class=" grid grid-rows-2 mb-8   row-span-2 ">
                <div class="mx-auto my-5">

                    <a  href="start-info" class="group/item btn rounded-full md:inline-flex btn-block hover:bg-[#5e65d1]  p-3 py-2 text-white bg-[#7980eb]" data-section="hero" data-value="btn_text">
                        Realiza tu prueba personalizada 
                    </a>
                    
                </div>

                    <ul id="tabMenu" class="flex justify-around -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                        <li class="border-t border-[#7980eb] cursor-pointer hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">
                            <button href="#" class="text-xl inline-flex items-center justify-center p-4 border-t-2 border-transparent group active"  data-modal-target="authentication-modal"  data-tab="tab1" >
                                <span class="fas fa-key"></span>
                            </button> 
                        </li>
                        <li class="cursor-pointer hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">
                            <a href="Price" class="text-xl inline-flex items-center justify-center p-4 border-t-2 border-transparent group" data-tab="tab2">
                                <span class="fas fa-dollar"></span>
                            </a> 
                        </li>
                        <li class="cursor-pointer hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">
                            <button href="#" class="text-xl inline-flex items-center justify-center p-4 border-t-2 border-transparent group" data-modal-target="modal-2" data-tab="tab3">
                                <span class="fas fa-user-minus"></span>
                            </button> 
                        </li>
                    </ul>
        </div>
  </section>
</header>
<section>
  <svg class="wave-top bg-white" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" fill="none" fill-rule="evenodd">
          <g transform="translate(-1.000000, -4.000000)">
              <g class="wave" fill="#7980eb">
                  <path d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"></path>
              </g>
              <g transform="translate(1.000000, 15.000000)" fill="#7980eb">
                  <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                      <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                      <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                      <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                  </g>
              </g>
          </g>
      </g>
  </svg>

</section>

<!--#endregion -->
<?php require_once __DIR__.'/../include/modal.php' ?>
<!--#endregion -->
<main class="relative">
    <div class="mx-auto flex max-w-7xl p-4 md:px-10">