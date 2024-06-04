<?PHP

$page_title = 'Garage';

?>
@extends('layouts.default')
@section('content')
    <div class="flex pt-5">
        <div class="flex-auto w-4/6">

            <div class="mt-4 pt-8">
                <p class="pb-5">Corbais Pneus Nouvelle est une station de pneus située Grand’route,44 à Corbais. Elle bénéficie de
                    l'expertise en la matière d'Olivier Ost, gérant d'une station de pneus depuis plus de 10 ans.</p>
                {{-- <br> --}}
                <p class="pb-5">Agréé par toutes les sociétés de leasing, nous disposons de matériel haut de gamme afin de placer vos
                    pneus de façon parfaite sans risquer d’endommager vos jantes, de réaliser une géométrie répondant à
                    votre usage, de stocker les pneus entre les saisons, …</p>
                {{-- <br> --}}
                <p class="pb-5">Ce site permet de répondre à vos questions. Sinon, venez nous voir pour demander conseil. Des pneus
                    adapté à votre style de conduite, votre budget et votre véhicule augmente la sécurité routière et la
                    satisfaction de son chauffeur, pensez-y!</p>
            </div>
        </div>
        <div class="flex-auto w-2/6">
            <img src="{{ asset('storage/img/centre-montage-pneus.jpg') }}" alt="Garage"
                class="object-cover w-full h-full rounded-lg">
        </div>
    </div>

@stop
