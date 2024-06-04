<?PHP

$page_title = 'Pneus / jantes
';

?>
@extends('layouts.default')
@section('content')
    <div class="flex pt-5">
        <div class="flex-auto w-4/6">

            <div class="mt-4 pt-8">
                <p class="pb-5">Corbais pneus cars services propose un choix complet de pneumatiques pour tous usages. Agréé par toutes les sociétés de leasing, nous disposons de matériel haut de gamme afin de placer vos pneus de façon parfaite sans risque d’endommagement de vos jantes.</p>
                {{-- <br> --}}
                <p class="pb-5">Chaque roue est serrée à la main à l’aide d’une clé dynamométrique ce qui élimine les risques de roues qui se desserrent et vous permet, en cas de crevaison, de pouvoir changer votre roue avec le matériel fourni dans le véhicule.</p>
                {{-- <br> --}}
                <p class="pb-5">Nous disposons de système de levage encastré dans le sol pour être en mesure de soulever les voitures de sport à très faible garde au sol.</p>
                <p class="pb-5">Grâce à un système de stockage moderne nous gardons vos pneus hiver durant l’été et inversement, afin que à chacun aie possibilité d’être chaussé comme il convient quel que soit la saison.</p>
                <p class="pb-5">Afin de rouler en toute sécurité et respecter l’environnement, nous conseillons de vérifier la pression une fois par mois. Nous nous ferons un plaisir de vous rendre ce service gratuitement lorsque vous passez en nos ateliers.</p>
                <p class="pb-5"> Chaque modèle de pneu a des caractéristiques qui lui sont propre, demandez conseil avant de faire placer de nouveaux pneus. Un pneu adapté à votre style de conduite, votre budget et votre véhicule augmente la sécurité routière et la satisfaction de son chauffeur, pensez-y !</p>
            </div>
        </div>
        <div class="flex-auto w-2/6 pt-20 m-5">
            <img src="{{ asset('storage/img/wheels-tires.jpg') }}" alt="wheels-tires"
                class="object-cover w-full h-4/6 rounded-lg">
        </div>
    </div>
@stop
