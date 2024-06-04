<?PHP

$page_title = 'Amortisseurs, freins et échappements';

?>
@extends('layouts.default')
@section('content')
    <div class="flex pt-5">
        <div class="flex-auto w-4/6">

            <div class="mt-4 pt-8">
                <h2 class="pb-5 text-gray-title text-2xl text-semibold">Freins</h2>
                <p class="pb-5">Chez Corbais pneus cars services nous nous efforçons de vous proposer les meilleurs prix pour le changement de vos disques et plaquettes de freins. En tant que QUALITY GARAGE, nous bénéficions de remises sur les marques Bosch, Brembo, Febi, Textar.</p>
                <p class="pb-5">Pour un devis, merci de nous contacter avec les papiers du véhicule ou de passer à l’atelier.

</p>
                <h2 class="pb-5 text-gray-title text-2xl text-semibold">Amortisseurs</h2>
                <p class="pb-5">Une bonne suspension est un gage de sécurité, au même titre que de bons freins ou de bons pneus. C’est pourquoi chez Corbais pneus cars services, nous ne montons que des pièces de suspension de marque référence tels que Monroe, Febi, Sachs, …</p>
                <p class="pb-5">Pour un devis, merci de nous contacter avec les papiers du véhicule ou de passer à l’atelier.</p>
            </div>
        </div>
        <div class="flex-auto w-2/6 pt-20 m-5">
            <img src="{{ asset('storage/img/amortisseur.jpg') }}" alt="Amortisseur"
                class="object-cover w-3/5 h-4/6 rounded-lg">
        </div>
    </div>
@stop
