<?PHP

$page_title = 'Leasing';

?>
@extends('layouts.default')
@section('title', 'Leasing')


@section('content')
<div class="p-10 flex flex-col lg:flex-row">
<div class="flex-auto w-full lg:w-4/6 p-5">
        <div class="pb-5">
            Pour le montage de vos pneus d'hiver ou d'été, ou le remplacement de vos pneus usés, Corbais Pneus vous garantit un service rapide. Passez vite avec ou sans rendez-vous.
        </div>
        <div>
            <img src="{{ asset('storage/img/leasing-fr.jpg') }}" alt="Leasing" class="rounded-lg pb-5 w-full lg:w-5/6">
        </div>
        <div>
            <p class="pb-5">
                Si vous roulez avec une voiture de leasing :
            </p>
            <ul>
                <li class="list-disc pb-5">
                    Corbais pneus cars services est agréé par toutes les sociétés de leasing.
                </li>
                <li class="list-disc pb-5">
                        Présentez votre véhicule dans le centre de montage Passion Pneu de votre choix
                </li>
                <li class="list-disc pb-5">
                    Nous diagnostiquons les pneumatiques à remplacer.
                </li>
                <li class="list-disc pb-5">
                    Nous contactons votre société de leasing pour accord.
                </li>
                <li class="list-disc pb-5">
                    40 minutes plus tard, vous repartez avec votre véhicule si nous avons les pneus en stock.
                </li>
            </ul>
        </div>
    </div>
    <div class="flex-auto w-full lg:w-2/6 p-5 self-center">
        <img src="{{ asset('storage/img/leasing.jpg') }}" alt="Leasing" class="rounded-lg">
    </div>
</div>

@endsection