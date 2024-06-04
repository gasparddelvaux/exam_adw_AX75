<?PHP

$page_title = 'Accessoires';

?>
@extends('layouts.default')
@section('content')
    <div class="flex pt-5">
        <div class="flex-auto w-4/6">

            <div class="mt-4 pt-8">
                <p class="pb-5">Corbais pneus cars services est équipé pour le remplacement des amortisseurs, des freins et des systèmes d'échappements.</p>
                <p class="pb-5">Afin de garantir une qualité de haut niveau, tant au niveau de la pièce qu'au niveau du montage, nous ne plaçons que des pièces homologuées et de grandes marques.</p>
                <p class="pb-5 font-semibold">Ces opérations se font uniquement sur rendez-vous.</p>
            </div>
        </div>
        <div class="flex-auto w-2/6 pt-20 m-5">
            <img src="{{ asset('storage/img/frein.jpg') }}" alt="Garage"
                class="object-cover w-full h-4/6 rounded-lg">
        </div>
    </div>
@stop
