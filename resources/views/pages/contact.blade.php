@extends('layouts.default')

@section('title', 'Contact')

@section('content')
<div class="flex flex-col lg:flex-row items-center w-full h-full py-10 p-3 lg:ml-20 justify-around">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <div class="lg:w-2/5 w-full">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d20241.58995218352!2d4.648!3d50.642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x80f8d386fbfb050d!2sPassion+Pneu!5e0!3m2!1sfr!2sus!4v1426521487653" frameborder="0" style="border:0; height: 300px; width: 100%;" class="hidden-print"></iframe>
    </div>
    <div class="lg:w-2/5 w-full ">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white pb-5">Envoyez-nous un message</h1>
        <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="flex flex-col w-full">
            @csrf
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                <input name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="Entrez votre nom" required>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="Exemple@email.com">
            </div>
            <div class="mb-5">
                <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telephone</label>
                <input name="tel" type="text" id="tel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" required placeholder="Entrez votre numéro de téléphone">
            </div>
            <div class="mb-5">
                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                <select name="subject" id="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" required aria-placeholder="Choisissez une option">
                    <option value="services">Services</option>
                    <option value="infos">Informations produit</option>
                    <option value="other">Divers</option>
                </select>
            </div>
            <div class="mb-5">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                <textarea name="message" id="message" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="Entrez votre message" required></textarea>
            </div>
            <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Envoyer</button>
        </form>
    </div>
</div>
@stop