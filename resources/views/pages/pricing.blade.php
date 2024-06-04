<?php

$page_title = 'Tarifs';

?>
@extends('layouts.default')

@section('title', 'Entretien')


@section('content')
<div>
        <h2 class="flex justify-between pb-5 text-3xl text-gray-title pt-5">Main d’œuvre service pneu :</h2>
            <table class="w-full">
                <thead>
                    <tr class="flex justify-between pb-5">
                        <th>Services</th>
                        <th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="flex justify-between">
                        <td class="list-disc pb-5">- Démontage/montage/équilibrage pneu neuf avec achat :</td>
                        <td class="list-disc pb-5">16€ htva</td>
                    </tr>
                    <tr class="flex justify-between">
                        <td class="list-disc pb-5">- Pose/dépose roue VL 12’’- 16’’ :</td>
                        <td class="list-disc pb-5">7€ htva</td>
                    </tr>
                    <tr class="flex justify-between">
                        <td class="list-disc pb-5">- Pose/dépose roue VL 17’’ - plus :</td>
                        <td class="list-disc pb-5">8.5€ htva</td>
                    </tr>
                    <tr class="flex justify-between">
                        <td class="list-disc pb-5">- Pose/dépose roue 4x4 - camionnette :</td>
                        <td class="list-disc pb-5">8.5€ htva</td>
                    </tr>
                    <tr class="flex justify-between">
                        <td class="list-disc pb-5">- Réparation pney :</td>
                        <td class="list-disc pb-5">20.66€ htva</td>
                    </tr>
                    <tr class="flex justify-between">
                        <td class="list-disc pb-5">- Equilibrage :</td>
                        <td class="list-disc pb-5">6.61€ htva</td>
                    </tr>
                    </tbody>
            </table>
    <h2 class="flex justify-between pb-5 text-3xl text-gray-title">Permutation été / hiver pneu :</h2>
    <table class="w-full">
        <thead>
            <tr class="flex justify-between pb-5">
                <th>Services</th>
                <th class="text-right">Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Permutation été/hiver VL 12’’- 16’’ :</td>
                <td class="list-disc pb-5 text-right">16€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Permutation été/hiver VL 17’’- plus :</td>
                <td class="list-disc pb-5 text-right">18.50€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Permutation été/hiver 4x4-camionnette :</td>
                <td class="list-disc pb-5 text-right">18.50€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Permutation été/hiver pneu Run-flat :</td>
                <td class="list-disc pb-5 text-right">18.50€ htva</td>
            </tr>
        </tbody>
    </table>
    <h2 class="flex justify-between pb-5 text-3xl text-gray-title">Permutation été / hiver roue :</h2>
    <table class="w-full">
        <thead>
            <tr class="flex justify-between pb-5">
                <th>Services</th>
                <th class="text-right">Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Permutation roue été/hiver VL 12’’- 16’’ :</td>
                <td class="list-disc pb-5 text-right">7€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Permutation roue été/hiver VL 17’’- plus :</td>
                <td class="list-disc pb-5 text-right">8.5€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Permutation roue été/hiver 4x4-camionnette :</td>
                <td class="list-disc pb-5 text-right">8.5€ htva</td>
            </tr>
        </tbody>
    </table>
    <h2 class="flex justify-between pb-5 text-3xl text-gray-title">Stockage (6 mois) :</h2>
    <table class="w-full">
        <thead>
            <tr class="flex justify-between pb-5">
                <th>Services</th>
                <th class="text-right">Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Stockage pneu :</td>
                <td class="list-disc pb-5 text-right">6.25€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Stockage roue :</td>
                <td class="list-disc pb-5 text-right">7€ htva</td>
            </tr>
        </tbody>
    </table>
    <h2 class="flex justify-between pb-5 text-3xl text-gray-title">Géométrie:</h2>
    <table class="w-full">
        <thead>
            <tr class="flex justify-between pb-5">
                <th>Services</th>
                <th class="text-right">Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Géométrie avant :</td>
                <td class="list-disc pb-5 text-right">51.24€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Géométrie avant/arrière :</td>
                <td class="list-disc pb-5 text-right">66.11€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Géométrie Tesla-véhicule surbaissé :</td>
                <td class="list-disc pb-5 text-right">tarif av ou av/ar + 25€ htva</td>
            </tr>
        </tbody>
    </table>
    <h2 class="flex justify-between pb-5 text-3xl text-gray-title">Main d’œuvre service frein* :</h2>
    <table class="w-full">
        <thead>
            <tr class="flex justify-between pb-5">
                <th>Services</th>
                <th class="text-right">Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Changement frein avant (disques et/ou plaquettes) :</td>
                <td class="list-disc pb-5 text-right">32€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Changement frein arrière (disques et/ou plaquettes) :</td>
                <td class="list-disc pb-5 text-right">32€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Changement frein av et ar (disques et/ou plaquettes) :</td>
                <td class="list-disc pb-5 text-right">50€ htva</td>
            </tr>
        </tbody>
    </table>
    <h2 class="flex justify-between pb-5 text-3xl text-gray-title">Forfait entretien* :</h2>
    <table class="w-full">
        <thead>
            <tr class="flex justify-between pb-5">
                <th>Services</th>
                <th class="text-right">Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Petit entretien VL :</td>
                <td class="list-disc pb-5 text-right">160€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Grand entretien VL :</td>
                <td class="list-disc pb-5 text-right">240€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Petit entretien SUV-4x4-camionnette :</td>
                <td class="list-disc pb-5 text-right">170€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Grand entretien SUV-4x4-camionnette :</td>
                <td class="list-disc pb-5 text-right">250€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Recharge airco R134a :</td>
                <td class="list-disc pb-5 text-right">61.98€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Réglage phares :</td>
                <td class="list-disc pb-5 text-right">11.98€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Prix main d’œuvre/h :</td>
                <td class="list-disc pb-5 text-right">45€ htva</td>
            </tr>
        </tbody>
    </table>
    <p class="pb-5">*Le prix du forfait entretien et de la main d’œuvre frein est garanti pour autant qu’aucun défaut, dû à l’intervention d’un tiers, ne soit détecté sur le véhicule. Toute augmentation de tarif sera annoncée avant travaux.</p>
    <table class="w-full">
        <thead>
            <tr class="flex justify-between pb-5">
                <th>Services</th>
                <th class="text-right">Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Forfait dépannage (rayon de 15km) :</td>
                <td class="list-disc pb-5 text-right">25€ htva</td>
            </tr>
            <tr class="flex justify-between">
                <td class="list-disc pb-5">- Forfait branchement outil diagnostique :</td>
                <td class="list-disc pb-5 text-right">25€ htva</td>
            </tr>
        </tbody>
    </table>
</div>




@endsection