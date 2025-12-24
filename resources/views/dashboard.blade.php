<x-app-layout title="Dashboard">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-col gap-4">
        <x-card class="bg-stairmaster/50 border border-stairmaster">
            <div>Image</div>
            <div class="text-2xl font-theme text-default">StairMaster</div>
        </x-card>
        <x-card class="bg-rowing/50 border border-rowing">
            <div>Image</div>
            <div class="text-2xl font-theme text-default">Rowing</div>
        </x-card>
        <x-card class="bg-walking/50 border border-walking">
            <div>Image</div>
            <div class="text-2xl font-theme text-default">walking indoors</div>
        </x-card>
        <x-card class="bg-crosstrainer/50 border border-crosstrainer">
            <div>Image</div>
            <div class="text-2xl font-theme text-default">Crosstrainer</div>
        </x-card>
        <x-card class="bg-cycling/50 border border-cycling">
            <div>Image</div>
            <div class="text-2xl font-theme text-default">Cycling</div>
        </x-card>
    </div>

</x-app-layout>
