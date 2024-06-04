<?PHP

$page_title = 'Géométrie';

?>
@extends('layouts.default')
@section('content')
    <div class="flex pt-5">
        <div class="flex-auto w-4/6">

            <div class="mt-4 pt-8">
                <p class="pb-5">La géométrie de suspension désigne l'ensemble des caractéristiques de contact de la roue d'un véhicule avec le sol ainsi que la manière dont la suspension travaille. C'est-à-dire que cela définit aussi les limitations des axes de libertés de la suspension.</p>
                {{-- <br> --}}
                <p class="pb-5">Le terme de géométrie a été échangé, à tort, par le terme parallélisme, un raccourci dû au fait que, bien souvent, le parallélisme est le seul réglage modifiable sur une automobile. La géométrie a une influence non négligeable sur le comportement du véhicule.</p>
                {{-- <br> --}}
                <p class="pb-5">Le carrossage, le parallélisme (pincement ou ouverture) sont analysés et au besoin réglés pour retrouver les caractéristiques d'origine.</p>
                <p class="pb-5">Le système d'analyse de Corbais pneus cars services est performant et permet un réglage précis. Il convient à tous les véhicules, des citadines aux break comme aux voitures d'exception.</p>
                <p class="pb-5">Il est conseillé d'effectuer une géométrie de suspension chaque année pour assurer un tenue de route parfaite, une usure des pneus régulière, un comportement routier sain et ainsi garder les caractéristiques d'origines de votre véhicule.</p>
            </div>
        </div>
        <div class="flex-auto w-2/6 pt-20 m-5">
            <img src="{{ asset('storage/img/Geometrie.jpg') }}" alt="Geometry"
                class="object-cover w-full h-4/6 rounded-lg">
        </div>
    </div>
@stop
