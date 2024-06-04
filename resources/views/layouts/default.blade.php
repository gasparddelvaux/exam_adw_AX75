<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{!! RecaptchaV3::initJs() !!}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        {{ $title ?? 'Laravel' }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen bg-gray-100 lg:pl-0 pl-2">
    <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset('storage/img/corbais_logo.png')}}" alt="Corbais Logo">
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> --}}
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{route('home')}}" class="block py-2 px-3 rounded md:bg-transparent md:p-0 md:dark:text-red-500 dark:bg-red-600 md:dark:bg-transparent {{ request()->is('/') ? 'text-red-700' : 'text-gray-400' }}" aria-current="page">Accueil</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-red-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Services
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>

                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{route('service.geometry')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Géometrie</a>
                                </li>
                                <li>
                                    <a href="{{route('service.accessories')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Accessoires</a>
                                </li>
                                <li>
                                    <a href="{{route('service.dumper')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Amortisseurs, freins et échappements</a>
                                </li>
                                <li>
                                    <a href="{{route('service.conditions')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Conditions saisonnières, un gage de sécurité</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('leasing.index')}}" class="block py-2 px-3 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->is('leasing') ? 'text-red-700' : 'text-gray-400' }}">Leasing</a>
                    </li>
                    <li>
                        <a href="{{route('service.index')}}" class="block py-2 px-3 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->is('service') ? 'text-red-700' : 'text-gray-400' }}">Entretien</a>
                    </li>
                    <li>
                        <a href="{{route('pricing.index')}}" class="block py-2 px-3 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->is('pricing') ? 'text-red-700' : 'text-gray-400' }}">Tarifs</a>
                    </li>
                    <li>
                        <a href="{{route('garage.index')}}" class="block py-2 px-3 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->is('garage') ? 'text-red-700' : 'text-gray-400' }}">Garage</a>
                    </li>
                    <li>
                        <a href="{{route('contact.index')}}" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->is('contact') ? 'text-red-700' : 'text-gray-400' }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="w-full h-2 bg-red-700 border-red-700">
    </nav>
    {{-- if $page_title exists -> show the div below, else nothing showned --}}

    @if (isset($page_title))
    <div class="text-white bg-gray-title p-5 text-2xl font-semibold pl-20">

        {{ $page_title }}
    </div>
    @else
    <div>
    </div>
    @endif
    <main class="container mx-auto">
        @yield('content')
        <div class="flex mt-4 flex-col lg:flex-row">
            <div class="flex-auto">
                <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset('storage/img/contact.png')}}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Leasing</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Corbais Pneus est agréé par toutes les sociétés de leasing en étant membre des réseaux Passion Pneu et Carmasters.</p>
                    </div>
                </a>

            </div>
            <div class="flex-auto mx-6">

                <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Charte Passion Pneu</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">10 garanties de qualité offertes par notre station de montage...
                        </p>
                    </div>
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset('storage/img/badge-little-c.png')}}" alt="">
                </a>

            </div>
            <div class="flex-auto">

                <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Contrôle et gonflage gratuits</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Condition de vos pneus</p>
                    </div>
                    {{-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                    src="/docs/images/blog/image-4.jpg" alt=""> --}}
                </a>

            </div>



        </div>
        <h3 class="mt-8 text-2xl font-semibold text-gray-800 dark:text-gray-100">Nos partenaires</h3>
        <div class="grid grid-cols-5 gap-4 mt-4">
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/img/partners/Bridgestone.png') }}" class="w-1/2" alt="Passion Pneu">
                </a>
            </div>
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{asset('storage/img/partners/Dunlop.png')}}" class="w-1/2" alt="Continental">
                </a>
            </div>
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/img/partners/Firestone.png') }}" class="w-1/2" alt="Passion Pneu">
                </a>
            </div>
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/img/partners/Fulda.svg') }}" class="w-1/2" alt="Passion Pneu">
                </a>
            </div>
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/img/partners/Goodyear.png') }}" class="w-1/2" alt="Passion Pneu">
                </a>
            </div>
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/img/partners/Matador.png') }}" class="w-1/2" alt="Passion Pneu">
                </a>
            </div>
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/img/partners/Pirelli.png') }}" class="w-1/2" alt="Passion Pneu">
                </a>
            </div>
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/img/partners/uniroyal.png') }}" class="w-1/2" alt="Passion Pneu">
                </a>
            </div>
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/img/partners/Barum.png') }}" class="w-1/2" alt="Passion Pneu">
                </a>
            </div>
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/img/partners/Bfgoodrich.png') }}" class="w-1/2" alt="Passion Pneu">
                </a>
            </div>
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/img/partners/Hankook.png') }}" class="w-1/2" alt="Passion Pneu">
                </a>
            </div>
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/img/partners/Kleber.png') }}" class="w-1/2" alt="Passion Pneu">
                </a>
            </div>
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/img/partners/Michelin.png') }}" class="w-1/2" alt="Passion Pneu">
                </a>
            </div>
            <div class="col-span-1">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/img/partners/vredestein.jpg') }}" class="w-1/2" alt="Passion Pneu">
                </a>
            </div>

        </div>
    </main>


    <footer class="bg-gray-222 mt-auto">
        <div class="mx-auto w-full max-w-screen-xl">
            <div class="flex flex-row justify-around">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white pt-5">Navigation</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="{{route('leasing.index')}}" class="text-red-700 hover:text-red-900 hover:underline">Leasing</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{route('service.conditions')}}" class="text-red-700 hover:text-red-900 hover:underline">Pneus</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{route('service.geometry')}}" class="text-red-700 hover:text-red-900 hover:underline">Géometrie</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{route('service.conditions')}}" class="text-red-700 hover:text-red-900 hover:underline">Jantes</a>
                        </li>
                        <li>
                            <a href="{{route('service.dumper')}}" class="text-red-700 hover:text-red-900 hover:underline">Freins & échappement</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{route('service.accessories')}}" class="text-red-700 hover:text-red-900 hover:underline">Accessoires</a>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white pt-5">Contacts</h2>
                    <h2 class="text-gray-7c text-2xl pb-5">
                        Corbais Pneus Nouvelle bvba
                    </h2>
                    <p class="text-gray-500">
                        <span class="font-semibold">Adresse:</span> Grand'Route44 1435 Corbais, Belgique
                    </p>
                    <p class="text-gray-500">
                        <span class="font-semibold">Téléphone:</span> <a class="text-red-700 hover:text-red-900 hover:underline" href="tel:+3210650265">+32 10 65 02 65</a>
                    </p>
                    <p class="text-gray-500">
                        <span class="font-semibold">Email:</span> <a href="mailto:info@corbais-pneus.be" class="text-red-700 hover:text-red-900 hover:underline">info@corbais-pneus.be</a>
                    <p class="text-gray-500">
                        <span class="font-semibold">TVA:</span> BE 0847.159.891
                </div>
            </div>
            <div class="px-4 py-6 bg-gray-222 dark:bg-gray-700 text-center">
                <span class="text-sm text-gray-7c bg-gray-222 dark:text-gray-300 sm:text-center">{{ $footer }}</span>
            </div>
        </div>
    </footer>


</body>

</html>