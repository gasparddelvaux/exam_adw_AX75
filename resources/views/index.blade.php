@extends('layouts.default')
@section('content')
    <div class="flex lg:flex-row flex-col">
        <div class="flex-auto lg:w-4/6 w-full">
            <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-100 pt-10">PERMUTATION & SERVICE D'URGENCE UNIQUEMENT
            </h1>
            <div class="mt-4 pt-8">
                <p class>Chère cliente, cher client, </p>
                <br>
                <p>Pour vous servir toujours au mieux, nous nous efforçons d’ajouter de nouveaux services pour vous
                    faciliter la vie. C’est pourquoi votre station Corbais Pneus devient Corbais pneus cars services.</p>
                <br>
                <p>Grâce à nos investissements, nous sommes désormais équipé pour effectuer les différents entretiens de vos
                    véhicules, la recharge airco en gaz R134a et les réglages de phares.</p>
                <br>
                <p>De plus, notre adhésion au groupe Quality Garage nous permet de bénéficier du meilleur prix sur les
                    pièces et de plusieurs formations par an.
                    Nous restons bien évidemment fidèle au groupe Passion Pneu, qui nous permet de vous vendre nos pneus au
                    meilleur prix et de servir au mieux les conducteurs de véhicules en leasing.</p>
                <br>
                <p>L'équipe Corbais Pneus Cars Services</p>

                <a href="https://www.facebook.com/Corbais-Pneus-Cars-Services-100281158852622" target="_blank"
                    class="inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Notre page Facebook
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>


            <div id="default-carousel" class="relative w-full mt-4" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('storage/img/performance.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('storage/img/securite.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('storage/img/saison-ete.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>
        <div class="flex-auto lg:w-2/6 w-full">


            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-8 ml-4">

                <div class="p-5">
                    <a href="https://scheduler-corbais.softwheels.org/welcome/cpn">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Prise de
                            rendez-vous</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Si vos pneus sont stockés chez nous,
                        n’hésitez pas à prendre un rendez-vous online.</p>
                    <a href="https://scheduler-corbais.softwheels.org/welcome/cpn"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                        Prendre rendez-vous
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <a href="#">
                    <img class="rounded-b-lg" src="{{ asset('storage/img/changement-pneu.jpg') }}" alt="agenda" />
                </a>
            </div>

        </div>
    </div>

@stop
