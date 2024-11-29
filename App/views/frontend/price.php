    <div class="space-y-12 w-[310px] md:w-screen mx-auto">
        <div class="space-y-12 lg:space-y-40 mx-auto">
            <div id="pricing">
                <div class="py-6 sm:py-6 aos-init aos-animate" data-aos="slide-up">
                    <div class="mx-auto md:max-w-7xl md:px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl sm:text-center">
                            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl" data-language-page="Price" data-language-section="Hero" data-language-value="title">Precios sencillos y sin trucos</h2>
                            <p class="mt-6 text-lg leading-8 text-gray-600" data-language-page="Price" data-language-section="Hero" data-language-value="title">Haz un pago inicial de 0.50 y en las proximas 24 horas tu suscripcion quedara activada</p>
                        </div>

                        <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 shadow-2xl shadow-indigo-500/50 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                            <div class="p-8 sm:p-10 lg:flex-auto">
                                <div class="mt-10 flex items-center gap-x-4">
                                    <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600" data-language-page="Price" data-language-section="Card" data-language-value="title">Que incluye</h4>
                                    <div class="h-px flex-auto bg-gray-100">

                                    </div>
                                </div>
                                <?php 
                                $style="gap-x-3";
                                require_once __DIR__."/../include/lista_beneficios.php" ?>
                                </div>
                                
                                <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                                    <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                                        <div class="mx-auto max-w-xs px-8">
                                            <p class="text-base font-semibold text-gray-600" data-language-page="Price" data-language-section="Card" data-language-value="description_1">Acceda a todas las funciones durante 1 día de prueba</p>
                                            <p class="mt-6 flex items-baseline justify-center gap-x-2">
                                                <span class="text-5xl font-bold tracking-tight text-gray-900">€ 0.50</span>
                                                <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">EU</span>
                                            </p>
                                            <span class="divider" data-language-page="Price" data-language-section="Card" data-language-value="letra">O</span>
                                            <p class="text-base font-semibold text-gray-600" data-language-page="Price" data-language-section="Card" data-language-value="description_2">Luego suscripción mensual a solo</p>
                                            <p class="mt-6 flex items-baseline justify-center gap-x-2">
                                                <span class="text-5xl font-bold tracking-tight text-gray-900">€ 39.99</span>
                                                <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">EU</span>
                                            </p>
                                            <a href="<?=START_INFO ?>" class="mt-10 block w-full rounded-md bg-[#7980eb] px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" data-language-page="Price" data-language-section="Card" data-language-value="button">Inicia el test ahora</a>
                                            <p class="mt-6 text-xs leading-5 text-gray-600" data-language-page="Price" data-language-section="Card" data-language-value="description_4">Métodos de pago aceptados</p>
                                            
                                            <figure>
                                                <img class="mx-auto w-40" alt="loaded" src="https://sapi.personalitytest.mobi/uploads/pagos_metodo_6203b2f7cd.webp">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

    <section class="toast toast-center md:hidden">
        <section class="flex justify-center">
            <a href="<?= START_INFO?>" class="">
                <button class="btn bg-[#7980eb] rounded-full w-72 text-white shadow-lg hover:bg-[#787cb9] hover:text-white" data-language-page="Main" data-language-section="Hero" data-language-value="button">Realiza tu prueba personalizada  
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 animate-fade-right animate-infinite animate-ease-in" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
                    </svg>
                </button>
            </a>
        </section>
    </section>

    <div class="hidden md:inline-flex">
        <button class="fixed bottom-4 right-4 bg-[#7980eb] text-white px-4 py-2 rounded-full shadow-md" style="display: none;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"></path>
            </svg>
        </button>
    </div>



    
